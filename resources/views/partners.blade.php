@extends('layouts.master')

@section('title')
@lang('messages.partners') | @lang('messages.' . config('variants.name') . '_name')
@endsection

@section('content')
<div class="card mb-4">
    <div class="card-body">
        <div class="content">
            <div class="pb-4">
                <h3>@lang('messages.partners')</h3>
            </div>
            <div class="row text-center">
                <div class="col-md pb-3 align-self-center">
                    <a href="http://www.mashlinecko.cz/__2019/kvalita-hlinecka" target="_blank">
                        <img src="{{ asset('img/partners/kvalita_z_hlinecka.png') }}"
                            class="align-middle img-fluid rounded" alt="Kvalita z Hlinecka">
                    </a>
                </div>
                <div class="col-md pb-3 align-self-center">
                    <a href="http://www.rychtar.cz/" target="_blank">
                        <img src="{{ asset('img/partners/rychtar.png') }}" class="align-middle img-fluid rounded"
                            alt="Rychtář">
                    </a>
                </div>
                <div class="col-md pb-3 align-self-center">
                    <a href="http://www.hlinsko.cz/mesto/kultura" target="_blank">
                        <img src="{{ asset('img/partners/akce_hlinsko_smaller.png') }}"
                            class="align-middle img-fluid rounded" alt="Äkce Hlinsko">
                    </a>
                </div>
                <div class="col-md pb-3 align-self-center">
                    <a href="http://www.mashlinecko.cz/" target="_blank">
                        <img src="{{ asset('img/partners/mas_hlinecko.png') }}" class="align-middle img-fluid rounded"
                            alt="MAS Hlinecko">
                    </a>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md pb-3 align-self-center">
                    <a href="http://fidler-rucnitkani.freepage.cz/" target="_blank">
                        <img src="{{ asset('img/partners/fidler.png') }}" class="align-middle img-fluid rounded"
                            alt="Josef Fidler">
                    </a>
                </div>
                <div class="col-md pb-3 align-self-center">
                    <a href="https://www.medovinka.eu/" target="_blank">
                        <img src="{{ asset('img/partners/medovinka.png') }}" class="align-middle img-fluid rounded"
                            alt="Medovinka">
                    </a>
                </div>
                <div class="col-md pb-3 align-self-center">
                    <a href="http://hlineckepekarny.cz/" target="_blank">
                        <img src="{{ asset('img/partners/pekarstvi.png') }}" class="align-middle img-fluid rounded"
                            alt="Pekařství Vacek">
                    </a>
                </div>
                <div class="col-md pb-3 align-self-center">
                    <a href="https://makovsky.cz/" target="_blank">
                        <img src="{{ asset('img/partners/makovsky.png') }}" class="align-middle img-fluid rounded"
                            alt="Karel Makovský">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection