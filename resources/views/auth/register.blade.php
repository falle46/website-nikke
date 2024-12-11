@extends('layouts.auth')

@section('title', 'Create Account')

@section('content')
<div class="bg-purple-600 flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg flex overflow-hidden max-w-4xl w-full">
        <!-- Side Image Section -->
        <div class="bg-purple-600 p-8 flex-1 flex items-center justify-center relative">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="absolute top-8 left-8" width="150" height="50" />
            <img src="{{ asset('images/sepatulogin.png') }}" alt="Product Image" class="relative z-10" width="400" height="400" />
        </div>
        <!-- Registration Form Section -->
        <div class="p-8 flex-1">
            <h2 class="text-3xl font-bold mb-6">Create Account</h2>
            <button class="w-full flex items-center justify-center border border-gray-300 rounded-lg py-2 mb-4">
                <img src="https://storage.googleapis.com/a1aa/image/G45u1dwPHT5OL19vd8fB3kTvOKJ8ZWaJgVJPo58YgyoyE78JA.jpg" 
                     alt="Google logo" 
                     class="mr-2" 
                     width="20" 
                     height="20" />
                Sign Up with Google
            </button>
            <div class="flex items-center justify-center mb-4">
                <span class="text-gray-400">— OR —</span>
            </div>
            <form>
                <div class="mb-4">
                    <input type="text" placeholder="Full Name" class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-purple-600" />
                </div>
                <div class="mb-4">
                    <input type="email" placeholder="Email Address" class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-purple-600" />
                </div>
                <div class="mb-4 relative">
                    <input type="password" placeholder="Password" class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-purple-600" />
                    <i class="fas fa-eye absolute right-2 top-2 text-gray-400"></i>
                </div>
                <button class="w-full bg-purple-600 text-white py-2 rounded-lg">Create Account</button>
            </form>
            <p class="mt-4 text-center text-gray-500">
                Already have an account? 
                <a href="/login" class="text-purple-600">Login</a>
            </p>
        </div>
    </div>
</div>
@endsection
