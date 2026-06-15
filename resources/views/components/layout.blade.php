<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}Website Modern Saya</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-[#f8f9fa] bg-[url('../img/bg-home')] text-[#333] font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif]">
    <x-navbar/>

    <main>
        {{$slot}}
    </main>
    
    <x-footer/>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>