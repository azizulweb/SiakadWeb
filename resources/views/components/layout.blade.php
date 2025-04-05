<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>{{ $title ?? 'SIAKAD' }}</title>
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
