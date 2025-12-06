<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return redirect()->route('students.index');
});


Route::get(
    'students/trash/{id}',
    [StudentController::class, 'trash']
)->name('students.trash');

// View all trashed students 
Route::get(
    'students/trashed',
    [StudentController::class, 'trashed']
)->name('students.trashed');

// Restore from trash
Route::get(
    'students/restore/{id}',
    [StudentController::class, 'restore']
)->name('students.restore');

Route::get(
    'courses/trash/{id}', 
    [CourseController::class, 'trash']
    )->name('courses.trash');

Route::get(
    'courses/trashed', 
    [CourseController::class, 'trashed']
    )->name('courses.trashed');

Route::get(
    'courses/restore/{id}', 
    [CourseController::class, 'restore']
    )->name('courses.restore');

// Resource routes: index, create, store, show, edit, update, destroy
Route::resource('students', StudentController::class);

Route::resource('courses', CourseController::class);

Route::resource('professors', \App\Http\Controllers\ProfessorController::class);

