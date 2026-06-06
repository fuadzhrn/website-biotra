<aside class="admin-sidebar">

    {{-- Brand --}}
    <div class="admin-brand">
        <div class="admin-brand-logo">
            <div class="admin-brand-logo-dot">
                <i class="bi bi-grid-1x2-fill"></i>
            </div>
            <div class="admin-brand-name">BIO<span>TRA</span></div>
        </div>
        <div class="admin-brand-subtitle">Content Management</div>
    </div>

    {{-- Navigation --}}
    <nav class="admin-nav">

        {{-- Dashboard --}}
        <div class="admin-menu-group">
            <a href="{{ route('admin.dashboard') }}"
               class="admin-menu-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2"></i>
                Dashboard
            </a>
        </div>

        {{-- Kelola Konten --}}
        <div class="admin-menu-group">
            <div class="admin-menu-section">Kelola Konten</div>
            <a href="{{ route('admin.contents.home') }}"
               class="admin-menu-link sub {{ request()->routeIs('admin.contents.home') ? 'active' : '' }}">
                <i class="bi bi-house-door"></i>
                Beranda
            </a>
            <a href="{{ route('admin.contents.about') }}"
               class="admin-menu-link sub {{ request()->routeIs('admin.contents.about') ? 'active' : '' }}">
                <i class="bi bi-info-circle"></i>
                Tentang Kami
            </a>
            <a href="{{ route('admin.contents.products-services') }}"
               class="admin-menu-link sub {{ request()->routeIs('admin.contents.products-services') ? 'active' : '' }}">
                <i class="bi bi-briefcase"></i>
                Produk &amp; Layanan
            </a>
            <a href="{{ route('admin.contents.partnership') }}"
               class="admin-menu-link sub {{ request()->routeIs('admin.contents.partnership') ? 'active' : '' }}">
                <i class="bi bi-diagram-3"></i>
                Kemitraan
            </a>
            <a href="{{ route('admin.contents.contact') }}"
               class="admin-menu-link sub {{ request()->routeIs('admin.contents.contact') ? 'active' : '' }}">
                <i class="bi bi-telephone"></i>
                Kontak
            </a>
        </div>

        {{-- Kelola Produk --}}
        <div class="admin-menu-group">
            <div class="admin-menu-section">Kelola Produk</div>
            <a href="{{ route('admin.products.index') }}"
               class="admin-menu-link sub {{ request()->routeIs('admin.products.index') ? 'active' : '' }}">
                <i class="bi bi-grid-3x3-gap"></i>
                Semua Kategori
            </a>
            <a href="{{ route('admin.products.villa') }}"
               class="admin-menu-link sub {{ request()->routeIs('admin.products.villa') ? 'active' : '' }}">
                <i class="bi bi-house-heart"></i>
                Villa & Staycation
            </a>
            <a href="{{ route('admin.products.hotel') }}"
               class="admin-menu-link sub {{ request()->routeIs('admin.products.hotel') ? 'active' : '' }}">
                <i class="bi bi-building"></i>
                Hotel & Penginapan
            </a>
            <a href="{{ route('admin.products.apartemen') }}"
               class="admin-menu-link sub {{ request()->routeIs('admin.products.apartemen') ? 'active' : '' }}">
                <i class="bi bi-buildings"></i>
                Apartemen
            </a>
            <a href="{{ route('admin.products.rental') }}"
               class="admin-menu-link sub {{ request()->routeIs('admin.products.rental') ? 'active' : '' }}">
                <i class="bi bi-car-front"></i>
                Rental Kendaraan
            </a>
        </div>

        {{-- Data Website --}}
        <div class="admin-menu-group">
            <div class="admin-menu-section">Data Website</div>
            <a href="{{ route('admin.faqs.index') }}"
               class="admin-menu-link sub {{ request()->routeIs('admin.faqs.index') ? 'active' : '' }}">
                <i class="bi bi-question-circle"></i>
                FAQ
            </a>
            <a href="{{ route('admin.media.index') }}"
               class="admin-menu-link sub {{ request()->routeIs('admin.media.index') ? 'active' : '' }}">
                <i class="bi bi-images"></i>
                Media
            </a>
            <a href="{{ route('admin.messages.index') }}"
               class="admin-menu-link sub {{ request()->routeIs('admin.messages.index') ? 'active' : '' }}">
                <i class="bi bi-chat-left-dots"></i>
                Pesan Konsultasi
            </a>
        </div>

    </nav>

    {{-- Footer --}}
    <div class="admin-sidebar-footer">
        <div class="admin-menu-section" style="padding: 0 0 10px;">Pengaturan</div>
        <a href="{{ route('home') }}" target="_blank" class="admin-menu-link">
            <i class="bi bi-box-arrow-up-right"></i>
            Lihat Website
        </a>
        <form action="{{ route('admin.logout') }}" method="POST" style="margin:0;">
            @csrf
            <button type="submit" class="admin-menu-link" style="border-left:3px solid transparent;">
                <i class="bi bi-box-arrow-left"></i>
                Logout
            </button>
        </form>
    </div>

</aside>
