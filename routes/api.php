<?php

use Wink\WinkPost;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/meta', function () {
    $posts = WinkPost::live()->get();

    $featureImages = $posts->filter(function($post) {
        return $post->featured_image;
    });

    $bodyImagesCount = $posts->reduce(function ($numberOfImages, $post) {
        return $numberOfImages + substr_count($post->body, '<img');
    });

    return [
        'item1' => '%d articles',
        'number1' => count($posts),
        'item2' => '%d photos',
        'number2' => count($featureImages) + $bodyImagesCount,
        'info' => 'NO stock photos',
    ];
});
