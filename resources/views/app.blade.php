<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <title>{{ config('app.name', 'Blog') }}</title>
    </head>

    <body class="hero-bg text-grey-darkest font-sans leading-normal antialiased">
        <header class="overflow-hidden relative">
            <div class="hidden sm:block header-bg overflow-hidden"></div>
            <div class="max-w-lg mx-auto">
                <div class="mt-6 mb-12 md:mb-24 leading-tight bg-white sm:bg-transparent p-4 sm:p-0">
                    <h1 class="font-heading text-4xl font-bold"><a href="/" class="plain">Five-and-Twenty Past</a></h1>
                    <p class="text-grey-dark text-lg leading-normal">Time for a cup of tea and a good article</p>
                </div>
            </div>
        </header>

        @yield('content')
    </body>

</html>
