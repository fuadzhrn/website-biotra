@extends('layouts.app')

@section('title', 'Hotel & Penginapan — Layanan BIOTRA')
@section('meta_description', 'Pilihan hotel dan penginapan BIOTRA di Jakarta dan PIK 2. Akomodasi strategis untuk perjalanan bisnis dan wisata melalui program kemitraan BIOTRA.')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/product-details.css') }}">
@endpush

@section('content')

@php
use Illuminate\Support\Str;

$category = [
    'label'       => 'Hotel & Penginapan',
    'title'       => 'Pilihan Hotel & Penginapan BIOTRA',
    'subtitle'    => 'Akomodasi strategis untuk perjalanan bisnis, wisata, dan kebutuhan menginap jangka pendek.',
    'description' => 'Hotel & Penginapan BIOTRA mendukung kebutuhan akomodasi di area strategis dengan sistem layanan yang lebih praktis dan terarah, cocok untuk perjalanan bisnis maupun wisata.',
    'badge'       => 'Jakarta / PIK 2',
    'breadcrumb'  => 'Hotel & Penginapan',
];

$units = [
    [
        'name'        => 'Hotel PIK 2',
        'location'    => 'PIK 2, Jakarta Utara',
        'type'        => 'Hotel & Penginapan',
        'description' => 'Hotel modern di kawasan PIK 2 dengan fasilitas lengkap untuk kebutuhan perjalanan bisnis dan wisata. Lokasi strategis dekat pusat bisnis dan area hiburan.',
        'features'    => ['Kawasan PIK 2', 'Fasilitas modern', 'Dekat pusat bisnis', 'Cocok bisnis & wisata'],
        'main_image'  => 'assets/img/product-details/hotel/hotel-1-main.jpg',
        'images'      => [],
    ],
    [
        'name'        => 'Penginapan Jakarta',
        'location'    => 'Jakarta',
        'type'        => 'Hotel & Penginapan',
        'description' => 'Penginapan strategis di Jakarta untuk kebutuhan menginap jangka pendek dengan fasilitas standar yang nyaman dan lokasi yang mudah diakses.',
        'features'    => ['Area Jakarta', 'Lokasi strategis', 'Mudah diakses', 'Jangka pendek'],
        'main_image'  => 'assets/img/product-details/hotel/hotel-2-main.jpg',
        'images'      => [],
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
