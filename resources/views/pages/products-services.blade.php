@extends('layouts.app')

@section('title', 'Produk & Layanan BIOTRA - Properti, Akomodasi & Mobilitas')
@section('meta_description', 'Temukan produk dan layanan BIOTRA dalam sektor villa, hotel, apartemen, dan rental kendaraan untuk kebutuhan kemitraan properti, akomodasi, pariwisata, dan mobilitas.')
@section('meta_keywords', 'produk BIOTRA, layanan BIOTRA, villa Bali, hotel Jakarta PIK 2, apartemen Bekasi Cikarang, rental kendaraan, kemitraan properti, mobilitas')

@section('og_title', 'Produk & Layanan BIOTRA')
@section('og_description', 'Akses bisnis properti, akomodasi, dan mobilitas dalam satu ekosistem kemitraan BIOTRA.')
@section('og_image', asset('assets/img/products-services/villa-main.webp'))

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/products-services.css') }}">
@endpush

@section('content')
    @include('sections.products-services.page-header')
    @include('sections.products-services.villa')
    @include('sections.products-services.hotel')
    @include('sections.products-services.apartment')
     @include('sections.products-services.rental-car')
     @include('sections.products-services.cta')
  
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/products-services.js') }}"></script>
@endpush