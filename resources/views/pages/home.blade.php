@extends('layouts.app')

@section('title', 'BIOTRA - Program Kemitraan Properti & Mobil Rental')
@section('meta_description', 'BIOTRA adalah program kemitraan modern di sektor properti, penginapan, apartemen, rental kendaraan, pariwisata, dan mobilitas dengan sistem yang lebih praktis dan terkelola.')
@section('meta_keywords', 'BIOTRA, program kemitraan, kemitraan properti, rental kendaraan, villa Bali, apartemen harian, penginapan, pariwisata, mobilitas')

@section('og_title', 'BIOTRA - Punya Bisnis Tanpa Ribet')
@section('og_description', 'Program kemitraan properti dan mobilitas dengan sistem Hak Pakai Gratis, Hak Sewa, dan operasional yang dikelola BIOTRA.')
@section('og_image', asset('assets/img/hero/hero-biotra.jpg'))

@section('content')
    @include('sections.home.hero')
    @include('sections.home.about-short')
    @include('sections.home.products')
    @include('sections.home.advantages')
@endsection