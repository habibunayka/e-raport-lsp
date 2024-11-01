<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href={{ asset('assets/css/login.css') }}>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;
        0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="session">
        <div class="left">
            <img src="/assets/images/smkn1cibinong.png" alt="">
        </div>
        <form action="{{ url('/login') }}" method="POST" class="log-in" autocomplete="off">
            @csrf
            <input type="hidden" id="user_type" name="user_type" value="student">
            <h4>LOG IN</h4>
            <div class="switch">
                <a href="#students" class="switch-active">Student</a>
                <a href="#teacher" class="switch-inactive">Teacher</a>
                <div class="switch-indicator"></div>
            </div>

            <div id="students">
                <div class="floating-label">
                    <input placeholder="NIS" type="text" name="nis" id="nis" autocomplete="off">
                    <label for="nis">NIS:</label>
                    <div class="icon profile-icon">
                        <svg class="svg" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <style type="text/css">
                                .st0 {
                                    fill: none;
                                }

                                .st1 {
                                    fill: #010101;
                                }
                            </style>
                            <rect class="st0" width="24" height="24" />
                            <path class="st1"
                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-4.41 0-8
                                3.59-8 8v2h16v-2c0-4.41-3.59-8-8-8z" />
                        </svg>
                    </div>
                </div>
                <div class="floating-label">
                    <input placeholder="Password" type="password" name="student_password" id="student_password"
                        autocomplete="off">
                    <label for="student_password">Password:</label>
                    <div class="icon">
                        <svg class="svg" enable-background="new 0 0 24 24" version="1.1" viewBox="0 0 24 24"
                            xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <style type="text/css">
                                .st0 {
                                    fill: none;
                                }

                                .st1 {
                                    fill: #010101;
                                }
                            </style>
                            <rect class="st0" width="24" height="24" />
                            <path class="st1" d="M19,21H5V9h14V21z M6,20h12V10H6V20z" />
                            <path class="st1"
                                d="M16.5,10h-1V7c0-1.9-1.6-3.5-3.5-3.5S8.5,5.1,8.5,7v3h-1V7c0-2.5,2-4.5,4.5-4.5s4.5,2,4.5,4.5V10z" />
                            <path class="st1"
                                d="m12 16.5c-0.8 0-1.5-0.7-1.5-1.5s0.7-1.5 1.5-1.5 1.5 0.7 1.5 1.5-0.7 1.5-1.5 1.5zm0-2c-0.3
                                0-0.5 0.2-0.5 0.5s0.2 0.5 0.5 0.5 0.5-0.2 0.5-0.5-0.2-0.5-0.5-0.5z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div id="teacher" style="display:none;">
                <div class="floating-label">
                    <input placeholder="NIG" type="text" name="nig" id="nig" autocomplete="off">
                    <label for="nig">NIG:</label>
                    <div class="icon profile-icon">
                        <svg class="svg" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <style type="text/css">
                                .st0 {
                                    fill: none;
                                }

                                .st1 {
                                    fill: #010101;
                                }
                            </style>
                            <rect class="st0" width="24" height="24" />
                            <path class="st1"
                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-4.41 0-8 3.59-8
                                8v2h16v-2c0-4.41-3.59-8-8-8z" />
                        </svg>
                    </div>
                </div>
                <div class="floating-label">
                    <input placeholder="Password" type="password" name="teacher_password" id="teacher_password"
                        autocomplete="off">
                    <label for="teacher_password">Password:</label>
                    <div class="icon">
                        <svg class="svg" enable-background="new 0 0 24 24" version="1.1" viewBox="0 0 24 24"
                            xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <style type="text/css">
                                .st0 {
                                    fill: none;
                                }

                                .st1 {
                                    fill: #010101;
                                }
                            </style>
                            <rect class="st0" width="24" height="24" />
                            <path class="st1" d="M19,21H5V9h14V21z M6,20h12V10H6V20z" />
                            <path class="st1"
                                d="M16.5,10h-1V7c0-1.9-1.6-3.5-3.5-3.5S8.5,5.1,8.5,7v3h-1V7c0-2.5,2-4.5,4.5-4.5s4.5,2,4.5,4.5V10z" />
                            <path class="st1"
                                d="m12 16.5c-0.8 0-1.5-0.7-1.5-1.5s0.7-1.5 1.5-1.5 1.5 0.7 1.5 1.5-0.7 1.5-1.5 1.5zm0-2c-0.3
                                0-0.5 0.2-0.5 0.5s0.2 0.5 0.5 0.5 0.5-0.2 0.5-0.5-0.2-0.5-0.5-0.5z" />
                        </svg>
                    </div>
                </div>
            </div>

            <button type="submit">Log in</button>
        </form>
    </div>

    <script src={{ asset('assets/js/login.js') }}></script>
</body>

</html>
