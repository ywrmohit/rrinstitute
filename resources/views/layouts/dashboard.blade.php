<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'RR Institute') }} - Dashboard</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 flex flex-col md:flex-row">
            
            <!-- Sidebar -->
            @include('components.dashboard-sidebar')

            <!-- Main Content -->
            <div class="flex-1 flex flex-col min-h-screen overflow-hidden">
                
                <!-- Screen Header (Desktop only - user profile) -->
                <header class="bg-white shadow-sm hidden md:flex justify-between items-center py-4 px-6">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ $header ?? 'Dashboard' }}
                    </h2>
                    <div class="flex items-center">
                         <div class="text-sm font-medium text-gray-500 mr-4">
                            {{ Auth::user()->name }} ({{ ucfirst(Auth::user()->role) }})
                         </div>
                    </div>
                </header>

                <!-- Mobile Header Title (if needed, usually handled by sidebar nav) -->

                <!-- Page Content -->
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
