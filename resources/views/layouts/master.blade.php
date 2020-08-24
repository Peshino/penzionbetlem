<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Jiří Pešek" />
    <meta name="copyright" content="Penzion Betlém, Chalupy Betlém" />
    <meta name="keywords" content="penzion, betlem, hlinsko, chalupy, ubytovani" />
    <meta name="description"
        content="Penzion Betlém (a Chalupy Betlém) poskytují ubytovací a stravovací služby v centru města Hlinska ve skanzenu Betlém." />

    <title>@yield('title')</title>

    <link href="{{ asset('img/favicon_' . config('variants.name') . '.png') }}" rel="shortcut icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ekko-lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/daterangepicker.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body>
    <div id="app">
        <div id="main" class="text-black bg-penzion">
            @include('partials/navbar')

            @include('partials/flash-messages')

            <main class="py-4">
                <div class="container content">
                    {{-- facebook plugin --}}
                    <div id="fb-root"></div>

                    @yield('content')
                </div>
            </main>

            @include('partials/footer')
        </div>

        @include('partials/cookie-bar')
    </div>

    {{-- facebook plugin --}}
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/cs_CZ/sdk.js#xfbml=1&version=v7.0">
    </script>

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('js/ekko-lightbox.js') }}" defer></script>
    <script src="{{ asset('js/moment.min.js') }}" defer></script>
    <script src="{{ asset('js/daterangepicker.min.js') }}" defer></script>
    @yield('scripts')
</body>

</html>