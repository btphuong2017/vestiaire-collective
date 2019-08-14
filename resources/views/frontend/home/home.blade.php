@extends('frontend.layout.layout')
@section('content')
{{-- Banner --}}
@include('frontend.home.banner')
{{-- Trendind --}}
@include('frontend.home.trending')
{{-- New Welove Item --}}
@include('frontend.home.new-items')
{{-- Start Selling - Ready To Ship --}}
@include('frontend.home.start-selling')
{{-- Get theme now - Le Journal --}}
@include('frontend.home.get-them-now')
{{-- Styleguide - Popular Brand --}}
@include('frontend.home.styleguide')

@endSection
