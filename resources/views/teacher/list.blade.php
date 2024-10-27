@extends('layout.app')

@section('content')
    <div class="list-container">
        <h2>List Raport Siswa</h2>

        <a href="/teacher/create" class="add">Tambah Data</a>
        <input type="text" id="search" placeholder="Cari berdasarkan nama..." class="search-input" />

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Matematika</th>
                    <th>B. Indonesia</th>
                    <th>B. Inggris</th>
                    <th>Kejuruan</th>
                    <th>Rata-rata</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="data-table">
                {{-- @foreach ($students as $index => $student)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $student->nis }}</td>
                        <td>{{ $student->nama }}</td>
                        <td>{{ $student->matematika }}</td>
                        <td>{{ $student->b_indonesia }}</td>
                        <td>{{ $student->b_inggris }}</td>
                        <td>{{ $student->kejuruan }}</td>
                        <td>{{ number_format(($student->matematika + $student->b_indonesia + $student->b_inggris + $student->kejuruan) / 4, 2) }}</td>
                        <td>
                            <a href="/teacher/edit/{{ $student->id }}" class="edit">Edit</a>
                            <a href="/teacher/delete/{{ $student->id }}" class="delete">Delete</a>
                        </td>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>

        <div class="pagination">
            <button class="prev" onclick="changePage(-1)">&#10094; Prev</button>
            <span id="page-number">1</span>
            <button class="next" onclick="changePage(1)">Next &#10095;</button>
        </div>
    </div>
@endsection
