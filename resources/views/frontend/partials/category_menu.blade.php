<div class="aiz-category-menu bg-white rounded shadow-sm">
    <div class="bg-primary
    rounded-top p-3 d-flex align-items-center justify-content-center">
    <a href="{{ route('categories.all') }}">
        <span class="fw-600 fs-16 mr-2 text-white">
            {{ translate('Categories') }}
        </span> 
    </a>
</div>
<ul class="list-unstyled categories no-scrollbar py-2 mb-0 text-left">
    @foreach (\App\Models\Category::where('level', 0)->orderBy('order_level', 'desc')->get()->take(9) as $key => $category)
        <li class="category-nav-element border-bottom" data-id="{{ $category->id }}">
            <a href="{{ route('products.category', $category->slug) }}"
                class="text-truncate text-reset py-2 px-3 d-block">
                <img class="cat-image lazyload mr-2 opacity-100"
                    src="{{ static_asset('assets/img/isyol-placeholder.png') }}"
                    data-src="{{ uploaded_asset($category->icon) }}" width="16"
                    alt="{{ $category->getTranslation('name') }}">
                <span class="cat-name">{{ $category->getTranslation('name') }}</span>
            </a>
            @if (count(\App\Utility\CategoryUtility::get_immediate_children_ids($category->id)) > 0)
                <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                    <div class="c-preloader text-center absolute-center">
                        <i class="las la-spinner la-spin la-3x opacity-70"></i>
                    </div>
                </div>
            @endif
        </li>
    @endforeach
    <li class="category-nav-element border-bottom">
        <a href="{{ route('flash-deals') }}" class="text-truncate text-reset py-2 px-3 d-block">
            <img class="cat-image lazyload mr-2 opacity-100"
                src="{{ static_asset('assets/img/isyol-placeholder.png') }}"
                data-src="{{ static_asset('assets/img/flash-sale.png') }}" width="16"
                alt="{{ translate('Flash Deal') }}">
            <span class="cat-name">{{ translate('Flash Deal') }}</span>
        </a>
    </li>
    <li class="category-nav-element">
        <a href="{{ route('coupons.all') }}" class="text-truncate text-reset py-2 px-3 d-block">
            <img class="cat-image lazyload mr-2 opacity-100"
                src="{{ static_asset('assets/img/isyol-placeholder.png') }}"
                data-src="{{ static_asset('assets/img/coupon.png') }}" width="16"
                alt="{{ translate('Coupons') }}">
            <span class="cat-name">{{ translate('Coupons') }}</span>
        </a>
    </li>
</ul>
</div>
