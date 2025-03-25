<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tentang-kami', function () {
    return view('home.about');
});
Route::get('/hubungi-kami', function () {
    return view('home.contact');
});