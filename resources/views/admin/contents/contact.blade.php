@extends('layouts.admin')

@section('title', 'Kelola Kontak — Admin BIOTRA')
@section('page_title', 'Kelola Kontak')
@section('page_subtitle', 'Atur informasi kontak, lokasi, form konsultasi, dan FAQ halaman Kontak')

@section('content')

@if(session('success'))
<div class="admin-alert-success admin-mb-24">
    <i class="bi bi-check-circle-fill"></i>
    {{ session('success') }}
</div>
@endif

@php
function cv($content, $section, $key) {
    return $content[$section][$key]->value ?? '';
}
@endphp

<form action="{{ route('admin.contents.contact.update') }}" method="POST">
@csrf

{{-- ===== A. PAGE HEADER ===== --}}
<div class="admin-card admin-mb-24">
    <div class="admin-card-header">
        <div class="admin-card-header-left">
            <h2>Page Header Kontak</h2>
            <p>Judul dan deskripsi bagian atas halaman Kontak</p>
        </div>
        <a href="{{ route('contact') }}" target="_blank" class="admin-button-outline sm">
            <i class="bi bi-eye"></i> Pratinjau
        </a>
    </div>
    <div class="admin-form-body">
        <div class="admin-form-group">
            <label class="admin-form-label">Label</label>
            <input type="text" name="page_header_label" class="admin-form-input"
                   value="{{ cv($content, 'page_header', 'label') }}"
                   placeholder="Kontak BIOTRA">
        </div>
        <div class="admin-form-group">
            <label class="admin-form-label">Judul (H1)</label>
            <input type="text" name="page_header_title" class="admin-form-input"
                   value="{{ cv($content, 'page_header', 'title') }}"
                   placeholder="Hubungi BIOTRA untuk Konsultasi Program dan Layanan">
        </div>
        <div class="admin-form-group">
            <label class="admin-form-label">Deskripsi</label>
            <textarea name="page_header_description" class="admin-form-textarea" rows="3"
                      placeholder="Punya pertanyaan tentang program kemitraan...">{{ cv($content, 'page_header', 'description') }}</textarea>
        </div>
        <div class="admin-form-group">
            <label class="admin-form-label">Catatan Bawah Header</label>
            <input type="text" name="page_header_note" class="admin-form-input"
                   value="{{ cv($content, 'page_header', 'note') }}"
                   placeholder="Silakan hubungi BIOTRA melalui WhatsApp, form konsultasi...">
        </div>
    </div>
</div>

{{-- ===== B. INFORMASI KONTAK ===== --}}
<div class="admin-card admin-mb-24">
    <div class="admin-card-header">
        <div class="admin-card-header-left">
            <h2>Informasi Kontak &amp; CTA WhatsApp</h2>
            <p>Teks dan link tombol kontak utama</p>
        </div>
    </div>
    <div class="admin-form-body">
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Label Seksi</label>
                <input type="text" name="contact_info_label" class="admin-form-input"
                       value="{{ cv($content, 'contact_info', 'label') }}"
                       placeholder="Hubungi Kami">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Judul</label>
                <input type="text" name="contact_info_title" class="admin-form-input"
                       value="{{ cv($content, 'contact_info', 'title') }}"
                       placeholder="Konsultasikan Kebutuhan Anda Bersama Tim BIOTRA">
            </div>
        </div>
        <div class="admin-form-group">
            <label class="admin-form-label">Paragraf 1</label>
            <textarea name="contact_info_paragraph_1" class="admin-form-textarea" rows="3"
                      placeholder="Jika Anda tertarik mengetahui lebih lanjut...">{{ cv($content, 'contact_info', 'paragraph_1') }}</textarea>
        </div>
        <div class="admin-form-group">
            <label class="admin-form-label">Paragraf 2</label>
            <textarea name="contact_info_paragraph_2" class="admin-form-textarea" rows="3"
                      placeholder="Tim BIOTRA akan membantu menjelaskan...">{{ cv($content, 'contact_info', 'paragraph_2') }}</textarea>
        </div>
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Teks Tombol WhatsApp</label>
                <input type="text" name="contact_info_whatsapp_button_text" class="admin-form-input"
                       value="{{ cv($content, 'contact_info', 'whatsapp_button_text') }}"
                       placeholder="Hubungi via WhatsApp">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Link Tombol WhatsApp</label>
                <input type="text" name="contact_info_whatsapp_button_link" class="admin-form-input"
                       value="{{ cv($content, 'contact_info', 'whatsapp_button_link') }}"
                       placeholder="https://wa.me/6285188341022">
            </div>
        </div>
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Teks Tombol Lokasi</label>
                <input type="text" name="contact_info_location_button_text" class="admin-form-input"
                       value="{{ cv($content, 'contact_info', 'location_button_text') }}"
                       placeholder="Lihat Lokasi">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Link Tombol Lokasi</label>
                <input type="text" name="contact_info_location_button_link" class="admin-form-input"
                       value="{{ cv($content, 'contact_info', 'location_button_link') }}"
                       placeholder="#contact-location">
            </div>
        </div>
    </div>
</div>

{{-- ===== C. CONTACT PANEL ===== --}}
<div class="admin-card admin-mb-24">
    <div class="admin-card-header">
        <div class="admin-card-header-left">
            <h2>Contact Panel</h2>
            <p>Kartu kontak: WhatsApp, Email, Jam Layanan, Lokasi</p>
        </div>
    </div>
    <div class="admin-form-body">
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Label Panel</label>
                <input type="text" name="contact_panel_label" class="admin-form-input"
                       value="{{ cv($content, 'contact_panel', 'panel_label') }}"
                       placeholder="Kontak Resmi">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Judul Panel</label>
                <input type="text" name="contact_panel_title" class="admin-form-input"
                       value="{{ cv($content, 'contact_panel', 'panel_title') }}"
                       placeholder="BIOTRA">
            </div>
        </div>
        <div class="admin-form-group">
            <label class="admin-form-label">Deskripsi Panel</label>
            <input type="text" name="contact_panel_description" class="admin-form-input"
                   value="{{ cv($content, 'contact_panel', 'panel_description') }}"
                   placeholder="Gunakan informasi berikut untuk menghubungi tim BIOTRA.">
        </div>

        <div class="admin-form-notice" style="margin: 16px 0 8px;">
            <i class="bi bi-whatsapp"></i> Item WhatsApp
        </div>
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Judul</label>
                <input type="text" name="contact_panel_whatsapp_title" class="admin-form-input"
                       value="{{ cv($content, 'contact_panel', 'whatsapp_title') }}"
                       placeholder="WhatsApp">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Nilai (nomor)</label>
                <input type="text" name="contact_panel_whatsapp_value" class="admin-form-input"
                       value="{{ cv($content, 'contact_panel', 'whatsapp_value') }}"
                       placeholder="+62-851-8834-1022">
            </div>
        </div>
        <div class="admin-form-group">
            <label class="admin-form-label">Keterangan</label>
            <input type="text" name="contact_panel_whatsapp_description" class="admin-form-input"
                   value="{{ cv($content, 'contact_panel', 'whatsapp_description') }}"
                   placeholder="Konsultasi program dan layanan BIOTRA">
        </div>

        <div class="admin-form-notice" style="margin: 16px 0 8px;">
            <i class="bi bi-envelope"></i> Item Email
        </div>
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Judul</label>
                <input type="text" name="contact_panel_email_title" class="admin-form-input"
                       value="{{ cv($content, 'contact_panel', 'email_title') }}"
                       placeholder="Email">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Nilai (alamat email)</label>
                <input type="text" name="contact_panel_email_value" class="admin-form-input"
                       value="{{ cv($content, 'contact_panel', 'email_value') }}"
                       placeholder="hello@biotra.co.id">
            </div>
        </div>
        <div class="admin-form-group">
            <label class="admin-form-label">Keterangan</label>
            <input type="text" name="contact_panel_email_description" class="admin-form-input"
                   value="{{ cv($content, 'contact_panel', 'email_description') }}"
                   placeholder="Untuk kebutuhan informasi dan kerja sama">
        </div>

        <div class="admin-form-notice" style="margin: 16px 0 8px;">
            <i class="bi bi-clock"></i> Item Jam Layanan
        </div>
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Judul</label>
                <input type="text" name="contact_panel_hours_title" class="admin-form-input"
                       value="{{ cv($content, 'contact_panel', 'hours_title') }}"
                       placeholder="Jam Layanan">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Nilai</label>
                <input type="text" name="contact_panel_hours_value" class="admin-form-input"
                       value="{{ cv($content, 'contact_panel', 'hours_value') }}"
                       placeholder="Senin – Sabtu, 09.00 – 17.00 WIB">
            </div>
        </div>
        <div class="admin-form-group">
            <label class="admin-form-label">Keterangan</label>
            <input type="text" name="contact_panel_hours_description" class="admin-form-input"
                   value="{{ cv($content, 'contact_panel', 'hours_description') }}"
                   placeholder="Tim BIOTRA akan merespons sesuai jam operasional">
        </div>

        <div class="admin-form-notice" style="margin: 16px 0 8px;">
            <i class="bi bi-geo-alt"></i> Item Lokasi
        </div>
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Judul</label>
                <input type="text" name="contact_panel_location_title" class="admin-form-input"
                       value="{{ cv($content, 'contact_panel', 'location_title') }}"
                       placeholder="Lokasi">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Nilai</label>
                <input type="text" name="contact_panel_location_value" class="admin-form-input"
                       value="{{ cv($content, 'contact_panel', 'location_value') }}"
                       placeholder="Alamat kantor BIOTRA akan disesuaikan">
            </div>
        </div>
        <div class="admin-form-group">
            <label class="admin-form-label">Keterangan</label>
            <input type="text" name="contact_panel_location_description" class="admin-form-input"
                   value="{{ cv($content, 'contact_panel', 'location_description') }}"
                   placeholder="Lokasi dapat dilihat melalui Google Maps">
        </div>

        <div class="admin-form-group">
            <label class="admin-form-label">Catatan Bawah Panel</label>
            <input type="text" name="contact_panel_note" class="admin-form-input"
                   value="{{ cv($content, 'contact_panel', 'note') }}"
                   placeholder="Untuk kunjungan langsung, disarankan melakukan konfirmasi jadwal terlebih dahulu.">
        </div>
    </div>
