<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

// Route::get('/', [CourseController::class, 'index']);
Route::resource('courses', CourseController::class);
