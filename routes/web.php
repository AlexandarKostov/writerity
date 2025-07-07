<?php

use Illuminate\Support\Facades\Route;


Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');
Route::get('/about-us', \App\Http\Controllers\AboutController::class)->name('about-us');
Route::get('/service', \App\Http\Controllers\ServiceController::class)->name('service');
Route::resource('/blog', \App\Http\Controllers\BlogController::class);
Route::resource('/career', \App\Http\Controllers\CareerController::class);
Route::resource('/applicant', \App\Http\Controllers\ApplicantController::class);
Route::resource('/contact', \App\Http\Controllers\ContactController::class);
// routes/web.php




//Route::get('/', function () {
//    return view('welcome');
//});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', \App\Http\Controllers\DashboardController::class)->name('dashboard');
    Route::get('applicants/{id}/download', [\App\Http\Controllers\ApplicantController::class, 'download'])->name('applicant.download');
});
