<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Todo::class, 'greet']);

Route::get('todo', [\App\Http\Controllers\Todo::class, 'index']);

Route::view('contact-me', "contact", [
    'page_name' => 'Contact me page',
    'page_description' => 'my name is Mark Hudzovskyi from TV-11',
]);
