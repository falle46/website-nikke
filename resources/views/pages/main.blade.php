@extends('layouts.app')

@section('title', 'Home - Nike Store')

@section('content')
<!-- Hero Section -->
<section class="flex flex-col items-center text-center md:flex-row md:text-left md:justify-between md:px-20 md:py-10">
    <div class="md:w-1/2 p-6">
        <h2 class="text-sm uppercase">Air Max Purple Edition</h2>
        <h1 class="text-5xl font-bold mt-2">AIR MAX</h1>
        <p class="mt-4 text-gray-600">
            Its Max Air unit wasn’t just bigger—it also wrapped all the way under the shoe. A clean, sleek design helped draw the eye straight to that 180° Air cushioning.
        </p>
        <a href="{{ url('/product/1') }}" class="mt-6 px-6 py-2 bg-black text-white rounded-full inline-block">Order Now</a>
    </div>
    <div class="md:w-1/2 p-6 relative">
        <img src="{{ asset('images/sepatumain1.png') }}" alt="Nike Air Max Purple Edition" class="relative z-10 w-3/4 mx-auto" />
        <div class="absolute top-0 right-0 w-64 h-64 bg-purple-500 rounded-full -z-10"></div>
    </div>
</section>

<!-- Trending Shoes Section -->
<section class="text-center py-10">
    <h2 class="text-2xl font-bold">TRENDING SHOES</h2>
    <div class="flex flex-wrap justify-center gap-4 mt-6">
        <div class="w-full sm:w-1/3 p-4 bg-gray-100 rounded-lg">
            <a href="{{ url('/product/2') }}">
                <img src="{{ asset('images/sepatumain2.png') }}" alt="Purple Nike Air Max - Trending Shoe 1" class="w-3/4 mx-auto" />
            </a>
        </div>
        <div class="w-full sm:w-1/3 p-4 bg-gray-100 rounded-lg">
            <a href="{{ url('/product/3') }}">
                <img src="{{ asset('images/sepatumain3.png') }}" alt="Blue Nike Air Max - Trending Shoe 2" class="w-3/4 mx-auto" />
            </a>
        </div>
        <div class="w-full sm:w-1/3 p-4 bg-gray-100 rounded-lg">
            <a href="{{ url('/product/4') }}">
                <img src="{{ asset('images/sepatumain4.png') }}" alt="Red Nike Air Max - Trending Shoe 3" class="w-3/4 mx-auto" />
            </a>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="relative bg-cover bg-center h-64 bg-[url('{{ asset('images/bannermain.png') }}')]">
    <div class="absolute inset-0 flex justify-around items-center text-white text-center">
        <div>
            <h3 class="text-2xl font-bold">500K+</h3>
            <p>Sold Out</p>
        </div>
        <div>
            <h3 class="text-2xl font-bold">10+</h3>
            <p>Desain Kategories</p>
        </div>
        <div>
            <h3 class="text-2xl font-bold">300K+</h3>
            <p>Good Review</p>
        </div>
    </div>
</section>
@endsection
