@extends('layout.app')



@section('content')
    <div class="index">
        <div class="title">E-RAPORT SEKOLAH CENDIKIA</div>
        <div class="subtitle">Selamat datang, ${username}</div>
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="logout-button">Logout</button>
        </form>
    </div>
@endsection
