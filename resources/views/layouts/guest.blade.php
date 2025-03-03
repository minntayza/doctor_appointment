<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-100">
            <div>
                <a href="/" class="inline-block hover:opacity-90 transition-opacity duration-300">
                    <h1 class="text-xl font-bold pb-5 font-bold lg:text-4xl" style="line-height: 1.2;">
                        <span style="background: linear-gradient(135deg, #14b8a6 0%, #6366f1 50%, #0ea5e9 100%); -webkit-background-clip: text; background-clip: text; color: transparent; display: inline-block;">
                            Doctor Appointment
                        </span>
                        <span style="background: linear-gradient(45deg, #3b82f6 0%, #ec4899 50%, #ef4444 100%); -webkit-background-clip: text; background-clip: text; color: transparent; display: inline-block;">
                            System
                        </span>
                    </h1>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
