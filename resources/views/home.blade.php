<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Modern Saya</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-[#f8f9fa] bg-[url('../img/bg-home')] text-[#333] font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif]">
    
    @include('partials.navbar')

    <header class="h-[90vh] flex items-center justify-center text-center px-[10%]">
        <div class="max-w-4xl">
            <span class="text-[#2563eb] font-bold uppercase tracking-[2px] block mb-2">
                Halo, Selamat Datang di Narend Studio
            </span>
            <h1 class="text-4xl md:text-[3.5rem] font-bold mb-5 text-[#1e293b] leading-tight">
                Ubah Ide Menjadi <br> 
                <span class="text-[#2563eb]">Visual yang Memukau</span>
            </h1>
            <p class="text-lg md:text-[1.2rem] mb-[30px] text-[#64748b] max-w-[600px] mx-auto">
                Kami adalah desainer kreatif yang berfokus pada estetika dan fungsi.
                Mulai dari identitas merek hingga desain interior digital, kami membantu bisnis Anda
                berbicara melalui visual yang berkarakter.
            </p>
            <div class="flex items-center justify-center gap-[15px]">
                <a href="https://wa.me/6285709875002?text=Halo%20saya%20ingin%20konsultasi%20desain" 
                   class="inline-block px-[35px] py-[15px] bg-[#2563eb] text-white font-bold rounded-full transition-all duration-300 hover:bg-[#1d4ed8] hover:-translate-y-0.5 hover:shadow-[0_10px_20px_rgba(37,99,235,0.2)]">
                   Konsultasi Gratis
                </a>
                <a href="/about" 
                   class="text-[#2563eb] font-semibold transition-colors duration-300 hover:text-[#1d4ed8]">
                   Lihat Portfolio
                </a>
            </div>
        </div>
    </header>
    
    @include('partials.footer')


    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>