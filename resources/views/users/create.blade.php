<x-layout>
    <div class="container mx-auto">
        <h2 class="text-xl font-bold mb-4">Tambah User</h2>

        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Nama:</label>
                <input type="text" name="name" class="border w-full px-3 py-2">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Email:</label>
                <input type="email" name="email" class="border w-full px-3 py-2">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Password:</label>
                <input type="password" name="password" class="border w-full px-3 py-2">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Role:</label>
                <select name="role" class="border w-full px-3 py-2">
                    <option value="admin">Admin</option>
                    <option value="guru">Guru</option>
                    <option value="siswa">Siswa</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded">Simpan</button>
        </form>
    </div>
</x-layout>
