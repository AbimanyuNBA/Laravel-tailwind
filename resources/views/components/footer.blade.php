<footer class="bg-[#1e293b] text-[#f8f9fa] pt-[60px] pb-5 px-[8%] mt-[50px]">
    
    <div class="flex flex-col md:flex-row justify-between gap-10 flex-wrap text-center md:text-left">
        
        <div class="flex-1 min-w-[250px]">
            <a href="#" class="text-2xl font-bold text-white block mb-5 no-underline">Narend.</a>
            <p class="text-[#cbd5e1] leading-relaxed">
                Membantu bisnis mewujudkan visi melalui desain yang inovatif dan berkarakter sejak tahun 2020.
            </p>
        </div>

        <div class="flex-1 min-w-[250px]">
            <h4 class="mb-5 text-[1.1rem] font-medium relative pb-2.5 
                       after:content-[''] after:absolute after:bottom-0 after:w-[30px] after:h-[2px] after:bg-[#2563eb]
                       after:left-1/2 after:-translate-x-1/2 md:after:left-0 md:after:translate-x-0">
                Navigasi
            </h4>
            <ul class="list-none p-0 m-0 space-y-3">
                <li>
                    <a href="{{ url('/') }}" class="text-[#cbd5e1] no-underline transition-all duration-300 block hover:text-white hover:pl-1.5">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ url('/about') }}" class="text-[#cbd5e1] no-underline transition-all duration-300 block hover:text-white hover:pl-1.5">
                        About
                    </a>
                </li>
                <li>
                    <a href="{{ url('/projects') }}" class="text-[#cbd5e1] no-underline transition-all duration-300 block hover:text-white hover:pl-1.5">
                        Projects
                    </a>
                </li>
                <li>
                    <a href="{{ url('/services') }}" class="text-[#cbd5e1] no-underline transition-all duration-300 block hover:text-white hover:pl-1.5">
                        Services
                    </a>
                </li>
            </ul>
        </div>

        <div class="flex-1 min-w-[250px]">
            <h4 class="mb-5 text-[1.1rem] font-medium relative pb-2.5 
                       after:content-[''] after:absolute after:bottom-0 after:w-[30px] after:h-[2px] after:bg-[#2563eb]
                       after:left-1/2 after:-translate-x-1/2 md:after:left-0 md:after:translate-x-0">
                Hubungi Kami
            </h4>
            <ul class="list-none p-0 m-0 space-y-3 text-[#cbd5e1]">
                <li class="break-all">Email: abimanyuairudin06@gmail.com</li>
                <li>WA: +62 857-0987-5002</li>
                <li>Lokasi: Sungailiat, Bangka Belitung, Indonesia</li>
            </ul>
        </div>

    </div>

    <div class="mt-[50px] pt-5 border-t border-[#334155] text-center text-sm text-[#94a3b8]">
        <p>&copy; {{ date('Y') }} Narend Studio. All rights reserved.</p>
    </div>

</footer>