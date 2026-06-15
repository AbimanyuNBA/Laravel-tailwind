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
    <main class="py-12 px-[5%] md:py-20 md:px-[8%] max-w-4xl mx-auto">
        
        <div class="mb-8">
            <a href="/blog" class="inline-flex items-center gap-2 text-sm font-semibold text-[#2563eb] hover:text-[#1d4ed8] transition-colors group">
                <span class="group-hover:-translate-x-1 transition-transform">&larr;</span> Kembali ke Blog
            </a>
        </div>

        <header class="space-y-4 mb-8 text-center md:text-left">
            <div class="flex flex-wrap items-center justify-center md:justify-start gap-3 text-xs font-semibold text-[#64748b]">
                <span class="text-[#2563eb] uppercase tracking-wider font-bold">{{ $post->category }}</span>
                <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                <time datetime="{{ $post->published_at }}">{{ \Carbon\Carbon::parse($post->published_at)->translatedFormat('d F Y') }}</time>
                <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                <span>Oleh {{ $post->author }}</span>
            </div>            
            <h1 class="text-3xl md:text-5xl font-extrabold text-[#1e293b] tracking-tight leading-tight">
                {{ $post->title }}
            </h1>
        </header>

        <div class="w-full aspect-[16/9] rounded-3xl overflow-hidden shadow-md mb-12">
            <img src="https://images.unsplash.com/photo-1542435503-956c469947f6?q=80&w=1200" alt="{{ $post->title }}" class="w-full h-full object-cover" />
        </div>

        <article class="prose max-w-none text-gray-700 leading-relaxed text-base md:text-lg space-y-6 border-b border-gray-200 pb-12">
            {!! nl2br(e($post->body)) !!}
        </article>

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