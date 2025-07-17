@php
    $locale = app()->getLocale();
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', $locale) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('Marketplace Coopératives') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background: linear-gradient(90deg, #2e7d32, #1b5e20);">
        <div class="container-fluid">
            <a class="navbar-brand text-white fw-bold" href="{{ route('home') }}">{{ __('Marketplace Coopératives') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('home') }}">{{ __('Accueil') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('offers.public') }}">{{ __('Produits') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('about') }}">{{ __('À propos') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('admin.contact.send') }}">{{ __('Contact') }}</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('profile.index') }}">{{ __('Mon Profil') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('notifications.index') }}">{{ __('Notifications') }}</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                                @csrf
                                <button class="nav-link btn text-white">{{ __('Déconnexion') }}</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                        </li>
                    @endauth
                    <li class="nav-item dropdown">
                        <button class="btn dropdown-toggle text-white" data-bs-toggle="dropdown">
                            {{ strtoupper($locale) }}
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('lang.switch', 'fr') }}">Français</a></li>
                            <li><a class="dropdown-item" href="{{ route('lang.switch', 'ar') }}">العربية</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
    <footer class="text-center mt-4">
        <p>{{ __('© 2025 Marketplace Coopératives') }}</p>
    </footer>
</body>
</html>
