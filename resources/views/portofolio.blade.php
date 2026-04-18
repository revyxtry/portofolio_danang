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
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-mono { font-family: 'JetBrains Mono', monospace; }
        .glass { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.1); }
    </style>
</head>

<body class="bg-[#020617] text-white overflow-x-hidden selection:bg-blue-500/30">

    <div class="fixed inset-0 -z-10 overflow-hidden">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-600/20 blur-[120px] rounded-full"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-purple-600/10 blur-[150px] rounded-full"></div>
    </div>

    <nav class="fixed top-0 w-full z-50 flex justify-between items-center px-8 py-5 glass">
        <h1 class="text-xl font-extrabold tracking-tighter text-blue-400 font-mono italic">DANANG.DEV</h1>
        <div class="hidden md:flex space-x-8 text-xs font-bold uppercase tracking-widest text-gray-400">
            <a href="#about" class="hover:text-blue-400 transition-colors">About</a>
            <a href="#skills" class="hover:text-blue-400 transition-colors">Skills</a>
            <a href="#projects" class="hover:text-blue-400 transition-colors">Projects</a>
        </div>
    </nav>

    <section class="relative min-h-screen flex flex-col justify-center items-center text-center px-6">
        <div class="mb-8" data-aos="zoom-in">
            <div class="relative w-40 h-40 rounded-full bg-gradient-to-tr from-blue-500 via-cyan-400 to-purple-600 p-[2px]">
                <div class="w-full h-full rounded-full bg-[#020617] flex items-center justify-center overflow-hidden">
                    <span class="text-6xl">👨‍💻</span>
                </div>
            </div>
        </div>

        <h1 data-aos="fade-up" class="text-5xl md:text-7xl font-extrabold tracking-tight mb-4">
            Hi, I'm <span class="bg-gradient-to-r from-blue-400 to-cyan-300 bg-clip-text text-transparent">Danang</span>
        </h1>

        <p data-aos="fade-up" data-aos-delay="200" class="max-w-xl text-gray-400 text-lg mb-10 leading-relaxed">
            Informatics Engineering student focused on building <span class="text-white font-medium">modern web ecosystems</span> with Laravel & Tailwind.
        </p>

        <div data-aos="fade-up" data-aos-delay="400" class="flex flex-wrap justify-center gap-5">
            <a href="#projects" class="px-8 py-4 bg-blue-600 text-sm font-bold rounded-2xl hover:bg-blue-500 transition-all shadow-xl shadow-blue-500/25">
                VIEW PROJECTS
            </a>
            <a href="#contact" class="px-8 py-4 glass text-sm font-bold rounded-2xl hover:bg-white/5 transition-all">
                CONTACT ME
            </a>
        </div>
    </section>

    <section id="about" class="py-32 px-6 max-w-4xl mx-auto text-center" data-aos="fade-up">
        <h2 class="font-mono text-sm text-blue-400 mb-4 tracking-[0.3em] uppercase">01. Background</h2>
        <h3 class="text-3xl font-bold mb-8">Crafting code with precision.</h3>
        <p class="text-gray-400 text-lg leading-relaxed italic font-light">
            "Fokus saya adalah mengubah baris kode menjadi pengalaman pengguna yang luar biasa. Sebagai mahasiswa Informatika, saya selalu mengeksplorasi teknologi terbaru untuk solusi digital yang efisien."
        </p>
    </section>

    <section id="skills" class="py-32 px-6 bg-white/[0.02]">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-center font-mono text-sm text-blue-400 mb-16 tracking-[0.3em] uppercase">02. Tech Stack</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    <div class="group relative glass p-8 rounded-3xl overflow-hidden transition-all duration-500 hover:-translate-y-3 hover:border-blue-500/50" data-aos="fade-up">
        <div class="absolute -right-8 -bottom-8 w-24 h-24 bg-blue-500/10 blur-2xl group-hover:bg-blue-500/20"></div>
        <h3 class="text-xl font-bold mb-4 group-hover:text-blue-400 transition-colors">Website Toko</h3>
        <p class="text-gray-400 text-sm mb-6 leading-relaxed">Laravel E-commerce dengan sistem manajemen produk dan checkout yang responsif.</p>
        <div class="flex flex-wrap gap-3">
            <span class="font-mono text-[10px] px-3 py-1 rounded-full border border-blue-500/30 text-blue-400 bg-blue-500/5">LARAVEL</span>
            <span class="font-mono text-[10px] px-3 py-1 rounded-full border border-gray-500/30 text-gray-400 bg-white/5">V1.0</span>
        </div>
    </div>

    <div class="group relative glass p-8 rounded-3xl overflow-hidden transition-all duration-500 hover:-translate-y-3 hover:border-blue-500/50" data-aos="fade-up" data-aos-delay="100">
        <div class="absolute -right-8 -bottom-8 w-24 h-24 bg-blue-500/10 blur-2xl group-hover:bg-blue-500/20"></div>
        <h3 class="text-xl font-bold mb-4 group-hover:text-blue-400 transition-colors">CRUD Buku</h3>
        <p class="text-gray-400 text-sm mb-6 leading-relaxed">Sistem manajemen perpustakaan digital untuk pendataan buku secara real-time.</p>
        <div class="flex flex-wrap gap-3">
            <span class="font-mono text-[10px] px-3 py-1 rounded-full border border-blue-500/30 text-blue-400 bg-blue-500/5">PHP</span>
            <span class="font-mono text-[10px] px-3 py-1 rounded-full border border-gray-500/30 text-gray-400 bg-white/5">STABLE</span>
        </div>
    </div>

    <div class="group relative glass p-8 rounded-3xl overflow-hidden transition-all duration-500 hover:-translate-y-3 hover:border-blue-500/50" data-aos="fade-up" data-aos-delay="200">
        <div class="absolute -right-8 -bottom-8 w-24 h-24 bg-blue-500/10 blur-2xl group-hover:bg-blue-500/20"></div>
        <h3 class="text-xl font-bold mb-4 group-hover:text-blue-400 transition-colors">Portfolio React</h3>
        <p class="text-gray-400 text-sm mb-6 leading-relaxed">Landing page interaktif menggunakan React JS dengan animasi modern.</p>
        <div class="flex flex-wrap gap-3">
            <span class="font-mono text-[10px] px-3 py-1 rounded-full border border-blue-500/30 text-blue-400 bg-blue-500/5">REACT</span>
            <span class="font-mono text-[10px] px-3 py-1 rounded-full border border-gray-500/30 text-gray-400 bg-white/5">UX DESIGN</span>
        </div>
    </div>
