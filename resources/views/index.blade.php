<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <main>

            <div class="title m-b-md">
                Five and Twenty Past
            </div>

            @foreach($posts as $post)
                <div>
                  <a href="/blog/{{ $post->slug }}">
                    <img src="{{ $post->featured_image }}">
                  </a>
                </div>
                <div>
                  <a href="/{{ $post->slug }}">
                    <h5>{{ $post->title }}</h5>
                    <p>{{ $post->excerpt }}</p>
                  </a>
                </div>
                <div>
                  <small>Publication Date: {{ $post->publish_date }}</small>
                </div>
                <hr />
            @endforeach

            {{ $posts->links() }}

        </main>
    </body>
</html>
