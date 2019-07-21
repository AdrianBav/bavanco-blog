<?php

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
    return [
        'item1' => '%d articles',
        'number1' => 5,
        'item2' => '%d photos',
        'number2' => 24,
        'info' => 'NO stock photos',
    ];
});
