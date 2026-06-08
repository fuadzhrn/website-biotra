@extends('layouts.app')

@section('title', 'Tentang BIOTRA - Kemitraan Properti & Mobil Rental')
@section('meta_description', 'Pelajari tentang BIOTRA, program kemitraan modern di sektor properti, penginapan, apartemen, rental kendaraan, pariwisata, dan mobilitas dengan konsep Hak Pakai dan Hak Sewa.')
@section('meta_keywords', 'tentang BIOTRA, profil BIOTRA, kemitraan properti, Hak Pakai, Hak Sewa, properti, rental kendaraan, pariwisata, mobilitas')

@section('og_title', 'Tentang BIOTRA - Program Kemitraan Modern')
@section('og_description', 'BIOTRA membuka akses bisnis modern di sektor properti, pariwisata, dan mobilitas dengan sistem yang lebih praktis.')
@section('og_image', asset('assets/img/about-page/about-profile-1.jpg'))

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
@endpush

@section('content')
    @include('sections.about.profile')
    @include('sections.about.business-concept')
    @include('sections.about.operational-area')
     @include('sections.about.reason')
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/about.js') }}"></script>
@endpush