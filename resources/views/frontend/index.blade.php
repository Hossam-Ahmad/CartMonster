@extends('frontend.layouts.app')

@section('content')
    <div class="home-banner-area mb-4 pt-3">
        <div class="container">

            <div class="row gutters-10 position-relative">
                <div class="col-lg-2 position-static d-none d-lg-block">
                    @include('frontend.partials.category_menu')
                </div>

                <div class="col-lg-10">
                    @if (get_setting('home_slider_images', null, App::getLocale()) != null)
                        <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-arrows="true" data-dots="true"
                            data-autoplay="true">
                            @php $slider_images = json_decode(get_setting('home_slider_images', null, App::getLocale()), true);  @endphp
                            @foreach ($slider_images as $key => $value)
                                <div class="carousel-box">
                                    <a
                                        href="{{ json_decode(get_setting('home_slider_links', null, App::getLocale()), true)[$key] }}">
                                        <img class="d-block mw-100 img-fit rounded shadow-sm overflow-hidden"
                                            src="{{ uploaded_asset($slider_images[$key]) }}" alt="{{ env('APP_NAME') }}"
                                            height="474"
                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/isyol-placeholder-rect.png') }}';">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

        </div>
        <div class="container d-none d-lg-block">
            <div class="row gutters-10 position-relative">
                <div class="col-lg-12">
                    @if (count($featured_categories) > 0)
                        <ul class="list-unstyled mb-0 row gutters-5">
                            @foreach ($featured_categories as $key => $category)
                                <li class="minw-0 col-3 col-md mt-3">
                                    <a href="{{ route('products.category', $category->slug) }}"
                                        class="d-block rounded p-2 text-reset shadow-sm"
                                        alt="{{ $category->getTranslation('name') }}"
                                        title="{{ $category->getTranslation('name') }}"
                                        style="background-image: url('{{ uploaded_asset($category->banner) }}'); background-repeat: no-repeat; background-position: center;height:100px">
                                        <div class="rounded fs-12"
                                            style="width:100%; height:100%;max-width:100%; max-height:100%; background:rgba(0,0,0,0.4);display: table;">
                                            <p style="text-align:center; vertical-align: middle; display: table-cell; height:100%;"
                                                class="fw-400 text-white">
                                                {{ $category->getTranslation('name') }}</p>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>


    @php
    $flash_deal = \App\Models\FlashDeal::where('status', 1)
        ->where('featured', 1)
        ->first();
    @endphp
    @if ($flash_deal != null &&
        strtotime(date('Y-m-d H:i:s')) >= $flash_deal->start_date &&
        strtotime(date('Y-m-d H:i:s')) <= $flash_deal->end_date)
        <section class="mb-4">
            <div class="container">
                <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">

                    <div class="d-flex flex-wrap mb-3 align-items-baseline border-bottom">
                        <h3 class="h5 fw-700 mb-0">
                            <span
                                class="pb-3 d-inline-block">{{ translate('Flash Sale') }}</span>
                        </h3>
                        <div class="aiz-count-down ml-auto ml-lg-3 align-items-center"
                            data-date="{{ date('Y/m/d H:i:s', $flash_deal->end_date) }}"></div>
                        <a href="{{ route('flash-deal-details', $flash_deal->slug) }}" alt="{{ translate('Flash Sale') }}"
                            title="{{ translate('Flash Sale') }}"
                            class="ml-auto mr-0 btn btn-dark btn-sm shadow-md w-100 w-md-auto">{{ translate('View More') }}</a>
                    </div>

                    <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5"
                        data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                        @foreach ($flash_deal->flash_deal_products->take(20) as $key => $flash_deal_product)
                            @php
                                $product = \App\Models\Product::find($flash_deal_product->product_id);
                            @endphp
                            @if ($product != null && $product->published != 0)
                                <div class="carousel-box">
                                    @include('frontend.partials.product_box_1', ['product' => $product])
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if (get_setting('home_banner1_images') != null)
        <div class="mb-4">
            <div class="container">
                <div class="row gutters-10">
                    @php $banner_1_imags = json_decode(get_setting('home_banner1_images', null, App::getLocale())); @endphp
                    @foreach ($banner_1_imags as $key => $value)
                        <div class="col-xl col-md-6">
                            <div class="mb-3 mb-lg-0">
                                <a href="{{ json_decode(get_setting('home_banner1_links', null, App::getLocale()), true)[$key] }}"
                                    class="d-block text-reset" alt="{{ env('APP_NAME') }}" title="{{ env('APP_NAME') }}">
                                    <img src="{{ static_asset('assets/img/isyol-placeholder-rect.png') }}"
                                        data-src="{{ uploaded_asset($banner_1_imags[$key]) }}" alt="{{ env('APP_NAME') }}"
                                        class="img-fluid lazyload w-100">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif


    <div id="section_newest">
        @if (count($newest_products) > 0)
            <section class="mb-4">
                <div class="container">
                    <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
                        <div class="d-flex mb-3 align-items-baseline border-bottom">
                            <h3 class="h5 fw-700 mb-0">
                                <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">
                                    {{ translate('New Products') }}
                                </span>
                            </h3>
                        </div>
                        <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5"
                            data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                            @foreach ($newest_products as $key => $new_product)
                                <div class="carousel-box">
                                    @include('frontend.partials.product_box_1', [
                                        'product' => $new_product,
                                    ])
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @endif
    </div>

    {{-- Featured Section --}}
    <div id="section_featured">

    </div>

    {{-- Best Selling --}}
    <div id="section_best_selling">

    </div>

    <!-- Auction Product -->
    @if (addon_is_activated('auction'))
        <div id="auction_products">

        </div>
    @endif



    {{-- Banner Section 2 --}}
    @if (get_setting('home_banner2_images') != null)
        <div class="mb-4">
            <div class="container">
                <div class="row gutters-10">
                    @php $banner_2_imags = json_decode(get_setting('home_banner2_images', null, App::getLocale())); @endphp
                    @foreach ($banner_2_imags as $key => $value)
                        <div class="col-xl col-md-6">
                            <div class="mb-3 mb-lg-0">
                                <a href="{{ json_decode(get_setting('home_banner2_links', null, App::getLocale()), true)[$key] }}"
                                    class="d-block text-reset" alt="{{ env('APP_NAME') }}" title="{{ env('APP_NAME') }}">
                                    <img src="{{ static_asset('assets/img/isyol-placeholder-rect.png') }}"
                                        data-src="{{ uploaded_asset($banner_2_imags[$key]) }}" alt="{{ env('APP_NAME') }}"
                                        class="img-fluid lazyload w-100">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    {{-- Category wise Products --}}
    <div id="section_home_categories">

    </div>

    {{-- Classified Product --}}
    @if (get_setting('classified_product') == 1)
        @php
            $classified_products = \App\Models\CustomerProduct::where('status', '1')
                ->where('published', '1')
                ->take(10)
                ->get();
        @endphp
        @if (count($classified_products) > 0)
            <section class="mb-4">
                <div class="container">
                    <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
                        <div class="d-flex mb-3 align-items-baseline border-bottom">
                            <h3 class="h5 fw-700 mb-0">
                                <span
                                    class="border-bottom border-dark border-width-2 pb-3 d-inline-block">{{ translate('Classified Ads') }}</span>
                            </h3>
                            <a href="{{ route('customer.products') }}" title="{{ translate('Classified Ads') }}"
                                alt="{{ translate('Classified Ads') }}"
                                class="ml-auto mr-0 btn btn-dark btn-sm shadow-md">{{ translate('View More') }}</a>
                        </div>
                        <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5"
                            data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                            @foreach ($classified_products as $key => $classified_product)
                                <div class="carousel-box">
                                    <div
                                        class="aiz-card-box border border-light rounded hov-shadow-md my-2 has-transition">
                                        <div class="position-relative">
                                            <a href="{{ route('customer.product', $classified_product->slug) }}"
                                                class="d-block" alt="{{ $classified_product->getTranslation('name') }}"
                                                title="{{ $classified_product->getTranslation('name') }}">
                                                <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                    src="{{ static_asset('assets/img/isyol-placeholder.png') }}"
                                                    data-src="{{ uploaded_asset($classified_product->thumbnail_img) }}"
                                                    alt="{{ $classified_product->getTranslation('name') }}"
                                                    onerror="this.onerror=null;this.src='{{ static_asset('assets/img/isyol-placeholder.png') }}';">
                                            </a>
                                            <div class="absolute-top-left pt-2 pl-2">
                                                @if ($classified_product->conditon == 'new')
                                                    <span
                                                        class="badge badge-inline badge-success">{{ translate('new') }}</span>
                                                @elseif($classified_product->conditon == 'used')
                                                    <span
                                                        class="badge badge-inline badge-danger">{{ translate('Used') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="p-md-3 p-2 text-left">
                                            <div class="fs-15 mb-1">
                                                <span
                                                    class="fw-700 text-primary">{{ single_price($classified_product->unit_price) }}</span>
                                            </div>
                                            <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                                <a href="{{ route('customer.product', $classified_product->slug) }}"
                                                    alt="{{ $classified_product->getTranslation('name') }}"
                                                    title="{{ $classified_product->getTranslation('name') }}"
                                                    class="d-block text-reset">{{ $classified_product->getTranslation('name') }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endif

    {{-- Banner Section 2 --}}
    @if (get_setting('home_banner3_images') != null)
        <div class="mb-4">
            <div class="container">
                <div class="row gutters-10">
                    @php $banner_3_imags = json_decode(get_setting('home_banner3_images', null, App::getLocale())); @endphp
                    @foreach ($banner_3_imags as $key => $value)
                        <div class="col-xl col-md-6">
                            <div class="mb-3 mb-lg-0">
                                <a href="{{ json_decode(get_setting('home_banner3_links', null, App::getLocale()), true)[$key] }}"
                                    class="d-block text-reset" alt="{{ env('APP_NAME') }}"
                                    title="{{ env('APP_NAME') }}">
                                    <img src="{{ static_asset('assets/img/isyol-placeholder-rect.png') }}"
                                        data-src="{{ uploaded_asset($banner_3_imags[$key]) }}"
                                        alt="{{ env('APP_NAME') }}" class="img-fluid lazyload w-100">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    @if (get_setting('top10_categories') != null && get_setting('top10_brands') != null)
        <section class="mb-4">
            <div class="container">
                <div class="row gutters-10">
                    @if (get_setting('top10_categories') != null)
                        <div class="col-lg-6">
                            <div class="d-flex mb-3 align-items-baseline border-bottom">
                                <h3 class="h5 fw-700 mb-0">
                                    <span
                                        class="border-bottom border-dark border-width-2 pb-3 d-inline-block">{{ translate('Top 10 Categories') }}</span>
                                </h3>
                                <a href="{{ route('categories.all') }}" alt="{{ translate('View All Categories') }}"
                                    title="{{ translate('View All Categories') }}"
                                    class="ml-auto mr-0 btn btn-dark btn-sm shadow-md">{{ translate('View All Categories') }}</a>
                            </div>
                            <div class="row gutters-5">
                                @php $top10_categories = json_decode(get_setting('top10_categories')); @endphp
                                @foreach ($top10_categories as $key => $value)
                                    @php $category = \App\Models\Category::find($value); @endphp
                                    @if ($category != null)
                                        <div class="col-sm-6">
                                            <a href="{{ route('products.category', $category->slug) }}"
                                                alt="{{ $category->getTranslation('name') }}"
                                                title="{{ $category->getTranslation('name') }}"
                                                class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-3 text-center">
                                                        <img src="{{ static_asset('assets/img/isyol-placeholder.png') }}"
                                                            data-src="{{ uploaded_asset($category->banner) }}"
                                                            alt="{{ $category->getTranslation('name') }}"
                                                            class="img-fluid img lazyload h-60px"
                                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/isyol-placeholder.png') }}';">
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="text-truncat-2 pl-3 fs-14 fw-600 text-left">
                                                            {{ $category->getTranslation('name') }}</div>
                                                    </div>
                                                    <div class="col-2 text-center">
                                                        <i class="la la-angle-right text-primary"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @if (get_setting('top10_brands') != null)
                        <div class="col-lg-6">
                            <div class="d-flex mb-3 align-items-baseline border-bottom">
                                <h3 class="h5 fw-700 mb-0">
                                    <span
                                        class="border-bottom border-dark border-width-2 pb-3 d-inline-block">{{ translate('Top 10 Brands') }}</span>
                                </h3>
                                <a href="{{ route('brands.all') }}" alt="{{ translate('View All Brands') }}"
                                    title="{{ translate('View All Brands') }}"
                                    class="ml-auto mr-0 btn btn-dark btn-sm shadow-md">{{ translate('View All Brands') }}</a>
                            </div>
                            <div class="row gutters-5">
                                @php $top10_brands = json_decode(get_setting('top10_brands')); @endphp
                                @foreach ($top10_brands as $key => $value)
                                    @php $brand = \App\Models\Brand::find($value); @endphp
                                    @if ($brand != null)
                                        <div class="col-sm-6">
                                            <a href="{{ route('products.brand', $brand->slug) }}"
                                                alt="{{ $brand->getTranslation('name') }}"
                                                title="{{ $brand->getTranslation('name') }}"
                                                class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-4 text-center">
                                                        <img src="{{ static_asset('assets/img/isyol-placeholder.png') }}"
                                                            data-src="{{ uploaded_asset($brand->logo) }}"
                                                            alt="{{ $brand->getTranslation('name') }}"
                                                            class="img-fluid img lazyload h-60px"
                                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/isyol-placeholder.png') }}';">
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="text-truncate-2 pl-3 fs-14 fw-600 text-left">
                                                            {{ $brand->getTranslation('name') }}</div>
                                                    </div>
                                                    <div class="col-2 text-center">
                                                        <i class="la la-angle-right text-primary"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    @endif
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $.post('{{ route('home.section.featured') }}', {
                _token: '{{ csrf_token() }}'
            }, function(data) {
                $('#section_featured').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.best_selling') }}', {
                _token: '{{ csrf_token() }}'
            }, function(data) {
                $('#section_best_selling').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.auction_products') }}', {
                _token: '{{ csrf_token() }}'
            }, function(data) {
                $('#auction_products').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.home_categories') }}', {
                _token: '{{ csrf_token() }}'
            }, function(data) {
                $('#section_home_categories').html(data);
                AIZ.plugins.slickCarousel();
            });
        });
    </script>
@endsection
