<header class="admin-topbar">

    <div style="display:flex; align-items:center; gap:16px; min-width:0; flex:1;">
        {{-- Mobile sidebar toggle --}}
        <button class="admin-sidebar-toggle" aria-label="Buka sidebar">
            <i class="bi bi-list"></i>
        </button>

        <div class="admin-topbar-left">
            <div class="admin-topbar-title">@yield('page_title', 'Dashboard')</div>
            <div class="admin-topbar-subtitle">@yield('page_subtitle', 'Kelola konten website BIOTRA')</div>
        </div>
    </div>

    <div class="admin-topbar-right">

        <a href="{{ route('home') }}" target="_blank" class="admin-topbar-view-btn">
            <i class="bi bi-globe2"></i>
            <span>Lihat Website</span>
        </a>

        <div class="admin-topbar-divider"></div>

        <div class="admin-topbar-user">
            <div class="admin-topbar-user-info">
                <div class="admin-topbar-user-name">Admin BIOTRA</div>
                <div class="admin-topbar-user-role">Administrator</div>
            </div>
            <div class="admin-topbar-avatar">A</div>
        </div>

    </div>

</header>
