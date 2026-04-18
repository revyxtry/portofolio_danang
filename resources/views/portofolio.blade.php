<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danang Portfolio</title>

    @vite('resources/css/app.css')
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body class="bg-[#020617] text-white font-sans overflow-x-hidden">

    <!-- Background Glow -->
    <div class="fixed inset-0 -z-10">
        <div class="absolute top-20 left-1/2 w-[500px] h-[500px] bg-blue-500 opacity-20 blur-3xl rounded-full"></div>
    </div>

    <!-- Navbar -->
    <nav class="flex justify-between items-center px-8 py-5 backdrop-blur-xl bg-white/5 border-b border-white/10">
        <h1 class="text-xl font-bold text-blue-400">Danang</h1>
        <div class="space-x-6 text-sm text-gray-300">
            <a href="#about" class="hover:text-blue-400 transition">About</a>
            <a href="#skills" class="hover:text-blue-400 transition">Skills</a>
            <a href="#projects" class="hover:text-blue-400 transition">Projects</a>
        </div>
    </nav>

    <!-- HERO -->
    <section class="min-h-screen flex flex-col justify-center items-center text-center px-6">

        <div class="mb-6">
            <div class="w-44 h-44 rounded-full bg-gradient-to-r from-blue-500 to-purple-600 p-[3px] shadow-2xl">
                <div class="w-full h-full rounded-full bg-[#020617] flex items-center justify-center text-6xl">
                    👨‍💻
                </div>
            </div>
        </div>

        <h1 data-aos="fade-up" class="text-5xl md:text-6xl font-bold">
            Hi, I'm <span class="text-blue-400">Danang</span>
        </h1>

        <p data-aos="fade-up" data-aos-delay="200" class="text-gray-400">
            Fullstack Developer crafting modern, fast, and elegant web applications with Laravel & React.
        </p>

        <div data-aos="fade-up" data-aos-delay="400" class="flex gap-4">
            <a href="#projects" class="px-6 py-3 bg-blue-500 rounded-xl hover:bg-blue-600 transition shadow-lg shadow-blue-500/20">
                View Projects
            </a>
            <a href="#contact" class="px-6 py-3 border border-white/20 rounded-xl hover:bg-white/10 transition">
                Contact Me
            </a>
        </div>

    </section>

    <!-- ABOUT -->
    <section id="about" class="py-24 px-6 text-center max-w-4xl mx-auto">
        <section id="about" data-aos="fade-up">
        <h2 class="text-3xl font-bold mb-6 text-blue-400">About Me</h2>
        <p class="text-gray-400 leading-relaxed">
            Saya adalah developer yang fokus membangun web modern dengan design clean, performa tinggi, dan user experience yang smooth.
        </p>
    </section>

    <!-- SKILLS -->
    <section id="skills" class="py-24 bg-[#020617]">
        <h2 class="text-3xl font-bold text-center mb-12 text-blue-400">Skills</h2>

        <div class="grid md:grid-cols-4 gap-6 max-w-6xl mx-auto px-6">

            <div data-aos="zoom-in" class="bg-white/5 ...">
                Laravel
            </div>

            <div data-aos="zoom-in" class="bg-white/5 ...">
                React
            </div>

            <div data-aos="zoom-in" class="bg-white/5 ...">
                Tailwind
            </div>

            <div data-aos="zoom-in" class="bg-white/5 ...">
                JavaScript
            </div>

        </div>
    </section>

    <!-- PROJECT -->
    <section id="projects" class="py-24 px-6">
        <h2 class="text-3xl font-bold text-center mb-12 text-blue-400">Projects</h2>

        <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">

            <div data-aos="fade-up" class="bg-white/5 ...">
                <h3 class="font-bold text-lg mb-2">Website Toko</h3>
                <p class="text-gray-400 text-sm">Laravel E-commerce</p>
            </div>

            <div data-aos="fade-up" class="bg-white/5 ...">
                <h3 class="font-bold text-lg mb-2">CRUD Buku</h3>
                <p class="text-gray-400 text-sm">Laravel System</p>
            </div>

            <div data-aos="fade-up" class="bg-white/5 ...">
                <h3 class="font-bold text-lg mb-2">Portfolio React</h3>
                <p class="text-gray-400 text-sm">React App</p>
            </div>

        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="py-24 text-center">
        <h2 class="text-3xl font-bold mb-4 text-blue-400">Contact</h2>
        <p class="text-gray-400">danang@email.com</p>
    </section>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true
  });
</script>

</body>
</html>