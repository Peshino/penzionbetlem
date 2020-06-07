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
                            budova byla postavena v roce 2020 v duchu původní
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
                        <p class="mt-3">
                            <p class="text-center">Přijměte vřelé pozvání k pobytu.</p>
                            <p class="text-center"><strong>David Navrátil</strong></p>
                            <p class="text-center">
                                <small>
                                    <em>
                                        majitel - <span class="text-uppercase">{{ config('variants.name') }}
                                            BETLÉM</span>
                                    </em>
                                </small>
                            </p>
                        </p>
                    </div>
                </div>
            </div>

            <div class="middle-part">
                <div class="pb-2">
                    <h3>@lang('messages.accommodation')</h3>
                </div>
                <div class="row">
                    <div class="col-lg">
                        <a href="{{ route(config('variants.route_prefix_dash') . 'accommodation') }}">
                            <div class="image-hover">
                                <img src="{{ asset('img/' . config('variants.name') . '_accommodation_1.png') }}"
                                    class="align-middle img-fluid rounded"
                                    alt="{{ config('variants.name') }} @lang('messages.accommodation') 1">
                            </div>
                        </a>
                        <div class="text-center pt-3 pb-1">
                            <h4>@lang('messages.accommodation_type_1')</h4>
                        </div>
                    </div>
                    <div class="col-lg">
                        <a href="{{ route(config('variants.route_prefix_dash') . 'accommodation') }}">
                            <div class="image-hover">
                                <img src="{{ asset('img/' . config('variants.name') . '_accommodation_2.png') }}"
                                    class="align-middle img-fluid rounded"
                                    alt="{{ config('variants.name') }} @lang('messages.accommodation') 2">
                            </div>
                        </a>
                        <div class="text-center pt-3 pb-1">
                            <h4>@lang('messages.accommodation_type_2')</h4>
                        </div>
                    </div>
                    <div class="col-lg">
                        <a href="{{ route(config('variants.route_prefix_dash') . 'accommodation') }}">
                            <div class="image-hover">
                                <img src="{{ asset('img/' . config('variants.name') . '_accommodation_3.png') }}"
                                    class="align-middle img-fluid rounded"
                                    alt="{{ config('variants.name') }} @lang('messages.accommodation') 3">
                            </div>
                        </a>
                        <div class="text-center pt-3 pb-1">
                            <h4>@lang('messages.accommodation_type_3')</h4>
                        </div>
                    </div>
                </div>
            </div>

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
                    <div class="col-lg text-center home-contacts">
                        <div class="pb-4">
                            <img src="{{ asset('img/logo_' . config('variants.name') . '_contacts.png') }}"
                                class="align-middle img-fluid" alt="{{ config('variants.name') }} logo">
                        </div>
                        <div class="pb-5">
                            <h4 class="text-uppercase">
                                <strong>
                                    {{ config('variants.name') }} BETLÉM
                                </strong>
                            </h4>
                            <p class="py-1">
                                <i class="fas fa-map-marker-alt"></i> &nbsp;
                                @lang('messages.contacts_' . config('variants.name') . '_address')
                            </p>
                        </div>
                        <div class="pb-4">
                            <h4>
                                <strong>
                                    @lang('messages.contacts_' . config('variants.name') . '_company')
                                </strong>
                            </h4>
                            <p class="py-1">
                                <i class="fas fa-map-marker-alt"></i> &nbsp;
                                @lang('messages.contacts_' . config('variants.name') . '_company_address')
                            </p>
                            <p class="py-1">
                                <i class="fas fa-phone-alt"></i> &nbsp;
                                @lang('messages.contacts_' . config('variants.name') . '_company_telephone')
                            </p>
                            <p class="py-1">
                                <i class="far fa-id-badge"></i> &nbsp;
                                @lang('messages.contacts_' . config('variants.name') . '_company_ic')
                            </p>
                        </div>
                        <div>
                            <p>
                                <a href="{{ route(config('variants.route_prefix_dash') . 'contacts') }}"><span
                                        class="align-middle">@lang('messages.contacts')</span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection