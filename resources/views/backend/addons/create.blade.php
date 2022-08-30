@extends('backend.layouts.app')

@section('content')
    <div class="">
        <div class="row ">
            <div class="col-md-6">
                <div class="nav border-bottom aiz-nav-tabs">
                    <a class="p-3 fs-16 text-white" href="{{ route('addons.index') }}">
                        {{ translate('Installed ISYOL-PRO-MODULE') }}
                    </a>
                    <a class="p-3 fs-16 show active text-white" data-toggle="tab" href="#installed"
                        href="{{ route('addons.create') }}">
                        {{ translate('Install/Update ISYOL-PRO-MODULE') }}
                    </a>
                </div>
            </div>
            <div class="col-md-6 mt-3 mt-sm-0 text-center text-md-right text-white">
                <a href="https://isyol.com/go/support" target="_blank" class="btn btn-primary">
                    {{ translate('Support Team') }}
                </a>
            </div>
        </div>
    </div>
    <br>
    <div class="tab-content">
        <div class="tab-pane fade in active show" id="installed">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0 h6">{{ translate('Install/Update ISYOL-PRO-MODULE') }}</h5>
                        </div>
                        <form class="form-horizontal" action="{{ route('addons.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-from-label"
                                        for="purchase_code">{{ translate('Purchase code') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="purchase_code" name="purchase_code" class="form-control"
                                            autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-from-label"
                                        for="addon_zip">{{ translate('Zip File') }}</label>
                                    <div class="col-sm-9">
                                        <div class="custom-file">
                                            <label class="custom-file-label">
                                                <input type="file" id="addon_zip" name="addon_zip"
                                                    class="custom-file-input" required>
                                                <span class="custom-file-name">{{ translate('Choose file') }}</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 text-right">
                                    <button type="submit"
                                        class="btn btn-primary">{{ translate('Install/Update') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
