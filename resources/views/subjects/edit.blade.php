<x-layout>
    <div class="container mx-auto">
        <h2 class="text-xl font-bold mb-4">Edit User</h2>

        <form action="{{ route('subjects.update', $subject) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700">Nama:</label>
                <input type="text" name="name" value="{{ $subject->name }}" class="border w-full px-3 py-2">
            </div>
            <button type="submit" class="bg-yellow-500 text-white px-3 py-1 rounded">Update</button>
        </form>
    </div>
</x-layout>
