<!DOCTYPE html>
<html lang="id">
    @include('layouts.header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'E-Commerce Motor') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gray-100">
    {{-- <nav class="bg-gray-200 p-4 text-black flex justify-between items-center">
        <div class="flex space-x-6"">
            <h1 class="text-l font-bold">Belanja Sparepart dan Aksesoris Motor Mudah dan Nyaman</h1>
            <h1>Belanja disini</h1>
        </div>
        <div class="flex space-x-6">
            <a href="/about/" target="_blank" rel="noopener noreferrer" class="hover:underline">Tentang Toko Kami</a>
            <a href="/mitra" target="_blank" rel="noopener noreferrer" class="hover:underline">Mitra Tokopedia</a>
            <a href="https://seller.tokopedia.com/edu/topic/mulai-bisnis/materi-seller-baru/" target="_blank" rel="noopener noreferrer" class="hover:underline">Mulai Berjualan</a>
            <a href="/help/" target="_blank" rel="noopener noreferrer" class="hover:underline">Hubungi Kami</a>
        </div>
    </nav> --}}
    <!-- Navbar -->
    {{-- <nav class="mt-1 bg-blue-600 p-4 text-white flex justify-between">
        <a href="#" class="text-xl font-bold">Motor Sparepart Store</a>
        <div>
            <a href="/login" class="mr-4">Login</a>
            <a href="/register">Register</a>
        </div>
    </nav> --}}
    
    <div class="container mx-auto p-4">
        @yield('content')
    </div>

    <footer class="bg-blue-600 text-white text-center p-4 mt-8">
        <p>&copy; 2025 Motor Sparepart Store. All Rights Reserved.</p>
    </footer>
</body>
</html>
