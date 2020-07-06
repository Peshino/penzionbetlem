@extends('layouts.master')

@section('title')
@lang('messages.reservation') | @lang('messages.' . config('variants.name') . '_name')
@endsection

@section('content')
<div class="card mb-4">
    <div class="card-body">
        <div class="content">
            <div class="pb-4">
                <h3>@lang('messages.reservation')</h3>
            </div>
            <div class="first-part">
                <h4 class="color-{{ config('variants.name') }}">
                    @lang('messages.terms_conditions')
                </h4>
                <p>
                    K zajištění úplné rezervace ubytování je nutné zaplatit na účet penzionu Betlém číslo
                    3645304339/0800 zálohu na čerpání služeb ve výši 50 % z celkové ceny za objednané služby.
                </p>
                <p>
                    Zasláním 50% zálohy z celkové ceny objednávky objednatel prohlašuje, že se řádně seznámil s
                    obchodními podmínkami uvedenými na <strong><a
                            href="{{ route(config('variants.route_prefix_dash') . 'reservation') }}">
                            @lang('messages.' . config('variants.name') . '_name')
                        </a></strong> v sekci rezervace.
                </p>
                <p>
                    Při stornování objednávky ve lhůtě kratší než 30 dnů před zahájením čerpání služeb je zaplacená
                    záloha považována oběma smluvními stranami za smluvní pokutu, která propadá ve prospěch dodavatele
                    služeb penzionu Betlém.
                </p>
            </div>
            <div class="last-part">
                <h4 class="color-{{ config('variants.name') }}">
                    @lang('messages.reservation_form')
                </h4>
                <form method="POST" action="" autocomplete="off">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <div class="floating-label">
                            <label for="email">@lang('messages.email')</label>
                            <input class="form-control" id="email" name="email" type="email" value="" required />
                        </div>
                        <div class="floating-label">
                            <label for="firstname">@lang('messages.firstname')</label>
                            <input class="form-control" id="firstname" name="firstname" type="text" value="" required />
                        </div>
                        <div class="floating-label">
                            <label for="lastname">@lang('messages.lastname')</label>
                            <input class="form-control" id="lastname" name="lastname" type="text" value="" required />
                        </div>
                        <div class="floating-label">
                            <label for="telephone">@lang('messages.telephone')</label>
                            <input class="form-control" id="telephone" name="telephone" type="text" value="" required />
                        </div>
                        <div class="floating-label">
                            <label for="date-of-stay">@lang('messages.date_of_stay')</label>
                            <input class="form-control input-daterangepicker" id="date-of-stay" name="datefilter"
                                type="text" value="" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="agreement" name="agreement">
                            <label class="custom-control-label" for="agreement">@lang('messages.agreement')</label>
                        </div>
                    </div>
                    <div class="form-group text-center mt-1">
                        <button type="submit" class="btn">@lang('messages.send_order')</button>
                    </div>
                    @include('partials.errors')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection