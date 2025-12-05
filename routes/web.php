<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/visa-services', function () {
    return view('visa-services');
})->name('visa-services');

// Course Routes
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/basics-of-computer', [CourseController::class, 'basics'])->name('courses.basics');
Route::get('/courses/tally-accounting', [CourseController::class, 'tally'])->name('courses.tally');
Route::get('/courses/c-cpp-programming', [CourseController::class, 'programming'])->name('courses.programming');
Route::get('/courses/web-development', [CourseController::class, 'webDevelopment'])->name('courses.web-development');
Route::get('/courses/graphic-designing', [CourseController::class, 'graphicDesign'])->name('courses.graphic-designing');

