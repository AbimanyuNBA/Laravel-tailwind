<header class="h-[90vh] flex items-center justify-center text-center px-[10%]">
    <div class="max-w-4xl">
        <span class="text-[#2563eb] font-bold uppercase tracking-[2px] block mb-2">
            Halo, Selamat Datang di Narend Studio
        </span>

        {{ $slot }}

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