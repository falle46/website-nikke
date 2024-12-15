@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<main class="p-8">
    <h1 class="text-3xl font-bold text-center mb-8">Contact Us</h1>
    <form class="space-y-8">
        <div>
            <label class="block text-lg" for="first-name">First Name</label>
            <input class="w-full border-b-2 border-black focus:outline-none" id="first-name" type="text" placeholder="Your first name"/>
        </div>
        <div>
            <label class="block text-lg" for="last-name">Last Name</label>
            <input class="w-full border-b-2 border-black focus:outline-none" id="last-name" type="text" placeholder="Your last name"/>
        </div>
        <div>
            <label class="block text-lg" for="keluhan">Keluhan</label>
            <textarea class="w-full border-b-2 border-black focus:outline-none" id="keluhan" placeholder="Your message or complaint"></textarea>
        </div>
    </form>

    <div class="text-center mt-16">
        <h2 class="text-2xl font-bold mb-4">Send Via:</h2>
        <div class="flex justify-center space-x-16">
            <div class="text-center">
                <a href="https://wa.me/6281271388599" target="_blank" class="block">
                    <i class="fab fa-whatsapp text-6xl text-green-500"></i>
                </a>
                <p class="mt-2">WhatsApp</p>
                <p>+62-812-7138-8599</p>
            </div>
            <div class="text-center">
                <a href="https://instagram.com/fllryan_" target="_blank" class="block">
                    <i class="fab fa-instagram text-6xl text-pink-500"></i>
                </a>
                <p class="mt-2">Instagram</p>
                <p>@fllryan_</p>
            </div>
            <div class="text-center">
                <a href="mailto:falleryan45@gmail.com" target="_blank" class="block">
                    <i class="fas fa-envelope text-6xl text-blue-500"></i>
                </a>
                <p class="mt-2">Email</p>
                <p>falleryan45@gmail.com</p>
            </div>
        </div>
    </div>

    <div class="text-center mt-16">
        <h2 class="text-2xl font-bold mb-4">Address</h2>
        <p>9RQ6+GPX, Jl. Raya Pajajaran, RT.02/RW.04,</p>
        <p>Baranangsiang, Kec. Bogor Tim., Kota Bogor,</p>
        <p>Jawa Barat 16143</p>
    </div>
</main>
@endsection
