@extends('layouts.master')

@section('title')
@lang('messages.' . config('variants.name') . '_name')
@endsection

@section('content')
<div class="card mb-4">
    <div class="card-body">
        <div class="content">
            <div class="first-part">
                <div class="row">
                    <div class="col-lg pb-3">
                        <img src="{{ asset('img/' . config('variants.name') . '_home.png') }}"
                            class="align-middle img-fluid rounded" alt="{{ config('variants.name') }}">
                    </div>
                    <div class="col-lg">
                        <p class="text-center pt-2 about-us-text">
                            @if ($variant1)
                            Město Hlinsko leží 582 m nad mořem na úpatí Českomoravské vrchoviny v chráněné krajinné
                            oblasti Žďárské vrchy. V jeho okolí jsou překrásné přírodní scenérie, jenž jsou dosud
                            nenarušené
                            civilizací. Ovzduší na hlinecku patří k nejčistším v České republice.
                            <span class="text-uppercase"><strong>{{ config('variants.name') }} BETLÉM</strong></span> je
                            umístěn v centru města Hlinska ve stejnojmenném skanzenu, který je součástí Souboru
                            lidových staveb Vysočina. Z části roubená a z části zděná
                            budova byla postavena v roce 2004 v duchu původní
                            horácké architektury.
                            @endif
                            @if ($variant2)
                            Město Hlinsko leží 582 m nad mořem na úpatí Českomoravské vrchoviny v chráněné krajinné
                            oblasti Žďárské vrchy. V jeho okolí jsou překrásné přírodní scenérie, jenž jsou dosud
                            nenarušené
                            civilizací. Ovzduší na hlinecku patří k nejčistším v České republice.
                            <span class="text-uppercase"><strong>{{ config('variants.name') }} BETLÉM</strong></span>
                            jsou
                            umístěny v centru města Hlinska ve stejnojmenném skanzenu, který je součástí Souboru
                            lidových staveb Vysočina. Z části roubené a z části zděné
                            budovy byly postaveny v roce 2020 v duchu původní
                            horácké architektury.
                            @endif
                        </p>
                        <p class="mt-4">
                            <p class="text-center">Přijměte vřelé pozvání k pobytu.</p>
                            @if ($variant1)
                            <p class="text-center"><strong>personál Penzionu Betlém</strong></p>
                            @endif
                            @if ($variant2)
                            <p class="text-center"><strong>personál Chalupy Betlém</strong></p>
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <div class="middle-part">
                <div class="pb-2">
                    <h3>@lang('messages.accommodation')</h3>
                </div>
                <div class="row">
                    <div class="col-lg text-center">
                        <a href="{{ route(config('variants.route_prefix_dash') . 'accommodation') }}">
                            <img src="{{ asset('img/' . config('variants.name') . '_accommodation_1.png') }}"
                                class="align-middle img-fluid rounded hover-shadow homepage-gallery"
                                alt="{{ config('variants.name') }} @lang('messages.accommodation') 1">
                        </a>
                        <div class="pt-3 pb-1">
                            @if ($variant1)
                            <h4>@lang('messages.accommodation_type_1')</h4>
                            @endif
                            @if ($variant2)
                            <h4>@lang('messages.accommodation_type_1')</h4>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg text-center">
                        <a href="{{ route(config('variants.route_prefix_dash') . 'accommodation') }}">
                            <img src="{{ asset('img/' . config('variants.name') . '_accommodation_2.png') }}"
                                class="align-middle img-fluid rounded hover-shadow homepage-gallery"
                                alt="{{ config('variants.name') }} @lang('messages.accommodation') 2">
                        </a>
                        <div class="pt-3 pb-1">
                            @if ($variant1)
                            <h4>@lang('messages.accommodation_type_2')</h4>
                            @endif
                            @if ($variant2)
                            <h4>@lang('messages.accommodation_type_1')</h4>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg text-center">
                        <a href="{{ route(config('variants.route_prefix_dash') . 'accommodation') }}">
                            <img src="{{ asset('img/' . config('variants.name') . '_accommodation_3.png') }}"
                                class="align-middle img-fluid rounded hover-shadow homepage-gallery"
                                alt="{{ config('variants.name') }} @lang('messages.accommodation') 3">
                        </a>
                        <div class="pt-3 pb-1">
                            @if ($variant1)
                            <h4>@lang('messages.accommodation_type_3')</h4>
                            @endif
                            @if ($variant2)
                            <h4>@lang('messages.accommodation_type_4')</h4>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            @if ($variant1)
            <div class="middle-part">
                <div class="pb-2">
                    <h3>@lang('messages.equipment')</h3>
                </div>

                <div class="grid-container-fluid equipment">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <p><i class="fas fa-fw fa-home"></i>&nbsp;ubytování až 24 osob</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p><i class="fas fa-fw fa-shower"></i>&nbsp;koupelny na pokojích</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p><i class="fas fa-fw fa-pump-soap"></i>&nbsp;hygienické prostředky</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p><i class="fas fa-fw fa-tv"></i>&nbsp;LED TV</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <p><i class="fas fa-fw fa-chair"></i>&nbsp;venkovní sezení</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p><i class="fas fa-fw fa-child"></i>&nbsp;venkovní dětské hřiště</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p><i class="fas fa-fw fa-hamburger"></i>&nbsp;venkovní grill</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p><i class="fas fa-fw fa-wifi"></i>&nbsp;wifi v celém objektu</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <p><i class="fas fa-fw fa-utensils"></i>&nbsp;vybavená kuchyň</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p><i class="fas fa-fw fa-wine-bottle"></i>&nbsp;vinotéka</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p><i class="fas fa-fw fa-glass-cheers"></i>&nbsp;minibar</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p><i class="fas fa-fw fa-coffee"></i>&nbsp;kávovar</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <p><i class="fas fa-fw fa-users"></i>&nbsp;společenská místnost</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p><i class="fas fa-fw fa-dice-five"></i>&nbsp;společenské a dětské hry</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p><i class="fas fa-fw fa-swimming-pool"></i>&nbsp;koupaliště 500m</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p><i class="fas fa-fw fa-swimmer"></i>&nbsp;krytý bazén 500m</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <p><i class="fas fa-fw fa-skiing"></i>&nbsp;lyžárna</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p><i class="fas fa-fw fa-bicycle"></i>&nbsp;kolárna</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p><i class="fas fa-fw fa-tshirt"></i>&nbsp;pračka</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p><i class="fas fa-fw fa-box"></i>&nbsp;sušička</p>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <div class="last-part">
                <div class="pb-2">
                    <h3>@lang('messages.contacts')</h3>
                </div>
                <div class="row">
                    <div class="col-lg pb-3 facebook-plugin">
                        <div class="fb-page img-responsive" data-href="https://www.facebook.com/penzionbetlemhlinsko/"
                            data-tabs="timeline" data-width="500" data-height="" data-small-header="false"
                            data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                            <blockquote cite="https://www.facebook.com/penzionbetlemhlinsko/"
                                class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/penzionbetlemhlinsko/">Penzion Betlém</a>
                            </blockquote>
                        </div>
                    </div>
                    <div class="col-lg text-center contacts">
                        <div class="pb-4">
                            <img src="{{ asset('img/logo_' . config('variants.name') . '_contacts.png') }}"
                                class="align-middle img-fluid" alt="{{ config('variants.name') }} logo">
                        </div>
                        <div class="mb-3">
                            <h5>provozovna</h5>
                            <h4 class="text-uppercase">
                                <strong>
                                    {{ config('variants.name') }} BETLÉM
                                </strong>
                            </h4>
                            <p class="py-1">
                                <i class="fas fa-fw fa-map-marker-alt"></i> &nbsp;
                                @lang('messages.contacts_' . config('variants.name') . '_address')
                            </p>
                            <p class="py-1">
                                <i class="far fa-envelope"></i> &nbsp;
                                <span class="email-replace">@lang('messages.contacts_' . config('variants.name') .
                                    '_email')</span>
                            </p>
                            <p class="py-1">
                                <i class="fas fa-fw fa-phone-alt"></i> &nbsp;
                                @lang('messages.contacts_' . config('variants.name') . '_telephone')
                            </p>
                        </div>
                        <div class="mb-2 text-secondary">
                            <h5>provozovatel</h5>
                            <h4>
                                <strong>
                                    @lang('messages.contacts_' . config('variants.name') . '_company_name')
                                </strong>
                            </h4>
                            <p class="py-1">
                                <i class="fas fa-fw fa-map-marker-alt"></i> &nbsp;
                                @lang('messages.contacts_' . config('variants.name') . '_company_address')
                            </p>
                            <p class="py-1">
                                <i class="far fa-id-badge"></i> &nbsp;
                                @lang('messages.contacts_' . config('variants.name') . '_company_ic')
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>
                                    <a href="{{ route(config('variants.route_prefix_dash') . 'contacts') }}">
                                        <span class="align-middle text-uppercase">
                                            @lang('messages.contacts')
                                        </span>
                                    </a>
                                </strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection