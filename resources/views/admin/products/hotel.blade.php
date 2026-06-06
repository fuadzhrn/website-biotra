@extends('layouts.admin')

@section('title', 'Kelola Hotel & Penginapan — Admin BIOTRA')
@section('page_title', 'Hotel & Penginapan')
@section('page_subtitle', 'Kelola unit dan gallery halaman Hotel & Penginapan')

@section('content')

@php
$units = [
    [
        'name'        => 'Hotel PIK 2',
        'location'    => 'PIK 2, Jakarta Utara',
        'type'        => 'Hotel & Penginapan',
        'description' => 'Hotel modern di kawasan PIK 2 dengan fasilitas lengkap untuk kebutuhan perjalanan bisnis dan wisata. Lokasi strategis dekat pusat bisnis dan area hiburan.',
        'features'    => ['Kawasan PIK 2', 'Fasilitas modern', 'Dekat pusat bisnis', 'Cocok bisnis & wisata'],
        'main_image'  => 'assets/img/product-details/hotel/hotel-1-main.jpg',
        'images'      => [
            'assets/img/product-details/hotel/hotel-1-1.jpg',
            'assets/img/product-details/hotel/hotel-1-2.jpg',
            'assets/img/product-details/hotel/hotel-1-3.jpg',
        ],
    ],
    [
        'name'        => 'Penginapan Jakarta',
        'location'    => 'Jakarta',
        'type'        => 'Hotel & Penginapan',
        'description' => 'Penginapan strategis di Jakarta untuk kebutuhan menginap jangka pendek dengan fasilitas standar yang nyaman dan lokasi yang mudah diakses.',
        'features'    => ['Area Jakarta', 'Lokasi strategis', 'Mudah diakses', 'Jangka pendek'],
        'main_image'  => 'assets/img/product-details/hotel/hotel-2-main.jpg',
        'images'      => [
            'assets/img/product-details/hotel/hotel-2-1.jpg',
            'assets/img/product-details/hotel/hotel-2-2.jpg',
            'assets/img/product-details/hotel/hotel-2-3.jpg',
        ],
    ],
];
@endphp

@include('admin.products._partials.product-admin-header', [
    'icon'          => 'bi-building',
    'category'      => 'Hotel & Penginapan',
    'area'          => 'Jakarta / PIK 2',
    'unit_count'    => count($units),
    'preview_route' => route('product-details.hotel'),
])

@include('admin.products._partials.unit-cards', ['units' => $units])

@endsection
