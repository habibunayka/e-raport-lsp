@extends('layout.app')

@section('sidebar')
    @parent
    <aside class="sidebar">
        <ul>
            <li><a href="/teacher">Dashboard</a></li>
            <li><a href="/teacher/list" class="active">List Raport</a></li>
        </ul>
    </aside>
@endsection

@section('content')
    <div class="create-container">
        <h2>Input Nilai</h2>
        <form action="/teacher/store" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="matematika">Matematika:</label>
                <input type="number" id="matematika" name="matematika" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="b_indonesia">Bahasa Indonesia:</label>
                <input type="number" id="b_indonesia" name="b_indonesia" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="b_inggris">Bahasa Inggris:</label>
                <input type="number" id="b_inggris" name="b_inggris" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="kejuruan">Kejuruan:</label>
                <input type="number" id="kejuruan" name="kejuruan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="mapel_pilihan">Mapel Pilihan:</label>
                <input type="number" id="mapel_pilihan" name="mapel_pilihan" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
