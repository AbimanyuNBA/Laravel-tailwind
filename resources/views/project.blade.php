<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projek Kami – Narend Studio</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="bg-[#f8f9fa] text-[#333] font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif]">

    <x-navbar/>
    <section class="bg-gray-900 text-white py-16 text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=1000');"></div>
        <div class="relative z-10 max-w-3xl mx-auto px-4">
            <span class="text-[#2563eb] font-bold uppercase tracking-[2px] text-sm">Showcase</span>
            <h1 class="text-4xl font-bold mt-2 mb-4">Karya Kreatif Kami</h1>
            <p class="text-gray-400">Jelajahi kumpulan projek terbaik yang telah kami selesaikan dengan dedikasi dan estetika tinggi.</p>
        </div>
    </section>

    <section class="py-12 px-[5%] md:px-[8%] max-w-7xl mx-auto">
        
        <div class="flex flex-wrap justify-center gap-3 mb-12">
            <button class="px-6 py-2 rounded-full text-sm font-semibold bg-[#2563eb] text-white shadow-md transition-all">
                Semua
            </button>
            <button class="px-6 py-2 rounded-full text-sm font-semibold bg-white text-gray-600 hover:bg-gray-100 border border-gray-200 transition-all">
                Graphic Design
            </button>
            <button class="px-6 py-2 rounded-full text-sm font-semibold bg-white text-gray-600 hover:bg-gray-100 border border-gray-200 transition-all">
                Photography
            </button>
            <button class="px-6 py-2 rounded-full text-sm font-semibold bg-white text-gray-600 hover:bg-gray-100 border border-gray-200 transition-all">
                Videography
            </button>
            <button class="px-6 py-2 rounded-full text-sm font-semibold bg-white text-gray-600 hover:bg-gray-100 border border-gray-200 transition-all">
                Web UI/UX
            </button>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                <div class="relative overflow-hidden aspect-[4/3]">
                    <img src="https://images.unsplash.com/photo-1626785774573-4b799315345d?q=80&w=600" alt="Branding Identity" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                    <span class="absolute top-4 left-4 bg-[#2563eb] text-white text-xs font-bold px-3 py-1 rounded-full shadow">Design</span>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-[#1e293b] mb-2 group-hover:text-[#2563eb] transition-colors">Rebranding Coffee Shop</h3>
                    <p class="text-sm text-[#64748b]">Logo, packaging, dan panduan identitas visual untuk brand kopi lokal.</p>
                </div>
            </div>

            <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                <div class="relative overflow-hidden aspect-[4/3]">
                    <img src="https://images.unsplash.com/photo-1542038784456-1ea8e935640e?q=80&w=600" alt="Product Photography" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                    <span class="absolute top-4 left-4 bg-emerald-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow">Photo</span>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-[#1e293b] mb-2 group-hover:text-[#2563eb] transition-colors">Commercial Product Shoot</h3>
                    <p class="text-sm text-[#64748b]">Fotografi katalog produk skincare berkonsep minimalis dan elegan.</p>
                </div>
            </div>

            <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                <div class="relative overflow-hidden aspect-[4/3]">
                    <img src="https://images.unsplash.com/photo-1536240478700-b869070f9279?q=80&w=600" alt="Video Project" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                    <span class="absolute top-4 left-4 bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow">Video</span>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-[#1e293b] mb-2 group-hover:text-[#2563eb] transition-colors">Company Profile Video</h3>
                    <p class="text-sm text-[#64748b]">Produksi video profil sinematik berdurasi 3 menit untuk korporasi teknologi.</p>
                </div>
            </div>

            <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                <div class="relative overflow-hidden aspect-[4/3]">
                    <img src="https://images.unsplash.com/photo-1541462608141-ad4979e408c9?q=80&w=600" alt="Web Design" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                    <span class="absolute top-4 left-4 bg-amber-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow">UI/UX</span>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-[#1e293b] mb-2 group-hover:text-[#2563eb] transition-colors">E-Commerce Mobile App</h3>
                    <p class="text-sm text-[#64748b]">Desain antarmuka aplikasi belanja pakaian online yang modern dan intuitif.</p>
                </div>
            </div>

        </div>
    </section>

    <x-footer/>


</body>
</html>