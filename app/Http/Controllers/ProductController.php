<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        // Data produk untuk simulasi
        $products = [
            1 => ['name' => 'Jordan 1 Mid SE', 'price' => 'Rp. 1.300.000', 'image' => 'product1.png', 'description' => 'Classic and iconic design.'],
            2 => ['name' => 'Tênis Nike Downshifter 10', 'price' => 'Rp. 1.100.000', 'image' => 'product2.png', 'description' => 'Lightweight and comfortable for running.'],
            3 => ['name' => 'Nike Blazer Mid 77', 'price' => 'Rp. 2.500.000', 'image' => 'product3.png', 'description' => 'Retro style for everyday fashion.'],
            4 => ['name' => 'Nike Dunk Low Black White', 'price' => 'Rp. 1.700.000', 'image' => 'product4.png', 'description' => 'Sleek design and versatile color.'],
            5 => ['name' => 'Nike Dunk High University Red', 'price' => 'Rp. 3.550.000', 'image' => 'product5.png', 'description' => 'Bold and eye-catching design.'],
            6 => ['name' => 'Nike Air Monarch IV', 'price' => 'Rp. 2.100.000', 'image' => 'product6.png', 'description' => 'Ultimate comfort and support.'],
            7 => ['name' => 'Nike React Infinity Run', 'price' => 'Rp. 2.300.000', 'image' => 'product7.png', 'description' => 'Designed for longer and safer runs.'],
            8 => ['name' => 'Nike Air Max 90', 'price' => 'Rp. 3.100.000', 'image' => 'product8.png', 'description' => 'Iconic silhouette with modern comfort.'],
            9 => ['name' => 'Nike Air Force 1', 'price' => 'Rp. 2.800.000', 'image' => 'product9.png', 'description' => 'Timeless classic for every occasion.'],
        ];

        $product = $products[$id];

        return view('detail', ['product' => $product]);
    }

    public function addToCart(Request $request)
    {
        // Ambil semua data produk dari request
        $product = $request->only('id', 'name', 'price', 'image');

        // Simpan produk ke session cart
        $cart = session()->get('cart', []);
        $cart[] = $product;
        session()->put('cart', $cart);

        // Kirim notifikasi pop-up (menggunakan session flash message)
        return back()->with('success', "{$product['name']} has been added to your cart.");
    }

    public function showCart()
    {
        // Ambil produk dari session cart
        $cart = session()->get('cart', []);
        return view('cart', ['cart' => $cart]);
    }
}
