<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>@yield('title') - PKPJBC</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;0,600;0,700;1,200;1,700&display=swap" rel="stylesheet">

        <link href="{{ asset('pkpjbc') }}/css/bootstrap.min.css" rel="stylesheet">

        <link href="{{ asset('pkpjbc') }}/css/bootstrap-icons.css" rel="stylesheet">

        <link href="{{ asset('pkpjbc') }}/css/vegas.min.css" rel="stylesheet">

        <link href="{{ asset('pkpjbc') }}/css/tooplate-barista.css" rel="stylesheet">

        @stack('style')

<!--

Tooplate 2137 Barista Cafe

https://www.tooplate.com/view/2137-barista-cafe

Bootstrap 5 HTML CSS Template

-->
    </head>

    <body>

            <main>
                @include('fe.components.menu')

                @yield('content')

                @include('fe.components.footer2')
            </main>

        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('pkpjbc') }}/js/jquery.min.js"></script>
        <script src="{{ asset('pkpjbc') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('pkpjbc') }}/js/jquery.sticky.js"></script>
        <script src="{{ asset('pkpjbc') }}/js/click-scroll.js"></script>
        <script src="{{ asset('pkpjbc') }}/js/vegas.min.js"></script>
        <script src="{{ asset('pkpjbc') }}/js/custom.js"></script>
        @stack('script')

    </body>
</html>