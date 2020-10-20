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
                    obchodními podmínkami uvedenými <strong><a
                            href="{{ route(config('variants.route_prefix_dash') . 'reservation') }}">
                            zde</a>.</strong>
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

                @include('partials.errors')

                <form method="POST" action="{{ route('send-reservation-mail') }}" autocomplete="off">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <div class="floating-label">
                            <label for="email">@lang('messages.email')</label>
                            <input class="form-control" id="email" name="email" type="email" value="{{ old('email') }}"
                                required />
                        </div>
                        <div class="floating-label">
                            <label for="firstname">@lang('messages.firstname')</label>
                            <input class="form-control" id="firstname" name="firstname" type="text"
                                value="{{ old('firstname') }}" required />
                        </div>
                        <div class="floating-label">
                            <label for="lastname">@lang('messages.lastname')</label>
                            <input class="form-control" id="lastname" name="lastname" type="text"
                                value="{{ old('lastname') }}" required />
                        </div>
                        <div class="floating-label">
                            <label for="telephone">@lang('messages.telephone')</label>
                            <input class="form-control" id="telephone" name="telephone" type="text"
                                value="{{ old('telephone') }}" required />
                        </div>
                        <div class="floating-label">
                            <label for="number-of-persons">@lang('messages.number_of_persons')</label>
                            <input class="form-control" id="number-of-persons" name="numberOfPersons" type="number"
                                value="{{ old('numberOfPersons') }}" required />
                        </div>
                        <div class="floating-label">
                            <label for="room-type">@lang('messages.room_type')</label>
                            <select name="roomType" class="floating-select form-control"
                                onclick="this.setAttribute('value', this.value);" value="{{ old('roomType') }}"
                                id="room-type">
                                @if ($variant1)
                                <option value="@lang('messages.accommodation_type_1')">
                                    @lang('messages.accommodation_type_1')</option>
                                <option value="@lang('messages.accommodation_type_2')">
                                    @lang('messages.accommodation_type_2')</option>
                                <option value="@lang('messages.accommodation_type_3')">
                                    @lang('messages.accommodation_type_3')</option>
                                @endif
                                @if ($variant2)
                                <option value="@lang('messages.accommodation_type_1')">
                                    @lang('messages.accommodation_type_1')</option>
                                <option value="@lang('messages.accommodation_type_4')">
                                    @lang('messages.accommodation_type_2')</option>
                                @endif
                            </select>
                            <span class="highlight"></span>
                        </div>
                        <div class="floating-label">
                            <label for="arrival-departure-date">@lang('messages.arrival_departure_date')</label>
                            <input class="form-control input-daterangepicker" id="arrival-departure-date"
                                name="datefilter" type="text" value="{{ old('datefilter') }}" required />
                        </div>
                        <div class="form-group">
                            <div class="floating-label">
                                <label for="reservation-notes">@lang('messages.reservation_notes')</label>
                                <textarea class="form-control" rows="4" id="reservation-notes"
                                    name="reservationNotes">{{ old('reservationNotes') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="agreement" name="agreement"
                                required>
                            <label class="custom-control-label" for="agreement">@lang('messages.agreement')</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" id="variant" name="variant" value="{{ config('variants.name') }}">
                    </div>
                    <div class="form-group">
                        <input type="hidden" id="variant-route-prefix" name="variant_route_prefix"
                            value="{{ config('variants.route_prefix') }}">
                    </div>
                    <div class="form-group text-center mt-1">
                        <button type="submit" class="btn">@lang('messages.send_reservation')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection