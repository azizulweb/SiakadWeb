<header class="bg-white shadow p-4 flex justify-between items-center">
    <!-- Tombol Hamburger -->
    <button @click="sidebarOpen = !sidebarOpen" class="text-gray-700 text-2xl">
        ☰
    </button>

    <h1 class="text-lg font-semibold text-gray-700">{{ $title }}</h1>
    
    <!-- Profile Dropdown -->   
    <x-profile-dropdown />
</header>
