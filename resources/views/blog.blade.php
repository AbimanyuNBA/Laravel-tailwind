<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog & Wawasan – Narend Studio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f8f9fa] text-[#333] font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif]">

    <x-navbar/>

    <section class="bg-slate-900 text-white py-16 text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center opacity-10" style="background-image: url('https://images.unsplash.com/photo-1499750310107-5fef28a66643?q=80&w=1000');"></div>
        <div class="relative z-10 max-w-3xl mx-auto px-4">
            <span class="text-[#2563eb] font-bold uppercase tracking-[2px] text-sm">Narend Insights</span>
            <h1 class="text-4xl font-extrabold mt-2 mb-4 tracking-tight">Blog & Artikel Kreatif</h1>
            <p class="text-gray-400 max-w-xl mx-auto">Temukan tips, tren desain visual terbaru, dan cerita di balik layar industri kreatif untuk melejitkan bisnis Anda.</p>
        </div>
    </section>

    <main class="py-16 px-[5%] md:px-[8%] max-w-7xl mx-auto space-y-16">

        @if($posts->count() > 0)
            @php $featured = $posts->first(); @endphp
            <section class="group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col lg:flex-row items-center">
                <div class="w-full lg:w-1/2 aspect-[16/10] overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1542435503-956c469947f6?q=80&w=800" alt="Featured Post" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    <span class="absolute top-6 left-6 bg-[#2563eb] text-white text-xs font-bold px-4 py-1.5 rounded-full shadow">Terbaru</span>
                </div>
                <div class="w-full lg:w-1/2 p-8 md:p-12 space-y-4">
                    <div class="flex items-center gap-3 text-xs font-semibold text-[#64748b]">
                        <span class="text-[#2563eb] bg-blue-50 px-2.5 py-1 rounded-md">{{ $featured->category }}</span>
                        <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                        <span>{{ \Carbon\Carbon::parse($featured->published_at)->translatedFormat('d F Y') }}</span>
                    </div>                    
                    <h2 class="text-2xl md:text-3xl font-bold text-[#1e293b] group-hover:text-[#2563eb] transition-colors leading-tight">
                        <a href="/blog/{{ $featured->slug }}">{{ $featured->title }}</a>
                    </h2>
                    <p class="text-gray-600 leading-relaxed line-clamp-4">
                        {{ strip_tags($featured->body) }}
                    </p>
                    <div class="pt-4 flex items-center gap-3">
                        <img src="{{ asset('img/abi.png') }}" alt="Founder" class="w-10 h-10 rounded-full object-cover border border-gray-200" />
                        <div>
                            <p class="text-sm font-bold text-slate-800">{{ $featured->author }}</p>
                            <p class="text-xs text-gray-500">Penulis</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="space-y-8">
                <h3 class="text-2xl font-bold text-[#1e293b] border-b border-gray-200 pb-4">Artikel Lainnya</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($posts->skip(1) as $post)
                        <article class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col">
                            <div class="relative overflow-hidden aspect-[16/10]">
                                <img src="https://images.unsplash.com/photo-1626785774573-4b799315345d?q=80&w=600" alt="Blog Image" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                            </div>
                            <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                                <div class="space-y-2">
<div class="text-xs font-medium text-[#64748b] flex items-center gap-2 flex-wrap">
    <span class="text-[#2563eb] font-semibold">{{ $post->category }}</span>
    <span>&bull;</span>
    <span>{{ \Carbon\Carbon::parse($post->published_at)->translatedFormat('d F Y') }}</span>
    <span>&bull;</span>
    <span>oleh {{ $post->author }}</span>
</div>
<h4 class="text-lg font-bold text-[#1e293b] group-hover:text-[#2563eb] transition-colors line-clamp-2">
    <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
</h4>                                    <p class="text-sm text-[#64748b] line-clamp-3">
                                        {{ strip_tags($post->body) }}
                                    </p>
                                </div>
                                <a href="/blog/{{ $post->slug }}" class="text-xs font-bold text-[#2563eb] inline-flex items-center gap-1 group-hover:gap-2 transition-all">
                                    Baca Selengkapnya <span>&rarr;</span>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>
        @else
            <div class="text-center py-20 bg-white rounded-2xl border border-gray-100 shadow-sm">
                <p class="text-gray-500">Belum ada artikel yang diterbitkan.</p>
            </div>
        @endif

    </main>

    <x-footer/>

</body>
</html>