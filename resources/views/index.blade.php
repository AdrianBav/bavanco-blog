@extends('app')

@section('body')
    <div class="lg:pl-32 mt-12">
        <div class="max-w-md">

            <h1 class="text-black leading-loose text-2xl font-extrabold text-black mb-4">Five and Twenty Past</h1>

            <div class="mt-12 spaced-y-10">
                @foreach ($posts as $post)
                <div class="bg-white mx-auto max-w-sm shadow-lg rounded-lg overflow-hidden mb-8">
                    <div class="sm:flex sm:items-center px-6 py-4">

                        @if ($post->featured_image)
                            <img src="{{ $post->featured_image }}" alt="{{ $post->featured_image_caption }}" class="block w-16 h-16 rounded-full mx-auto sm:mr-4 sm:ml-0 bg-cover">
                        @else
                            <img src="{{ Avatar::create($post->title)->toBase64() }}" alt="{{ $post->title }}" class="block w-16 h-16 rounded-full mx-auto sm:mr-4 sm:ml-0 bg-cover">
                        @endif

                        <div class="text-center sm:text-left sm:flex-grow">
                            <div>
                                <a href="/{{ $post->slug }}" class="text-lg text-black font-bold no-underline hover:underline">
                                    {{ $post->title }}
                                </a>
                            </div>

                            <p class="text-grey-darkest text-base leading-normal mt-1">
                                {{ $post->excerpt }}
                            </p>

                            <div class="text-grey-darkest text-base leading-normal mt-2">
                                <a href="/{{ $post->slug }}" class="text-grey-darker hover:text-black text-sm no-underline hover:underline">Read this article →</a>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>

            {{ $posts->links() }}

        </div>
    </div>
@endsection
