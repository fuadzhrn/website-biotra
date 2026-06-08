@extends('layouts.app')

@section('title', 'Kemitraan BIOTRA - Program Properti & Mobil Rental')
@section('meta_description', 'Pelajari program Kemitraan BIOTRA, peluang industri, cara kerja, benefit mitra, biaya bergabung, dan simulasi potensi hasil di sektor properti, akomodasi, pariwisata, dan mobilitas.')
@section('meta_keywords', 'kemitraan BIOTRA, program kemitraan, investasi properti, kemitraan properti, rental kendaraan, hak pakai, hak sewa, bagi hasil BIOTRA')

@section('og_title', 'Kemitraan BIOTRA - Punya Bisnis Tanpa Ribet')
@section('og_description', 'Program kemitraan properti dan mobilitas dengan sistem Hak Pakai, Hak Sewa, operasional dikelola, dan simulasi potensi hasil.')
@section('og_image', asset('assets/img/partnership/partnership-header.jpg'))

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/partnership.css') }}">
@endpush

@section('content')
    @include('sections.partnership.page-header')
     @include('sections.partnership.industry-opportunity')
     @include('sections.partnership.workflow')
     @include('sections.partnership.partner-benefits')
     @include('sections.partnership.pricing')
     @include('sections.partnership.financial-simulation')
     @include('sections.partnership.cta')
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('assets/js/partnership.js') }}"></script>
@endpush