</div>

{{-- ===== D. FORM KONSULTASI ===== --}}
<div class="admin-card admin-mb-24">
    <div class="admin-card-header">
        <div class="admin-card-header-left">
            <h2>Form Konsultasi</h2>
            <p>Teks header dan label field form konsultasi</p>
        </div>
    </div>
    <div class="admin-form-body">
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Label Seksi</label>
                <input type="text" name="consultation_form_label" class="admin-form-input"
                       value="{{ cv($content, 'consultation_form', 'label') }}"
                       placeholder="Form Konsultasi">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Judul</label>
                <input type="text" name="consultation_form_title" class="admin-form-input"
                       value="{{ cv($content, 'consultation_form', 'title') }}"
                       placeholder="Kirim Pertanyaan atau Kebutuhan Anda">
            </div>
        </div>
        <div class="admin-form-group">
            <label class="admin-form-label">Deskripsi</label>
            <textarea name="consultation_form_description" class="admin-form-textarea" rows="2"
                      placeholder="Isi form konsultasi berikut agar tim BIOTRA...">{{ cv($content, 'consultation_form', 'description') }}</textarea>
        </div>

        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Label: Nama</label>
                <input type="text" name="consultation_form_name_label" class="admin-form-input"
                       value="{{ cv($content, 'consultation_form', 'name_label') }}"
                       placeholder="Nama Lengkap">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Placeholder: Nama</label>
                <input type="text" name="consultation_form_name_placeholder" class="admin-form-input"
                       value="{{ cv($content, 'consultation_form', 'name_placeholder') }}"
                       placeholder="Masukkan nama lengkap Anda">
            </div>
        </div>
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Label: WhatsApp</label>
                <input type="text" name="consultation_form_whatsapp_label" class="admin-form-input"
                       value="{{ cv($content, 'consultation_form', 'whatsapp_label') }}"
                       placeholder="Nomor WhatsApp">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Placeholder: WhatsApp</label>
                <input type="text" name="consultation_form_whatsapp_placeholder" class="admin-form-input"
                       value="{{ cv($content, 'consultation_form', 'whatsapp_placeholder') }}"
                       placeholder="Contoh: 0851-8834-1022">
            </div>
        </div>
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Label: Email</label>
                <input type="text" name="consultation_form_email_label" class="admin-form-input"
                       value="{{ cv($content, 'consultation_form', 'email_label') }}"
                       placeholder="Email">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Placeholder: Email</label>
                <input type="text" name="consultation_form_email_placeholder" class="admin-form-input"
                       value="{{ cv($content, 'consultation_form', 'email_placeholder') }}"
                       placeholder="Masukkan email Anda, opsional">
            </div>
        </div>
        <div class="admin-form-group">
            <label class="admin-form-label">Banner Promo</label>
            <label style="display:flex;align-items:center;gap:8px;cursor:pointer;font-weight:normal;">
                <input type="checkbox" name="consultation_form_promo_is_active" value="1"
                       {{ cv($content, 'consultation_form', 'promo_is_active') ? 'checked' : '' }}>
                Tampilkan banner promo di dalam form konsultasi
            </label>
            <div class="admin-form-hint">Jika dicentang, kotak promo akan tampil di samping field email dalam form.</div>
        </div>
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Judul Promo</label>
                <input type="text" name="consultation_form_promo_title" class="admin-form-input"
                       value="{{ cv($content, 'consultation_form', 'promo_title') }}"
                       placeholder="100 Orang Pertama">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Deskripsi Promo</label>
                <input type="text" name="consultation_form_promo_description" class="admin-form-input"
                       value="{{ cv($content, 'consultation_form', 'promo_description') }}"
                       placeholder="Dapatkan konsultasi eksklusif untuk 100 pendaftar pertama...">
            </div>
        </div>
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Label: Pesan</label>
                <input type="text" name="consultation_form_message_label" class="admin-form-input"
                       value="{{ cv($content, 'consultation_form', 'message_label') }}"
                       placeholder="Pesan">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Placeholder: Pesan</label>
                <input type="text" name="consultation_form_message_placeholder" class="admin-form-input"
                       value="{{ cv($content, 'consultation_form', 'message_placeholder') }}"
                       placeholder="Tuliskan pertanyaan atau kebutuhan konsultasi Anda">
            </div>
        </div>
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Teks Tombol Kirim</label>
                <input type="text" name="consultation_form_button_text" class="admin-form-input"
                       value="{{ cv($content, 'consultation_form', 'button_text') }}"
                       placeholder="Kirim Konsultasi">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Nomor WhatsApp Tujuan <small>(tanpa +, cth: 6281234567890)</small></label>
                <input type="text" name="consultation_form_whatsapp_target_number" class="admin-form-input"
                       value="{{ cv($content, 'consultation_form', 'whatsapp_target_number') }}"
                       placeholder="6285188341022">
                <div class="admin-form-hint">Nomor ini digunakan sebagai tujuan pengiriman pesan konsultasi via WhatsApp.</div>
            </div>
        </div>
        <div class="admin-form-group">
            <label class="admin-form-label">Catatan Bawah Form</label>
            <input type="text" name="consultation_form_note" class="admin-form-input"
                   value="{{ cv($content, 'consultation_form', 'note') }}"
                   placeholder="Data yang Anda kirim digunakan untuk membantu tim BIOTRA...">
        </div>
    </div>
