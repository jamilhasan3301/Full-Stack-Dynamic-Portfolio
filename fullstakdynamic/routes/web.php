<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/projects', function () {
    return redirect('/#projects');
})->name('projects');

Route::get('/contact', function () {
    return redirect('/#contact');
})->name('contact');
