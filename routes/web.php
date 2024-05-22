<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/crew', function () {
    return view('components/crew-section');
});

Route::get('/games', function () {
    return view('components/game-section');
});

// Games //
Route::get('/games/heartbound', function () {
    return view('components/games/heart-bound');
});

Route::get('/games/heartbound/cast', function () {
    return view('components/games/heartbound/heart-bound-cast');
});

Route::get('/games/killthemoon', function () {
    return view('components/games/kill-the-moon');
});

Route::get('/games/championsofbreakfast', function () {
    return view('components/games/champions-of-breakfast');
});
