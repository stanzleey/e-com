<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    @include('layouts.navigation')

    {{-- @section('content') --}}
    <h1 class="text-2xl font-bold mb-6">Tambah Produk Baru</h1>
    
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama Produk</label>
            <input type="text" name="name" id="name" required
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                value="{{ old('name') }}">
            @error('name')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="mb-4">
            <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Harga</label>
            <input type="number" name="price" id="price" min="0" step="0.01" required
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                value="{{ old('price') }}">
            @error('price')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi</label>
            <textarea name="description" id="description" rows="4" required
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Simpan Produk
            </button>
            <a href="{{ route('home.produk.index') }}" class="text-gray-600 hover:text-gray-800">
                Kembali
            </a>
        </div>
    </form>
    {{-- @endsection --}}
</body>
</html>

