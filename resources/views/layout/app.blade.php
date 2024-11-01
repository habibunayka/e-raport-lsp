<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'ERaport LSP')</title>
    <link rel="stylesheet" href={{ asset('assets/css/app.css') }}>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

</head>

<body>
    <header>
        <img class="header-image" src={{ asset('assets/images/smkn1cibinong.png') }} alt="">
        <div class="banner">Banner</div>
    </header>

    <div class="welcome">
        <div class="pages">
            @if (request()->is('teacher') || request()->is('teacher/edit'))
                List Raport
            @elseif (request()->is('teacher/create'))
                Input Raport
            @elseif (request()->is('student') || request()->is('teacher/view'))
                Nilai Raport
            @else
                Dashboard
            @endif
        </div>
        <div class="greet">Welcome, {{ session('username') }}</div>
    </div>

    <div class="main-container">
        <div class="sidebar-container">
            <aside class="sidebar">
                @if (session('user_type') === 'teacher')
                    <ul>
                        <li><a href="/teacher"
                                class="{{ request()->is('teacher') || request()->is('teacher/edit/*') ||
                                request()->is('teacher/view/*') ? 'active' : '' }}">List
                                Raport</a></li>
                        <li><a href="/teacher/create"
                                class="{{ request()->is('teacher/create') ? 'active' : '' }}">Input Raport</a></li>
                    </ul>
                    <form action="{{ route('logout') }}" method="POST" class="logout-container"
                        style="display: inline; width: 100%; ">
                        @csrf
                        <button type="submit" class="logout-button">Logout</button>
                    </form>
                @elseif (session('user_type') === 'student')
                    <ul>
                        <li><a href="/student" class="{{ request()->is('student') ? 'active' : '' }}">Nilai Raport</a>
                        </li>
                    </ul>
                    <form action="{{ route('logout') }}" method="POST" class="logout-container"
                        style="display: inline; width: 100%;">
                        @csrf
                        <button type="submit" class="logout-button">Logout</button>
                    </form>
                @else
                    <p>Silakan login untuk mengakses menu.</p>
                @endif

            </aside>
        </div>

        <main class="content">
            <div class="main">
                @yield('content')
            </div>

            {{-- Kalau ada yang ga mengerti bisa hubungi via wa yang ada di portofolionya --}}
            <footer class="footer">
                <p>&copy; 2024 E-RAPOR LSP. Created by <a href="https://habibunayka.com/" class="link-copy"
                        target="_blank">Habibunayka</a> 11 RPL 2. All rights reserved.</p>
            </footer>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </main>
    </div>
</body>

</html>
