<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found - RR Institute</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gradient-to-br from-green-50 via-white to-emerald-50 min-h-screen flex items-center justify-center px-4">
    <div class="max-w-2xl w-full text-center">
        <!-- Error Code -->
        <div class="mb-8">
            <h1 class="text-9xl font-bold text-green-600 mb-4">404</h1>
            <div class="h-1 w-32 bg-gradient-to-r from-green-600 to-emerald-600 mx-auto rounded-full"></div>
        </div>

        <!-- Error Message -->
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Page Not Found</h2>
        <p class="text-lg text-gray-600 mb-8">
            Oops! The page you're looking for doesn't exist. It might have been moved or deleted.
        </p>

        <!-- Actions -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('home') }}" 
               class="inline-flex items-center justify-center px-8 py-3 bg-green-600 text-white rounded-full font-semibold hover:bg-green-700 transition-all shadow-lg hover:shadow-xl">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Go Home
            </a>
            <a href="{{ route('contact') }}" 
               class="inline-flex items-center justify-center px-8 py-3 bg-white text-gray-700 border-2 border-gray-200 rounded-full font-semibold hover:border-green-600 hover:text-green-600 transition-all">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                Contact Us
            </a>
        </div>

        <!-- Helpful Links -->
        <div class="mt-12 pt-8 border-t border-gray-200">
            <p class="text-sm text-gray-500 mb-4">You might be looking for:</p>
            <div class="flex flex-wrap justify-center gap-4 text-sm">
                <a href="{{ route('courses.index') }}" class="text-green-600 hover:text-green-700 hover:underline">Our Courses</a>
                <span class="text-gray-300">•</span>
                <a href="{{ route('visa-services') }}" class="text-green-600 hover:text-green-700 hover:underline">Visa Services</a>
                <span class="text-gray-300">•</span>
                <a href="{{ route('about') }}" class="text-green-600 hover:text-green-700 hover:underline">About Us</a>
            </div>
        </div>
    </div>
</body>
</html>
