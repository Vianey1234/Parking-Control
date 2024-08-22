    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Parking Control') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: #195896;
                margin: 0;
                padding: 0;
            }
            .navbar {
                background-color: #6e7277;
            }
            .navbar-brand, .nav-link {
                color: #fff !important;
            }
            .hero {
                height: 90vh;
                background: url('/images/parking.jpg') no-repeat center center;
                background-size: cover;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
            }
            .overlay {
                background-color: rgba(0, 0, 0, 0.5); /* Fondo negro semi-transparente */
                padding: 20px;
                border-radius: 10px;
            }
            .hero h1 {
                font-size: 4rem;
                margin-bottom: 20px;
                color: #fff; /* Texto blanco */
            }
            .hero p {
                font-size: 1.5rem;
                color: #fff; /* Texto blanco */
            }
            .btn-primary {
                background-color: #28a745;
                border-color: #28a745;
            }
            .content {
                padding: 40px 0;
            }
            .footer {
                background-color: #6e7277;
                padding: 20px 0;
                color: #fff;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-dark">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Parking Control') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="hero">
                <div class="overlay">
                    <h1>Bienvenido a Parking Control</h1>
                    <p>Gestiona fácilmente el acceso y control de vehículos en nuestra universidad</p>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Regístrate</a>
                    <a href="{{ route('login') }}" class="btn btn-secondary btn-lg">Iniciar Sesión</a>
                </div>
            </div>

            <div class="content text-center">
                <div class="container">
                    <h2>Características</h2>
                    <p>Control de estacionamiento eficiente, seguro y fácil de usar.</p>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <p class="text-center">
                        &copy; 2024 Universidad Tecnológica de Ciudad Juárez | Diseño web por Vianey Moran</a>
                    </p>
                </div>
            </footer>

        </div>

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </body>
    </html>
