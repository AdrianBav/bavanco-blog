<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Merriweather|Nunito:200,200i,300,300i,400,400i,600,600i,800,800i,900,900i" rel="stylesheet">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>

    <body class="bg-grey-lightest font-sans antialiased">
        <div id="app" class="py-8 lg:py-16 px-6 md:px-16 lg:px-24">
            @yield('body')
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>

</html>
