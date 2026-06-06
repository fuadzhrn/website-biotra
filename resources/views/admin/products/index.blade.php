@extends('layouts.admin')

@section('title', 'Kelola Detail Produk — Admin BIOTRA')
@section('page_title', 'Detail Produk')
@section('page_subtitle', 'Kelola unit dan gallery setiap kategori produk BIOTRA')

@section('content')

    {{-- Info notice --}}
    <div style="display:flex; align-items:center; gap:12px; padding:14px 20px; background:rgba(214,164,58,0.08); border:1.5px solid rgba(214,164,58,0.28); border-radius:14px; margin-bottom:28px;">
        <i class="bi bi-info-circle-fill" style="color:var(--gold); font-size:18px; flex-shrink:0;"></i>
        <p style="font-size:13.5px; color:var(--text-dark); margin:0; line-height:1.6;">
            Halaman ini menampilkan tampilan awal untuk mengelola detail produk. <strong>Fitur edit dan simpan</strong> akan aktif setelah data unit dipindahkan ke database.
        </p>
    </div>

    {{-- Category grid --}}
    <div class="admin-card">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>Kategori Produk</h2>
                <p>Pilih kategori untuk mengelola unit dan gallery-nya</p>
            </div>
        </div>

        <div style="display:grid; grid-template-columns:repeat(2,1fr); gap:16px;">

            <a href="{{ route('admin.products.villa') }}" style="text-decoration:none;">
                <div style="display:flex; align-items:center; gap:18px; padding:22px 24px; background:var(--light); border:1.5px solid var(--border); border-radius:16px; transition:all 0.2s; cursor:pointer;" onmouseover="this.style.borderColor='var(--gold)'; this.style.boxShadow='0 4px 16px rgba(214,164,58,0.12)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='none';">
                    <div style="width:52px; height:52px; background:linear-gradient(135deg,var(--navy),var(--navy-soft)); border-radius:14px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        <i class="bi bi-house-heart" style="font-size:22px; color:var(--gold);"></i>
                    </div>
                    <div style="flex:1; min-width:0;">
                        <div style="font-family:'Poppins',sans-serif; font-size:15px; font-weight:700; color:var(--navy); margin-bottom:3px;">Villa & Staycation</div>
                        <div style="font-size:12px; color:var(--text-muted);">Bali &nbsp;·&nbsp; 2 Unit</div>
                    </div>
                    <i class="bi bi-chevron-right" style="font-size:14px; color:var(--text-muted);"></i>
                </div>
            </a>

            <a href="{{ route('admin.products.hotel') }}" style="text-decoration:none;">
                <div style="display:flex; align-items:center; gap:18px; padding:22px 24px; background:var(--light); border:1.5px solid var(--border); border-radius:16px; transition:all 0.2s; cursor:pointer;" onmouseover="this.style.borderColor='var(--gold)'; this.style.boxShadow='0 4px 16px rgba(214,164,58,0.12)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='none';">
                    <div style="width:52px; height:52px; background:linear-gradient(135deg,var(--navy),var(--navy-soft)); border-radius:14px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        <i class="bi bi-building" style="font-size:22px; color:var(--gold);"></i>
                    </div>
                    <div style="flex:1; min-width:0;">
                        <div style="font-family:'Poppins',sans-serif; font-size:15px; font-weight:700; color:var(--navy); margin-bottom:3px;">Hotel & Penginapan</div>
                        <div style="font-size:12px; color:var(--text-muted);">Jakarta / PIK 2 &nbsp;·&nbsp; 2 Unit</div>
                    </div>
                    <i class="bi bi-chevron-right" style="font-size:14px; color:var(--text-muted);"></i>
                </div>
            </a>

            <a href="{{ route('admin.products.apartemen') }}" style="text-decoration:none;">
                <div style="display:flex; align-items:center; gap:18px; padding:22px 24px; background:var(--light); border:1.5px solid var(--border); border-radius:16px; transition:all 0.2s; cursor:pointer;" onmouseover="this.style.borderColor='var(--gold)'; this.style.boxShadow='0 4px 16px rgba(214,164,58,0.12)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='none';">
                    <div style="width:52px; height:52px; background:linear-gradient(135deg,var(--navy),var(--navy-soft)); border-radius:14px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        <i class="bi bi-buildings" style="font-size:22px; color:var(--gold);"></i>
                    </div>
                    <div style="flex:1; min-width:0;">
                        <div style="font-family:'Poppins',sans-serif; font-size:15px; font-weight:700; color:var(--navy); margin-bottom:3px;">Apartemen Harian & Mingguan</div>
                        <div style="font-size:12px; color:var(--text-muted);">Bekasi & Cikarang &nbsp;·&nbsp; 2 Unit</div>
                    </div>
                    <i class="bi bi-chevron-right" style="font-size:14px; color:var(--text-muted);"></i>
                </div>
            </a>

            <a href="{{ route('admin.products.rental') }}" style="text-decoration:none;">
                <div style="display:flex; align-items:center; gap:18px; padding:22px 24px; background:var(--light); border:1.5px solid var(--border); border-radius:16px; transition:all 0.2s; cursor:pointer;" onmouseover="this.style.borderColor='var(--gold)'; this.style.boxShadow='0 4px 16px rgba(214,164,58,0.12)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='none';">
                    <div style="width:52px; height:52px; background:linear-gradient(135deg,var(--navy),var(--navy-soft)); border-radius:14px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        <i class="bi bi-car-front" style="font-size:22px; color:var(--gold);"></i>
                    </div>
                    <div style="flex:1; min-width:0;">
                        <div style="font-family:'Poppins',sans-serif; font-size:15px; font-weight:700; color:var(--navy); margin-bottom:3px;">Rental Kendaraan</div>
                        <div style="font-size:12px; color:var(--text-muted);">Mobility &nbsp;·&nbsp; 2 Unit</div>
                    </div>
                    <i class="bi bi-chevron-right" style="font-size:14px; color:var(--text-muted);"></i>
                </div>
            </a>

        </div>
    </div>

@endsection
