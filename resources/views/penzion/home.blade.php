@extends('layouts.master')

@section('title')
@lang('messages.penzion_name')
@endsection

@section('content')
<div class="card mb-4">
    <div class="card-body">
        <div class="content">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('img/home_DELETE.png') }}" class="align-middle" alt="img">
                </div>
                <div class="col">
                    <p class="text-justify" style="line-height: 2.5rem">
                        PENZION BETLÉM je umístěn v centru města Hlinska
                        ve stejnojmenném skanzenu, který je součástí Souboru
                        lidových staveb Vysočina. Z části roubená a z části zděná
                        budova byla postaveny v roce 2020 v duchu původní
                        horácké architektury. Vybavení pokojů je ve stylu starých
                        roubených chalup, skříně, postele, noční stolky, lampičky,
                        garnyže jsou vyrobeny z masivu – smrku.
                    </p>
                    <p class="mt-3">
                        <p class="text-center">Přijměte vřelé pozvání k pobytu.</p>
                        <p class="text-center"><strong>David Navrátil</strong></p>
                        <p class="text-center"><small><em>majitel PENZION BETLÉM</em></small></p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection