<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- SEO Basic --}}
    <title>@yield('title', 'BIOTRA - Program Kemitraan Properti & Mobilitas')</title>
    <meta name="description" content="@yield('meta_description', 'BIOTRA adalah program kemitraan modern di sektor properti, pariwisata, penginapan, apartemen, rental kendaraan, dan mobilitas.')">
    <meta name="keywords" content="@yield('meta_keywords', 'BIOTRA, kemitraan properti, kemitraan bisnis, rental kendaraan, villa, apartemen, penginapan, pariwisata, mobilitas')">
    <meta name="author" content="BIOTRA">

    {{-- Open Graph untuk share WhatsApp / sosial media --}}
    <meta property="og:title" content="@yield('og_title', 'BIOTRA - Program Kemitraan Properti & Mobilitas')">
    <meta property="og:description" content="@yield('og_description', 'Program kemitraan modern di sektor properti, pariwisata, dan mobilitas.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('assets/img/logo-biotra.png'))">

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    {{-- Main CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">

    {{-- CSS tambahan per halaman --}}
    @stack('styles')
</head>
<body>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="{{ asset('assets/js/home.js') }}"></script>

    @stack('scripts')
</body>
</html>