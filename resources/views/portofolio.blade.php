<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Portofolio Danang | Informatics</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; scroll-behavior: smooth; background-color: #020617; color: white; }
        .font-mono { font-family: 'JetBrains Mono', monospace; }
        .glass { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.1); }
    </style>
</head>

<body class="overflow-x-hidden">
    <div class="fixed inset-0 -z-10">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-600/20 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-purple-600/10 blur-[150px] rounded-full"></div>
    </div>

    <nav class="fixed top-0 w-full z-50 flex justify-between items-center px-8 py-5 glass">
        <h1 class="text-xl font-extrabold tracking-tighter text-blue-400 font-mono italic">DANANG.DEV</h1>
        <div class="hidden md:flex space-x-8 text-xs font-bold uppercase tracking-widest text-gray-400">
            <a href="#about" class="hover:text-blue-400 transition">About</a>
            <a href="#skills" class="hover:text-blue-400 transition">Skills</a>
            <a href="#projects" class="hover:text-blue-400 transition">Projects</a>
        </div>
    </nav>

    <section class="min-h-screen flex flex-col justify-center items-center text-center px-6 pt-20">
        <div class="mb-8" data-aos="zoom-in">
            <div class="relative w-40 h-40 rounded-full bg-gradient-to-tr from-blue-500 to-purple-600 p-[2px]">
                <div class="w-full h-full rounded-full bg-[#020617] flex items-center justify-center overflow-hidden text-6xl">
                    👨‍💻
                </div>
            </div>
        </div>
        <h1 data-aos="fade-up" class="text-5xl md:text-7xl font-extrabold mb-4">
            Hi, I'm <span class="text-blue-400">Danang</span>
        </h1>
        <p data-aos="fade-up" data-aos-delay="200" class="max-w-xl text-gray-400 text-lg mb-10">
            Informatics Engineering student building <span class="text-white">modern web systems</span>.
        </p>
    </section>

    <section id="skills" class="py-24 px-6">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="font-mono text-sm text-blue-400 mb-12 tracking-widest uppercase">Tech Stack</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="glass p-8 rounded-3xl" data-aos="fade-up">Laravel</div>
                <div class="glass p-8 rounded-3xl" data-aos="fade-up" data-aos-delay="100">Tailwind</div>
                <div class="glass p-8 rounded-3xl" data-aos="fade-up" data-aos-delay="200">Vite</div>
                <div class="glass p-8 rounded-3xl" data-aos="fade-up" data-aos-delay="300">MySQL</div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-24 px-6">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-center font-mono text-sm text-blue-400 mb-16 tracking-widest uppercase">Latest Works</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="group glass p-8 rounded-3xl transition-all duration-500 hover:-translate-y-3" data-aos="fade-up">
                    <h3 class="text-xl font-bold mb-4">Website Toko Online</h3>
                    <p class="text-gray-400 text-sm mb-6">E-commerce built with Laravel.</p>
                    <span class="font-mono text-[10px] px-3 py-1 rounded-full border border-blue-500/30 text-blue-400">LARAVEL</span>
                </div>

                <div class="group glass p-8 rounded-3xl transition-all duration-500 hover:-translate-y-3" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-xl font-bold mb-4">CRUD Perpustakaan</h3>
                    <p class="text-gray-400 text-sm mb-6">Library system with PHP & MySQL.</p>
                    <span class="font-mono text-[10px] px-3 py-1 rounded-full border border-blue-500/30 text-blue-400">PHP</span>
                </div>

                <div class="group glass p-8 rounded-3xl transition-all duration-500 hover:-translate-y-3" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-xl font-bold mb-4">Portfolio Design</h3>
                    <p class="text-gray-400 text-sm mb-6">Modern landing page with Tailwind v4.</p>
                    <span class="font-mono text-[10px] px-3 py-1 rounded-full border border-blue-500/30 text-blue-400">UI/UX</span>
                </div>

            </div>
        </div>
    </section>

    <footer class="py-20 text-center glass border-t-0 mt-20">
        <p class="text-gray-400 font-mono text-xs tracking-widest uppercase">© 2026 Danang Fathi Zakka</p>
    </footer>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
          AOS.init({ duration: 800, once: true });
      });
    </script>
</body>
</html>