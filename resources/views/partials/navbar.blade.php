<header class="site-header">
    <div class="container navbar-wrapper">
        <a href="{{ route('home') }}" class="brand">
            <img src="{{ asset('assets/img/logo-biotra.png') }}" alt="BIOTRA" class="brand-logo">
            <span class="brand-text">BIOTRA</span>
        </a>


        <button class="navbar-toggle" id="navbarToggle" type="button" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="navbar-menu" id="navbarMenu">
            <a href="{{ route('home') }}" 
               class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                Beranda
            </a>

            <a href="{{ route('about') }}" 
               class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                Tentang Kami
            </a>

            <a href="{{ route('products-services') }}" 
               class="nav-link {{ request()->routeIs('products-services') ? 'active' : '' }}">
                Produk & Layanan
            </a>

            <a href="{{ route('partnership') }}" 
               class="nav-link {{ request()->routeIs('partnership') ? 'active' : '' }}">
                Kemitraan
            </a>

            <a href="{{ route('contact') }}" 
               class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                Kontak
            </a>
        </nav>
    </div>
</header>