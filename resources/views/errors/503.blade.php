<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance Mode - RR Institute</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gradient-to-br from-blue-50 via-white to-cyan-50 min-h-screen flex items-center justify-center px-4">
    <div class="max-w-2xl w-full text-center">
        <!-- Icon -->
        <div class="mb-8">
            <div class="inline-flex items-center justify-center w-32 h-32 bg-blue-100 rounded-full mb-6">
                <svg class="w-16 h-16 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </div>
            <div class="h-1 w-32 bg-gradient-to-r from-blue-600 to-cyan-600 mx-auto rounded-full"></div>
        </div>

        <!-- Message -->
        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">We'll Be Right Back!</h1>
        <p class="text-lg text-gray-600 mb-8">
            We're currently performing scheduled maintenance to improve your experience. We'll be back online shortly.
        </p>

        <!-- Estimated Time (if available) -->
        @if(isset($retryAfter))
        <div class="bg-blue-50 border border-blue-200 rounded-xl p-6 mb-8">
            <p class="text-blue-800 font-semibold">
                Expected to be back in approximately {{ $retryAfter }} minutes
            </p>
        </div>
        @endif

        <!-- Contact Info -->
        <div class="mt-12 pt-8 border-t border-gray-200">
            <p class="text-sm text-gray-500 mb-4">Need immediate assistance?</p>
            <div class="flex flex-wrap justify-center gap-4 text-sm">
                <a href="tel:+919034760900" class="text-blue-600 hover:text-blue-700 hover:underline">Call Us</a>
                <span class="text-gray-300">•</span>
                <a href="https://wa.me/919034760900" target="_blank" class="text-blue-600 hover:text-blue-700 hover:underline">WhatsApp</a>
            </div>
        </div>
    </div>
</body>
</html>
