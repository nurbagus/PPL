<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'blog']);
});

Route::get('/tentang', function () {
    return view('tentang', ['title' => 'tentang']);
});

Route::get('/layanan', function () {
    return view('layanan', ['title' => 'layanan']);
});
