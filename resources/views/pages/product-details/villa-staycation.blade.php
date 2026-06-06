@extends('layouts.app')

@section('title', 'Villa & Staycation Bali — Layanan BIOTRA')
@section('meta_description', 'Temukan pilihan unit villa dan staycation BIOTRA di Bali. Akses penginapan wisata premium dengan sistem Hak Pakai melalui program kemitraan BIOTRA.')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/product-details.css') }}">
@endpush

@section('content')

@php
use Illuminate\Support\Str;

$category = [
    'label'       => 'Villa & Staycation',
    'title'       => 'Pilihan Villa & Staycation BIOTRA',
    'subtitle'    => 'Temukan pilihan unit villa untuk kebutuhan liburan, staycation, dan program kemitraan BIOTRA.',
    'description' => 'Villa & Staycation BIOTRA menghadirkan pilihan unit villa di area strategis yang dapat digunakan untuk kebutuhan pribadi maupun potensi penyewaan sesuai ketentuan program.',
    'badge'       => 'Bali',
    'breadcrumb'  => 'Villa & Staycation',
];

$units = [
    [
        'name'        => 'Villa Jimbaran',
        'location'    => 'Jimbaran, Bali',
        'type'        => 'Villa & Staycation',
        'description' => 'Villa dengan suasana nyaman dan lokasi strategis untuk kebutuhan liburan, staycation, maupun potensi penyewaan dalam program kemitraan BIOTRA.',
        'features'    => ['Area strategis', 'Cocok staycation', 'Fasilitas lengkap', 'Suasana private'],
        'main_image'  => 'assets/img/product-details/villa/jimbaran-main.jpg',
        'images'      => [
            'assets/img/product-details/villa/jimbaran-1.jpg',
            'assets/img/product-details/villa/jimbaran-2.jpg',
            'assets/img/product-details/villa/jimbaran-3.jpg',
        ],
    ],
    [
        'name'        => 'Villa Uluwatu',
        'location'    => 'Uluwatu, Bali',
        'type'        => 'Villa & Staycation',
        'description' => 'Villa dengan karakter premium yang mendukung kebutuhan wisata, liburan, dan pengalaman menginap yang lebih berkesan di area Uluwatu Bali.',
        'features'    => ['Nuansa premium', 'Cocok wisata', 'Area tenang', 'Potensi sewa'],
        'main_image'  => 'assets/img/product-details/villa/uluwatu-main.jpg',
        'images'      => [
            'assets/img/product-details/villa/uluwatu-1.jpg',
            'assets/img/product-details/villa/uluwatu-2.jpg',
            'assets/img/product-details/villa/uluwatu-3.jpg',
        ],
    ],
];
@endphp

@include('sections.product-details.page-header')
@include('sections.product-details.category-intro')
@include('sections.product-details.unit-list')
@include('sections.product-details.unit-gallery')
@include('sections.product-details.cta')

@endsection

@push('scripts')
<script src="{{ asset('assets/js/product-details.js') }}"></script>
@endpush
