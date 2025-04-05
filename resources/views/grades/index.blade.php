<x-layout title="index">
    <div class="container mx-auto">
        <h2 class="text-xl font-bold mb-4"> Daftar Nilai</h2>
        <a href="{{ route('grades.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Input Nilai</a>
        
        <table class="min-w-full bg-white border border-gray-300 mt-4">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border px-4 py-2">Nama</th>
                    <th class="border px-4 py-2">Mata Pejaran</th>
                    <th class="border px-4 py-2">Nilai</th>
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($grades as $grade)
                <tr>
                    <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                    <td class="border px-4 py-2">{{ $user->name }}</td>
                    <td class="border px-4 py-2">{{ $user->email }}</td>
                    <td class="border px-4 py-2">{{ ucfirst($user->role) }}</td>
                     <td class="border px-4 py-2">
                        <a href="{{ route('grades.edit', $grade->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('grades.destroy', $grade->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus nilai ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>

