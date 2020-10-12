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
        </div>
    </div>
</div>
@endsection