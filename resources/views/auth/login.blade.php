@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="bg-purple-500 flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg flex flex-col md:flex-row w-full max-w-4xl">
        <!-- Side Image Section -->
        <div class="flex-1 flex items-center justify-center p-6">
            <div class="text-center">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="mx-auto mb-4" height="100" width="100" />
                <img src="{{ asset('images/sepatulogin.png') }}" alt="Product Image" class="mx-auto" height="300" width="400" />
            </div>
        </div>
        <!-- Login Form Section -->
        <div class="flex-1 p-8">
            <h2 class="text-2xl font-bold mb-6">Login</h2>
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700" for="email">Email Address</label>
                    <input id="email" type="email" class="w-full border-b-2 border-gray-300 focus:border-purple-500 outline-none py-2" />
                </div>
                <div class="mb-6 relative">
                    <label class="block text-gray-700" for="password">Password</label>
                    <input id="password" type="password" class="w-full border-b-2 border-gray-300 focus:border-purple-500 outline-none py-2" />
                    <i class="fas fa-eye absolute right-2 top-10 text-gray-500 cursor-pointer"></i>
                </div>
                <button type="submit" class="w-full bg-purple-500 text-white py-2 rounded-lg">Login</button>
            </form>
            <p class="mt-4 text-gray-600">
                Don't have an account? 
                <a href="/register" class="text-purple-500">Register</a>
            </p>
        </div>
    </div>
</div>
@endsection
