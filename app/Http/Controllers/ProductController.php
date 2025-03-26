<?php

// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Menampilkan semua produk
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('home.produk.index', compact('products'));
    }

    // Menampilkan form tambah produk
    public function create()
    {
        return view('home.produk.create');
    }

    // Menyimpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string'
        ]);

        Product::create($request->all());

        return redirect()->route('home.produk.index')
            ->with('success', 'Produk berhasil ditambahkan');
    }

    // Menampilkan detail produk
    public function show(Product $product)
    {
        return view('home.produk.show', compact('product'));
    }

    // Menampilkan form edit produk
    public function edit(Product $product)
    {
        return view('home.produk.edit', compact('product'));
    }

    // Update produk
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string'
        ]);

        $product->update($request->all());

        return redirect()->route('home.produk.index')
            ->with('success', 'Produk berhasil diupdate');
    }

    // Hapus produk
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('home.produk.index')
            ->with('success', 'Produk berhasil dihapus');
    }
}