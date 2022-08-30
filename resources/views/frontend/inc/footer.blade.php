<section class="bg-black text-light mt-auto">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-6 hov-bg-dark">
                <a class="text-reset text-center p-4 d-block" alt="{{ translate('Return Policy') }}"
                    title="{{ translate('Return Policy') }}" href="{{ route('returnpolicy') }}">
                    <img src="{{ static_asset('assets/img/footer-return.png') }}" class="img-for-footer mb-2"
                        alt="{{ translate('Return Policy') }}">
                    <h4 class="h6 text-white">{{ translate('Return Policy') }}</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 hov-bg-dark">
                <a class="text-reset text-center p-4 d-block" alt="{{ translate('Support Policy') }}"
                    title="{{ translate('Support Policy') }}" href="{{ route('supportpolicy') }}">
                    <img src="{{ static_asset('assets/img/footer-support.png') }}" class="img-for-footer mb-2"
                        alt="{{ translate('Support Policy') }}">
                    <h4 class="h6 text-white">{{ translate('Support Policy') }}</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 hov-bg-dark">
                <a class="text-reset text-center p-4 d-block" alt="{{ translate('Privacy Policy') }}"
                    title="{{ translate('Privacy Policy') }}" href="{{ route('privacypolicy') }}">
                    <img src="{{ static_asset('assets/img/footer-privacy.png') }}" class="img-for-footer mb-2"
                        alt="{{ translate('Privacy Policy') }}">
                    <h4 class="h6 text-white">{{ translate('Privacy Policy') }}</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 hov-bg-dark">
                <a class="text-reset text-center p-4 d-block" alt="{{ translate('Terms & conditions') }}"
                    title="{{ translate('Terms & conditions') }}" href="{{ route('terms') }}">
                    <img src="{{ static_asset('assets/img/footer-terms.png') }}" class="img-for-footer mb-2"
                        alt="{{ translate('Terms & conditions') }}">
                    <h4 class="h6 text-white">{{ translate('Terms & conditions') }}</h4>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark py-5 text-light footer-widget">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-xl-4 text-center text-md-left">
                <div class="mt-4">
                    <a href="{{ route('home') }}"
                        alt="{{ translate('ISYOL platform is the largest platform that brings together all Turkish and Arab products in Turkey, wholesale and retail, with a fast shipping service to all countries of the world') }}"
                        class="d-block">
                        @if (get_setting('footer_logo') != null)
                            <img class="lazyload" src="{{ static_asset('assets/img/isyol-placeholder-rect.png') }}"
                                data-src="{{ uploaded_asset(get_setting('footer_logo')) }}"
                                alt="{{ translate('ISYOL platform is the largest platform that brings together all Turkish and Arab products in Turkey, wholesale and retail, with a fast shipping service to all countries of the world') }}"
                                height="44">
                        @else
                            <img class="lazyload" src="{{ static_asset('assets/img/isyol-placeholder-rect.png') }}"
                                data-src="{{ static_asset('assets/img/isyol-logo.png') }}"
                                alt="{{ translate('ISYOL platform is the largest platform that brings together all Turkish and Arab products in Turkey, wholesale and retail, with a fast shipping service to all countries of the world') }}"
                                height="44">
                        @endif
                    </a>
                    <div class="my-3">
                        {!! get_setting('about_us_description', null, App::getLocale()) !!}
                    </div>
                    <div class="d-inline-block d-md-block mb-4">
                        <form class="form-inline" method="POST" action="{{ route('subscribers.store') }}">
                            @csrf
                            <div class="form-group mb-0">
                                <input type="email" class="form-control force-border-none-input"
                                    placeholder="{{ translate('Your Email Address') }}" name="email" required>
                            </div>
                            <button type="submit" class="btn btn-info force-border-none-btn">
                                {{ translate('Subscribe') }}
                            </button>
                        </form>
                    </div>
                    <div class="w-300px mw-0 mx-auto mx-md-0 isyol-for-social-footer">
                        @if (get_setting('play_store_link') != null)
                            <a href="{{ get_setting('play_store_link') }}" alt="{{ translate('Play Store Link') }}"
                                title="{{ translate('Play Store Link') }}" target="_blank" class="d-inline-block">
                                <img src="{{ static_asset('assets/img/app-play.png') }}"
                                    alt="{{ translate('Play Store Link') }}" class="mx-100 h-30px">
                            </a>
                        @endif
                        @if (get_setting('app_store_link') != null)
                            <a href="{{ get_setting('app_store_link') }}" alt="{{ translate('Play Store Link') }}"
                                title="{{ translate('Play Store Link') }}" target="_blank" class="d-inline-block">
                                <img src="{{ static_asset('assets/img/app-app.png') }}" class="mx-100 h-30px"
                                    alt="{{ translate('App Store Link') }}">
                            </a>
                        @endif
                        @if (get_setting('app_gallery_link') != null)
                            <a href="{{ get_setting('app_gallery_link') }}" alt="{{ translate('Play Store Link') }}"
                                title="{{ translate('Play Store Link') }}" target="_blank" class="d-inline-block">
                                <img src="{{ static_asset('assets/img/app-app-gallery.png') }}" class="mx-100 h-30px"
                                    alt="{{ translate('App Gallery Link') }}">
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-3 ml-xl-auto col-md-4 mr-0">
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        {{ translate('Contact Info') }}
                    </h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <span class="d-block opacity-30">{{ translate('Address') }}:</span>
                            <span
                                class="d-block opacity-70">{{ get_setting('contact_address', null, App::getLocale()) }}</span>
                        </li>
                        <li class="mb-2">
                            <span class="d-block opacity-30">{{ translate('Phone') }}:</span>
                            <span class="d-block opacity-70">{{ get_setting('contact_phone') }}</span>
                        </li>
                        <li class="mb-2">
                            <span class="d-block opacity-30">{{ translate('Email') }}:</span>
                            <span class="d-block opacity-70">{{ get_setting('contact_email') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        {{ get_setting('widget_one', null, App::getLocale()) }}
                    </h4>
                    <ul class="list-unstyled">
                        @if (get_setting('widget_one_labels', null, App::getLocale()) != null)
                            @foreach (json_decode(get_setting('widget_one_labels', null, App::getLocale()), true) as $key => $value)
                                <li class="mb-2">
                                    <a href="{{ json_decode(get_setting('widget_one_links'), true)[$key] }}"
                                        class="opacity-50 hov-opacity-100 text-reset" alt="{{ $value }}"
                                        title="{{ $value }}">
                                        {{ $value }}
                                    </a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-lg-2">
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        {{ translate('My Account') }}
                    </h4>
                    <ul class="list-unstyled">
                        @if (Auth::check())
                            <li class="mb-2">
                                <a class="opacity-50 hov-opacity-100 text-reset" alt="{{ translate('Logout') }}"
                                    title="{{ translate('Logout') }}" href="{{ route('logout') }}">
                                    {{ translate('Logout') }}
                                </a>
                            </li>
                        @else
                            <li class="mb-2">
                                <a class="opacity-50 hov-opacity-100 text-reset" alt="{{ translate('Login') }}"
                                    title="{{ translate('Login') }}" href="{{ route('user.login') }}">
                                    {{ translate('Login') }}
                                </a>
                            </li>
                        @endif
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" alt="{{ translate('Order History') }}"
                                title="{{ translate('Order History') }}"
                                href="{{ route('purchase_history.index') }}">
                                {{ translate('Order History') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" alt="{{ translate('My Wishlist') }}"
                                title="{{ translate('My Wishlist') }}" href="{{ route('wishlists.index') }}">
                                {{ translate('My Wishlist') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" alt="{{ translate('Track Order') }}"
                                title="{{ translate('Track Order') }}" href="{{ route('orders.track') }}">
                                {{ translate('Track Order') }}
                            </a>
                        </li>
                        @if (addon_is_activated('affiliate_system'))
                            <li class="mb-2">
                                <a class="opacity-50 hov-opacity-100 text-reset"
                                    alt="{{ translate('Be an affiliate partner') }}"
                                    title="{{ translate('Be an affiliate partner') }}"
                                    href="{{ route('affiliate.apply') }}">
                                    {{ translate('Be an affiliate partner') }}
                                </a>
                            </li>
                        @endif
                        @if (get_setting('vendor_system_activation') == 1)
                            <li class="mb-2">
                                <a href="{{ route('shops.create') }}" alt="{{ translate('Be a Seller') }}"
                                    title="{{ translate('Be a Seller') }}"
                                    class="text-reset btn btn-info btn-sm shadow-md" style="width:100%">
                                    {{ translate('Be a Seller') }}
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="pt-3 pb-7 pb-xl-3 bg-black text-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="text-center text-md-left text-light">
                    {!! get_setting('frontend_copyright_text', null, App::getLocale()) !!}
                </div>
            </div>
            <div class="col-lg-4">
                @if (get_setting('show_social_links'))
                    <ul class="list-inline my-3 my-md-0 social colored text-center">
                        @if (get_setting('facebook_link') != null)
                            <li class="list-inline-item">
                                <a href="{{ get_setting('facebook_link') }}" alt="ISYOL facebook"
                                    tite="ISYOL facebook" target="_blank" class="facebook">
                                    <i class="lab la-facebook-f"></i>
                                </a>
                            </li>
                        @endif
                        @if (get_setting('twitter_link') != null)
                            <li class="list-inline-item">
                                <a href="{{ get_setting('twitter_link') }}" alt="ISYOL twitter" tite="ISYOL twitter"
                                    target="_blank" class="twitter">
                                    <i class="lab la-twitter"></i>
                                </a>
                            </li>
                        @endif
                        @if (get_setting('instagram_link') != null)
                            <li class="list-inline-item">
                                <a href="{{ get_setting('instagram_link') }}" alt="ISYOL instagram"
                                    tite="ISYOL instagram" target="_blank" class="instagram">
                                    <i class="lab la-instagram"></i>
                                </a>
                            </li>
                        @endif
                        @if (get_setting('youtube_link') != null)
                            <li class="list-inline-item">
                                <a href="{{ get_setting('youtube_link') }}" alt="ISYOL youtube" tite="ISYOL youtube"
                                    target="_blank" class="youtube">
                                    <i class="lab la-youtube"></i>
                                </a>
                            </li>
                        @endif
                        @if (get_setting('linkedin_link') != null)
                            <li class="list-inline-item">
                                <a href="{{ get_setting('linkedin_link') }}" alt="ISYOL linkedin"
                                    tite="ISYOL linkedin" target="_blank" class="linkedin">
                                    <i class="lab la-linkedin-in"></i>
                                </a>
                            </li>
                        @endif
                        @if (get_setting('telegram_link') != null)
                            <li class="list-inline-item">
                                <a href="{{ get_setting('telegram_link') }}" alt="ISYOL telegram"
                                    tite="ISYOL telegram" target="_blank" class="telegram">
                                    <i class="lab la-telegram"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                @endif
            </div>
            <div class="col-lg-4">
                <div class="text-center text-md-right">
                    <ul class="list-inline mb-0">
                        @if (get_setting('payment_method_images') != null)
                            @foreach (explode(',', get_setting('payment_method_images')) as $key => $value)
                                <li class="list-inline-item">
                                    <img src="{{ uploaded_asset($value) }}"
                                        alt="{{ translate('Isyol Marketplace - Turkish Brands To The World') }}"
                                        height="30" class="mw-100 h-auto" style="max-height: 30px">
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom bg-white shadow-lg border-top rounded-top"
    style="box-shadow: 0px -1px 10px rgb(0 0 0 / 15%)!important; ">
    <div class="row align-items-center gutters-5">
        <div class="col">
            <a href="{{ route('home') }}" class="text-reset d-block text-center pb-2 pt-3"
                alt="{{ translate('Home') }}" title="{{ translate('Home') }}">
                <i
                    class="las la-home fs-20 opacity-60 {{ areActiveRoutes(['home'], 'opacity-100 text-primary') }}"></i>
                <span
                    class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['home'], 'opacity-100 fw-600') }}">{{ translate('Home') }}</span>
            </a>
        </div>
        <div class="col">
            <a href="{{ route('categories.all') }}" class="text-reset d-block text-center pb-2 pt-3"
                alt="{{ translate('Categories') }}" title="{{ translate('Categories') }}">
                <i
                    class="las la-list-ul fs-20 opacity-60 {{ areActiveRoutes(['categories.all'], 'opacity-100 text-primary') }}"></i>
                <span
                    class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['categories.all'], 'opacity-100 fw-600') }}">{{ translate('Categories') }}</span>
            </a>
        </div>
        @php
            if (auth()->user() != null) {
                $user_id = Auth::user()->id;
                $cart = \App\Models\Cart::where('user_id', $user_id)->get();
            } else {
                $temp_user_id = Session()->get('temp_user_id');
                if ($temp_user_id) {
                    $cart = \App\Models\Cart::where('temp_user_id', $temp_user_id)->get();
                }
            }
        @endphp
        <div class="col-auto">
            <a href="{{ route('cart') }}" class="text-reset d-block text-center pb-2 pt-3"
                alt="{{ translate('Cart') }}" title="{{ translate('Cart') }}">
                <span
                    class="align-items-center bg-primary border border-white border-width-4 d-flex justify-content-center position-relative rounded-circle size-50px"
                    style="margin-top: -33px;box-shadow: 0px -5px 10px rgb(0 0 0 / 15%);border-color: #fff !important;">
                    <img src="{{ static_asset('assets/img/icon-white-isyol.png') }}"
                        alt="{{ translate('Isyol Marketplace - Turkish Brands To The World') }}"
                        class="footer-isyol-img-class" />
                </span>
                <span
                    class="d-block mt-1 fs-10 fw-600 opacity-60 {{ areActiveRoutes(['cart'], 'opacity-100 fw-600') }}">
                    {{ translate('Cart') }}
                    @php
                        $count = isset($cart) && count($cart) ? count($cart) : 0;
                    @endphp
                    (<span class="cart-count">{{ $count }}</span>)
                </span>
            </a>
        </div>
        <div class="col">
            <a href="{{ route('all-notifications') }}" class="text-reset d-block text-center pb-2 pt-3"
                alt="{{ translate('Notifications') }}" title="{{ translate('Notifications') }}">
                <span class="d-inline-block position-relative px-2">
                    <i
                        class="las la-bell fs-20 opacity-60 {{ areActiveRoutes(['all-notifications'], 'opacity-100 text-primary') }}"></i>
                    @if (Auth::check() && count(Auth::user()->unreadNotifications) > 0)
                        <span
                            class="badge badge-sm badge-dot badge-circle badge-primary position-absolute absolute-top-right"
                            style="right: 7px;top: -2px;"></span>
                    @endif
                </span>
                <span
                    class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['all-notifications'], 'opacity-100 fw-600') }}">{{ translate('Notifications') }}</span>
            </a>
        </div>
        <div class="col">
            @if (Auth::check())
                @if (isAdmin())
                    <a href="{{ route('admin.dashboard') }}" class="text-reset d-block text-center pb-2 pt-3"
                        alt="{{ translate('Account') }}" title="{{ translate('Account') }}">
                        <span class="d-block mx-auto">
                            @if (Auth::user()->photo != null)
                                <img src="{{ custom_asset(Auth::user()->avatar_original) }}"
                                    class="rounded-circle size-20px">
                            @else
                                <img src="{{ static_asset('assets/img/avatar-place.png') }}"
                                    alt="{{ translate('Account') }}" class="rounded-circle size-20px">
                            @endif
                        </span>
                        <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                    </a>
                @else
                    <a href="javascript:void(0)"
                        class="text-reset d-block text-center pb-2 pt-3 mobile-side-nav-thumb"
                        data-toggle="class-toggle" data-backdrop="static" data-target=".aiz-mobile-side-nav">
                        <span class="d-block mx-auto">
                            @if (Auth::user()->photo != null)
                                <img src="{{ custom_asset(Auth::user()->avatar_original) }}"
                                    class="rounded-circle size-20px">
                            @else
                                <img src="{{ static_asset('assets/img/avatar-place.png') }}"
                                    alt="{{ translate('Account') }}" class="rounded-circle size-20px">
                            @endif
                        </span>
                        <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                    </a>
                @endif
            @else
                <a href="{{ route('user.login') }}" class="text-reset d-block text-center pb-2 pt-3"
                    alt="{{ translate('Account') }}" title="{{ translate('Account') }}">
                    <span class="d-block mx-auto">
                        <img src="{{ static_asset('assets/img/avatar-place.png') }}"
                            alt="{{ translate('Account') }}" class="rounded-circle size-20px">
                    </span>
                    <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                </a>
            @endif
        </div>
    </div>
</div>
@if (Auth::check() && !isAdmin())
    <div class="aiz-mobile-side-nav collapse-sidebar-wrap sidebar-xl d-xl-none z-1035">
        <div class="overlay dark c-pointer overlay-fixed" data-toggle="class-toggle" data-backdrop="static"
            data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb"></div>
        <div class="collapse-sidebar bg-white">
            @include('frontend.inc.user_side_nav')
        </div>
    </div>
@endif
