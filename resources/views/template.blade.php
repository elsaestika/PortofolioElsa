<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif
            background-color:#AEC2B6; 
             
        }
</style>
</head>
<body>
    <div class="navbar navbar-expand-lg navbar-dark text-white" style="background-color:#8E806A;">
        <div class="container-fluid">
            MY PORTOFOLIO
            <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#mynavbar"
            aria-label="toggle-navigation" aria-controls="mynavbar"
            aria-expanded="false">
                <span class="navbar-toggle-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="profil" class="nav-link {{ Request::segment(1)=='profil'?'active':'' }} fw-bold">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a href="portofolio" class="nav-link {{ Request::segment(1)=='portofolio'?'active':'' }} fw-bold">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact" class="nav-link {{ Request::segment(1)=='contact'?'active':'' }} fw-bold">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="user/logout" class="nav-link fw-bold">Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