</div>

{{-- ===== E. QUICK HELP PANEL ===== --}}
<div class="admin-card admin-mb-24">
    <div class="admin-card-header">
        <div class="admin-card-header-left">
            <h2>Quick Help Panel</h2>
            <p>Panel 4 topik konsultasi di samping form</p>
        </div>
    </div>
    <div class="admin-form-body">
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Label</label>
                <input type="text" name="quick_help_label" class="admin-form-input"
                       value="{{ cv($content, 'quick_help', 'label') }}"
                       placeholder="Bantuan Cepat">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Judul</label>
                <input type="text" name="quick_help_title" class="admin-form-input"
                       value="{{ cv($content, 'quick_help', 'title') }}"
                       placeholder="Apa yang ingin Anda tanyakan?">
            </div>
        </div>
        <div class="admin-form-group">
            <label class="admin-form-label">Deskripsi</label>
            <input type="text" name="quick_help_description" class="admin-form-input"
                   value="{{ cv($content, 'quick_help', 'description') }}"
                   placeholder="Pilih topik konsultasi agar komunikasi dengan tim BIOTRA lebih terarah...">
        </div>

        @foreach([1,2,3,4] as $i)
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Item {{ $i }} — Judul</label>
                <input type="text" name="quick_help_item_{{ $i }}_title" class="admin-form-input"
                       value="{{ cv($content, 'quick_help', 'item_'.$i.'_title') }}"
                       placeholder="Judul item {{ $i }}">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Item {{ $i }} — Deskripsi</label>
                <input type="text" name="quick_help_item_{{ $i }}_description" class="admin-form-input"
                       value="{{ cv($content, 'quick_help', 'item_'.$i.'_description') }}"
                       placeholder="Deskripsi item {{ $i }}">
            </div>
        </div>
        @endforeach

        <div class="admin-form-group">
            <label class="admin-form-label">Catatan Bawah Panel</label>
            <input type="text" name="quick_help_note" class="admin-form-input"
                   value="{{ cv($content, 'quick_help', 'note') }}"
                   placeholder="Untuk respons lebih cepat, Anda juga dapat langsung menghubungi BIOTRA melalui WhatsApp.">
        </div>
    </div>
