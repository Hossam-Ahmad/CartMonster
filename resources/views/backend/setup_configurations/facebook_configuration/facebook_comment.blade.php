@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{ translate('Facebook Comment Setting') }}</h5>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('facebook-comment.update') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-5">
                                <label class="col-from-label">{{ translate('Facebook Comment') }}</label>
                            </div>
                            <div class="col-md-7">
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    @php
                                        $facebook_comment_data = \App\Models\isyolSetting::where('type', 'facebook_comment')->first();
                                    @endphp
                                    <input value="1" name="facebook_comment" type="checkbox"
                                        @if ($facebook_comment_data && $facebook_comment_data->value == 1) checked @endif>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <input type="hidden" name="types[]" value="FACEBOOK_APP_ID">
                            <div class="col-md-5">
                                <label class="col-from-label">{{ translate('Facebook App ID') }}</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="FACEBOOK_APP_ID"
                                    value="{{ env('FACEBOOK_APP_ID') }}" placeholder="{{ translate('Facebook App ID') }}"
                                    required>
                            </div>
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-sm btn-primary">{{ translate('Save') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
