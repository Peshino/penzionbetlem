@extends('layouts.master')

@section('title')
@lang('messages.eating') | @lang('messages.' . config('variants.name') . '_name')
@endsection

@section('content')
<div class="card mb-4">
    <div class="card-body">
        <div class="content">
            <div class="pb-4">
                <h3>@lang('messages.eating')</h3>
            </div>
            @if ($variant1)
            <div class="first-part">
                <div class="pb-2">
                    <h4 class="color-{{ config('variants.name') }}">vlastní - společná zařízená kuchyňka</h4>
                </div>
                <div class="row">
                    <div class="col-lg">
                        <ul class="pl-4">
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; kuchyňská linka
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; dvě rohové masivní lavice pro 20 osob
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; kávovar Expresso
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; elektrický dvouplotýnkový vařič
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; dvě varné konvice
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; topinkovač
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; dvě ledničky
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; mikrovlnná trouba
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; černé i bílé nádobí
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; příbory a sklenice
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; TV s nekódovaným satelitním příjmem
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg pb-2">
                        <a href="{{ asset('img/' . config('variants.name') . '_eating_1.png') }}" data-toggle="lightbox"
                            data-gallery="gallery">
                            <img src="{{ asset('img/' . config('variants.name') . '_eating_1.png') }}"
                                class="align-middle img-fluid rounded hover-shadow"
                                alt="{{ config('variants.name') }} - kuchyňka">
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="{{ asset('img/' . config('variants.name') . '_eating_2.png') }}" data-toggle="lightbox"
                            data-gallery="gallery">
                            <img src="{{ asset('img/' . config('variants.name') . '_eating_2.png') }}"
                                class="align-middle img-fluid rounded hover-shadow"
                                alt="{{ config('variants.name') }} - kuchyňka">
                        </a>
                    </div>
                </div>
            </div>
            <div class="middle-part">
                <div class="pb-2">
                    <h4 class="color-{{ config('variants.name') }}">veřejné stravování</h4>
                </div>
                <div class="row">
                    <div class="col-lg pb-2 text-justify">
                        <p>
                            V areálu skanzenu se nachází restaurace <strong>Hospoda u sv. Huberta</strong>.
                        </p>
                        <p>
                            Podávají zde jídla české
                            kuchyně.
                        </p>
                        <p>
                            V restauraci je celkem cca 80 míst a v letních měsících 60 míst na venkovní
                            zahrádce.
                        </p>
                        <p>
                            Restaurace je nekuřácká.
                        </p>
                        <p>
                            Vzdálenost od penzionu je 50 metrů.
                        </p>
                    </div>
                    <div class="col-lg pb-2">
                        <a href="{{ asset('img/' . config('variants.name') . '_eating_3.png') }}" data-toggle="lightbox"
                            data-gallery="gallery">
                            <img src="{{ asset('img/' . config('variants.name') . '_eating_3.png') }}"
                                class="align-middle img-fluid rounded hover-shadow" alt="Hospoda u Sv. Huberta">
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="{{ asset('img/' . config('variants.name') . '_eating_4.png') }}" data-toggle="lightbox"
                            data-gallery="gallery">
                            <img src="{{ asset('img/' . config('variants.name') . '_eating_4.png') }}"
                                class="align-middle img-fluid rounded hover-shadow" alt="Hospoda u Sv. Huberta">
                        </a>
                    </div>
                </div>
            </div>
            <div class="last-part">
                <p>Pro více informací o cenách stravování přejděte do sekce
                    <strong>
                        <a href="{{ route(config('variants.route_prefix_dash') . 'price-list') }}">
                            <span class="text-uppercase">
                                @lang('messages.price_list')
                            </span>
                        </a>
                    </strong>
                </p>
            </div>
            @endif

            @if ($variant2)
            <div class="first-part">
                <div class="pb-2">
                    <h4 class="color-{{ config('variants.name') }}">vlastní - společná zařízená kuchyňka</h4>
                </div>
                <div class="row">
                    <div class="col-lg">
                        <ul class="pl-4">
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; kuchyňská linka
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; dvě rohové masivní lavice pro 20 osob
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; kávovar Expresso
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; elektrický dvouplotýnkový vařič
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; dvě varné konvice
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; topinkovač
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; dvě ledničky
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; mikrovlnná trouba
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; černé i bílé nádobí
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; příbory a sklenice
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; TV s nekódovaným satelitním příjmem
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg pb-2">
                        <a href="{{ asset('img/' . config('variants.name') . '_eating_1.png') }}" data-toggle="lightbox"
                            data-gallery="gallery">
                            <img src="{{ asset('img/' . config('variants.name') . '_eating_1.png') }}"
                                class="align-middle img-fluid rounded hover-shadow"
                                alt="{{ config('variants.name') }} - kuchyňka">
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="{{ asset('img/' . config('variants.name') . '_eating_2.png') }}" data-toggle="lightbox"
                            data-gallery="gallery">
                            <img src="{{ asset('img/' . config('variants.name') . '_eating_2.png') }}"
                                class="align-middle img-fluid rounded hover-shadow"
                                alt="{{ config('variants.name') }} - kuchyňka">
                        </a>
                    </div>
                </div>
            </div>
            <div class="middle-part">
                <div class="pb-2">
                    <h4 class="color-{{ config('variants.name') }}">veřejné stravování</h4>
                </div>
                <div class="row">
                    <div class="col-lg pb-2 text-justify">
                        <p>
                            V areálu skanzenu se nachází restaurace <strong>Hospoda u sv. Huberta</strong>.
                        </p>
                        <p>
                            Podávají zde jídla české
                            kuchyně.
                        </p>
                        <p>
                            V restauraci je celkem cca 80 míst a v letních měsících 60 míst na venkovní
                            zahrádce.
                        </p>
                        <p>
                            Restaurace je nekuřácká.
                        </p>
                        <p>
                            Vzdálenost od penzionu je 50 metrů.
                        </p>
                    </div>
                    <div class="col-lg pb-2">
                        <a href="{{ asset('img/' . config('variants.name') . '_eating_3.png') }}" data-toggle="lightbox"
                            data-gallery="gallery">
                            <img src="{{ asset('img/' . config('variants.name') . '_eating_3.png') }}"
                                class="align-middle img-fluid rounded hover-shadow" alt="Hospoda u Sv. Huberta">
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="{{ asset('img/' . config('variants.name') . '_eating_4.png') }}" data-toggle="lightbox"
                            data-gallery="gallery">
                            <img src="{{ asset('img/' . config('variants.name') . '_eating_4.png') }}"
                                class="align-middle img-fluid rounded hover-shadow" alt="Hospoda u Sv. Huberta">
                        </a>
                    </div>
                </div>
            </div>
            <div class="last-part">
                <p>Pro více informací o cenách stravování přejděte do sekce
                    <strong>
                        <a href="{{ route(config('variants.route_prefix_dash') . 'price-list') }}">
                            <span class="text-uppercase">
                                @lang('messages.price_list')
                            </span>
                        </a>
                    </strong>
                </p>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection