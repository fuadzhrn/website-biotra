@extends('layouts.admin')

@section('title', 'Kelola Villa & Staycation — Admin BIOTRA')
@section('page_title', 'Villa & Staycation')
@section('page_subtitle', 'Kelola unit dan gallery halaman Villa & Staycation')

@section('content')

@php
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

@include('admin.products._partials.product-admin-header', [
    'icon'        => 'bi-house-heart',
    'category'    => 'Villa & Staycation',
    'area'        => 'Bali',
    'unit_count'  => count($units),
    'preview_route' => route('product-details.villa'),
])

@include('admin.products._partials.unit-cards', ['units' => $units])

@endsection
