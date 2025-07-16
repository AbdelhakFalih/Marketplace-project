<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@if(isset($action) && $action == 'register')
            {{ __('registerTitle') }}
        @else
            {{ __('loginTitle') }}
        @endif – {{ __('header') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
    @include('partials.Components', ['compo' => 'Menu principale'])
</header>

<main class="form-page">
    <div class="form-wrapper">
        @if(isset($action) && $action == 'register')
            <h2 data-i18n="registerTitle">Inscription</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="text" name="name" required>
                <input type="email" name="email" required>
                <input type="password" name="password" required>
                <input type="password" name="password_confirmation" required>
                <select name="role" required>
                    <option value="cooperative">{{ __('Cooperative') }}</option>
                    <option value="commerçant">{{ __('Merchant') }}</option>
                </select>
                <select name="notification_type" required>
                    <option value="email">{{ __('Email') }}</option>
                    <option value="sms">{{ __('SMS') }}</option>
                    <option value="whatsapp">{{ __('WhatsApp') }}</option>
                </select>
                <button type="submit">{{ __('Register') }}</button>
            </form>
            <a href="{{ route('login') }}">{{ __('Login') }}</a>
            <p class="form-footer">
                <a href="{{ url('/login') }}" data-i18n="alreadyAccount">Déjà un compte ? Connectez-vous</a>
            </p>
        @else
            <h2 data-i18n="loginTitle">Connexion</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="email" name="email" required>
                <input type="password" name="password" required>
                <button type="submit">{{ __('Login') }}</button>
            </form>
            <a href="{{ route('register') }}">{{ __('Register') }}</a>
            <p class="form-footer">
                <a href="{{ url('/register') }}" data-i18n="noAccount">Pas de compte ? Inscrivez-vous</a><br/>
                <a href="#" data-i18n="forgotPassword">Mot de passe oublié ?</a>
            </p>
        @endif
    </div>
</main>

@include('partials.Components', ['compo' => 'Footer'])

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel" data-i18n="loginRequiredModal">Connexion Requise</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p data-i18n="loginPrompt">Veuillez vous connecter pour accéder au contenu.</p>
                <a href="/login" class="btn btn-success" data-i18n="login">Se connecter</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
