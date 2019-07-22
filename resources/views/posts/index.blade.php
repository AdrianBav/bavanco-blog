@extends('app')
@section('title', 'Home')

@section('content')
    @foreach ($posts as $post)
    <div class="max-w-md w-full lg:flex mb-16 md:mb-8 md:h-48">

        <div class="lg:w-48 h-48 lg:h-auto flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url({{ $post->featured_image ?? 'https://via.placeholder.com/150' }})" title="{{ $post->featured_image_caption }}"></div>
        <div class="lg:w-full border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">
                <div class="font-heading font-bold text-xl mb-2">
                    <a class="text-black" href="{{ $post->slug }}">{{ $post->title }}</a>
                </div>
                <p class="text-pink-light text-base">{{ $post->excerpt }}</p>
            </div>
            <div class="flex items-center">
                <div class="text-sm">
                    <p class="text-black leading-none">Written by {{ $post->author->name }}</p>
                    <p class="text-grey-dark">{{ $post->publish_date->diffForHumans() }}</p>
                </div>
            </div>
        </div>

    </div>
    @endforeach

    <div>{{ $posts->links() }}</div>
@endsection