</div>
    </section>

    <section id="projects" class="py-32 px-6">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-center font-mono text-sm text-blue-400 mb-16 tracking-[0.3em] uppercase">03. Latest Works</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($projects as $project)
                <div class="group relative glass p-8 rounded-3xl overflow-hidden transition-all duration-500 hover:-translate-y-3 hover:border-blue-500/50" data-aos="fade-up">
                    <div class="absolute -right-8 -bottom-8 w-24 h-24 bg-blue-500/10 blur-2xl group-hover:bg-blue-500/20"></div>
                    
                    <h3 class="text-xl font-bold mb-4 group-hover:text-blue-400 transition-colors">{{ $project->name }}</h3>
                    <p class="text-gray-400 text-sm mb-6 leading-relaxed">{{ $project->description }}</p>
                    
                    <div class="flex flex-wrap gap-3">
                        <span class="font-mono text-[10px] px-3 py-1 rounded-full border border-blue-500/30 text-blue-400 bg-blue-500/5">PRODUCTION</span>
                        <span class="font-mono text-[10px] px-3 py-1 rounded-full border border-gray-500/30 text-gray-400 bg-white/5">V1.0</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="contact" class="py-40 text-center px-6">
        <div class="glass max-w-2xl mx-auto p-12 rounded-[40px]">
            <h2 class="text-3xl font-bold mb-6 italic font-mono uppercase tracking-tighter">Let's Connect</h2>
            <p class="text-gray-400 mb-8">Punya ide proyek atau sekadar ingin berdiskusi?</p>
            <a href="mailto:danang@email.com" class="text-2xl font-bold text-blue-400 hover:text-white transition-colors underline decoration-blue-500/30 underline-offset-8">
                danang@email.com
            </a>
        </div>
    </section>

    <footer class="py-10 text-center text-xs text-gray-500 border-t border-white/5 font-mono">
        © 2026 DANANG FATHI ZAKKA. BUILT WITH LARAVEL 11.
    </footer>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
          AOS.init({
              duration: 800,
              once: true,
              easing: 'ease-out-quad'
          });
      });
    </script>
</body>
</html>