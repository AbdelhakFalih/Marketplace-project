<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>
        @if($action === 'register')
            {{ __('Inscription') }} – {{ __('Marketplace Coopératives') }}
        @else
            {{ __('Connexion') }} – {{ __('Marketplace Coopératives') }}
        @endif
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.7/css/flag-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css"/>
    <style>
        .form-wrapper {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }
        [dir="rtl"] .form-label,
        [dir="rtl"] .invalid-feedback,
        [dir="rtl"] .text-center {
            text-align: right;
        }
    </style>
</head>
<body>
<header>
    @include('partials.Components', ['compo' => 'Menu principale'])
</header>

<main class="form-page">
    <div class="form-wrapper" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
        @if($action === 'login')
            <h2 class="text-center text-success mb-4">{{ __('Connexion') }}</h2>
            @if($errors->any())
                <div class="alert alert-danger">
                    {{ __('auth.failed') }}
                </div>
            @endif
            <form method="POST" action="{{ route('seconnecter') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Adresse e-mail') }}</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('Mot de passe') }}</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success w-100">{{ __('Se connecter') }}</button>
            </form>
            <div class="text-center mt-3">
                <p>{{ __('Pas de compte ?') }} <a href="{{ route('register') }}">{{ __('Inscrivez-vous') }}</a></p>
                <p><a href="#">{{ __('Mot de passe oublié ?') }}</a></p>
            </div>
        @elseif($action === 'register')
            <h2 class="text-center text-success mb-4">{{ __('Inscription') }}</h2>
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            @if (session('status'))
                '<div class='callout'> {{ session('status') }} </div>'
            @endif
            <form method="POST" action="{{ route('sinscrire') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('Nom') }}</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Adresse e-mail') }}</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('Mot de passe') }}</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">{{ __('Confirmer le mot de passe') }}</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>
                <button type="submit" class="btn btn-success w-100">{{ __('S\'inscrire') }}</button>
            </form>
            <div class="text-center mt-3">
                <p>{{ __('Déjà un compte ?') }} <a href="{{ route('login') }}">{{ __('Connectez-vous') }}</a></p>
            </div>
        @endif
    </div>
</main>

@include('partials.Components', ['compo' => 'Footer'])

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