</div>

{{-- ===== F. LOKASI & GOOGLE MAPS ===== --}}
<div class="admin-card admin-mb-24">
    <div class="admin-card-header">
        <div class="admin-card-header-left">
            <h2>Lokasi &amp; Google Maps</h2>
            <p>Alamat, jam layanan, dan embed Google Maps</p>
        </div>
    </div>
    <div class="admin-form-body">
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Label Seksi</label>
                <input type="text" name="location_map_label" class="admin-form-input"
                       value="{{ cv($content, 'location_map', 'label') }}"
                       placeholder="Lokasi BIOTRA">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Judul</label>
                <input type="text" name="location_map_title" class="admin-form-input"
                       value="{{ cv($content, 'location_map', 'title') }}"
                       placeholder="Temukan Lokasi dan Informasi Kunjungan BIOTRA">
            </div>
        </div>
        <div class="admin-form-group">
            <label class="admin-form-label">Deskripsi</label>
            <textarea name="location_map_description" class="admin-form-textarea" rows="2"
                      placeholder="Untuk kebutuhan konsultasi langsung...">{{ cv($content, 'location_map', 'description') }}</textarea>
        </div>
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Label Alamat</label>
                <input type="text" name="location_map_address_label" class="admin-form-input"
                       value="{{ cv($content, 'location_map', 'address_label') }}"
                       placeholder="Alamat BIOTRA">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Judul Alamat</label>
                <input type="text" name="location_map_address_title" class="admin-form-input"
                       value="{{ cv($content, 'location_map', 'address_title') }}"
                       placeholder="Lokasi Kantor BIOTRA">
            </div>
        </div>
        <div class="admin-form-group">
            <label class="admin-form-label">Alamat Lengkap</label>
            <textarea name="location_map_address" class="admin-form-textarea" rows="2"
                      placeholder="Alamat kantor BIOTRA akan disesuaikan...">{{ cv($content, 'location_map', 'address') }}</textarea>
        </div>
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Jam Layanan</label>
                <input type="text" name="location_map_service_hours" class="admin-form-input"
                       value="{{ cv($content, 'location_map', 'service_hours') }}"
                       placeholder="Senin – Sabtu, 09.00 – 17.00 WIB">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Catatan Kunjungan</label>
                <input type="text" name="location_map_visit_note" class="admin-form-input"
                       value="{{ cv($content, 'location_map', 'visit_note') }}"
                       placeholder="Konfirmasi jadwal sebelum melakukan kunjungan">
            </div>
        </div>
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Teks Tombol Maps</label>
                <input type="text" name="location_map_maps_button_text" class="admin-form-input"
                       value="{{ cv($content, 'location_map', 'maps_button_text') }}"
                       placeholder="Buka di Google Maps">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Link Tombol Maps</label>
                <input type="text" name="location_map_maps_button_link" class="admin-form-input"
                       value="{{ cv($content, 'location_map', 'maps_button_link') }}"
                       placeholder="https://maps.google.com">
            </div>
        </div>
        <div class="admin-form-group">
            <label class="admin-form-label">Google Maps Embed URL</label>
            <input type="text" name="location_map_maps_embed" class="admin-form-input"
                   value="{{ cv($content, 'location_map', 'maps_embed') }}"
                   placeholder="https://www.google.com/maps?q=Jakarta%20Indonesia&output=embed">
            <div class="admin-form-hint">Masukkan URL src dari iframe Google Maps Embed. Buka Google Maps → Share → Embed a map → salin URL dari atribut src.</div>
        </div>
    </div>
</div>

