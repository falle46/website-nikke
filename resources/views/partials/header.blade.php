<nav class="flex items-center justify-between p-6">
    <img alt="Nike logo" class="h-8" src="{{ asset('images/logo.png') }}" />
    <ul class="flex space-x-8">
        <li><a class="text-lg" href="{{ url('/') }}">Home</a></li>
        <li><a class="text-lg" href="{{ url('/product') }}">Product</a></li>
        <li><a class="text-lg" href="{{ url('/contact') }}">Contact Us</a></li>
    </ul>
    <form action="{{ url('/search') }}" method="GET" class="flex items-center">
        <input type="text" name="query" placeholder="Search by brand" class="border rounded p-2"/>
        <button type="submit" class="ml-2 text-lg"><i class="fas fa-search"></i></button>
    </form>
</nav>