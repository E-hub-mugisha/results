<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        // Search
        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Sorting
        if ($request->sort == 'high') {
            $query->orderBy('price', 'desc');
        } elseif ($request->sort == 'low') {
            $query->orderBy('price', 'asc');
        }

        $products = $query->paginate(8);

        return view('shops.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('shops.shop-details', compact('product'));
    }

    public function add(Request $request, Product $product)
    {
        // Example: Add to session cart
        $cart = session()->get('cart', []);
        
        if(isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image' => $product->image,
            ];
        }

        session()->put('cart', $cart);

        return back()->with('success', "$product->name added to cart!");
    }
    public function store(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'website' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Review::create([
            'product_id' => $product->id,
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Review submitted successfully!');
    }

    public function buy(Product $product)
    {
        return view('checkout', compact('product'));
    }
    public function storeOrder(Request $request)
    {
        $validated = $request->validate([
            'names'      => 'required|string|max:255',
            'phone'           => 'required|string|max:20',
            'address'         => 'required|string|max:255',
            'city'            => 'required|string|max:255',
            'country'         => 'required|string|max:255',
            'product_id'      => 'required|exists:products,id',
            'payment_method'  => 'required|string',
        ]);

        $product = Product::findOrFail($request->product_id);
        $total = $product->price + 30; // $30 shipping flat rate

        $validated['total'] = $total;

        // Create order
        $order = Order::create($validated);

        return redirect()->route('order.success', $order->id)
                         ->with('success', 'Your order has been placed successfully!');
    }
    public function success($id)
    {
        $order = Order::with('product')->findOrFail($id);
        return view('order-success', compact('order'));
    }
}
