<?php

use Illuminate\Support\Facades\Route;



// PHP 7.4
Route::get('/', fn () => view('home'));

Route::view('/contact', 'contact');
