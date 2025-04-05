<x-layout title="index">
    <div class="container mx-auto">
        <h2 class="text-xl font-bold mb-4">Jadwal Mata Pelajaran</h2>
        <a href="{{ route('subjects.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Mata Pelajaran</a>
        
        <table class="min-w-full bg-white border border-gray-300 mt-4">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border px-4 py-2">Mata Pelajaran</th>
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subject)
                <tr>
                    <td class="border px-4 py-2">{{  $subject->name}}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('subjects.edit', $subject) }}" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                        <form action="{{ route('subjects.destroy', $subject) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>