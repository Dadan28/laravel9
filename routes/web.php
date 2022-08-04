<?php

use Illuminate\Support\Facades\Route;



// PHP 7.4
Route::get('/', fn () => view('home'));
Route::get('/blog', fn () => view('blog'));
Route::get('/contact', fn () => view('contact'));