{{-- ===== G. FAQ KONTAK ===== --}}
<div class="admin-card admin-mb-24">
    <div class="admin-card-header">
        <div class="admin-card-header-left">
            <h2>FAQ Kontak</h2>
            <p>5 pertanyaan umum yang ditampilkan di halaman Kontak</p>
        </div>
    </div>
    <div class="admin-form-body">
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Label Seksi</label>
                <input type="text" name="faq_label" class="admin-form-input"
                       value="{{ cv($content, 'faq', 'label') }}"
                       placeholder="Pertanyaan Umum">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Judul</label>
                <input type="text" name="faq_title" class="admin-form-input"
                       value="{{ cv($content, 'faq', 'title') }}"
                       placeholder="Pertanyaan yang Sering Ditanyakan">
            </div>
        </div>
        <div class="admin-form-group">
            <label class="admin-form-label">Deskripsi</label>
            <input type="text" name="faq_description" class="admin-form-input"
                   value="{{ cv($content, 'faq', 'description') }}"
                   placeholder="Berikut beberapa pertanyaan umum seputar program BIOTRA...">
        </div>

        <div class="admin-form-notice" style="margin: 16px 0 8px; font-weight:500;">
            Intro Card (Masih Ada yang Ingin Ditanyakan?)
        </div>
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Judul Intro</label>
                <input type="text" name="faq_intro_title" class="admin-form-input"
                       value="{{ cv($content, 'faq', 'intro_title') }}"
                       placeholder="Masih Ada yang Ingin Ditanyakan?">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Teks Tombol</label>
                <input type="text" name="faq_intro_button_text" class="admin-form-input"
                       value="{{ cv($content, 'faq', 'intro_button_text') }}"
                       placeholder="Tanya via WhatsApp">
            </div>
        </div>
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Deskripsi Intro</label>
                <textarea name="faq_intro_description" class="admin-form-textarea" rows="2"
                          placeholder="Jika pertanyaan Anda belum terjawab, silakan hubungi tim BIOTRA...">{{ cv($content, 'faq', 'intro_description') }}</textarea>
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Link Tombol</label>
                <input type="text" name="faq_intro_button_link" class="admin-form-input"
                       value="{{ cv($content, 'faq', 'intro_button_link') }}"
                       placeholder="https://wa.me/6285188341022"
                       style="margin-bottom:0;">
            </div>
        </div>

        @foreach([1,2,3,4,5] as $n)
        <div class="admin-form-notice" style="margin: 16px 0 8px; font-weight:500;">FAQ {{ $n }}</div>
        <div class="admin-form-group">
            <label class="admin-form-label">Pertanyaan {{ $n }}</label>
            <input type="text" name="faq_{{ $n }}_question" class="admin-form-input"
                   value="{{ cv($content, 'faq', 'faq_'.$n.'_question') }}"
                   placeholder="Tulis pertanyaan FAQ {{ $n }}">
        </div>
        <div class="admin-form-group">
            <label class="admin-form-label">Jawaban {{ $n }}</label>
            <textarea name="faq_{{ $n }}_answer" class="admin-form-textarea" rows="3"
                      placeholder="Tulis jawaban FAQ {{ $n }}">{{ cv($content, 'faq', 'faq_'.$n.'_answer') }}</textarea>
        </div>
        @endforeach
    </div>
</div>

{{-- ===== H. CTA PENUTUP ===== --}}
<div class="admin-card admin-mb-24">
    <div class="admin-card-header">
        <div class="admin-card-header-left">
            <h2>CTA Penutup</h2>
            <p>Bagian ajakan bertindak di bagian bawah halaman Kontak</p>
        </div>
    </div>
    <div class="admin-form-body">
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Label</label>
                <input type="text" name="cta_label" class="admin-form-input"
                       value="{{ cv($content, 'cta', 'label') }}"
                       placeholder="Konsultasi Sekarang">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Judul</label>
                <input type="text" name="cta_title" class="admin-form-input"
                       value="{{ cv($content, 'cta', 'title') }}"
                       placeholder="Siap Mengenal BIOTRA Lebih Dekat?">
            </div>
        </div>
        <div class="admin-form-group">
            <label class="admin-form-label">Deskripsi</label>
            <textarea name="cta_description" class="admin-form-textarea" rows="2"
                      placeholder="Hubungi tim BIOTRA sekarang untuk mendapatkan informasi lebih lengkap...">{{ cv($content, 'cta', 'description') }}</textarea>
        </div>
        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Teks Tombol</label>
                <input type="text" name="cta_button_text" class="admin-form-input"
                       value="{{ cv($content, 'cta', 'button_text') }}"
                       placeholder="Hubungi BIOTRA Sekarang">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Link Tombol</label>
                <input type="text" name="cta_button_link" class="admin-form-input"
                       value="{{ cv($content, 'cta', 'button_link') }}"
                       placeholder="https://wa.me/6285188341022">
            </div>
        </div>
    </div>
</div>

{{-- Tombol Simpan --}}
<div class="admin-mb-24">
    <button type="submit" class="admin-button">
        <i class="bi bi-check-lg"></i>
        Simpan Perubahan Konten Kontak
    </button>
</div>

</form>

@endsection
