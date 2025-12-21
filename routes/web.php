<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::view('/resume', 'resume')->name('resume');

Route::get('/p/{project}', [ProjectController::class, 'show'])->name('projects.show');
