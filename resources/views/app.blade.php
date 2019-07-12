<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#da1e25">
        @if (isset($meta))
            @include('partials.meta')
        @endif

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

        <main class="max-w-lg mx-auto">
            @yield('content')
        </main>

        <footer class="bg-grey-lighter border-t border-pink-lighter rounded mt-24 p-4 text-center">
            <strong>Five-and-Twenty Past</strong> is part of
            <a href="https://www.bavanco.co.uk" target="_blank" class="inline-block mb-2">bavanco.co.uk</a>

            <p class="text-grey-darker text-sm">Copyright &copy; 2002 - {{ date('Y') }} Bavanco</p>
        </footer>
    </body>

</html>
