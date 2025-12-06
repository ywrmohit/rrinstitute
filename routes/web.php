<?php

use Illuminate\Support\Facades\Route;

// Public Pages
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

// Contact Form Submission (stores to file instead of database)
Route::post('/enquiries', function (\Illuminate\Http\Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'interest' => 'nullable|string',
        'message' => 'nullable|string',
    ]);

    // Store enquiry to a log file instead of database
    $enquiryData = [
        'date' => now()->toDateTimeString(),
        'name' => $validated['name'],
        'email' => $validated['email'],
        'phone' => $validated['phone'],
        'interest' => $validated['interest'] ?? 'Not specified',
        'message' => $validated['message'] ?? 'No message',
    ];

    // Log to storage/logs/enquiries.log
    \Illuminate\Support\Facades\Log::channel('single')->info('New Enquiry', $enquiryData);

    // Optional: Send email notification
    try {
        \Illuminate\Support\Facades\Mail::raw(
            "New enquiry received:\n\n" .
            "Name: {$validated['name']}\n" .
            "Email: {$validated['email']}\n" .
            "Phone: {$validated['phone']}\n" .
            "Interest: " . ($validated['interest'] ?? 'Not specified') . "\n" .
            "Message: " . ($validated['message'] ?? 'No message'),
            function ($message) use ($validated) {
                $message->to(config('mail.from.address'))
                    ->subject('New Enquiry from ' . $validated['name']);
            }
        );
    } catch (\Exception $e) {
        \Illuminate\Support\Facades\Log::error('Failed to send enquiry email: ' . $e->getMessage());
    }

    return redirect()->back()->with('success', 'Thank you for your enquiry! We will contact you soon.');
})->name('enquiries.store');

