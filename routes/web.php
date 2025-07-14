<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/shop', function () {
    return view('pages.shop');
})->name('shop');