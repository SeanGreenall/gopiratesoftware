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

Route::get('/games/heartbound', function () {
    return view('components/games/heart-bound');
});
