<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin BIOTRA')</title>

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    {{-- Admin Login CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/admin-login.css') }}">
</head>
<body>

    @yield('content')

    {{-- Admin Login JS --}}
    <script src="{{ asset('assets/js/admin-login.js') }}"></script>

</body>
</html>
