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
        $posts = WinkPost::with('tags')
                ->live()
                ->orderBy('publish_date', 'DESC')
                ->simplePaginate(12);

        return view('index', [
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
        $post = WinkPost::live()->whereSlug($slug)->firstOrFail();

        return view('show', [
            'post' => $post
        ]);
    }
}
