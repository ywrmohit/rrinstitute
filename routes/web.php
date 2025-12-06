<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::view('visa-services', 'visa-services')->name('visa-services');

// Legal Pages
Route::view('/privacy-policy', 'privacy-policy')->name('privacy-policy');
Route::view('/terms', 'terms')->name('terms');
Route::view('/refund-policy', 'refund-policy')->name('refund-policy');


// Course Routes
Route::view('/courses', 'courses.index')->name('courses.index');
Route::view('/courses/basics-of-computer', 'courses.basics-of-computer')->name('courses.basics');
Route::view('/courses/tally-accounting', 'courses.tally-accounting')->name('courses.tally');
Route::view('/courses/c-cpp-programming', 'courses.c-cpp-programming')->name('courses.programming');
Route::view('/courses/web-development', 'courses.web-development')->name('courses.web-development');
Route::view('/courses/graphic-designing', 'courses.graphic-designing')->name('courses.graphic-designing');

// Dashboard Redirection
Route::get('/dashboard', function () {
    if (Auth::user()->isInstitute()) {
        return redirect()->route('institute.dashboard');
    }
    return redirect()->route('student.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Student Dashboard
Route::get('/student/dashboard', function () {
    return view('student.dashboard');
})->middleware(['auth', 'verified', 'role:student'])->name('student.dashboard');

// Institute Dashboard
use App\Http\Controllers\Institute\DashboardController;
Route::get('/institute/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified', 'role:institute'])
    ->name('institute.dashboard');

// Public Enquiry Route
use App\Http\Controllers\EnquiryController;
Route::post('/enquiries', [EnquiryController::class, 'store'])->name('enquiries.store');

// Institute Enquiry Routes
use App\Http\Controllers\Institute\StudentController;

Route::middleware(['auth', 'verified', 'role:institute'])->prefix('institute')->name('institute.')->group(function () {
    Route::get('/enquiries', [EnquiryController::class, 'index'])->name('enquiries.index');
    Route::patch('/enquiries/{enquiry}', [EnquiryController::class, 'update'])->name('enquiries.update');
    Route::delete('/enquiries/{enquiry}', [EnquiryController::class, 'destroy'])->name('enquiries.destroy');

    Route::resource('students', StudentController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
