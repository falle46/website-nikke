@php
$cart = session()->get('cart', []);
$total = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));
@endphp

@extends('layouts.app')

@section('content')
<main class="p-8">
    <h1 class="text-3xl font-bold mb-8">Keranjang</h1>
    @if (count($cart) > 0)
        @foreach ($cart as $item)
            <div class="flex items-center mb-8">
                <img src="{{ $item['image'] }}" class="w-40 h-40 object-cover" />
                <div class="ml-8">
                    <h2 class="text-xl font-bold">{{ $item['name'] }}</h2>
                    <p class="text-lg font-bold">Rp. {{ number_format($item['price']) }}</p>
                    <div class="flex items-center mt-2">
                        <button class="bg-gray-200 px-2 py-1">-</button>
                        <span class="mx-4">{{ $item['quantity'] }}</span>
                        <button class="bg-gray-200 px-2 py-1">+</button>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="text-right">
            <p class="font-bold">Total: Rp. {{ number_format($total) }}</p>
        </div>
        <div class="text-center">
            <a href="/checkout" class="bg-purple-500 text-white text-xl font-bold py-2 px-8 rounded-full">
                CHECKOUT
            </a>
        </div>
    @else
        <p class="text-center">Keranjang kosong.</p>
    @endif
</main>
@endsection
