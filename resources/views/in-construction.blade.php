@extends('layouts.master')

@section('title')
@lang('messages.in-construction') | @lang('messages.' . config('variants.name') . '_name')
@endsection

@section('content')
<div class="card mb-4">
    <div class="card-body">
        <div class="content">
            <div class="text-center mt-5">
                <h1>@lang('messages.in-construction')</h1>
            </div>
            <div class="text-center p-3">
                <img src="{{ asset('img/' . config('variants.name') . '_home.png') }}"
                    class="align-middle img-fluid rounded" alt="{{ config('variants.name') }}">
            </div>
        </div>
    </div>
</div>
@endsection