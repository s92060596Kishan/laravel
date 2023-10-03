<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="admin, dashboard">
        <meta name="author" content="DexignZone">
        <meta name="robots" content="index, follow">
        <meta name="description" content="Dompet : Payment Admin Template">
        <meta property="og:title" content="Dompet : Payment Admin Template">
        <meta property="og:description" content="Dompet : Payment Admin Template">
        <meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png">
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- PAGE TITLE HERE -->
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <!-- FAVICONS ICON --> 
        {{-- <link rel="shortcut icon" type="image/png" href="{{ asset(images/favicon.png) }}"> --}}

        <link rel="stylesheet" href="{{ asset('build/assets/vendor/jquery-nice-select/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset("build/assets/vendor/nouislider/nouislider.min.css") }}">
        <!-- Style css -->
        <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}" >
        <link rel="stylesheet" href="{{ asset('build/vendor/toastr/css/toastr.min.css') }}">
        @yield('style')
    </head>
    <body>


            @livewire('navigation-menu')
            {{-- side-bar-menu --}}
             <x-menu-sidebar/>
            {{-- side-bar-menu --}}

            <div class="content-body">
                <div style="vertical-align: top;">
                    <x-text-error/>
                    <x-session-page/>
                </div>

                @yield('main-content')
            </div>

            <x-footer/>
        </div>

        {{-- @stack('modals') --}}


        <!-- Required vendors -->
        {{-- This dependent dropdown javascript --}}
        <script src="{{ asset("build/assets/vendor/global/global.min.js") }}"></script>
        <script src="{{ asset("build/assets/vendor/chart.js/Chart.bundle.min.js") }}"></script>
        <script src="{{ asset("build/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js") }}"></script>

        <!-- Apex Chart -->
        <script src="{{ asset("build/assets/vendor/apexchart/apexchart.js")}}"></script>
        <script src="{{ asset("build/assets/vendor/nouislider/nouislider.min.js") }}"></script>
        <script src="{{ asset("build/assets/vendor/wnumb/wNumb.js") }}"></script>

        <!-- Dashboard 1 -->
        <script src="{{ asset("build/assets/js/dashboard/dashboard-1.js") }}"></script>
        <script src="{{ asset("build/assets/js/custom.min.js") }}"></script>
        <script src="{{ asset("build/assets/js/dlabnav-init.js") }}"></script>
        <script src="{{ asset("build/assets/js/demo.js") }}"></script>

        <!-- Custom Files -->
        <script src="{{ asset("build/assets/js/custom.js") }}"></script>
        {{-- <script src="{{ asset("build/assets/js/styleSwitcher.js") }}"></script> --}}
        @stack('script')

    </body>

</html>
