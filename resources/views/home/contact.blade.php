<!-- resources/views/contact/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-lg">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Hubungi Kami</h2>
    
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
            <strong>Oops!</strong> Ada beberapa masalah dengan input Anda.<br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- <form action="{{ route('contact.store') }}" method="POST" class="space-y-4"> --}}
        @csrf
        
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-primary-500 focus:border-primary-500" required>
        </div>
        
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-primary-500 focus:border-primary-500" required>
        </div>
        
        <div>
            <label for="message" class="block text-sm font-medium text-gray-700">Pesan</label>
            <textarea name="message" id="message" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-primary-500 focus:border-primary-500" required></textarea>
        </div>
        
        <div>
            <button type="submit" class="w-full bg-blue-700 hover:bg-blue-800 text-white font-medium py-2 px-4 rounded-lg">Kirim Pesan</button>
        </div>
    </form>
</div>
    {{-- footer --}}
    @include('layouts.footer')
@endsection
