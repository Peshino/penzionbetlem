@extends('layouts.master')

@section('title')
@lang('messages.contacts') | @lang('messages.' . config('variants.name') . '_name')
@endsection

@section('content')
<div class="card mb-4">
    <div class="card-body">
        <div class="content">
            <div class="row">
                <div class="col">
                    <p>@lang('messages.contacts') {{ config('variants.name') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection