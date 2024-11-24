<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
        @livewireStyles
        <style>
            .hero {
                background: url('/path-to-your-background-image.jpg') no-repeat center center;
                background-size: cover;
                height: 600px;
                color: white;
                position: relative;
                text-align: center;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .hero-text {
                max-width: 600px;
                background-color: rgba(0, 0, 0, 0.5);
                padding: 20px;
                border-radius: 5px;
            }
            .gallery img {
                width: 100%;
                height: auto;
                border-radius: 5px;
            }
            footer {
                background-color: #343a40;
                color: white;
                padding: 20px;
                text-align: center;
            }
        </style>
    </head>
    <body class="d-flex flex-column min-vh-100 font-sans antialiased">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">Tour Agency</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/page2">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="/page3">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="/page4">FAQs</a></li>
                        <li class="nav-item"><a class="nav-link" href="/page5">Gallery</a></li>
                        @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid flex-grow-1 p-0">
            @yield('content')
        </div>
        <footer class="mt-auto">
            <div class="container">
                <p>&copy; 2024 Tour Agency. All rights reserved.</p>
                <p>Follow us: 
                    <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-google"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-instagram"></i></a>
                </p>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
