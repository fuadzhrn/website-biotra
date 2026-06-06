{{-- Variable: $units --}}
<div style="display:flex; flex-direction:column; gap:24px;">

    @foreach($units as $index => $unit)
    <div class="admin-card" style="padding:0; overflow:hidden;">

        {{-- Card header --}}
        <div style="display:flex; align-items:center; justify-content:space-between; padding:20px 28px; border-bottom:1px solid var(--border); gap:16px; flex-wrap:wrap;">
            <div style="display:flex; align-items:center; gap:14px;">
                <div style="width:42px; height:42px; background:linear-gradient(135deg,var(--navy),var(--navy-soft)); border-radius:12px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                    <span style="font-family:'Poppins',sans-serif; font-size:15px; font-weight:700; color:var(--gold);">{{ $index + 1 }}</span>
                </div>
                <div>
                    <div style="font-family:'Poppins',sans-serif; font-size:16px; font-weight:700; color:var(--navy);">{{ $unit['name'] }}</div>
                    <div style="display:flex; align-items:center; gap:5px; font-size:12.5px; color:var(--text-muted); margin-top:2px;">
                        <i class="bi bi-geo-alt" style="font-size:12px; color:var(--gold);"></i>
                        {{ $unit['location'] }}
                        <span style="color:var(--border); margin:0 4px;">·</span>
                        <span class="admin-badge navy" style="padding:2px 8px; font-size:11px;">{{ $unit['type'] }}</span>
                    </div>
                </div>
            </div>
            <div style="display:flex; gap:10px;">
                <button class="admin-button-outline sm" disabled>
                    <i class="bi bi-pencil-square"></i>
                    Edit Info Unit
                </button>
                <button class="admin-button sm" disabled>
                    <i class="bi bi-images"></i>
                    Kelola Gallery
                </button>
            </div>
        </div>

        {{-- Card body --}}
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:0;">

            {{-- Left: Info unit --}}
            <div style="padding:24px 28px; border-right:1px solid var(--border);">

                {{-- Deskripsi --}}
                <div style="margin-bottom:20px;">
                    <div style="font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:0.08em; color:var(--text-muted); margin-bottom:8px;">Deskripsi Unit</div>
                    <div style="font-size:13.5px; color:var(--text-dark); line-height:1.7; padding:14px 16px; background:var(--light); border-radius:10px; border:1px solid var(--border);">
                        {{ $unit['description'] }}
                    </div>
                </div>

                {{-- Fitur --}}
                <div>
                    <div style="font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:0.08em; color:var(--text-muted); margin-bottom:8px;">Fitur Unit</div>
                    <div style="display:flex; flex-wrap:wrap; gap:8px;">
                        @foreach($unit['features'] as $feat)
                        <span style="display:inline-flex; align-items:center; gap:5px; padding:5px 12px; background:var(--light); border:1px solid var(--border); border-radius:50px; font-size:12px; font-weight:600; color:var(--navy);">
                            <i class="bi bi-check2" style="color:var(--gold); font-size:12px;"></i>
                            {{ $feat }}
                        </span>
                        @endforeach
                    </div>
                </div>

            </div>

            {{-- Right: Gallery --}}
            <div style="padding:24px 28px;">
                <div style="font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:0.08em; color:var(--text-muted); margin-bottom:12px;">
                    Gallery Foto
                    <span style="margin-left:6px; font-size:10px; font-weight:600; background:rgba(7,27,53,0.07); color:var(--navy); padding:2px 8px; border-radius:50px; text-transform:none; letter-spacing:0;">
                        {{ 1 + count($unit['images']) }} foto
                    </span>
                </div>

                <div style="display:grid; grid-template-columns:1fr 1fr; gap:8px;">

                    {{-- Main image --}}
                    <div style="grid-column:span 2; position:relative; height:140px; border-radius:10px; overflow:hidden; background:linear-gradient(135deg,#E9EBF0,#F3F4F8);">
                        <img src="{{ asset($unit['main_image']) }}"
                             alt="{{ $unit['name'] }}"
                             loading="lazy"
                             style="width:100%; height:100%; object-fit:cover;"
                             onerror="this.parentElement.innerHTML='<div style=\'display:flex;align-items:center;justify-content:center;height:100%;color:#C4C9D4;flex-direction:column;gap:8px;\'><i class=\'bi bi-image\' style=\'font-size:28px;\'></i><span style=\'font-size:11px;font-weight:600;\'>Main Image</span></div>'">
                        <div style="position:absolute; bottom:8px; left:8px; padding:3px 10px; background:rgba(7,27,53,0.7); backdrop-filter:blur(6px); border-radius:6px; font-size:10.5px; font-weight:700; color:white;">
                            Foto Utama
                        </div>
                    </div>

                    {{-- Thumbnails --}}
                    @foreach($unit['images'] as $i => $img)
                    <div style="position:relative; height:80px; border-radius:8px; overflow:hidden; background:linear-gradient(135deg,#E9EBF0,#F3F4F8);">
                        <img src="{{ asset($img) }}"
                             alt="{{ $unit['name'] }} foto {{ $i + 1 }}"
                             loading="lazy"
                             style="width:100%; height:100%; object-fit:cover;"
                             onerror="this.parentElement.innerHTML='<div style=\'display:flex;align-items:center;justify-content:center;height:100%;color:#C4C9D4;\'><i class=\'bi bi-image\' style=\'font-size:20px;\'></i></div>'">
                        <div style="position:absolute; bottom:5px; left:6px; padding:2px 8px; background:rgba(7,27,53,0.65); border-radius:4px; font-size:10px; font-weight:600; color:rgba(255,255,255,0.85);">
                            Foto {{ $i + 1 }}
                        </div>
                    </div>
                    @endforeach

                </div>

                <div style="margin-top:12px; padding:10px 14px; background:rgba(7,27,53,0.04); border-radius:8px; font-size:12px; color:var(--text-muted); display:flex; align-items:center; gap:8px;">
                    <i class="bi bi-info-circle" style="color:var(--gold); flex-shrink:0;"></i>
                    Upload dan hapus foto akan tersedia setelah fitur backend aktif.
                </div>
            </div>

        </div>

    </div>
    @endforeach

</div>
