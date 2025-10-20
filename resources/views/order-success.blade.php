@extends('layouts.guest')
@section('title', 'Order Success')
@section('content')

<div class="inner-banner inner-bg2">
    <div class="container">
        <div class="inner-title">
            <h3>Order Confirmation</h3>
        </div>
    </div>
</div>

<section class="order-success py-5">
    <div class="container text-center">
        <h2 class="text-success mb-3">🎉 Thank you for your purchase!</h2>
        <p>Your order has been placed successfully.</p>

        <div class="card mt-4 p-4 mx-auto" style="max-width:600px;">
            <h4 class="mb-3">Order Summary</h4>
            <p><strong>Order ID:</strong> #{{ $order->id }}</p>
            <p><strong>Product:</strong> {{ $order->product->name }}</p>
            <p><strong>Total:</strong> ${{ number_format($order->total, 2) }}</p>
            <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
            <p><strong>Payment Method:</strong> {{ $order->payment_method }}</p>
        </div>

        <a href="{{ url('/') }}" class="default-btn mt-4 border-radius-5">Continue Shopping</a>
    </div>
</section>

@endsection
