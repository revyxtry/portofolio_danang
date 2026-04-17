<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danang Fathi Zakka</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#0f172a] text-white font-sans overflow-x-hidden">

    <!-- Navbar -->
    <nav class="flex justify-between items-center px-8 py-5 border-b border-gray-800">
        <h1 class="text-xl font-bold text-blue-400">Danang</h1>
        <div class="space-x-6 text-sm text-gray-300">
            <a href="#about" class="hover:text-blue-400">About</a>
            <a href="#skills" class="hover:text-blue-400">Skills</a>
            <a href="#projects" class="hover:text-blue-400">Projects</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="min-h-screen flex flex-col justify-center items-center text-center px-6 relative">
        
        <!-- Glow Effect -->
        <div class="absolute w-72 h-72 bg-blue-500 opacity-20 blur-3xl rounded-full"></div>

        <!-- Profile -->
        <div class="relative mb-6">
            <div class="w-40 h-40 rounded-full bg-gradient-to-r from-blue-500 to-purple-500 p-1 shadow-2xl">
                <div class="w-full h-full rounded-full bg-black flex items-center justify-center text-5xl">
                    👨‍💻
                </div>
            </div>
        </div>

        <h2 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
            Hi, I'm <span class="text-blue-400">Danang</span>
        </h2>

        <p class="text-gray-400 max-w-xl mb-6">
            Fullstack Web Developer yang fokus pada pembuatan website modern, cepat, dan profesional menggunakan Laravel dan React.
        </p>

        <div class="flex gap-4">
            <a href="#projects" class="bg-blue-500 px-6 py-2 rounded-lg hover:bg-blue-600 transition">
                View Projects
            </a>
            <a href="#contact" class="border border-gray-600 px-6 py-2 rounded-lg hover:border-blue-400 transition">
                Contact Me
            </a>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="px-8 py-20 max-w-4xl mx-auto text-center">
        <h3 class="text-3xl font-semibold mb-6 text-blue-400">About Me</h3>
        <p class="text-gray-400 leading-relaxed">
            Saya adalah mahasiswa IT yang memiliki passion dalam web development. Saya terbiasa membangun aplikasi web modern dengan desain clean, interaktif, dan profesional seperti developer luar negeri.
        </p>
    </section>

    <!-- Skills -->
    <section id="skills" class="px-8 py-20 bg-[#020617]">
        <h3 class="text-3xl font-semibold mb-10 text-center text-blue-400">Skills</h3>

        <div class="grid md:grid-cols-4 gap-6 max-w-6xl mx-auto">
            <div class="bg-gray-900 p-6 rounded-xl text-center hover:scale-105 hover:shadow-blue-500/20 shadow-lg transition">
                <p class="text-lg font-semibold">Laravel</p>
                <p class="text-gray-400 text-sm mt-2">Backend</p>
            </div>

            <div class="bg-gray-900 p-6 rounded-xl text-center hover:scale-105 hover:shadow-blue-500/20 shadow-lg transition">
                <p class="text-lg font-semibold">React</p>
                <p class="text-gray-400 text-sm mt-2">Frontend SPA</p>
            </div>

            <div class="bg-gray-900 p-6 rounded-xl text-center hover:scale-105 hover:shadow-blue-500/20 shadow-lg transition">
                <p class="text-lg font-semibold">Tailwind</p>
                <p class="text-gray-400 text-sm mt-2">UI Design</p>
            </div>

            <div class="bg-gray-900 p-6 rounded-xl text-center hover:scale-105 hover:shadow-blue-500/20 shadow-lg transition">
                <p class="text-lg font-semibold">JavaScript</p>
                <p class="text-gray-400 text-sm mt-2">Logic & Interaction</p>
            </div>
        </div>
    </section>

    <!-- Projects -->
    <section id="projects" class="px-8 py-20">
        <h3 class="text-3xl font-semibold mb-10 text-center text-blue-400">Projects</h3>

        <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <div class="bg-gray-900 p-6 rounded-xl hover:-translate-y-2 hover:shadow-xl transition">
                <h4 class="font-bold mb-2">Website Toko</h4>
                <p class="text-gray-400 text-sm">Laravel E-commerce</p>
            </div>

            <div class="bg-gray-900 p-6 rounded-xl hover:-translate-y-2 hover:shadow-xl transition">
                <h4 class="font-bold mb-2">CRUD Buku</h4>
                <p class="text-gray-400 text-sm">Laravel System</p>
            </div>

            <div class="bg-gray-900 p-6 rounded-xl hover:-translate-y-2 hover:shadow-xl transition">
                <h4 class="font-bold mb-2">Portfolio React</h4>
                <p class="text-gray-400 text-sm">React App</p>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="px-8 py-20 text-center">
        <h3 class="text-3xl font-semibold mb-4 text-blue-400">Contact</h3>
        <p class="text-gray-400">Email: danang@email.com</p>
    </section>

    <footer class="text-center py-6 text-gray-600 text-sm">
        © 2026 Danang Fathi Zakka
    </footer>

</body>
</html>