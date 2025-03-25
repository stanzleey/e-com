<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-blue-600 text-white h-screen p-5">
        <h1 class="text-2xl font-bold mb-6">Admin Panel</h1>
        <ul>
            <li class="mb-3">
                <a href="{{ route('admin.dashboard') }}" class="block py-2 px-4 rounded hover:bg-blue-500">Dashboard</a>
            </li>
            <li class="mb-3">
                <a href="{{ route('admin.products') }}" class="block py-2 px-4 rounded hover:bg-blue-500">Manajemen Produk</a>
            </li>
            <li class="mb-3">
                <a href="/admin/history" class="block py-2 px-4 rounded hover:bg-blue-500">Histori Pembayaran</a>
            </li>
            <li class="mb-3">
                <a href="{{ route('admin.reports') }}" class="block py-2 px-4 rounded hover:bg-blue-500">Laporan</a>
            </li>
            <li class="mb-3">
                <a href="/admin/hubungi kami" class="block py-2 px-4 rounded hover:bg-blue-500">Hubungi Kami</a>
            </li>
            <li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
                
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                class="mt-4 inline-block bg-red-500 text-white px-4 py-2 rounded">Logout</a>
                
                {{-- <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                 class="mt-4 inline-block bg-red-500 text-white px-4 py-2 rounded">Logout</a> --}}
            </li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        @yield('content')
    </main>
</div>

</body>
</html>





