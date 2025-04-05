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
    <body class="h-screen flex bg-gray-100" x-data="{ sidebarOpen: false }">

        <!-- Sidebar -->
        <x-sidebar />
        
        <!-- Main Content (Menyesuaikan ukuran saat sidebar dibuka) -->
        <div class="flex-1 flex flex-col transition-all duration-300 ease-in-out"
            :class="sidebarOpen ? 'ml-64' : 'ml-0'">
            
            <!-- Header -->
            <x-header :title="$title ?? 'Sistem Informasi Sekolah'" />

            <!-- Dynamic Content --> 
            <main class="flex-1 p-6">
                {{ $slot }}
            </main>
        </div>

    </body>
</html>