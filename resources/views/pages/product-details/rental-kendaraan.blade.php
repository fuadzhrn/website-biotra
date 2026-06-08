@extends('layouts.app')

@section('title', 'Rental Kendaraan Wisata & Bisnis — Layanan BIOTRA')
@section('meta_description', 'Layanan rental kendaraan BIOTRA untuk perjalanan wisata, bisnis, dan transportasi harian. Toyota Avanza dan Innova tersedia melalui program kemitraan BIOTRA.')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/product-details.css') }}">
@endpush

@section('content')

@php
use Illuminate\Support\Str;

$category = [
    'label'       => 'Rental Kendaraan',
    'title'       => 'Pilihan Rental Kendaraan Wisata & Bisnis',
    'subtitle'    => 'Solusi mobilitas untuk perjalanan wisata, bisnis, dan transportasi harian.',
    'description' => 'Rental kendaraan BIOTRA mendukung kebutuhan perjalanan dan mobilitas dengan pilihan unit yang dapat disesuaikan dengan kebutuhan wisata, bisnis, maupun transportasi harian.',
    'badge'       => 'Mobil Rental',
    'breadcrumb'  => 'Rental Kendaraan',
];

$units = [
    [
        'name'        => 'Toyota Avanza',
        'location'    => 'Area Operasional BIOTRA',
        'type'        => 'Rental Kendaraan',
        'description' => 'Kendaraan keluarga yang nyaman untuk perjalanan wisata, kebutuhan bisnis, dan transportasi harian dengan kapasitas penumpang optimal dan interior yang lapang.',
        'features'    => ['7 Penumpang', 'AC dingin', 'Cocok wisata', 'Harian & mingguan'],
        'main_image'  => 'assets/img/product-details/rental/car-1-main.jpg',
        'images'      => [],
    ],
    [
        'name'        => 'Toyota Innova',
        'location'    => 'Area Operasional BIOTRA',
        'type'        => 'Rental Kendaraan',
        'description' => 'Kendaraan premium dengan kapasitas lebih besar, cocok untuk perjalanan bisnis, wisata kelompok, dan kebutuhan transportasi eksekutif yang lebih nyaman.',
        'features'    => ['7–8 Penumpang', 'Premium & nyaman', 'Cocok bisnis', 'Harian & mingguan'],
        'main_image'  => 'assets/img/product-details/rental/car-2-main.jpg',
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
