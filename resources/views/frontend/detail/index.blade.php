@extends('frontend.layout.layout')

@section('content')
<section class="section section-detail-product">
    @include('frontend.detail.breadcrumb')
    @include('frontend.detail.product')
</section>
<section class="section section-more-detail">
    @include('frontend.detail.more-detail')
</section>
@endSection
