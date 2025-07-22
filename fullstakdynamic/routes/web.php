<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthenticationController;


//authentication routes-----------


Route::get('/about', function () {
    return view('about');
})->name('about');


//login routes-----------
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthenticationController::class, 'login']);


//registration routes---------
Route::get('/registration', function () {
    return view('auth.registration');
})->name('registration');
Route::post('/registration', [AuthenticationController::class, 'registration']);




//dashboard routes-----------
Route:: middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [Controller::class, 'dashboard']);
    Route::get('/update/profile', [Controller::class, 'dashboard']);
    Route::get('/admin/dashboard', [Controller::class, 'dashboard']);

});


Route::get('/', function () {
    return view('home');
})->name('home');

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
