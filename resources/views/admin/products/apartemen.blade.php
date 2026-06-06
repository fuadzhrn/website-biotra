@extends('layouts.admin')

@section('title', 'Kelola Apartemen — Admin BIOTRA')
@section('page_title', 'Apartemen Harian & Mingguan')
@section('page_subtitle', 'Kelola unit dan gallery halaman Apartemen')

@section('content')

@php
$units = [
    [
        'name'        => 'Apartemen Bekasi',
        'location'    => 'Bekasi, Jawa Barat',
        'type'        => 'Apartemen Harian & Mingguan',
        'description' => 'Apartemen dengan lokasi strategis di Bekasi, cocok untuk pekerja dan pelaku bisnis yang membutuhkan hunian sementara yang nyaman dan mudah diakses.',
        'features'    => ['Area Bekasi', 'Dekat pusat kota', 'Harian & mingguan', 'Fasilitas lengkap'],
        'main_image'  => 'assets/img/product-details/apartment/bekasi-main.jpg',
        'images'      => [
            'assets/img/product-details/apartment/bekasi-1.jpg',
            'assets/img/product-details/apartment/bekasi-2.jpg',
            'assets/img/product-details/apartment/bekasi-3.jpg',
        ],
    ],
    [
        'name'        => 'Apartemen Cikarang',
        'location'    => 'Cikarang, Bekasi',
        'type'        => 'Apartemen Harian & Mingguan',
        'description' => 'Apartemen di area industri Cikarang yang mendukung kebutuhan hunian harian dan mingguan bagi pekerja kawasan industri dan eksekutif bisnis.',
        'features'    => ['Area Cikarang', 'Dekat kawasan industri', 'Harian & mingguan', 'Nyaman & praktis'],
        'main_image'  => 'assets/img/product-details/apartment/cikarang-main.jpg',
        'images'      => [
            'assets/img/product-details/apartment/cikarang-1.jpg',
            'assets/img/product-details/apartment/cikarang-2.jpg',
            'assets/img/product-details/apartment/cikarang-3.jpg',
        ],
    ],
];
@endphp

@include('admin.products._partials.product-admin-header', [
    'icon'          => 'bi-buildings',
    'category'      => 'Apartemen Harian & Mingguan',
    'area'          => 'Bekasi & Cikarang',
    'unit_count'    => count($units),
    'preview_route' => route('product-details.apartment'),
])

@include('admin.products._partials.unit-cards', ['units' => $units])

@endsection
