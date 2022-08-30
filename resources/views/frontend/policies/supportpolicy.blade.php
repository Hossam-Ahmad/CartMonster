@extends('frontend.layouts.app')

@section('meta_title'){{ $page->getTranslation('meta_title') }}@stop

@section('meta_description'){{ $page->getTranslation('meta_description') }}@stop

@section('meta_keywords'){{ $page->getTranslation('keywords') }}@stop

@section('meta_img'){{ $page->getTranslation('meta_image') }}@stop

@section('meta')
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $page->getTranslation('meta_title') }}">
    <meta itemprop="description" content="{{ $page->getTranslation('meta_description') }}">
    <meta itemprop="image" content="{{ uploaded_asset($page->meta_image) }}">

    <!-- Twitter Card data -->
    <meta name="twitter:site" content="@isyolcom" />
    <meta name="author" content="RAGIP MULLAMUSA">
    <meta name="twitter:title" content="{{ $page->getTranslation('meta_title') }}">
    <meta name="twitter:description" content="{{ $page->getTranslation('meta_description') }}">
    <meta name="twitter:creator" content="@isyolcom">
    <meta name="twitter:image" content="{{ uploaded_asset($page->meta_image) }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $page->getTranslation('meta_title') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ URL($page->slug) }}" />
    <meta property="og:image" content="{{ uploaded_asset($page->meta_image) }}" />
    <meta property="og:description" content="{{ $page->getTranslation('meta_description') }}" />
    <meta property="og:site_name" content="{{ get_setting('website_name', null, app()->getLocale()) }}" />
@endsection

@section('content')
    <section class="pt-4 mb-4">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <h1 class="fw-600 h4">{{ $page->getTranslation('title') }}</h1>
                </div>
                <div class="col-lg-6">
                    <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                        <li class="breadcrumb-item opacity-50">
                            <a class="text-reset" href="{{ route('home') }}">{{ translate('Home') }}</a>
                        </li>
                        <li class="text-dark fw-600 breadcrumb-item">
                            <a class="text-reset"
                                href="{{ route('supportpolicy') }}">"{{ translate('Support Policy') }}"</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="mb-4">
        <div class="container">
            <div class="p-4 bg-white rounded shadow-sm overflow-hidden mw-100 text-left">
                @php
                    echo $page->getTranslation('content');
                @endphp
            </div>
        </div>
    </section>
@endsection
