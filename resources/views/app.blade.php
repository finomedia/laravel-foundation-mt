<!DOCTYPE html>
<html>
    <head>

        <title>art/soul - a finomedia idea.</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('/css/foundation.css') }}" rel="stylesheet">
        <script src="{{ asset('/js/vendor/modernizr.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">

    </head>
    <body>
        @yield('content')

        <script src="{{ asset('/js/vendor/jquery.js') }}"></script>
        <script src="{{ asset('/js/foundation.min.js') }}"></script>
        <script>$(document).foundation();</script>
    </body>
</html>
