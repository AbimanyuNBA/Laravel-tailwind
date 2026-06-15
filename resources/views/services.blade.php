<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Kami – Narend Studio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f8f9fa] text-[#333] font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif]">

    <x-navbar/>

    <section class="py-[60px] px-[5%] md:py-24 md:px-[8%] bg-white">
        
        <div class="text-center max-w-[700px] mx-auto mb-[60px]">
            <span class="text-[#2563eb] font-bold uppercase tracking-[2px] text-sm block mb-2">
                Solusi Kreatif
            </span>
            <h2 class="text-3xl md:text-[2.5rem] font-bold text-[#1e293b] my-2.5 md:mb-5 leading-tight">
                Layanan Profesional Kami
            </h2>
            <p class="text-[#64748b] leading-relaxed">
                Kami menyediakan berbagai solusi desain untuk membantu identitas visual bisnis Anda menjadi lebih menonjol.
            </p>
        </div>

        <div class="grid grid-cols-[repeat(auto-fit,minmax(250px,1fr))] gap-[30px]">
            
            <div class="p-10 bg-[#f8f9fa] rounded-[20px] border border-[#e2e8f0] transition-all duration-300 ease-in-out hover:bg-white hover:-translate-y-2.5 hover:shadow-[0_20px_40px_rgba(0,0,0,0.05)] hover:border-[#2563eb] group">
                <div class="service-icon text-4xl mb-5"></div>
                <h3 class="text-xl font-bold mb-3.5 text-[#1e293b]">Branding & Logo</h3>
                <p class="text-[#64748b] inherit leading-1.6">Menciptakan identitas merek yang unik dan mudah diingat oleh pelanggan Anda.</p>
            </div>

            <div class="p-10 bg-[#f8f9fa] rounded-[20px] border border-[#e2e8f0] transition-all duration-300 ease-in-out hover:bg-white hover:-translate-y-2.5 hover:shadow-[0_20px_40px_rgba(0,0,0,0.05)] hover:border-[#2563eb] group">
                <div class="service-icon text-4xl mb-5"></div>
                <h3 class="text-xl font-bold mb-3.5 text-[#1e293b]">Web Design</h3>
                <p class="text-[#64748b] inherit leading-1.6">Desain website modern yang responsif dan berfokus pada pengalaman pengguna (UX).</p>
            </div>

            <div class="p-10 bg-[#f8f9fa] rounded-[20px] border border-[#e2e8f0] transition-all duration-300 ease-in-out hover:bg-white hover:-translate-y-2.5 hover:shadow-[0_20px_40px_rgba(0,0,0,0.05)] hover:border-[#2563eb] group">
                <div class="service-icon text-4xl mb-5"></div>
                <h3 class="text-xl font-bold mb-3.5 text-[#1e293b]">Social Media Design</h3>
                <p class="text-[#64748b] inherit leading-1.6">Konten visual kreatif untuk meningkatkan engagement di platform media sosial Anda.</p>
            </div>

            <div class="p-10 bg-[#f8f9fa] rounded-[20px] border border-[#e2e8f0] transition-all duration-300 ease-in-out hover:bg-white hover:-translate-y-2.5 hover:shadow-[0_20px_40px_rgba(0,0,0,0.05)] hover:border-[#2563eb] group">
                <div class="service-icon text-4xl mb-5"></div>
                <h3 class="text-xl font-bold mb-3.5 text-[#1e293b]">Photography</h3>
                <p class="text-[#64748b] inherit leading-1.6">Layanan fotografi produk profesional untuk keperluan katalog dan promosi.</p>
            </div>

        </div>
    </section>

    <x-footer/>


    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>