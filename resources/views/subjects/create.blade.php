<x-layout>
    <div class="container mx-auto">
        <h2 class="text-xl font-bold mb-4">Tambah Mata Pelajaran</h2>

        <form action="{{ route('subjects.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Nama Mata Pelajaran:</label>
                <input type="text" name="name" class="border w-full px-3 py-2">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded">Simpan</button>
        </form>
    </div>
</x-layout>



