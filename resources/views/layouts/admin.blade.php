<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin BIOTRA')</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
<body>

<div class="admin-wrapper">

    @include('admin.partials.sidebar')

    <div class="admin-sidebar-overlay"></div>

    <div class="admin-main">
        @include('admin.partials.topbar')
        <main class="admin-content">
            @yield('content')
        </main>
    </div>

</div>

<script src="{{ asset('assets/js/admin.js') }}"></script>

</body>
</html>
