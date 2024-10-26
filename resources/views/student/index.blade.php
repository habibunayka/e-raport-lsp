@extends('layout.app')

@section('sidebar')
    @parent
    <aside class="sidebar">
        <ul>
            <li><a href="/student" class="active">Dashboard</a></li>
            <li><a href="/student/nilai">Nilai Raport</a></li>
        </ul>
    </aside>
@endsection

@section('content')
    <div class="index">
        <div class="title">E-RAPORT SEKOLAH CENDIKIA</div>
        <div class="subtitle">Selamat datang, ${username}</div>
    </div>
@endsection
