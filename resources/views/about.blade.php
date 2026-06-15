<x-layout>
    <x-slot:title>About Us - Narend Studio</x-slot>
    <section id="about" class="w-full max-w-7xl mx-auto py-20 px-5 md:px-[10%] flex flex-col md:flex-row items-center gap-[50px]">

        <div class="flex-1 flex justify-center items-center w-full">
            <img 
                src="{{ asset('img/abi.png') }}" 
                alt="abi"
                class="w-full max-w-[250px] md:max-w-[70%] h-auto rounded-[15px] md:rounded-[20px] object-cover shadow-[10px_10px_0px_#e0e7ff] md:shadow-[20px_20px_0px_#e0e7ff]"
            >
        </div>

        <div class="flex-1 min-w-[300px] text-center md:text-left space-y-5">

            <span class="text-[#2563eb] font-bold uppercase tracking-[2px] block mb-2.5">
                Tentang Saya
            </span>

            <h2 class="text-3xl md:text-[2.5rem] font-bold text-[#1e293b] leading-tight">
                Saya {{ $nama }} Siap Mewujudkan Ide Digital Anda
            </h2>

            <p class="text-[#64748b] leading-[1.8]">
                Berawal dari sebuah mimpi kecil, Saya percaya bahwa karya adalah hal yang berharga.
            </p>

            <p class="text-[#64748b] leading-[1.8]">
                Tim kami terdiri dari desainer dan pengembang yang berdedikasi.
            </p>

            <div class="flex justify-center md:justify-start gap-[30px] pt-4">

                <div class="text-center">
                    <h3 class="text-2xl md:text-[1.8rem] font-bold text-[#2563eb]">150+</h3>
                    <p class="text-sm text-[#64748b] mt-0">Proyek</p>
                </div>

                <div class="text-center">
                    <h3 class="text-2xl md:text-[1.8rem] font-bold text-[#2563eb]">50+</h3>
                    <p class="text-sm text-[#64748b] mt-0">Klien</p>
                </div>

                <div class="text-center">
                    <h3 class="text-2xl md:text-[1.8rem] font-bold text-[#2563eb]">5th</h3>
                    <p class="text-sm text-[#64748b] mt-0">Experience</p>
                </div>

            </div>

        </div>

    </section>
</x-layout>

