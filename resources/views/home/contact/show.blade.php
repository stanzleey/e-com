@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex justify-between items-start mb-6">
                    <h1 class="text-2xl font-bold">Detail Pesan</h1>
                    <span class="px-3 py-1 rounded-full text-sm font-medium {{ $contact->is_read ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                        {{ $contact->is_read ? 'Sudah Dibaca' : 'Belum Dibaca' }}
                    </span>
                </div>

                <div class="space-y-4">
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Dikirim pada</h3>
                        <p class="mt-1 text-sm text-gray-900">{{ $contact->created_at->format('d M Y H:i') }}</p>
                    </div>

                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Nama Pengirim</h3>
                        <p class="mt-1 text-sm text-gray-900">{{ $contact->name }}</p>
                    </div>

                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Email</h3>
                        <p class="mt-1 text-sm text-gray-900">{{ $contact->email }}</p>
                    </div>

                    @if($contact->phone)
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Nomor Telepon</h3>
                        <p class="mt-1 text-sm text-gray-900">{{ $contact->phone }}</p>
                    </div>
                    @endif

                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Subjek</h3>
                        <p class="mt-1 text-sm text-gray-900">{{ $contact->subject }}</p>
                    </div>

                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Pesan</h3>
                        <div class="mt-1 p-4 bg-gray-50 rounded-md">
                            <p class="text-sm text-gray-900 whitespace-pre-line">{{ $contact->message }}</p>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex justify-between">
                    <a href="{{ route('contact.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-gray-700 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        Kembali
                    </a>
                    <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500" onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
                            Hapus Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection