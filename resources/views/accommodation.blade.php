@extends('layouts.master')

@section('title')
@lang('messages.accommodation') | @lang('messages.' . config('variants.name') . '_name')
@endsection

@section('content')
<div class="card mb-4">
    <div class="card-body">
        <div class="content">
            <div class="row">
                <div class="col">
                    <p>Ubytování {{ config('variants.name') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection