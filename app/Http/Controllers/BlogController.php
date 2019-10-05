<?php

namespace App\Http\Controllers;

use Wink\WinkPost;

class BlogController extends Controller
{
    /**
     * Display all blog posts.
     *
     * @return View
     */
    public function index()
    {
        $posts = WinkPost::live()
            ->orderByDesc('publish_date')
            ->simplePaginate(12);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the specified blog post.
     *
     * @param  string  $slug
     * @return View
     */
    public function show($slug)
    {
        $post = WinkPost::live()
            ->whereSlug($slug)
            ->firstOrFail();

        return view('posts.show', [
            'post' => $post,
            'meta' => $post->meta,
        ]);
    }
}
