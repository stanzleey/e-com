<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motor Sparepart Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    @include('layouts.navigation')
{{-- @section('content') --}}
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Detail Produk</h1>
    <div>
        <a href="{{ route('products.edit', $product->id) }}" class="px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 mr-2">
            Edit
        </a>
        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                Hapus
            </button>
        </form>
    </div>
</div>

<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Nama Produk</label>
        <p class="text-gray-900">{{ $product->name }}</p>
    </div>
    
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Harga</label>
        <p class="text-gray-900">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
    </div>
    
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Deskripsi</label>
        <p class="text-gray-900 whitespace-pre-line">{{ $product->description }}</p>
    </div>
    
    <div class="flex items-center justify-between">
        <a href="{{ route('home.produk.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Kembali ke Daftar
        </a>
    </div>
</div>
{{-- @endsection --}}
</body>
</html>

