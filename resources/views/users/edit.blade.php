<x-layout>
    <div class="container mx-auto">
        <h2 class="text-xl font-bold mb-4">Edit User</h2>

        <form action="{{ route('users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700">Nama:</label>
                <input type="text" name="name" value="{{ $user->name }}" class="border w-full px-3 py-2">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Email:</label>
                <input type="email" name="email" value="{{ $user->email }}" class="border w-full px-3 py-2">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Role:</label>
                <select name="role" class="border w-full px-3 py-2">
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="guru" {{ $user->role == 'guru' ? 'selected' : '' }}>Guru</option>
                    <option value="siswa" {{ $user->role == 'siswa' ? 'selected' : '' }}>Siswa</option>
                </select>
            </div>
            <button type="submit" class="bg-yellow-500 text-white px-3 py-1 rounded">Update</button>
        </form>
    </div>
</x-layout>
