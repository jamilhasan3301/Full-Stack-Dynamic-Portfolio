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
Route::middleware(['guest'])->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::post('/login', [AuthenticationController::class, 'login'])->name('login.submit');

    //registration routes---------
    Route::get('/registration', function () {
        return view('auth.registration');
    })->name('registration');
    
    Route::post('/registration', [AuthenticationController::class, 'registration'])->name('registration.submit');
});

Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout')->middleware('auth');




//dashboard routes-----------
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [Controller::class, 'dashboard']);
    Route::get('/update/profile', [Controller::class, 'dashboard']);
    
    // Skills management routes
    Route::post('/skills', [SkillController::class, 'store'])->name('skills.store');
    Route::put('/skills/{skill}', [SkillController::class, 'update'])->name('skills.update');
    Route::delete('/skills/{skill}', [SkillController::class, 'destroy'])->name('skills.destroy');

});


Route::get('/', function () {
    return view('home');
})->name('home');

// Project routes
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create')->middleware('auth');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store')->middleware('auth');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

Route::get('/contact', function () {
    return redirect('/#contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
