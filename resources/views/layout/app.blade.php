<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Document')</title>
    <link rel="stylesheet" href={{ asset('assets/css/app.css') }}>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        {{-- <img class="header-image" src={{ asset('assets/images/smkn1cibinong.png') }} alt=""> --}}
    </header>

    <div class="main-container">
        <div class="sidebar-container">
            <aside class="sidebar">
                @if (session('user_type') === 'teacher')
                    <ul>
                        <li><a href="/teacher" class="{{ request()->is('teacher') ? 'active' : '' }}">Dashboard</a></li>
                        <li><a href="/teacher/list" class="{{ request()->is('teacher/list') || request()->is('teacher/create') || request()->is('teacher/edit') ? 'active' : '' }}">List Raport</a></li>
                    </ul>
                @elseif (session('user_type') === 'student')
                    <ul>
                        <li><a href="/student" class="{{ request()->is('student') ? 'active' : '' }}">Dashboard</a></li>
                        <li><a href="/student/nilai" class="{{ request()->is('student/nilai') ? 'active' : '' }}">Nilai Raport</a></li>
                    </ul>
                @else
                    <p>Silakan login untuk mengakses menu.</p>
                @endif
            </aside>
            <img src={{ asset('assets/images/smkn1cibinong.png') }} alt="">
        </div>

        <main class="content">
            <div class="main">
                @yield('content')
            </div>
            <footer class="footer">
                <p>&copy; 2024 E-RAPOR LSP. Designed by <a href="https://habibunayka.com/" class="link-copy" target="_blank">Habibunayka</a> All rights reserved.</p>
            </footer>
        </main>
    </div>

    <script src={{ asset('assets/js/list.js') }}></script>
</body>

</html>
