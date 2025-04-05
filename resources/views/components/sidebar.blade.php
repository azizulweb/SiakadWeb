<aside class="bg-gray-900 text-white w-64 min-h-screen fixed top-0 left-0 transition-all duration-300 ease-in-out"
    :class="sidebarOpen ? 'ml-0' : '-ml-64'">
    <div class="p-5 flex justify-between items-center border-b">
        <h3 class="text-xl font-semibold">SIAKAD SMA MARKUS</h3>
        <button @click="sidebarOpen = !sidebarOpen" class="text-gray-400">✖</button>
    </div>  

    <nav class="mt-5">
        <a href="/" class="block px-4 py-2 hover:bg-gray-700">Dashboard</a>

        @if(auth()->user()->role === 'admin')
            <a href="/admin/dashboard" class="block px-4 py-2 hover:bg-gray-700">Admin</a>
            <a href="/users" class="block px-4 py-2 hover:bg-gray-700">Manajemen User</a>
            <a href="/grades" class="block px-4 py-2 hover:bg-gray-700">Data Nilai</a>
            <a href="/subjects" class="block px-4 py-2 hover:bg-gray-700">Jadwal Pelajaran</a>
        @endif

        @if(auth()->user()->role === 'guru')
            <a href="/guru/dashboard" class="block px-4 py-2 hover:bg-gray-700">Guru</a>
            <a href="/grades" class="block px-4 py-2 hover:bg-gray-700">Data Nilai</a>
        @endif

        @if(auth()->user()->role === 'siswa')
            <a href="/siswa/dashboard" class="block px-4 py-2 hover:bg-gray-700">Siswa</a>
        @endif

        <a href="/profile" class="block px-4 py-2 hover:bg-gray-700">Profile</a>
    </nav>
</aside>
