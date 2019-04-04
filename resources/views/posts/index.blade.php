@extends('app')

@section('content')
    <main class="container mx-auto">

        <h1 class="text-4xl font-bold my-6">Five and Twenty Past</h1>

        @foreach ($posts as $post)
        <div class="max-w-md w-full lg:flex mb-8">
            <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url({{ $post->featured_image }})" title="{{ $post->featured_image_caption }}"></div>
            <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                <div class="mb-8">
                    <div class="font-mono text-black font-bold text-xl mb-2"><a href="{{ $post->slug }}">{{ $post->title }}</a></div>
                    <p class="text-grey-darker text-base">{{ $post->excerpt }}</p>
                </div>
                <div class="flex items-center">
                    <div class="text-sm">
                        <p class="text-black leading-none">{{ $post->author->name }}</p>
                        <p class="text-grey-dark">{{ pretty_date($post->publish_date) }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        {{ $posts->links() }}

    </main>
@endsection
