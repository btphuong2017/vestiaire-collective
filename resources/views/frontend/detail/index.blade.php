@extends('frontend.layout.layout')

@section('content')
<section class="section section-detail-product">
    @include('frontend.detail.breadcrumb')
    @include('frontend.detail.product')
</section>
<section class="section section-more-detail">
    @include('frontend.detail.more-detail')
</section>
<section class="section section-also-like">
    @include('frontend.detail.you-may-also-like')
</section>
<section class="section section-recently">
    @include('frontend.detail.recently-viewed')
</section>
<section class="section section-same-tags">
    @include('frontend.detail.same-tags')
</section>

@endSection
