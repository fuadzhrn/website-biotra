{{-- Variables: $icon, $category, $area, $unit_count, $preview_route --}}
<div style="display:flex; align-items:center; justify-content:space-between; gap:20px; margin-bottom:24px; flex-wrap:wrap;">

    {{-- Back + info --}}
    <div style="display:flex; align-items:center; gap:16px;">
        <a href="{{ route('admin.products.index') }}"
           style="display:flex; align-items:center; justify-content:center; width:38px; height:38px; background:var(--white); border:1.5px solid var(--border); border-radius:10px; color:var(--text-muted); text-decoration:none; transition:all 0.2s; flex-shrink:0;"
           onmouseover="this.style.borderColor='var(--navy)'; this.style.color='var(--navy)';"
           onmouseout="this.style.borderColor='var(--border)'; this.style.color='var(--text-muted)';">
            <i class="bi bi-arrow-left" style="font-size:16px;"></i>
        </a>
        <div>
            <div style="display:flex; align-items:center; gap:8px; font-size:12px; color:var(--text-muted); margin-bottom:2px;">
                <span>Detail Produk</span>
                <i class="bi bi-chevron-right" style="font-size:10px;"></i>
                <span style="color:var(--navy); font-weight:600;">{{ $category }}</span>
            </div>
            <div style="display:flex; align-items:center; gap:10px;">
                <span style="font-size:12px; font-weight:600; background:rgba(214,164,58,0.1); border:1px solid rgba(214,164,58,0.3); color:var(--gold); padding:3px 10px; border-radius:50px;">
                    <i class="bi bi-geo-alt-fill" style="font-size:11px;"></i>
                    {{ $area }}
                </span>
                <span style="font-size:12px; color:var(--text-muted); font-weight:500;">{{ $unit_count }} unit terdaftar</span>
            </div>
        </div>
    </div>

    {{-- Actions --}}
    <div style="display:flex; align-items:center; gap:10px;">
        <a href="{{ $preview_route }}" target="_blank" class="admin-button-outline sm">
            <i class="bi bi-eye"></i>
            Pratinjau Halaman
        </a>
        <button class="admin-button sm" disabled>
            <i class="bi bi-plus-lg"></i>
            Tambah Unit
        </button>
    </div>

</div>

{{-- Info notice --}}
<div style="display:flex; align-items:center; gap:12px; padding:12px 18px; background:rgba(214,164,58,0.07); border:1.5px solid rgba(214,164,58,0.25); border-radius:12px; margin-bottom:24px;">
    <i class="bi bi-info-circle-fill" style="color:var(--gold); font-size:16px; flex-shrink:0;"></i>
    <p style="font-size:13px; color:var(--text-muted); margin:0;">
        Tampilan ini menunjukkan data unit yang sedang digunakan. <strong style="color:var(--navy);">Fitur edit, tambah, dan hapus unit</strong> akan tersedia setelah data dipindahkan ke database.
    </p>
</div>
