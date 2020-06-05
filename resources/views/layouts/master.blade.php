<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link href="{{ asset('img/favicon_' . config('variants.name') . '.png') }}" rel="shortcut icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body>
    <div id="app">
        <div id="main" class="text-black bg-penzion">
            @include('partials/navbar')

            @include('partials/flash-messages')

            @include('partials/toasts')

            <main class="py-4">
                <div class="container content">
                    @yield('content')
                </div>
            </main>

            @include('partials/footer')

            @include('partials/cookie-bar')
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    @yield('scripts')
</body>

</html>