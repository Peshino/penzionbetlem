@extends('layouts.master')

@section('title')
@lang('messages.price_list') | @lang('messages.' . config('variants.name') . '_name')
@endsection

@section('content')
<div class="card mb-4">
    <div class="card-body">
        <div class="content">
            <div class="pb-4">
                <h3>@lang('messages.price_list') {{ now()->year }}</h3>
            </div>
            @if ($variant1)
            <div class="first-part">
                <div class="pb-2">
                    <h4 class="color-{{ config('variants.name') }}" class="color-{{ config('variants.name') }}">
                        @lang('messages.accommodation_type_1') - standard
                    </h4>
                </div>
                <table class="table table-hover">
                    {{-- <thead>
                        <tr>
                            <th scope="col">počet osob | délka pobytu</th>
                            <th scope="col">1 noc (Booking)</th>
                            <th scope="col">2 a více nocí</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1 osoba</th>
                            <td>600 Kč / noc</td>
                            <td>500 Kč / noc</td>
                        </tr>
                        <tr>
                            <th scope="row">2 osoby</th>
                            <td>950 Kč / noc</td>
                            <td>850 Kč / noc</td>
                        </tr>
                        <tr>
                            <th scope="row">3 osoby (na přistýlce)</th>
                            <td>1150 Kč / noc</td>
                            <td>1050 Kč / noc</td>
                        </tr>
                        <tr class="text-center">
                            <th colspan="3">
                                <small>
                                    ceny ubytování bez stravy
                                </small>
                            </th>
                        </tr>
                    </tbody> --}}
                    <thead>
                        <tr>
                            <th scope="col">počet osob | délka pobytu</th>
                            <th scope="col">1 noc</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1 osoba</th>
                            <td>600 Kč / noc</td>
                        </tr>
                        <tr>
                            <th scope="row">2 osoby</th>
                            <td>1100 Kč / noc</td>
                        </tr>
                        <tr>
                            <th scope="row">3 osoby (na přistýlce)</th>
                            <td>1500 Kč / noc</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>
                                <small>
                                    ceny ubytování bez stravy
                                </small>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="pb-2">
                    <h4 class="color-{{ config('variants.name') }}">@lang('messages.accommodation_type_2') - standard
                    </h4>
                </div>
                <table class="table table-hover">
                    {{-- <thead>
                        <tr>
                            <th scope="col">počet osob | délka pobytu</th>
                            <th scope="col">1 noc (Booking)</th>
                            <th scope="col">2 a více nocí</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1 osoba</th>
                            <td>900 Kč / noc</td>
                            <td>800 Kč / noc</td>
                        </tr>
                        <tr>
                            <th scope="row">2 osoby</th>
                            <td>1000 Kč / noc</td>
                            <td>900 Kč / noc</td>
                        </tr>
                        <tr>
                            <th scope="row">3 osoby</th>
                            <td>1200 Kč / noc</td>
                            <td>1100 Kč / noc</td>
                        </tr>
                        <tr>
                            <th scope="row">4 osoby (na přistýlce)</th>
                            <td>1400 Kč / noc</td>
                            <td>1300 Kč / noc</td>
                        </tr>
                        <tr>
                            <th scope="row">5 osob (na přistýlce)</th>
                            <td>1600 Kč / noc</td>
                            <td>1500 Kč / noc</td>
                        </tr>
                        <tr class="text-center">
                            <th colspan="3">
                                <small>
                                    ceny ubytování bez stravy
                                </small>
                            </th>
                        </tr>
                    </tbody> --}}
                    <thead>
                        <tr>
                            <th scope="col">počet osob | délka pobytu</th>
                            <th scope="col">1 noc</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1 osoba</th>
                            <td>800 Kč / noc</td>
                        </tr>
                        <tr>
                            <th scope="row">2 osoby</th>
                            <td>1200 Kč / noc</td>
                        </tr>
                        <tr>
                            <th scope="row">3 osoby</th>
                            <td>1600 Kč / noc</td>
                        </tr>
                        <tr>
                            <th scope="row">4 osoby (na přistýlce)</th>
                            <td>1700 Kč / noc</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>
                                <small>
                                    ceny ubytování bez stravy
                                </small>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="pb-2">
                    <h4 class="color-{{ config('variants.name') }}">@lang('messages.accommodation_type_3') - standard
                    </h4>
                </div>
                <table class="table table-hover">
                    {{-- <thead>
                        <tr>
                            <th scope="col">počet osob | délka pobytu</th>
                            <th scope="col">1 noc (Booking)</th>
                            <th scope="col">2 a více nocí</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1 osoba</th>
                            <td>700 Kč / noc</td>
                            <td>600 Kč / noc</td>
                        </tr>
                        <tr>
                            <th scope="row">2 osoby</th>
                            <td>1000 Kč / noc</td>
                            <td>900 Kč / noc</td>
                        </tr>
                        <tr>
                            <th scope="row">3 osoby</th>
                            <td>1200 Kč / noc</td>
                            <td>1100 Kč / noc</td>
                        </tr>
                        <tr>
                            <th scope="row">4 osoby</th>
                            <td>1400 Kč / noc</td>
                            <td>1300 Kč / noc</td>
                        </tr>
                        <tr class="text-center">
                            <th colspan="3">
                                <small>
                                    ceny ubytování bez stravy
                                </small>
                            </th>
                        </tr>
                    </tbody> --}}
                    <thead>
                        <tr>
                            <th scope="col">počet osob | délka pobytu</th>
                            <th scope="col">1 noc</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1 osoba</th>
                            <td>800 Kč / noc</td>
                        </tr>
                        <tr>
                            <th scope="row">2 osoby</th>
                            <td>1300 Kč / noc</td>
                        </tr>
                        <tr>
                            <th scope="row">3 osoby</th>
                            <td>1700 Kč / noc</td>
                        </tr>
                        <tr>
                            <th scope="row">4 osoby</th>
                            <td>1800 Kč / noc</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>
                                <small>
                                    ceny ubytování bez stravy
                                </small>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="middle-part">
                <div class="row">
                    <div class="col">
                        <div class="pb-2">
                            <h4 class="color-{{ config('variants.name') }}">vyšší standard</h4>
                        </div>
                        <ul class="pl-4">
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; příplatek 100 Kč na osobu a noc
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; výměna lůžkovin po 3 dnech
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; výměna ručníku každý den
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <div class="pb-2">
                            <h4 class="color-{{ config('variants.name') }}">nadstandard</h4>
                        </div>
                        <ul class="pl-4">
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; příplatek 300 Kč na osobu a noc
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; výměna lůžkovin a ručníku každý
                                den
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; úklid
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="middle-part">
                <div class="row">
                    <div class="col">
                        <div class="pb-2">
                            <h4 class="color-{{ config('variants.name') }}">děti</h4>
                        </div>
                        <p>
                            Děti do 3 let bez nároku na lůžko zdarma.
                        </p>
                        <p>
                            Děti do 3 let s nárokem na lůžko 200 Kč / noc.
                        </p>
                        <p>
                            <small>možnost dětské postýlky včetně ložního prádla</small>
                        </p>
                    </div>
                </div>
            </div>

            <div class="middle-part">
                <div class="row">
                    <div class="col">
                        <div class="pb-2">
                            <h4 class="color-{{ config('variants.name') }}">pronájem celého penzionu</h4>
                        </div>
                        <p>
                            Celý penzion soukromě bez přítomnosti dalších hostů.
                        </p>
                        <p>
                            Nabízíme až 24 lůžek včetně 6-ti přistýlek. K dispozici společenská místnost s kuchyňkou.
                        </p>
                        <p>
                            Minimální délka pobytu 2 noci při pronájmu celého penzionu.
                        </p>
                        <p>
                            Možno i nižší obsazení lůžek.
                        </p>
                        <p>
                            Cena za pronájem penzionu je vždy individuální, dle obsazení lůžek, délky pobytu,
                            požadovaných služeb apod.
                        </p>
                    </div>
                </div>
            </div>

            <div class="middle-part">
                <div class="row">
                    <div class="col">
                        <div class="pb-2">
                            <h4 class="color-{{ config('variants.name') }}">stravování</h4>
                        </div>
                        <p>
                            <strong>Vlastní stravování</strong> - k dispozici plně vybavená kuchyň se společenskou
                            místností.
                        </p>
                        <p>
                            <strong>Stravování v restaurantu</strong> - v blízkosti penzionu je několik restaurací.
                        </p>
                        <p>
                            Bohaté snídaně jsou podávány přímo na penzionu.
                        </p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">snídaně</th>
                                    <th scope="col">snídaně objednané přes Booking.com</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>130 Kč</td>
                                    <td>150 Kč</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="last-part">
                <p>Pro více informací přejděte do sekce
                    <strong>
                        <a href="{{ route(config('variants.route_prefix_dash') . 'contacts') }}">
                            <span class="text-uppercase">
                                @lang('messages.contacts')
                            </span>
                        </a>
                    </strong>
                </p>
            </div>
            @endif

            @if ($variant2)
            <div class="first-part">

                <div class="pb-2">
                    <h4 class="color-{{ config('variants.name') }}">@lang('messages.accommodation_type_1') - standard
                    </h4>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">počet osob | délka pobytu</th>
                            <th scope="col">1 noc (Booking)</th>
                            <th scope="col">2 a více nocí</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1 osoba</th>
                            <td>700 Kč / noc</td>
                            <td>600 Kč / noc</td>
                        </tr>
                        <tr>
                            <th scope="row">2 osoby</th>
                            <td>1000 Kč / noc</td>
                            <td>900 Kč / noc</td>
                        </tr>
                        <tr>
                            <th scope="row">3 osoby</th>
                            <td>1200 Kč / noc</td>
                            <td>1100 Kč / noc</td>
                        </tr>
                        <tr>
                            <th scope="row">4 osoby</th>
                            <td>1400 Kč / noc</td>
                            <td>1300 Kč / noc</td>
                        </tr>
                        <tr class="text-center">
                            <th colspan="3">
                                <small>
                                    ceny ubytování bez stravy
                                </small>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="middle-part">
                <div class="row">
                    <div class="col">
                        <div class="pb-2">
                            <h4 class="color-{{ config('variants.name') }}">vyšší standard</h4>
                        </div>
                        <ul class="pl-4">
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; příplatek 100 Kč na osobu a noc
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; výměna lůžkovin po 3 dnech
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; výměna ručníku každý den
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <div class="pb-2">
                            <h4 class="color-{{ config('variants.name') }}">nadstandard</h4>
                        </div>
                        <ul class="pl-4">
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; příplatek 300 Kč na osobu a noc
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; výměna lůžkovin a ručníku každý
                                den
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp; úklid
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="middle-part">
                <div class="row">
                    <div class="col">
                        <div class="pb-2">
                            <h4 class="color-{{ config('variants.name') }}">děti</h4>
                        </div>
                        <p>
                            Děti do 3 let bez nároku na lůžko zdarma.
                        </p>
                        <p>
                            Děti do 3 let s nárokem na lůžko 200 Kč / noc.
                        </p>
                        <p>
                            <small>možnost dětské postýlky včetně ložního prádla</small>
                        </p>
                    </div>
                </div>
            </div>

            <div class="middle-part">
                <div class="row">
                    <div class="col">
                        <div class="pb-2">
                            <h4 class="color-{{ config('variants.name') }}">pronájem celého penzionu</h4>
                        </div>
                        <p>
                            Celý penzion soukromě bez přítomnosti dalších hostů.
                        </p>
                        <p>
                            Nabízíme až 24 lůžek včetně 6-ti přistýlek. K dispozici společenská místnost s kuchyňkou.
                        </p>
                        <p>
                            Minimální délka pobytu 2 noci při pronájmu celého penzionu.
                        </p>
                        <p>
                            Možno i nižší obsazení lůžek.
                        </p>
                        <p>
                            Cena za pronájem penzionu je vždy individuální, dle obsazení lůžek, délky pobytu,
                            požadovaných služeb apod.
                        </p>
                    </div>
                </div>
            </div>

            <div class="middle-part">
                <div class="row">
                    <div class="col">
                        <div class="pb-2">
                            <h4 class="color-{{ config('variants.name') }}">stravování</h4>
                        </div>
                        <p>
                            <strong>Vlastní stravování</strong> - k dispozici plně vybavená kuchyň se společenskou
                            místností.
                        </p>
                        <p>
                            <strong>Stravování v restaurantu</strong> - v blízkosti penzionu je několik restaurací.
                        </p>
                        <p>
                            Bohaté snídaně jsou podávány přímo na penzionu.
                        </p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">snídaně</th>
                                    <th scope="col">snídaně objednané přes Booking.com</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>130 Kč</td>
                                    <td>150 Kč</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="last-part">
                <p>Pro více informací přejděte do sekce
                    <strong>
                        <a href="{{ route(config('variants.route_prefix_dash') . 'contacts') }}">
                            <span class="text-uppercase">
                                @lang('messages.contacts')
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