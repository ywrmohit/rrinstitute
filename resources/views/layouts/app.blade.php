<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'RR Institute - Computer Courses & Visa Services')</title>
    <meta name="description" content="@yield('meta_description', 'RR Institute offers top-notch computer courses and expert visa consultancy services.')">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 antialiased">

    <!-- Announcement Bar -->
    <x-announcement-bar />

    <!-- Navbar -->
    <x-navbar />

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <x-footer />

    <!-- WhatsApp Floating Button -->
    <x-whatsapp-float />
</body>
</html>
