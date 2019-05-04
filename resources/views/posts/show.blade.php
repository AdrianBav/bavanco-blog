@extends('app')

@section('content')
    <main class="max-w-lg mx-auto">

        <article>

            <div class="my-5">
                <div class="text-grey-darkest text-base leading-normal mb-4">
                    <a href="/" class="text-grey-darker hover:text-black text-sm no-underline">← Back</a>
                </div>
                <h1 class="font-heading">{{ $post->title }}</h1>
                <p class="text-pink-light">Published on {{ $post->publish_date->toFormattedDateString() }}</p>
            </div>

            @if ($post->featured_image)
            <figure class="featured-image mb-8">
                <img class="border border-grey-light shadow" src="{{ $post->featured_image }}" alt="{{ $post->featured_image_caption }}">
                <figcaption class="block text-pink-light">{{ $post->featured_image_caption }}</figcaption>
            </figure>
            @endif

            <div id="post">
                {!! $post->body !!}
            </div>

        </article>

        <footer class="mt-16 mb-12">
            <a href="/">Back to home page</a>
        </footer>

    </main>
@endsection
