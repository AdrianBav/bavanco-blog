@extends('app')

@section('body')
    <div class="lg:pl-32 mt-12">
        <div class="max-w-md">

            <article>

                <header class="mb-10">
                    <div class="text-grey-darkest text-base leading-normal mb-4">
                        <a href="/" class="text-grey-darker hover:text-black text-sm no-underline hover:underline">← Back</a>
                    </div>
                    <h1 class="mb-2">{{ $post->title }}</h1>
                    <p class="text-grey-darker italic">Published {{ pretty_date($post->publish_date) }}</p>
                </header>

                @if ($post->featured_image)
                <figure class="featured-image mb-8">
                    <img src="{{ $post->featured_image }}" alt="{{ $post->featured_image_caption }}">
                    <figcaption class="text-grey-darker text-sm text-center">{{ $post->featured_image_caption }}</figcaption>
                </figure>
                @endif

                <div id="post-body">
                    {!! $post->body !!}
                </div>

            </article>

        </div>
    </div>
@endsection
