<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/shop', function () {
    return view('pages.shop');
})->name('shop');

Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart');

Route::get('/brand-story', function () {
    return view('pages.brand-story');
})->name('brand-story');

Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy');

Route::get('/terms', function () {
    return view('pages.terms');
})->name('terms');

Route::get('/returns', function () {
    return view('pages.returns');
})->name('returns');

Route::get('/shipping', function () {
    return view('pages.shipping');
})->name('shipping');

Route::get('/help', function () {
    return view('pages.help');
})->name('help');