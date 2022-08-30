@extends('backend.layouts.layout')

@section('content')
    <style>
        @media (max-width: 600.98px) {
            @keyframes animatedBackground {
                from {
                    background-position: 0 0;
                }

                to {
                    background-position: 100% 0;
                }
            }

            #animate-area {
                height: 100%;

                @if (get_setting('admin_login_background') != null)
background-image: url('{{ uploaded_asset(get_setting('admin_login_background')) }}');
                @else
background-image: url('{{ static_asset('assets/img/admin-login-bg.png') }}');
                @endif

                background-position: 0px 0px;
                background-repeat: repeat-x;
                animation: animatedBackground 40s linear infinite alternate;
            }
        }

        @media (min-width: 600.98px) {
            @keyframes animatedBackground {
                from {
                    background-position: 0 0;
                }

                to {
                    background-position: 100% 0;
                }
            }

            #animate-area {
                height: 100%;

                @if (get_setting('admin_login_background') != null)
background-image: url('{{ uploaded_asset(get_setting('admin_login_background')) }}');
                @else
background-image: url('{{ static_asset('assets/img/admin-login-bg.png') }}');
                @endif
                
                background-position: 0px 0px;
                background-repeat: repeat-x;
                animation: animatedBackground 10s linear infinite alternate;
            }
        }
    </style>
    <div class="h-100 bg-cover bg-center py-5 d-flex align-items-center" id="animate-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-4">

                    <div class="card text-left">
                        <div class="card-body bg-dark">
                            <div class="mb-5 text-center">
                                @if (get_setting('system_logo_white') != null)
                                    <img src="{{ uploaded_asset(get_setting('system_logo_white')) }}" class="mw-100 mb-4">
                                @else
                                    <img src="{{ static_asset('assets/img/isyol-logo-white.png') }}" class="mw-100 mb-4">
                                @endif
                                <h3 class="h3 text-light mb-0">
                                    {{ translate('Login to your account.') }}
                                </h3>
                            </div>
                            <form class="pad-hor" method="POST" role="form" action="{{ route('login') }}"
                                autocomplete="off">
                                @csrf
                                <div class="form-group">
                                    <input autocomplete="off" id="email" type="email"
                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                        value="{{ old('email') }}" required autofocus
                                        placeholder="{{ translate('Email') }}">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input autocomplete="off" id="password" type="password"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password" required placeholder="{{ translate('Password') }}">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <div class="text-left">
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="remember" id="remember"
                                                    {{ old('remember') ? 'checked' : '' }}>
                                                <span class="text-light">{{ translate('Remember Me') }}</span>
                                                <span class="aiz-square-check bg-light"></span>
                                            </label>
                                        </div>
                                    </div>
                                    @if (env('MAIL_USERNAME') != null && env('MAIL_PASSWORD') != null)
                                        <div class="col-sm-6">
                                            <div class="text-right">
                                                <a href="{{ route('password.request') }}"
                                                    class="text-reset fs-14">{{ translate('Forgot password ?') }}</a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    {{ translate('Login') }}
                                </button>
                            </form>
                            @if (env('DEMO_MODE') == 'On')
                                <div class="mt-4">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>demo@isyol.com</td>
                                                <td>123456</td>
                                                <td><button class="btn btn-info btn-xs"
                                                        onclick="autoFill()">{{ translate('Copy') }}</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        function autoFill() {
            $('#email').val('demo@isyol.com');
            $('#password').val('123456');
        }
    </script>
@endsection
