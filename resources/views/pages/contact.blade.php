@extends('layouts.app')

@section('title', 'Kontak BIOTRA - Konsultasi Program & Layanan')
@section('meta_description', 'Hubungi BIOTRA untuk konsultasi program kemitraan, produk layanan, biaya bergabung, simulasi potensi hasil, dan informasi layanan properti, akomodasi, pariwisata, serta mobilitas.')
@section('meta_keywords', 'kontak BIOTRA, konsultasi BIOTRA, WhatsApp BIOTRA, kemitraan BIOTRA, produk BIOTRA, layanan BIOTRA')

@section('og_title', 'Kontak BIOTRA - Konsultasi Program & Layanan')
@section('og_description', 'Hubungi tim BIOTRA untuk mendapatkan informasi lengkap mengenai program kemitraan, produk layanan, benefit, biaya, dan ketentuan yang berlaku.')
@section('og_image', asset('assets/img/contact/contact-hero.jpg'))

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
@endpush

@section('content')
    @include('sections.contact.page-header')
   @include('sections.contact.contact-info')
   @include('sections.contact.consultation-form')
   @include('sections.contact.location-map')
   @include('sections.contact.faq')
   @include('sections.contact.cta')

@endsection

@push('scripts')
    <script src="{{ asset('assets/js/contact.js') }}"></script>
@endpush