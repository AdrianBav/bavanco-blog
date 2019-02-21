@extends('app')

@section('body')
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white mx-auto max-w-sm shadow-lg rounded-lg overflow-hidden">
            <div class="sm:flex sm:flex-col sm:items-center px-6 py-4">

                <h1 class="text-4xl text-green font-sans">{{ $post->title }}</h1>

                <img src="{{ $post->featured_image }}">
                <div>{!! $post->body !!}</div>

            </div>
        </div>
    </div>
@endsection
