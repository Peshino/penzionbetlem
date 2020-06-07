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
                    <h4>vlastní - společná zařízená kuchyňka</h4>
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
                        <img src="{{ asset('img/' . config('variants.name') . '_eating_1.png') }}"
                            class="align-middle img-fluid rounded" alt="{{ config('variants.name') }} - kuchyňka">
                    </div>
                    <div class="col-lg">
                        <img src="{{ asset('img/' . config('variants.name') . '_eating_2.png') }}"
                            class="align-middle img-fluid rounded" alt="{{ config('variants.name') }} - kuchyňka">
                    </div>
                </div>
            </div>
            <div class="middle-part">
                <div class="pb-2">
                    <h4>veřejné stravování</h4>
                </div>
                <div class="row">
                    <div class="col-lg pb-2 text-justify">
                        <p>
                            Spolupracujeme s restaurantem „Hospoda U Sv. Huberta“, který je vzdálen od penzionu 40 m a
                            kde podávají jídla české kuchyně. Hlavní část restaurantu nabízí 60 míst,
                            nekuřácký salonek 8 míst, klub pod střechou 28 míst a zahrádka v letních měsících 80 míst.
                        </p>
                        <p>
                            Na přání našich zákazníků lze zajistit rezervace míst v restaurantu „Hospoda U Sv. Huberta“
                            nebo v restaurantu „U Tvrze“, který je vzdále 300 m od penzionu.
                        </p>
                        <p>
                            Bohaté snídaně jsou podávány přímo na penzionu.
                        </p>
                    </div>
                    <div class="col-lg pb-2">
                        <img src="{{ asset('img/' . config('variants.name') . '_eating_3.png') }}"
                            class="align-middle img-fluid rounded" alt="Hospoda u Sv. Huberta">
                    </div>
                    <div class="col-lg">
                        <img src="{{ asset('img/' . config('variants.name') . '_eating_4.png') }}"
                            class="align-middle img-fluid rounded" alt="Hospoda u Sv. Huberta">
                    </div>
                </div>
            </div>
            <div class="last-part">
                <p>Pro více informací o cenách stravování přejděte do sekce
                    <a href="{{ route(config('variants.route_prefix_dash') . 'price-list') }}">
                        <span class="text-uppercase">
                            @lang('messages.price_list')
                        </span>
                    </a>
                </p>
            </div>
            @endif

            @if ($variant2)

            @endif
        </div>
    </div>
</div>
@endsection