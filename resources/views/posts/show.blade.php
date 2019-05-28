@extends('app')

@section('content')
    <main class="max-w-lg mx-auto">

        <article class="bg-white md:border md:border-grey-light md:rounded p-4">

            <div class="my-5">
                <h1 class="font-heading">{{ $post->title }}</h1>
                <p class="text-pink-light">Published on {{ $post->publish_date->toFormattedDateString() }}</p>
            </div>

            @if ($post->featured_image)
            <figure class="featured-image mb-12">
                <img class="border border-grey-light shadow" src="{{ $post->featured_image }}" alt="{{ $post->featured_image_caption }}">
                <figcaption class="block text-pink-light">{{ $post->featured_image_caption }}</figcaption>
            </figure>
            @endif

            <div id="post">
                {!! $post->body !!}
            </div>

        </article>

        <div class="mt-16 mb-5">
            <div class="flex items-center">
                <div class="flex-grow border-b border-grey"></div>
                <img class="m-4 p-1 border border-grey rounded-full" src="{{ asset('images/me.jpg') }}" alt="Adrian Bavister">
                <div class="flex-grow border-b border-grey"></div>
            </div>
        </div>

    </main>
@endsection

@section('footer')
    <a href="/" class="inline-block mb-2">Five-and-Twenty Past</a>
    <span>|</span>
    <a href="https://www.bavanco.co.uk" target="_blank" class="inline-block mb-2">bavanco.co.uk</a>

    @parent
@endsection
