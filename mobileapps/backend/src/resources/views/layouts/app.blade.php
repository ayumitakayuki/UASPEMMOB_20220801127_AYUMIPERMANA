<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Company Profile')</title>
    <link rel="stylesheet" href="{{ asset('css/companyprofile/styles.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="bg-pink-600 p-4 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-bold">BINBIKES</a>
            <ul class="flex space-x-4">
                <li><a href="{{ url('/') }}" class="hover:text-gray-300">{{ __('Home') }}</a></li>
                <li><a href="#about" class="hover:text-gray-300">{{ __('About') }}</a></li>
                <li><a href="#services" class="hover:text-gray-300">{{ __('Services') }}</a></li>
                <li><a href="#map" class="hover:text-gray-300">{{ __('Location') }}</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Main Content -->
    <div class="content">
        @yield('content')
    </div>
    
    <!-- Footer -->
    <footer class="bg-pink-600 text-white text-center p-4 mt-8">
        <p>&copy; {{ date('Y') }} BINBIKES. {{ __('All rights reserved.') }}</p>
    </footer>
</body>
</html>