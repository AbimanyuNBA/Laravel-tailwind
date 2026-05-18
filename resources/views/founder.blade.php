<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Founder – Narend Studio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f8f9fa] text-[#333] font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif]">

    @include('partials.navbar')

    <!-- HERO SECTION FOUNDER -->
    <section class="relative bg-slate-900 text-white py-20 px-[5%] md:px-[8%] overflow-hidden">
        <!-- Dekorasi Background -->
        <div class="absolute inset-0 bg-cover bg-center opacity-10" style="background-image: url('https://images.unsplash.com/photo-1550745165-9bc0b252726f?q=80&w=1000');"></div>
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-indigo-600 rounded-full blur-[120px] opacity-30"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-blue-600 rounded-full blur-[120px] opacity-20"></div>

        <div class="relative z-10 max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-12">
            <!-- Foto Founder -->
            <div class="w-64 h-64 md:w-80 md:h-80 shrink-0 relative group">
                <div class="absolute inset-0 bg-indigo-500 rounded-2xl rotate-6 scale-95 group-hover:rotate-12 transition-transform duration-300 shadow-lg"></div>
                <div class="absolute inset-0 bg-slate-800 rounded-2xl border border-white/10 overflow-hidden shadow-2xl">
                    <img src="{{ asset('img/abi.png') }}" alt="Abimanyu Airudin" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-500" />
                </div>
            </div>

            <!-- Teks Identitas -->
            <div class="text-center md:text-left max-w-2xl">
                <span class="text-indigo-400 font-bold uppercase tracking-[3px] text-sm block mb-2">The Mind Behind The Studio</span>
                <h1 class="text-4xl md:text-5xl font-black tracking-tight text-white mb-2">Abimanyu Airudin</h1>
                <p class="text-xl text-gray-300 font-medium mb-6">Founder & Creative Director Narend Studio</p>
                <p class="text-gray-400 leading-relaxed mb-8">
                    Memulai perjalanan kreatif sejak tahun 2020 dengan satu misi: membantu UMKM hingga korporasi besar naik kelas melalui visual yang berkarakter, modern, dan berdampak tinggi bagi bisnis mereka.
                </p>
                
                <!-- Media Sosial Sosmed -->
                <div class="flex justify-center md:justify-start gap-4">
                    <a href="#" class="p-3 bg-white/5 border border-white/10 rounded-xl text-gray-300 hover:bg-indigo-600 hover:text-white hover:-translate-y-1 transition-all duration-300">
                        <span class="font-bold text-sm px-1">Instagram</span>
                    </a>
                    <a href="#" class="p-3 bg-white/5 border border-white/10 rounded-xl text-gray-300 hover:bg-indigo-600 hover:text-white hover:-translate-y-1 transition-all duration-300">
                        <span class="font-bold text-sm px-1">LinkedIn</span>
                    </a>
                    <a href="mailto:abimanyuairudin06@gmail.com" class="p-3 bg-white/5 border border-white/10 rounded-xl text-gray-300 hover:bg-indigo-600 hover:text-white hover:-translate-y-1 transition-all duration-300">
                        <span class="font-bold text-sm px-1">Email Me</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- STORY & SKILL SECTION -->
    <section class="py-20 px-[5%] md:px-[8%] max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-start">
        
        <!-- Cerita Filosofi -->
        <div class="space-y-6">
            <h2 class="text-3xl font-bold text-slate-800 relative pb-3 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-12 after:h-1 after:bg-indigo-600">
                Kisah & Filosofi
            </h2>
            <p class="text-gray-600 leading-relaxed pt-2">
                Bagi saya, desain bukan sekadar estetika gambar yang indah di layar. Desain adalah jembatan komunikasi antara sebuah brand dengan isi kepala para calon konsumennya.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Di Narend Studio, setiap logo, foto produk, maupun video sinematik yang lahir dirancang lewat riset mendalam. Kami memastikan setiap pixel yang keluar tidak cuma estetik, tapi juga bekerja menghasilkan konversi bagi bisnis Anda.
            </p>
            <div class="p-6 bg-indigo-50 border-l-4 border-indigo-600 rounded-r-xl">
                <p class="italic text-indigo-900 font-medium">
                    "Creativity is intelligence having fun. Kami di sini untuk bersenang-senang mengemas bisnis Anda menjadi yang terbaik."
                </p>
            </div>
        </div>

        <!-- Bagian Pilar Keahlian -->
        <div class="space-y-6">
            <h2 class="text-3xl font-bold text-slate-800 relative pb-3 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-12 after:h-1 after:bg-indigo-600">
                Pilar Keahlian
            </h2>
            <p class="text-gray-600 pt-2 mb-4">Kemampuan eksekusi teknis yang saya bawa langsung dalam mengarahkan setiap proyek di Narend Studio:</p>
            
            <div class="space-y-4">
                <!-- Skill 1 -->
                <div>
                    <div class="flex justify-between text-sm font-semibold text-slate-700 mb-1">
                        <span>Graphic Design & Branding</span>
                        <span>95%</span>
                    </div>
                    <div class="w-full bg-slate-200 h-2.5 rounded-full overflow-hidden">
                        <div class="bg-indigo-600 h-full rounded-full w-[95%]"></div>
                    </div>
                </div>

                <!-- Skill 2 -->
                <div>
                    <div class="flex justify-between text-sm font-semibold text-slate-700 mb-1">
                        <span>UI/UX & Web Design</span>
                        <span>88%</span>
                    </div>
                    <div class="w-full bg-slate-200 h-2.5 rounded-full overflow-hidden">
                        <div class="bg-indigo-600 h-full rounded-full w-[88%]"></div>
                    </div>
                </div>

                <!-- Skill 3 -->
                <div>
                    <div class="flex justify-between text-sm font-semibold text-slate-700 mb-1">
                        <span>Photography & Video Production</span>
                        <span>90%</span>
                    </div>
                    <div class="w-full bg-slate-200 h-2.5 rounded-full overflow-hidden">
                        <div class="bg-indigo-600 h-full rounded-full w-[90%]"></div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    @include('partials.footer')

</body>
</html>