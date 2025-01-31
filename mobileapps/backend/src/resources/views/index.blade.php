@extends('layouts.app')

@section('content')

    <!-- Hero Section -->
    <section id="home" class="h-screen flex items-center justify-center bg-pink-500 text-white text-center">
        <div>
            <h1 class="text-5xl font-extrabold">BINBIKES</h1>
            <p class="mt-4 text-lg">Riding Excellence in Every Service</p>
        </div>
    </section>
    
    <!-- About Section -->
    <section id="about" class="container mx-auto p-12">
        <h2 class="text-3xl font-bold text-center mb-6 text-pink-700">About Us</h2>
        <p class="text-gray-800 text-center max-w-3xl mx-auto leading-relaxed">
            Kami adalah penyedia sepeda listrik terbaik di kelasnya, yang dirancang khusus untuk berbagi dan mendukung mobilitas berkelanjutan. Dengan fokus pada inovasi, keberlanjutan, dan kenyamanan, kami berkomitmen untuk memberikan solusi transportasi yang efisien, ramah lingkungan, dan mudah diakses oleh semua orang.
        </p>
    </section>
    
    <!-- Services Section -->
    <section id="services" class="bg-pink-200 p-12">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6 text-pink-700">Our Services</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white shadow-lg p-6 rounded-lg">
                    <h3 class="text-xl font-bold text-pink-600">BINBIKE 1</h3>
                    <p class="text-gray-800">Sepeda listrik terbaik untuk berbagi kenikmatan.</p>
                </div>
                <div class="bg-white shadow-lg p-6 rounded-lg">
                    <h3 class="text-xl font-bold text-pink-600">BINBIKE 2</h3>
                    <p class="text-gray-800">Sepeda listrik terbaik untuk berbagi kenikmatan.</p>
                </div>
                <div class="bg-white shadow-lg p-6 rounded-lg">
                    <h3 class="text-xl font-bold text-pink-600">BINBIKE 3</h3>
                    <p class="text-gray-800">Sepeda listrik terbaik untuk berbagi kenikmatan.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Map Section -->
    <section id="map" class="container mx-auto p-12">
        <h2 class="text-3xl font-bold text-center mb-6 text-pink-700">Our Location</h2>
        <div class="flex justify-center">
            <iframe class="w-full md:w-3/4 h-96 rounded-lg shadow-lg" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345093986!2d144.95373531531684!3d-37.81627927975171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf5777d7a21c9c5e9!2sMelbourne%2C%20Australia!5e0!3m2!1sen!2sus!4v1631122335674!5m2!1sen!2sus" 
                allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </section>

@endsection
