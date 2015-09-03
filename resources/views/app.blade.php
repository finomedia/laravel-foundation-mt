<!DOCTYPE html>
<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>art/soul - a finomedia idea.</title>
        <link href="{{ asset('/css/foundation.css') }}" rel="stylesheet">
        <script src="{{ asset('/js/vendor/modernizr.js') }}"></script>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        @yield('content')

        <script src="{{ asset('/js/vendor/jquery.js') }}"></script>
        <script src="{{ asset('/js/foundation.min.js') }}"></script>
        <script>
            $(document).foundation();
        </script>
    </body>
</html>
