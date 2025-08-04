@extends('layouts.app')

@section('title', 'Réinitialiser mot de passe')

@section('content')
<div class="container">
    <div class="row justify-content-center min-vh-100 align-items-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg border-0">
                <div class="card-body p-5">
                    <!-- Logo -->
                    <div class="text-center mb-4">
                        <div class="w-16 h-16 bg-warning rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center">
                            <i class="fas fa-key text-white text-2xl"></i>
                        </div>
                        <h2 class="h4 text-gray-900 mb-2">Mot de passe oublié ?</h2>
                        <p class="text-muted">Pas de problème ! Entrez votre email et nous vous enverrons un lien de réinitialisation.</p>
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            <i class="fas fa-check-circle me-2"></i>
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Reset Form -->
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse email</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope text-muted"></i>
                                </span>
                                <input type="email" 
                                       class="form-control @error('email') is-invalid @enderror" 
                                       id="email" 
                                       name="email" 
                                       value="{{ old('email') }}" 
                                       required 
                                       autocomplete="email" 
                                       autofocus
                                       placeholder="votre@email.com">
                            </div>
                            @error('email')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-paper-plane me-2"></i>Envoyer le lien de réinitialisation
                            </button>
                        </div>
                    </form>

                    <!-- Back to Login -->
                    <div class="text-center">
                        <a href="{{ route('login') }}" class="text-decoration-none">
                            <i class="fas fa-arrow-left me-2"></i>Retour à la connexion
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
