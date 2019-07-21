<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Filesystem\Filesystem;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('wink:author', function () {
    Wink\WinkAuthor::truncate();

    Wink\WinkAuthor::create([
        'id' => (string) Str::uuid(),
        'name' => 'Adrian Bavister',
        'slug' => 'adrian-bavister',
        'bio' => 'Adrian is an enthusiast, a comedian, a husband, a very bad speller, a cat owner and a web developer.',
        'email' => 'adrian@bavanco.co.uk',
        'password' => Hash::make($password = 'password'),
    ]);

    $this->info('Wink author updated.');
})->describe('Remove the default author and add myself');


Artisan::command('wink:clear', function () {
    Wink\WinkAuthor::truncate();
    Wink\WinkPage::truncate();
    Wink\WinkPost::truncate();
    Wink\WinkTag::truncate();

    (new Filesystem)->cleanDirectory(
        storage_path('app/' . config('wink.storage_path'))
    );

    $this->info('Wink data cleared.');
})->describe('Clear all wink data');
