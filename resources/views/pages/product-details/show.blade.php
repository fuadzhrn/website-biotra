@extends('layouts.app')

@section('title', ($category['label'] ?? $category['title']) . ' — Layanan BIOTRA')
@section('meta_description', $category['subtitle'] ?? '')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/product-details.css') }}">
@endpush

@section('content')

@php use Illuminate\Support\Str; @endphp

@include('sections.product-details.page-header')
@include('sections.product-details.category-intro')
@include('sections.product-details.unit-list')
@include('sections.product-details.unit-gallery')
@include('sections.product-details.cta')

@endsection

@push('scripts')
<script src="{{ asset('assets/js/product-details.js') }}"></script>
@endpush
