@extends('layouts.app')

@section('title', 'Apartemen Harian & Mingguan — Layanan BIOTRA')
@section('meta_description', 'Pilihan apartemen harian dan mingguan BIOTRA di Bekasi dan Cikarang. Hunian fleksibel untuk kebutuhan kerja, bisnis, dan tinggal sementara.')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/product-details.css') }}">
@endpush

@section('content')

@php
use Illuminate\Support\Str;

$category = [
    'label'       => 'Apartemen Harian & Mingguan',
    'title'       => 'Pilihan Apartemen Harian & Mingguan BIOTRA',
    'subtitle'    => 'Hunian fleksibel untuk kebutuhan kerja, bisnis, dan tinggal sementara.',
    'description' => 'Apartemen BIOTRA menjadi pilihan hunian sementara yang mendukung kebutuhan harian maupun mingguan di area strategis Bekasi dan Cikarang — cocok untuk pekerja, eksekutif, dan pelaku bisnis.',
    'badge'       => 'Bekasi & Cikarang',
    'breadcrumb'  => 'Apartemen',
];

$units = [
    [
        'name'        => 'Apartemen Bekasi',
        'location'    => 'Bekasi, Jawa Barat',
        'type'        => 'Apartemen Harian & Mingguan',
        'description' => 'Apartemen dengan lokasi strategis di Bekasi, cocok untuk pekerja dan pelaku bisnis yang membutuhkan hunian sementara yang nyaman dan mudah diakses.',
        'features'    => ['Area Bekasi', 'Dekat pusat kota', 'Harian & mingguan', 'Fasilitas lengkap'],
        'main_image'  => 'assets/img/product-details/apartment/bekasi-main.jpg',
        'images'      => [],
    ],
    [
        'name'        => 'Apartemen Cikarang',
        'location'    => 'Cikarang, Bekasi',
        'type'        => 'Apartemen Harian & Mingguan',
        'description' => 'Apartemen di area industri Cikarang yang mendukung kebutuhan hunian harian dan mingguan bagi pekerja kawasan industri dan eksekutif bisnis.',
        'features'    => ['Area Cikarang', 'Dekat kawasan industri', 'Harian & mingguan', 'Nyaman & praktis'],
        'main_image'  => 'assets/img/product-details/apartment/cikarang-main.jpg',
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
