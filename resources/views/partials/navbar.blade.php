<div class="navbar-background-{{ config('variants.name') }} shadow">
    <nav class="navbar navbar-expand-lg navbar-icon-top navbar-dark">
        <div class="container text-center">
            <button class="navbar-toggler collapsed mx-auto" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="@lang('messages.toggle_navigation')">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route(config('variants.route_prefix_dash') . 'accommodation') }}">
                            <span class="align-middle">@lang('messages.accommodation')</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route(config('variants.route_prefix_dash') . 'price-list') }}">
                            <span class="align-middle">@lang('messages.price_list')</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route(config('variants.route_prefix_dash') . 'eating') }}">
                            <span class="align-middle">@lang('messages.eating')</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route(config('variants.route_prefix_dash') . 'accommodation') }}">
                            <span class="align-middle">@lang('messages.photo_gallery')</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route(config('variants.route_prefix_dash') . 'accommodation') }}">
                            <span class="align-middle">@lang('messages.tips_for_trips')</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route(config('variants.route_prefix_dash') . 'accommodation') }}">
                            <span class="align-middle">@lang('messages.reservation')</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route(config('variants.route_prefix_dash') . 'partners') }}">
                            <span class="align-middle">@lang('messages.partners')</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route(config('variants.route_prefix_dash') . 'contacts') }}">
                            <span class="align-middle">@lang('messages.contacts')</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container variants-menu">
        <div class="row justify-content-md-center">
            <div class="col text-center {{ config('variants.variant_1.name') }}-route-prefix">
                <a class="nav-link" href="{{ route(config('variants.variant_1.route_prefix_dash') . 'home') }}"><span
                        class="align-middle">@lang('messages.penzion_name')</span></a>
            </div>
            <div class="col-md-auto position-absolute z-index-10000 navbar-logo">
                <a href="{{ route(config('variants.route_prefix_dash') . 'home') }}">
                    <img src="{{ asset('img/logo_' . config('variants.name') . '.png') }}"
                        alt="{{ config('variants.name') }} logo">
                </a>
            </div>
            <div class="col text-center {{ config('variants.variant_2.name') }}-route-prefix">
                <a class="nav-link" href="{{ route(config('variants.variant_2.route_prefix_dash') . 'home') }}"><span
                        class="align-middle">@lang('messages.chalupy_name')</span></a>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script>
    var siteVariant2RoutePrefix = '{{ env('SITE_VARIANT_2_ROUTE_PREFIX') }}', 
        actualUrl = window.location.href;

        if (actualUrl.indexOf(siteVariant2RoutePrefix) >= 0) {
            $('.{{ config("variants.variant_2.name") }}-route-prefix').addClass('active');
        } else {
            $('.{{ config("variants.variant_1.name") }}-route-prefix').addClass('active');
        }
</script>
@endsection