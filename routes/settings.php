<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

// STUDENT CRUD ROUTES
Route::resource('students', StudentController::class);

// COURSE CRUD ROUTES
Route::resource('courses', CourseController::class);

