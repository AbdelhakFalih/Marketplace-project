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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">{{ __('Marketplace Coopératives') }}</a>
            <div class="navbar-nav ml-auto">
                <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                <div class="dropdown">
                    <button class="btn dropdown-toggle" data-toggle="dropdown">
                        {{ strtoupper($locale) }}
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('lang.switch', 'fr') }}">Français</a>
                        <a class="dropdown-item" href="{{ route('lang.switch', 'ar') }}">العربية</a>
                    </div>
                </div>
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
