<x-layout>
    <div class="container mx-auto">
        <h2 class="text-xl font-bold mb-4">Tambah Nilai</h2>

        <form action="{{ route('grades.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Nama:</label>
               <select name="student_id" class="form-control border w-full px-3 py-2">
                    @foreach ($students as $student)
                        <option value="{{ $student->id }}">{{ $student->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Mata Pelajaran</label>
                <select name="subject_id" class="form-control border w-full px-3 py-2">
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Nilai: </label>
                <input type="number" name="grade" class="border w-full px-3 py-2">
            </div>
        
            <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded">Simpan</button>
        </form>
    </div>
</x-layout>