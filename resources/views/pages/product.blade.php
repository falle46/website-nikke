@extends('layouts.app')

@section('title', 'Product Page')

@section('content')
<main class="flex-grow">
    <h1 class="text-center text-3xl font-bold my-8">PRODUCT</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-4">
        @foreach($products as $product)
        <div class="text-center border rounded-lg p-4 shadow">
            <a href="{{ route('product.detail', $product['id']) }}">
                <img src="{{ asset('images/' . $product['image']) }}" alt="{{ $product['name'] }}" class="mx-auto h-40">
            </a>
            <p class="mt-4 font-semibold">{{ $product['name'] }}</p>
            <p class="font-bold text-lg text-gray-700">Rp. {{ number_format($product['price'], 0, ',', '.') }}</p>
            <button class="bg-purple-600 text-white px-4 py-2 mt-4 rounded-lg add-to-cart" 
                    data-name="{{ $product['name'] }}" 
                    data-price="{{ $product['price'] }}" 
                    data-image="{{ asset('images/' . $product['image']) }}">
                Buy Now
            </button>
        </div>
        @endforeach
    </div>
</main>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Tambahkan event listener ke semua tombol 'Buy Now'
        const addToCartButtons = document.querySelectorAll('.add-to-cart');
        addToCartButtons.forEach(button => {
            button.addEventListener('click', function () {
                // Ambil data dari atribut tombol
                const name = this.getAttribute('data-name');
                const price = this.getAttribute('data-price');
                const image = this.getAttribute('data-image');

                // Kirim request ke server
                fetch('/add-to-cart', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({
                        name: name,
                        price: price,
                        image: image,
                        quantity: 1,
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    alert(data.message); // Tampilkan notifikasi
                    window.location.href = '/cart'; // Redirect ke halaman cart
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Gagal menambahkan produk ke keranjang!');
                });
            });
        });
    });
</script>
@endsection
