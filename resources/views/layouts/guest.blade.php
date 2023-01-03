<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        @include('layouts.essential.seo')

        {{-- <link rel="apple-touch-icon" href="img/home-one/apple-touch-icon.png"> --}}
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset(general_setting('app_favicon')) }}">
        <!-- Place favicon.ico in the root directory -->

        @include('layouts.essential.css')

    </head>
    <body>

    @yield('content')

    @include('layouts.essential.js')

    </body>
</html>
