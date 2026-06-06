@extends('layouts.admin')

@section('title', 'Kelola Rental Kendaraan — Admin BIOTRA')
@section('page_title', 'Rental Kendaraan')
@section('page_subtitle', 'Kelola unit dan gallery halaman Rental Kendaraan')

@section('content')

@php
$units = [
    [
        'name'        => 'Toyota Avanza',
        'location'    => 'Area Operasional BIOTRA',
        'type'        => 'Rental Kendaraan',
        'description' => 'Kendaraan keluarga yang nyaman untuk perjalanan wisata, kebutuhan bisnis, dan transportasi harian dengan kapasitas penumpang optimal dan interior yang lapang.',
        'features'    => ['7 Penumpang', 'AC dingin', 'Cocok wisata', 'Harian & mingguan'],
        'main_image'  => 'assets/img/product-details/rental/car-1-main.jpg',
        'images'      => [
            'assets/img/product-details/rental/car-1-1.jpg',
            'assets/img/product-details/rental/car-1-2.jpg',
            'assets/img/product-details/rental/car-1-3.jpg',
        ],
    ],
    [
        'name'        => 'Toyota Innova',
        'location'    => 'Area Operasional BIOTRA',
        'type'        => 'Rental Kendaraan',
        'description' => 'Kendaraan premium dengan kapasitas lebih besar, cocok untuk perjalanan bisnis, wisata kelompok, dan kebutuhan transportasi eksekutif yang lebih nyaman.',
        'features'    => ['7–8 Penumpang', 'Premium & nyaman', 'Cocok bisnis', 'Harian & mingguan'],
        'main_image'  => 'assets/img/product-details/rental/car-2-main.jpg',
        'images'      => [
            'assets/img/product-details/rental/car-2-1.jpg',
            'assets/img/product-details/rental/car-2-2.jpg',
            'assets/img/product-details/rental/car-2-3.jpg',
        ],
    ],
];
@endphp

@include('admin.products._partials.product-admin-header', [
    'icon'          => 'bi-car-front',
    'category'      => 'Rental Kendaraan',
    'area'          => 'Mobility',
    'unit_count'    => count($units),
    'preview_route' => route('product-details.rental'),
])

@include('admin.products._partials.unit-cards', ['units' => $units])

@endsection
