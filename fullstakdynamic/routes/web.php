<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthenticationController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/login', function () {
    return view('auth.login');
})->name('about');

Route::post('/login', [AuthenticationController::class, 'login']);

Route::get('/projects', function () {
    return redirect('/#projects');
})->name('projects');

Route::get('/contact', function () {
    return redirect('/#contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
