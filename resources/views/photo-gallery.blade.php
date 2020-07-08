@extends('layouts.master')

@section('title')
@lang('messages.photo_gallery') | @lang('messages.' . config('variants.name') . '_name')
@endsection

@section('content')
<div class="card mb-4">
    <div class="card-body">
        <div class="content">
            <div class="pb-4">
                <h3>@lang('messages.photo_gallery')</h3>
            </div>
            @if (isset($photos[$variant]['exterior']) && count($photos[$variant]['exterior']) > 0)
            <div class="first-part">
                <h4 class="color-{{ config('variants.name') }}">
                    @lang('messages.exterior')
                </h4>
                <div class="mt-3">
                    <div class="row d-flex justify-content-center text-center">
                        @foreach ($photos[$variant]['exterior'] as $key => $photo)
                        @php
                        $key++
                        @endphp
                        <div class="col-auto p-2">
                            <a href="{{ asset('storage/' . $photo) }}" data-toggle="lightbox" data-gallery="gallery">
                                <img src="{{ asset('storage/' . $photo) }}"
                                    class="align-middle img-fluid rounded hover-shadow gallery" alt="foto {{ $key }}">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
            @if (isset($photos[$variant]['interior']) && count($photos[$variant]['interior']) > 0)
            <div class="middle-part">
                <h4 class="color-{{ config('variants.name') }}">
                    @lang('messages.interior')
                </h4>
                <div class="mt-3">
                    <div class="row d-flex justify-content-center text-center">
                        @foreach ($photos[$variant]['interior'] as $key => $photo)
                        @php
                        $key++
                        @endphp
                        <div class="col-auto p-2">
                            <a href="{{ asset('storage/' . $photo) }}" data-toggle="lightbox" data-gallery="gallery">
                                <img src="{{ asset('storage/' . $photo) }}"
                                    class="align-middle img-fluid rounded hover-shadow gallery" alt="foto {{ $key }}">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
            <div class="last-part">
                <h4 class="color-{{ config('variants.name') }}">
                    @lang('messages.video')
                </h4>
                <div class="mt-4 text-center videoWrapper">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/lGNLCjA1nHE" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection