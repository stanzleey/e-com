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
    <h1 class="text-2xl font-bold">Daftar Produk</h1>
    <a href="{{ route('products.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 mt-3">
        Tambah Produk
    </a>
</div>

@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<div class="overflow-x-auto">
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700">No</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700">Nama Produk</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700">Deskripsi</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700">Harga</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold text-gray-700">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr> 
                <td class="px-6 py-4 border-b border-gray-300">{{ $loop->iteration }}</td>
                <td class="px-6 py-4 border-b border-gray-300">{{ $product->name }}</td>
                <td class="px-6 py-4 border-b border-gray-300">{{ $product->description }}</td>
                <td class="px-6 py-4 border-b border-gray-300">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                <td class="px-6 py-4 border-b border-gray-300">
                    <a href="{{ route('products.show', $product->id) }}" class="text-blue-600 hover:text-blue-900 mr-2">Lihat</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="text-yellow-600 hover:text-yellow-900 mr-2">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-4">
    {{ $products->links() }}
</div>
{{-- @endsection --}}
</body>
</html>

