@extends('app')

@section('content')
    <main class="container mx-auto">

        <article>

            <div class="my-5">
                <div class="text-grey-darkest text-base leading-normal mb-4">
                    <a href="/" class="text-grey-darker hover:text-black text-sm no-underline hover:underline">← Back</a>
                </div>
                <h1 class="font-mono">{{ $post->title }}</h1>
                <p class="text-grey-dark">Published on {{ pretty_date($post->publish_date) }}</p>
            </div>

            @if ($post->featured_image)
            <figure class="featured-image mb-8">
                <img src="{{ $post->featured_image }}" alt="{{ $post->featured_image_caption }}">
                <figcaption class="block text-grey-dark">{{ $post->featured_image_caption }}</figcaption>
            </figure>
            @endif

            <div id="post">
                {!! $post->body !!}
            </div>

        </article>

    </main>
@endsection
