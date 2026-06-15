<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} – Narend Studio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f8f9fa] text-[#333] font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif]">

    <x-navbar/>

    <section class="bg-slate-900 text-white py-16 text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center opacity-10" style="background-image: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1000');"></div>
        <div class="relative z-10 max-w-3xl mx-auto px-4">
            <span class="text-[#2563eb] font-bold uppercase tracking-[2px] text-sm">Narend Studio</span>
            <h1 class="text-4xl font-extrabold mt-2 tracking-tight">Profil Founder</h1>
        </div>
    </section>

    <main class="py-16 px-[5%] md:px-[8%] max-w-5xl mx-auto">
        <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 flex flex-col md:flex-row">
            
            <div class="w-full md:w-2/5 bg-slate-50 p-10 flex flex-col items-center justify-center border-r border-gray-100">
                <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-white shadow-lg mb-6">
                    <img src="{{ asset($profile->avatar) }}" alt="{{ $profile->name }}" class="w-full h-full object-cover" />
                </div>
                <h2 class="text-2xl font-bold text-[#1e293b]">{{ $profile->name }}</h2>
                <p class="text-sm font-semibold text-[#2563eb] uppercase tracking-wider mt-1">Founder & Developer</p>
            </div>

            <div class="w-full md:w-3/5 p-10 md:p-12 space-y-8">
                
                <div>
                    <h3 class="text-lg font-bold text-[#1e293b] mb-3 border-b border-gray-100 pb-2">Tentang Saya</h3>
                    <p class="text-gray-600 leading-relaxed">
                        {{ $profile->bio }}
                    </p>
                </div>

                <div>
                    <h3 class="text-lg font-bold text-[#1e293b] mb-4 border-b border-gray-100 pb-2">Informasi Kontak</h3>
                    <ul class="space-y-4">
                        
                        <li class="flex items-start gap-3">
                            <span class="text-[#2563eb] font-bold mt-0.5">✉</span>
                            <div>
                                <p class="text-xs font-semibold text-gray-400 uppercase">Email</p>
                                <p class="text-gray-800 font-medium">{{ $profile->email }}</p>
                            </div>
                        </li>

                        <li class="flex items-start gap-3">
                            <span class="text-[#2563eb] font-bold mt-0.5">✆</span>
                            <div>
                                <p class="text-xs font-semibold text-gray-400 uppercase">Telepon</p>
                                <p class="text-gray-800 font-medium">{{ $profile->phone ?? 'Belum ditambahkan' }}</p>
                            </div>
                        </li>

                        <li class="flex items-start gap-3">
                            <span class="text-[#2563eb] font-bold mt-0.5">⚑</span>
                            <div>
                                <p class="text-xs font-semibold text-gray-400 uppercase">Alamat</p>
                                <p class="text-gray-800 font-medium">{{ $profile->address ?? 'Belum ditambahkan' }}</p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </main>

    <x-footer/>

</body>
</html>