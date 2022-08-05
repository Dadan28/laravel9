<?php

use Illuminate\Support\Facades\Route;



// PHP 7.4
Route::get('/', fn () => view('home'));



Route::get('/blog/{kategori}/{artikel}', fn ($kategori, $artikel) => view('blog', ['kategori' => $kategori, 'artikel' => $artikel]));


Route::get('/contact', fn () => view('contact'));
