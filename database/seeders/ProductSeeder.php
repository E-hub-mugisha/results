<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Protein Natural',
                'brand' => 'Top Branded',
                'status' => 'Available',
                'image' => 'assets/images/products/products-1.jpg',
                'old_price' => 180.00,
                'new_price' => 140.00,
                'category' => 'Supplements',
                'stock' => 50,
                'description' => 'High-quality natural protein supplement for daily nutrition and muscle recovery.'
            ],
            [
                'name' => "Protein's Athletic",
                'brand' => 'Top Branded',
                'status' => 'Available',
                'image' => 'assets/images/products/products-2.jpg',
                'old_price' => 130.00,
                'new_price' => 120.00,
                'category' => 'Supplements',
                'stock' => 60,
                'description' => 'Athletic-grade protein powder designed to boost energy and endurance.'
            ],
            [
                'name' => 'Dumbbells Black',
                'brand' => 'Top Branded',
                'status' => 'Available',
                'image' => 'assets/images/products/products-3.jpg',
                'old_price' => 100.00,
                'new_price' => 90.00,
                'category' => 'Equipment',
                'stock' => 40,
                'description' => 'Durable black dumbbells perfect for home and gym workouts.'
            ],
            [
                'name' => 'Shaker Bottle',
                'brand' => 'Top Branded',
                'status' => 'Available',
                'image' => 'assets/images/products/products-4.jpg',
                'old_price' => 30.00,
                'new_price' => 20.00,
                'category' => 'Accessories',
                'stock' => 100,
                'description' => 'Leak-proof shaker bottle for easy mixing of protein shakes and supplements.'
            ],
            [
                'name' => 'Metal Barbell',
                'brand' => 'Top Branded',
                'status' => 'Available',
                'image' => 'assets/images/products/products-5.jpg',
                'old_price' => 70.00,
                'new_price' => 50.00,
                'category' => 'Equipment',
                'stock' => 30,
                'description' => 'High-quality metal barbell for strength and resistance training.'
            ],
            [
                'name' => "Protein's Powder",
                'brand' => 'Top Branded',
                'status' => 'Available',
                'image' => 'assets/images/products/products-6.jpg',
                'old_price' => 80.00,
                'new_price' => 60.00,
                'category' => 'Supplements',
                'stock' => 70,
                'description' => 'Essential protein powder for muscle growth and recovery.'
            ],
            [
                'name' => 'Metal Dumbbells',
                'brand' => 'Top Branded',
                'status' => 'Available',
                'image' => 'assets/images/products/products-7.jpg',
                'old_price' => 70.00,
                'new_price' => 55.00,
                'category' => 'Equipment',
                'stock' => 45,
                'description' => 'Solid metal dumbbells ideal for building muscle strength and tone.'
            ],
            [
                'name' => 'Yoga Mat',
                'brand' => 'Top Branded',
                'status' => 'Available',
                'image' => 'assets/images/products/products-8.jpg',
                'old_price' => 90.00,
                'new_price' => 75.00,
                'category' => 'Accessories',
                'stock' => 80,
                'description' => 'Comfortable, non-slip yoga mat designed for flexibility and balance training.'
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
