@extends('app')

@section('body')
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white mx-auto max-w-sm shadow-lg rounded-lg overflow-hidden">
            <div class="sm:flex sm:flex-col sm:items-center px-6 py-4">

                <h1 class="text-4xl text-green font-sans">Five and Twenty Past</h1>

                @foreach ($posts as $post)
                <div>
                    <a href="/{{ $post->slug }}">
                        <img src="{{ $post->featured_image }}">
                    </a>
                </div>

                <div>
                    <a href="/{{ $post->slug }}">
                        <h5>{{ $post->title }}</h5>
                        <p>{{ $post->excerpt }}</p>
                    </a>
                </div>

                <p class="font-semibold mt-3">Publication Date: {{ $post->publish_date }}</p>
                <hr>
                @endforeach

                {{ $posts->links() }}

            </div>
        </div>
    </div>
@endsection
