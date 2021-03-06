@extends('layouts.master')

@section('title')
@lang('messages.accommodation') | @lang('messages.' . config('variants.name') . '_name')
@endsection

@section('content')
<div class="card mb-4">
    <div class="card-body">
        <div class="content">
            <div class="pb-4">
                <h3>@lang('messages.accommodation')</h3>
            </div>
            @if ($variant1)
            <div class="first-part">
                <div class="row">
                    <div class="col-lg-5 pb-3 text-justify">
                        <p class="accommodation-text">
                            V přízemí penzionu se nacházejí tři dvoulůžkové pokoje s možností přistýlky, apartmán,
                            kuchyňka a recepce. V podkroví jsou pak dva dvoulůžkové pokoje a dva třílůžkové pokoje s
                            možností přistýlek. Všechny pokoje jsou okny orientovány směrem do skanzenu, vyjma pokoje č.
                            7, který má okna přes park do ulice. Vybavení pokojů je ve stylu starých roubených chalup,
                            skříně, postele, noční stolky, lampičky, garnyže jsou vyrobeny z masivu – smrku.
                        </p>
                        <p class="pt-2 accommodation-text">
                            Na pokojích je dále ještě masivní stolek s židlemi. Každý pokoj má vlastní sociální
                            zařízení. Připojení
                            k internetu je zdarma prostřednictvím wifi. Dále je na pokojích TV se satelitním příjmem.
                        </p>
                    </div>
                    <div class="col-lg-7">
                        <div class="row pb-2">
                            <div class="col">
                                <a href="{{ asset('img/' . config('variants.name') . '_accommodation_1.jpg') }}"
                                    data-toggle="lightbox" data-gallery="gallery">
                                    <img src="{{ asset('img/' . config('variants.name') . '_accommodation_1.jpg') }}"
                                        class="align-middle img-fluid rounded hover-shadow"
                                        alt="{{ config('variants.name') }} - ubytování">
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('img/' . config('variants.name') . '_accommodation_2.jpg') }}"
                                    data-toggle="lightbox" data-gallery="gallery">
                                    <img src="{{ asset('img/' . config('variants.name') . '_accommodation_2.jpg') }}"
                                        class="align-middle img-fluid rounded hover-shadow"
                                        alt="{{ config('variants.name') }} - ubytování">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="{{ asset('img/' . config('variants.name') . '_accommodation_3.jpg') }}"
                                    data-toggle="lightbox" data-gallery="gallery">
                                    <img src="{{ asset('img/' . config('variants.name') . '_accommodation_3.jpg') }}"
                                        class="align-middle img-fluid rounded hover-shadow"
                                        alt="{{ config('variants.name') }} - ubytování">
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('img/' . config('variants.name') . '_accommodation_4.jpg') }}"
                                    data-toggle="lightbox" data-gallery="gallery">
                                    <img src="{{ asset('img/' . config('variants.name') . '_accommodation_4.jpg') }}"
                                        class="align-middle img-fluid rounded hover-shadow"
                                        alt="{{ config('variants.name') }} - ubytování">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="middle-part">
                <div class="row">
                    <div class="col">
                        <div class="pb-2">
                            <h4 class="color-{{ config('variants.name') }}">Kapacita objektu</h4>
                        </div>
                        <ul class="pl-4">
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; 5 dvoulůžkových pokojů s možností 1
                                přistýlky
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; 2 třílůžkové pokoje s možností 2 přistýlek
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; dvoupokojový apartmán, kde v ložnici jsou 2
                                lůžka a v obývacím pokoji je možnost 2 přistýlek na rozkládací pohovce – vhodné pro děti
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; celková kapacita 24 lůžek
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="last part">

            </div>
            @endif

            @if ($variant2)
            <div class="first-part">
                <div class="row">
                    <div class="col-lg-5 pb-3 text-justify">
                        <p class="accommodation-text">
                            V přízemí penzionu se nacházejí tři dvoulůžkové pokoje s možností přistýlky, apartmán,
                            kuchyňka a recepce. V podkroví jsou pak dva dvoulůžkové pokoje a dva třílůžkové pokoje s
                            možností přistýlek. Všechny pokoje jsou okny orientovány směrem do skanzenu, vyjma pokoje č.
                            7, který má okna přes park do ulice. Vybavení pokojů je ve stylu starých roubených chalup,
                            skříně, postele, noční stolky, lampičky, garnyže jsou vyrobeny z masivu – smrku.
                        </p>
                        <p class="pt-2 accommodation-text">
                            Na pokojích je dále ještě masivní stolek s židlemi. Každý pokoj má vlastní sociální
                            zařízení. Připojení
                            k internetu je zdarma prostřednictvím wifi. Dále je na pokojích TV se satelitním příjmem.
                        </p>
                    </div>
                    <div class="col-lg-7">
                        <div class="row pb-2">
                            <div class="col">
                                <a href="{{ asset('img/' . config('variants.name') . '_home.png') }}"
                                    data-toggle="lightbox" data-gallery="gallery">
                                    <img src="{{ asset('img/' . config('variants.name') . '_home.png') }}"
                                        class="align-middle img-fluid rounded hover-shadow"
                                        alt="{{ config('variants.name') }} - ubytování">
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('img/' . config('variants.name') . '_home.png') }}"
                                    data-toggle="lightbox" data-gallery="gallery">
                                    <img src="{{ asset('img/' . config('variants.name') . '_home.png') }}"
                                        class="align-middle img-fluid rounded hover-shadow"
                                        alt="{{ config('variants.name') }} - ubytování">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="{{ asset('img/' . config('variants.name') . '_home.png') }}"
                                    data-toggle="lightbox" data-gallery="gallery">
                                    <img src="{{ asset('img/' . config('variants.name') . '_home.png') }}"
                                        class="align-middle img-fluid rounded hover-shadow"
                                        alt="{{ config('variants.name') }} - ubytování">
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('img/' . config('variants.name') . '_home.png') }}"
                                    data-toggle="lightbox" data-gallery="gallery">
                                    <img src="{{ asset('img/' . config('variants.name') . '_home.png') }}"
                                        class="align-middle img-fluid rounded hover-shadow"
                                        alt="{{ config('variants.name') }} - ubytování">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="middle-part">
                <div class="row">
                    <div class="col">
                        <div class="pb-2">
                            <h4 class="color-{{ config('variants.name') }}">Kapacita objektu</h4>
                        </div>
                        <ul class="pl-4">
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; 3 dvoulůžkové pokoje
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; 1 dvoulůžkový pokoj s možností 2 přistýlek
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; celková kapacita 10 lůžek
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="last part">

            </div>
            @endif
        </div>
    </div>
</div>
@endsection