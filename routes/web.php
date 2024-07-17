<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return view('pages.home');
});

Route::get('/header', function () {

    $headerLinks = [
        [
            "id" => 1,
            "title" => "characters",
            "active" => "false",
            "url" => "#"
        ],
        [
            "id" => 2,
            "title" => "comics",
            "active" => "true",
            "url" => "#"
        ],
        [
            "id" => 3,
            "title" => "movies",
            "active" => "false",
            "url" => "#"
        ],
        [
            "id" => 4,
            "title" => "tv",
            "active" => "false",
            "url" => "#"
        ],
        [
            "id" => 5,
            "title" => "games",
            "active" => "false",
            "url" => "#"
        ],
        [
            "id" => 6,
            "title" => "collectibles",
            "active" => "false",
            "url" => "#"
        ],
        [
            "id" => 7,
            "title" => "videos",
            "active" => "false",
            "url" => "#"
        ],
        [
            "id" => 8,
            "title" => "fans",
            "active" => "false",
            "url" => "#"
        ],
        [
            "id" => 9,
            "title" => "news",
            "active" => "false",
            "url" => "#"
        ],
        [
            "id" => 10,
            "title" => "shop",
            "active" => "false",
            "url" => "#"
        ],
    ];

    return view('partials.header', compact('headerLinks'));
});

Route::get('/footer', function () {

    return view('partials.footer');
});
