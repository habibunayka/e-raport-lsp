@extends('layout.app')

@section('content')
    <div class="create-container">
        <form action="/teacher/update/{{ $nilai->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="walas">Walas:</label>
                <input type="text" id="walas" name="walas" class="form-control" value="{{ $nilai->walas->nama_walas }}" disabled>
            </div>
            <div class="form-group">
                <label for="siswa_id">Nama Siswa:</label>
                <select id="siswa_id" name="siswa_id" class="form-control" required>
                    @foreach ($siswas as $siswa)
                        <option value="{{ $siswa->id }}" {{ $siswa->id == $nilai->siswa_id ? 'selected' : '' }}>
                            {{ $siswa->nama_siswa }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="matematika">Matematika:</label>
                <input type="number" id="matematika" name="matematika" class="form-control" value="{{ $nilai->matematika }}" required>
            </div>
            <div class="form-group">
                <label for="indonesia">Bahasa Indonesia:</label>
                <input type="number" id="indonesia" name="indonesia" class="form-control" value="{{ $nilai->indonesia }}" required>
            </div>
            <div class="form-group">
                <label for="inggris">Bahasa Inggris:</label>
                <input type="number" id="inggris" name="inggris" class="form-control" value="{{ $nilai->inggris }}" required>
            </div>
            <div class="form-group">
                <label for="kejuruan">Kejuruan:</label>
                <input type="number" id="kejuruan" name="kejuruan" class="form-control" value="{{ $nilai->kejuruan }}" required>
            </div>
            <div class="form-group">
                <label for="pilihan">Mapel Pilihan:</label>
                <input type="number" id="pilihan" name="pilihan" class="form-control" value="{{ $nilai->pilihan }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
