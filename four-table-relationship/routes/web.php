<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\EnrollmentController;

Route::resource('courses', CourseController::class);
Route::resource('lessons', LessonController::class);
Route::resource('enrollments', EnrollmentController::class);


Route::get('/', function () {
    return view('welcome');
});
