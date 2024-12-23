<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/dashboard ">
            <i class="bi bi-airplane-engines-fill" style="width: 40px;"></i>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
            <ul class="navbar-nav ms-auto me-4">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }} <i class="bi bi-person-circle ms-2"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('profile.show') }}"><i class="bi bi-person"></i> Profile</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid flex-grow-1">
    <div class="row">
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('dashboard') }}">
                            <i class="bi bi-house-door"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.page1') }}">
                            <i class="bi bi-ui-checks"></i>
                            <span class="nav-label">Bookings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.page2') }}">
                            <i class="bi bi-file-earmark-bar-graph-fill"></i>
                            <span class="nav-label">Reports</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.page3') }}">
                            <i class="bi bi-people"></i>
                            <span class="nav-label">Users</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.page4') }}">
                            <i class="bi bi-person"></i>
                            <span class="nav-label">Profile</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            @yield('admin-content')
        </main>
    </div>
</div>

<footer class="footer bg-dark text-white text-center text-lg-start mt-auto py-3">
    <div class="container text-center">
        &copy; {{ date('Y') }} Tour Agency. All rights reserved.
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<style>
    #sidebar {
        position: fixed;
        top: 56px; 
        bottom: 56px;
        width: 70px;
        transition: width 0.3s;
        background-color: #f8f9fa;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
    }

    #sidebar:hover {
        width: 200px; 
    }

    #sidebar .nav-label {
        opacity: 0;
        transition: opacity 0.3s;
    }

    #sidebar:hover .nav-label {
        opacity: 1;
    }

    #sidebar .nav-link {
        display: flex;
        align-items: center;
        color: #333;
        padding: 10px;
        font-weight: 500;
        transition: background-color 0.3s;
    }

    #sidebar .nav-link:hover {
        background-color: #e9ecef;
        color: #007bff;
    }

    #sidebar .nav-link i {
        margin-right: 10px;
        font-size: 1.25rem;
    }

    #sidebar .nav-label {
        display: none;
    }

    #sidebar:hover .nav-label {
        display: inline;
    }

    #sidebar .nav-link {
        justify-content: center;
    }

    #sidebar:hover .nav-link {
        justify-content: flex-start;
    }

    main {
        margin-left: 70px; 
        transition: margin-left 0.3s;
    }

    #sidebar:hover + main {
        margin-left: 200px; 
    }
</style>

</body>
</html>
