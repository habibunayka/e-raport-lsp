@extends('layout.app')

@section('content')
    <div class="create-container">
        <form action="{{ route('teacher.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="walas">Walas:</label>
                <input type="text" id="walas" name="walas" class="form-control" value="{{ session('username') }}" disabled>
            </div>

            <div class="form-group">
                <label for="siswa_id">Nama Siswa:</label>
                <select id="siswa_id" name="siswa_id" class="form-control" required>
                    <option value="">Pilih Siswa</option>
                    @foreach ($siswas as $siswa)
                        <option value="{{ $siswa->id }}">{{ $siswa->nama_siswa }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="matematika">Matematika:</label>
                <input type="number" id="matematika" name="matematika" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="indonesia">Bahasa Indonesia:</label>
                <input type="number" id="indonesia" name="indonesia" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inggris">Bahasa Inggris:</label>
                <input type="number" id="inggris" name="inggris" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="kejuruan">Kejuruan:</label>
                <input type="number" id="kejuruan" name="kejuruan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="pilihan">Mapel Pilihan:</label>
                <input type="number" id="pilihan" name="pilihan" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
