@php
$cart = session()->get('cart', []);
$total = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));
$message = "Saya ingin Checkout:\n";
foreach ($cart as $item) {
    $message .= "- {$item['name']} ({$item['quantity']}x) Rp. " . number_format($item['price'] * $item['quantity']) . "\n";
}
$message .= "Total: Rp. " . number_format($total);
$whatsappURL = 'https://wa.me/081271388599?text=' . urlencode($message);
@endphp

@extends('layouts.app')

@section('content')
<main class="p-8">
    <h1 class="text-3xl font-bold mb-8">CHECKOUT</h1>
    @if (count($cart) > 0)
        @foreach ($cart as $item)
            <div class="grid grid-cols-3 gap-4 items-center mb-4">
                <img src="{{ $item['image'] }}" class="col-span-1" height="100" />
                <div class="col-span-1">
                    {{ $item['name'] }}
                </div>
                <div class="col-span-1 text-right">
                    Rp. {{ number_format($item['price']) }}
                </div>
            </div>
        @endforeach
        <div class="text-right mb-8">
            <p class="font-bold">Total: Rp. {{ number_format($total) }}</p>
        </div>
        <div class="text-center">
            <a href="{{ $whatsappURL }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg"
               onclick="event.preventDefault(); clearCartAndRedirect();">
                Checkout
            </a>
        </div>
        <script>
            function clearCartAndRedirect() {
                fetch('/clear-cart', { method: 'POST', headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' } })
                    .then(() => window.location.href = '{{ $whatsappURL }}');
            }
        </script>
    @else
        <p class="text-center">Tidak ada produk untuk checkout.</p>
    @endif
</main>
@endsection
