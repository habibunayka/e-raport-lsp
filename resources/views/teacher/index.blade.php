@extends('layout.app')

@section('sidebar')
    @parent
    <aside class="sidebar">
        <ul>
            <li><a href="/teacher" class="active">Dashboard</a></li>
            <li><a href="/teacher/list">List Raport</a></li>
        </ul>
    </aside>
@endsection

@section('content')
    <div class="index">
        <div class="title">E-RAPORT SEKOLAH CENDIKIA</div>
        <div class="subtitle">Selamat datang, Mr./Ms. ${username}</div>
    </div>
@endsection
