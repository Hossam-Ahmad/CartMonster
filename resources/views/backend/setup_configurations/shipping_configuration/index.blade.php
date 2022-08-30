@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{ translate('Select Shipping Method') }}</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('shipping_configuration.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="type" value="shipping_type">
                        <div class="radio mar-btm">
                            <input id="product-shipping" class="magic-radio" type="radio" name="shipping_type"
                                value="product_wise_shipping" <?php if (get_setting('shipping_type') == 'product_wise_shipping') {
                                    echo 'checked';
                                } ?>>
                            <label for="product-shipping">
                                <span>{{ translate('Product Wise Shipping Cost') }}</span>
                                <span></span>
                            </label>
                        </div>
                        <div class="radio mar-btm">
                            <input id="flat-shipping" class="magic-radio" type="radio" name="shipping_type"
                                value="flat_rate" <?php if (get_setting('shipping_type') == 'flat_rate') {
                                    echo 'checked';
                                } ?>>
                            <label for="flat-shipping">{{ translate('Flat Rate Shipping Cost') }}</label>
                        </div>
                        <div class="radio mar-btm">
                            <input id="seller-shipping" class="magic-radio" type="radio" name="shipping_type"
                                value="seller_wise_shipping" <?php if (get_setting('shipping_type') == 'seller_wise_shipping') {
                                    echo 'checked';
                                } ?>>
                            <label for="seller-shipping">{{ translate('Seller Wise Flat Shipping Cost') }}</label>
                        </div>
                        <div class="radio mar-btm">
                            <input id="area-shipping" class="magic-radio" type="radio" name="shipping_type"
                                value="area_wise_shipping" <?php if (get_setting('shipping_type') == 'area_wise_shipping') {
                                    echo 'checked';
                                } ?>>
                            <label for="area-shipping">{{ translate('Area Wise Flat Shipping Cost') }}</label>
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-sm btn-primary">{{ translate('Save') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{ translate('Flat Rate Cost') }}</h5>
                </div>
                <form action="{{ route('shipping_configuration.update') }}" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        <input type="hidden" name="type" value="flat_rate_shipping_cost">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <input class="form-control" type="text" name="flat_rate_shipping_cost"
                                    value="{{ get_setting('flat_rate_shipping_cost') }}">
                            </div>
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-sm btn-primary">{{ translate('Save') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{ translate('Shipping Cost for Admin Products') }}</h5>
                </div>
                <form action="{{ route('shipping_configuration.update') }}" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        <input type="hidden" name="type" value="shipping_cost_admin">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <input class="form-control" type="text" name="shipping_cost_admin"
                                    value="{{ get_setting('shipping_cost_admin') }}">
                            </div>
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-sm btn-primary">{{ translate('Save') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
