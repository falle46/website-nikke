<footer class="bg-black text-white py-8">
    <div class="container mx-auto grid grid-cols-3 items-center">
        <!-- Logo -->
        <div class="flex justify-center">
            <img src="{{ asset('images/logo.png') }}" alt="Nike Logo" class="w-16 h-auto">
        </div>

        <!-- Navigation Links -->
        <div class="flex flex-col items-center space-y-2">
            <a href="{{ url('/') }}" class="text-white hover:text-gray-400">Home</a>
            <a href="{{ url('/product') }}" class="text-white hover:text-gray-400">Product</a>
            <a href="{{ url('/cart') }}" class="text-white hover:text-gray-400">Cart</a>
            <a href="{{ url('/history') }}" class="text-white hover:text-gray-400">History</a>
            <a href="{{ url('/about') }}" class="text-white hover:text-gray-400">About Me</a>
        </div>

        <!-- Contact Information -->
        <div class="flex flex-col items-center">
            <a href="{{ url('/contact') }}" class="px-4 py-2 border border-white rounded-full hover:bg-white hover:text-black transition">
                Contact Me
            </a>
            <p class="mt-4 text-lg font-semibold">+62-2323-3333-3212</p>
            <p class="text-gray-400">Customer Services</p>
        </div>
    </div>
</footer>
