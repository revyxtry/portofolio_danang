<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio');
});

// resources/views/portfolio.blade.php
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danang Fathi Zakka - Portfolio</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="bg-gradient-to-br from-gray-950 via-gray-900 to-black text-white font-sans overflow-x-hidden">

    <!-- Navbar -->
    <nav class="flex justify-between items-center p-6 bg-black/30 backdrop-blur-md fixed w-full z-50">
        <h1 class="text-xl font-bold text-blue-400">Danang Zakka</h1>
        <button onclick="toggleDark()" class="text-sm bg-gray-800 px-3 py-1 rounded">Toggle</button>
    </nav>

    <!-- Hero -->
    <section class="text-center py-32" data-aos="fade-up">
        <div class="w-32 h-32 mx-auto mb-6 rounded-full bg-gradient-to-r from-blue-500 to-purple-500 p-1">
            <div class="w-full h-full rounded-full bg-black flex items-center justify-center text-3xl">👨‍💻</div>
        </div>

        <h2 class="text-5xl font-bold mb-4">Danang Fathi Zakka</h2>
        <p class="text-gray-400 mb-2">NIM: 240103012 | Kelas: TI24A1</p>
        <p class="text-gray-500 mb-6">Fullstack Web Developer</p>

        <a href="#projects" class="bg-blue-500 px-6 py-2 rounded-full hover:bg-blue-600 transition">Lihat Project</a>
    </section>

    <!-- About -->
    <section class="px-10 py-20 max-w-4xl mx-auto" data-aos="fade-right">
        <h3 class="text-3xl font-semibold mb-4 text-blue-400">About Me</h3>
        <p class="text-gray-400 leading-relaxed">
            Mahasiswa IT yang fokus pada pengembangan web modern menggunakan Laravel dan JavaScript.
            Menyukai UI clean, animasi halus, dan pengalaman pengguna yang interaktif.
        </p>
    </section>

    <!-- Skills -->
    <section class="px-10 py-20 bg-black/40" data-aos="fade-up">
        <h3 class="text-3xl font-semibold mb-10 text-center text-blue-400">Skills</h3>

        <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <div class="bg-gray-800 p-6 rounded-2xl text-center hover:scale-105 transition">
                <i data-lucide="code"></i>
                <p class="mt-2">Laravel</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-2xl text-center hover:scale-105 transition">
                <i data-lucide="layout"></i>
                <p class="mt-2">Frontend</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-2xl text-center hover:scale-105 transition">
                <i data-lucide="database"></i>
                <p class="mt-2">Database</p>
            </div>
        </div>
    </section>

    <!-- Projects -->
    <section id="projects" class="px-10 py-20" data-aos="fade-left">
        <h3 class="text-3xl font-semibold mb-10 text-center text-blue-400">Projects</h3>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-gray-800 p-6 rounded-2xl hover:-translate-y-2 transition shadow-xl">
                <h4 class="font-bold mb-2">Website Toko</h4>
                <p class="text-gray-400 text-sm">Laravel Project</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-2xl hover:-translate-y-2 transition shadow-xl">
                <h4 class="font-bold mb-2">CRUD Buku</h4>
                <p class="text-gray-400 text-sm">Laravel CRUD</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-2xl hover:-translate-y-2 transition shadow-xl">
                <h4 class="font-bold mb-2">Portfolio React</h4>
                <p class="text-gray-400 text-sm">React App</p>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="px-10 py-20 text-center" data-aos="fade-up">
        <h3 class="text-3xl font-semibold mb-4 text-blue-400">Contact</h3>
        <p class="text-gray-400">Email: zakkadanang@gemail.com</p>
        <div class="flex justify-center gap-4 mt-4">
            <i data-lucide="github"></i>
            <i data-lucide="instagram"></i>
        </div>
    </section>

    <footer class="text-center py-6 text-gray-600 text-sm">
        © 2026 Danang Fathi Zakka
    </footer>

    <script>
        AOS.init({ duration: 1000 });
        lucide.createIcons();

        function toggleDark() {
            document.body.classList.toggle('bg-white');
            document.body.classList.toggle('text-black');
        }
    </script>

</body>
</html>