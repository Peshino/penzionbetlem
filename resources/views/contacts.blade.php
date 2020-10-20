@extends('layouts.master')

@section('title')
@lang('messages.contacts') | @lang('messages.' . config('variants.name') . '_name')
@endsection

@section('content')
<div class="card mb-4">
    <div class="card-body">
        <div class="content">
            <div class="pb-4">
                <h3>@lang('messages.contacts')</h3>
            </div>
            <div class="first-part">
                <div class="row">
                    <div class="col-md text-center contacts">
                        <div class="pb-3">
                            <h5>provozovna</h5>
                            <h4 class="text-uppercase">
                                <strong>
                                    {{ config('variants.name') }} BETLÉM
                                </strong>
                            </h4>
                            <p class="py-1">
                                <i class="fas fa-map-marker-alt"></i> &nbsp;
                                @lang('messages.contacts_' . config('variants.name') . '_address')
                            </p>
                            <p class="py-1">
                                <i class="far fa-envelope"></i> &nbsp;
                                <span class="email-replace">@lang('messages.contacts_' . config('variants.name') .
                                    '_email')</span>
                            </p>
                            <p class="py-1">
                                <i class="fas fa-phone-alt"></i> &nbsp;
                                @lang('messages.contacts_' . config('variants.name') . '_telephone')
                            </p>
                        </div>
                    </div>
                    <div class="col-md text-center contacts">
                        <div class="pb-3 text-secondary">
                            <h5>provozovatel</h5>
                            <h4>
                                <strong>
                                    @lang('messages.contacts_' . config('variants.name') . '_company_name')
                                </strong>
                            </h4>
                            <p class="py-1">
                                <i class="fas fa-map-marker-alt"></i> &nbsp;
                                @lang('messages.contacts_' . config('variants.name') . '_company_address')
                            </p>
                            <p class="py-1">
                                <i class="far fa-file-alt"></i> &nbsp;
                                @lang('messages.contacts_' . config('variants.name') . '_company_publication')
                            </p>
                            <p class="py-1">
                                <i class="far fa-id-badge"></i> &nbsp;
                                @lang('messages.contacts_' . config('variants.name') . '_company_ic')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="middle-part">
                <h4 class="color-{{ config('variants.name') }}">
                    @lang('messages.reception')
                </h4>
                <div class="pt-1">
                    <ul class="pl-4">
                        <li>
                            <i class="fas fa-chevron-right"></i> &nbsp; recepce otevřena po telefonické domluvě
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i> &nbsp; čas příjezdu hostů: <strong>14:00 -
                                20:00 hodin</strong> - prosíme hosty o telefonickou informaci předpokládaného času
                            příjezdu
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i> &nbsp; čas odjezdu hostů: <strong>do 10:00
                                hodin</strong>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="last-part">
                <h4 class="color-{{ config('variants.name') }}">
                    @lang('messages.map')
                </h4>
                <div class="pt-1">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2577.224065191971!2d15.90438171589311!3d49.76304204453593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470dbb3f3c99eabd%3A0x2764cfa336eacb5b!2sPenzion%20Betl%C3%A9m!5e0!3m2!1scs!2scz!4v1593968325833!5m2!1scs!2scz"
                        width="100%" height="500" scrolling="no" marginheight="0" marginwidth="0" frameborder="0"
                        style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection