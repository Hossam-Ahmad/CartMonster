@extends('backend.layouts.app')

@section('content')
    <div class="">
        <div class="row ">
            <div class="col-md-6">
                <div class="nav border-bottom aiz-nav-tabs">
                    <a class="p-3 fs-16 text-white show active" data-toggle="tab" href="#installed">
                        {{ translate('Installed ISYOL-PRO-MODULE') }}
                    </a>
                    <a class="p-3 fs-16 text-white" href="{{ route('addons.create') }}">
                        {{ translate('Install/Update ISYOL-PRO-MODULE') }}
                    </a>
                </div>
            </div>
            <div class="col-md-6 mt-3 mt-sm-0 text-center text-md-right">
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
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-group">
                                @forelse(\App\Models\Addon::all() as $key => $addon)
                                    <li class="list-group-item">
                                        <div class="align-items-center d-flex flex-column flex-md-row">
                                            <img class="h-60px mb-3 mb-md-0" src="{{ static_asset($addon->image) }}"
                                                alt="Image">
                                            <div class="mr-md-3 ml-md-5">
                                                <h4 class="fs-16 fw-600">{{ ucfirst($addon->name) }}</h4>
                                            </div>
                                            <div class="ml-auto mr-0">
                                                <label class="aiz-switch mb-0">
                                                    <input type="checkbox"
                                                        onchange="updateStatus(this, {{ $addon->id }})"
                                                        <?php if ($addon->activated) {
                                                            echo 'checked';
                                                        } ?>>
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                @empty
                                    <li class="list-group-item">
                                        <div class="text-center">
                                            <img class="mw-100 h-200px"
                                                src="{{ static_asset('assets/img/isyol-nothing.svg') }}" alt="Image">
                                            <h5 class="mb-0 h5 mt-3">{{ translate('No ISYOL-PRO-MODULE Installed') }}</h5>
                                        </div>
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        function updateStatus(el, id) {
            if ($(el).is(':checked')) {
                var status = 1;
            } else {
                var status = 0;
            }
            $.post('{{ route('addons.activation') }}', {
                _token: '{{ csrf_token() }}',
                id: id,
                status: status
            }, function(data) {
                if (data == 1) {
                    AIZ.plugins.notify('success', '{{ translate('Status updated successfully') }}');
                } else {
                    AIZ.plugins.notify('danger', '{{ translate('Something went wrong') }}');
                }
            });
        }
    </script>
@endsection
