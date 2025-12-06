<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Error - RR Institute</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gradient-to-br from-red-50 via-white to-orange-50 min-h-screen flex items-center justify-center px-4">
    <div class="max-w-2xl w-full text-center">
        <!-- Error Code -->
        <div class="mb-8">
            <h1 class="text-9xl font-bold text-red-600 mb-4">500</h1>
            <div class="h-1 w-32 bg-gradient-to-r from-red-600 to-orange-600 mx-auto rounded-full"></div>
        </div>

        <!-- Error Message -->
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Server Error</h2>
        <p class="text-lg text-gray-600 mb-8">
            We're sorry, but something went wrong on our end. Our team has been notified and we're working to fix it.
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
            <button onclick="location.reload()" 
                    class="inline-flex items-center justify-center px-8 py-3 bg-white text-gray-700 border-2 border-gray-200 rounded-full font-semibold hover:border-green-600 hover:text-green-600 transition-all">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                </svg>
                Try Again
            </button>
        </div>

        <!-- Support Info -->
        <div class="mt-12 pt-8 border-t border-gray-200">
            <p class="text-sm text-gray-500">
                If the problem persists, please <a href="{{ route('contact') }}" class="text-green-600 hover:text-green-700 hover:underline">contact our support team</a>.
            </p>
        </div>
    </div>
</body>
</html>
