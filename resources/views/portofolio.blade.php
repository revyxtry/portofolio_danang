<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    
    <title>Portofolio Danang | Informatics Engineering</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; scroll-behavior: smooth; }
        .font-mono { font-family: 'JetBrains Mono', monospace; }
        .glass { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.1); }
    </style>
</head>

<body class="bg-[#020617] text-white overflow-x-hidden">

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

    <section class="min-h-screen flex flex-col justify-center items-center text-center px-6">
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

        <p data-aos="fade-up" data-aos-delay="200" class="max-w-xl text-gray-400 text-lg mb-10 leading-relaxed">
            Informatics Engineering student. Building <span class="text-white">future-ready</span> web applications.
        </p>

        <div data-aos="fade-up" data-aos-delay="400" class="flex gap-5">
            <a href="#projects" class="px-8 py-4 bg-blue-600 rounded-2xl font-bold hover:bg-blue-500 transition shadow-lg shadow-blue-500/20">
                MY WORKS
            </a>
            <a href="#contact" class="px-8 py-4 glass rounded-2xl font-bold hover:bg-white/5 transition">
                CONTACT
            </a>
        </div>
    </section>

    <section id="about" class="py-32 px-6 max-w-4xl mx-auto text-center" data-aos="fade-up">
        <h2 class="font-mono text-sm text-blue-400 mb-4 tracking-[0.3em] uppercase">01. About Me</h2>
        <p class="text-gray-300 text-xl leading-relaxed italic">
            "Saya fokus pada pembuatan sistem web yang stabil, cepat, dan memiliki tampilan yang modern."
        </p>
    </section>

    <section id="skills" class="py-32 px-6">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-center font-mono text-sm text-blue-400 mb-16 tracking-[0.3em] uppercase">02. Skills</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="glass p-8 rounded-3xl text-center" data-aos="fade-up">
                    <div class="text-4xl mb-4">🐘</div>
                    <h4 class="font-bold">Laravel</h4>
                </div>
                <div class="glass p-8 rounded-3xl text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-4xl mb-4">🎨</div>
                    <h4 class="font-bold">Tailwind</h4>
                </div>
                <div class="glass p-8 rounded-3xl text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-4xl mb-4">⚡</div>
                    <h4 class="font-bold">Vite</h4>
                </div>
                <div class="glass p-8 rounded-3xl text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-4xl mb-4">🗄️</div>
                    <h4 class="font-bold">MySQL</h4>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-32 px-6">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-center font-mono text-sm text-blue-400 mb-16 tracking-[0.3em] uppercase">03. Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="group relative glass p-8 rounded-3xl transition-all duration-500 hover:-translate-y-3 hover:border-blue-500/50" data-aos="fade-up">
                    <h3 class="text-xl font-bold mb-4 group-hover:text-blue-400">Website Toko Online</h3>
                    <p class="text-gray-400 text-sm mb-6">Sistem e-commerce berbasis Laravel dengan manajemen produk.</p>
                    <div class="flex gap-2">
                        <span class="font-mono text-[10px] px-3 py-1 rounded-full border border-blue-500/30 text-blue-400 bg-blue-500/5">LARAVEL</span>
                    </div>
                </div>

                <div class="group relative glass p-8 rounded-3xl transition-all duration-500 hover:-translate-y-3 hover:border-blue-500/50" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-xl font-bold mb-4 group-hover:text-blue-400">Sistem Perpus</h3>
                    <p class="text-gray-400 text-sm mb-6">Aplikasi CRUD pendataan buku menggunakan PHP dan MySQL.</p>
                    <div class="flex gap-2">
                        <span class="font-mono text-[10px] px-3 py-1 rounded-full border border-blue-500/30 text-blue-400 bg-blue-500/5">PHP MYSQL</span>
                    </div>
                </div>

                <div class="group relative glass p-8 rounded-3xl transition-all duration-500 hover:-translate-y-3 hover:border-blue-500/50" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-xl font-bold mb-4 group-hover:text-blue-400">Portfolio React</h3>
                    <p class="text-gray-400 text-sm mb-6">Landing page interaktif dengan performa tinggi dan animasi smooth.</p>
                    <div class="flex gap-2">
                        <span class="font-mono text-[10px] px-3 py-1 rounded-full border border-blue-500/30 text-blue-400 bg-blue-500/5">REACT JS</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="contact" class="py-40 text-center px-6">
        <div class="glass max-w-2xl mx-auto p-12 rounded-[40px]">
            <h2 class="text-3xl font-bold mb-6 font-mono uppercase tracking-tighter">Let's Talk</h2>
            <a href="mailto:danang@email.com" class="text-2xl font-bold text-blue-400 hover:text-white transition-colors">
                danang@email.com
            </a>
        </div>
    </section>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
          AOS.init({ duration: 800, once: true });
      });
    </script>
</body>
</html>