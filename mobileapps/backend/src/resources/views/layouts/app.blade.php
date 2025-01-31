<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Company Profile')</title>

    <!-- Tambahkan CDN Tailwind jika Tailwind tidak bekerja -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Pastikan CSS bisa dipanggil -->
    <link rel="stylesheet" href="{{ asset('css/companyprofile/styles.css') }}">
</head>
<body class="bg-pink-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-pink-600 p-4 text-white shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-2xl font-bold">BINBIKES</a>
            <ul class="flex space-x-6">
                {{-- <li><a href="{{ url('/') }}" class="hover:text-gray-300">Home</a></li>
                <li><a href="#about" class="hover:text-gray-300">About</a></li>
                <li><a href="#services" class="hover:text-gray-300">Services</a></li>
                <li><a href="#map" class="hover:text-gray-300">Location</a></li> --}}
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="content p-8">
    @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-pink-600 text-white text-center p-4 mt-8">
        <p>&copy; {{ date('Y') }} BINBIKES. All rights reserved.</p>
    </footer>

</body>
</html>
