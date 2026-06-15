<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }} – Narend Studio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f8f9fa] text-[#333] font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif]">

    <x-navbar/>

    <!-- MAIN DETAIL POST CONTAINER -->
    <main class="py-12 px-[5%] md:py-20 md:px-[8%] max-w-4xl mx-auto">
        
        <!-- Tombol Kembali -->
        <div class="mb-8">
            <a href="/blog" class="inline-flex items-center gap-2 text-sm font-semibold text-[#2563eb] hover:text-[#1d4ed8] transition-colors group">
                <span class="group-hover:-translate-x-1 transition-transform">&larr;</span> Kembali ke Blog
            </a>
        </div>

        <!-- Meta Data & Judul Artikel -->
        <header class="space-y-4 mb-8 text-center md:text-left">
            <div class="flex items-center justify-center md:justify-start gap-4 text-xs font-semibold text-[#64748b]">
                <time datetime="{{ $post->created_at }}">{{ $post->created_at->translatedFormat('d F Y') }}</time>
                <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                <span>Oleh {{ $post->author }}</span>
            </div>
            <h1 class="text-3xl md:text-5xl font-extrabold text-[#1e293b] tracking-tight leading-tight">
                {{ $post->title }}
            </h1>
        </header>

        <!-- Gambar Utama Artikel -->
        <div class="w-full aspect-[16/9] rounded-3xl overflow-hidden shadow-md mb-12">
            <img src="https://images.unsplash.com/photo-1542435503-956c469947f6?q=80&w=1200" alt="{{ $post->title }}" class="w-full h-full object-cover" />
        </div>

        <!-- Isi Konten Artikel (Body) -->
        <!-- Menggunakan class 'prose' tiruan kustom biar struktur paragraf & spasi tulisan rapi -->
        <article class="prose max-w-none text-gray-700 leading-relaxed text-base md:text-lg space-y-6 border-b border-gray-200 pb-12">
            {!! nl2br(e($post->body)) !!}
        </article>

        <!-- Informasi Penulis (Author Box) -->
        <div class="mt-12 p-6 md:p-8 bg-white rounded-2xl border border-gray-100 shadow-sm flex flex-col sm:flex-row items-center gap-6">
            <img src="{{ asset('img/abi.png') }}" alt="{{ $post->author }}" class="w-16 h-16 rounded-full object-cover border border-gray-200" />
            <div class="text-center sm:text-left space-y-1">
                <p class="text-xs font-bold text-indigo-600 uppercase tracking-wider">Penulis Artikel</p>
                <h3 class="text-lg font-bold text-slate-800">{{ $post->author }}</h3>
                <p class="text-sm text-gray-500">Berbagi wawasan, tren terkini, dan strategi desain visual terarah di Narend Studio untuk membantu perkembangan bisnis Anda.</p>
            </div>
        </div>

    </main>


    <x-footer/>
</body>
</html>