<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $days = range (1, 31);
    return view('welcome', compact ('days'));
})->name('home');

Route::get ('/class/{day}', function ($day) {
    return view("class.day{$day}");
})->where('day', '[1-31]+')->name('class.day');

Route::get('/about', function () {
    return view('about');
})->name('about');