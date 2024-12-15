@extends('layouts.app')

@section('title', $product['name'])

@section('content')
<main class="text-center py-16">
    <h1 class="text-2xl font-semibold">
        {{ $product['name'] }}
    </h1>
    <p class="text-gray-600 mt-4 max-w-xl mx-auto">
        {{ $product['description'] }}
    </p>
    <p class="text-xl font-bold mt-4">
        {{ $product['price'] }}
    </p>

    <!-- Form untuk menambahkan produk ke keranjang -->
    <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $product['id'] }}">
        <input type="hidden" name="name" value="{{ $product['name'] }}">
        <input type="hidden" name="price" value="{{ $product['price'] }}">
        <input type="hidden" name="image" value="{{ $product['image'] }}">
        <button type="submit" class="bg-purple-600 text-white text-xl font-semibold py-3 px-12 rounded-full mt-8">
            Buy Now
        </button>
    </form>

    <img alt="{{ $product['name'] }}" class="mx-auto mt-16" src="{{ asset('images/' . $product['image']) }}" height="300" width="600"/>
</main>
@endsection
