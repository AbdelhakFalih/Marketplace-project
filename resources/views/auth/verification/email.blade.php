@extends('layouts.app')

@section('title', 'Vérification email')

@section('content')
<div class="container">
    <div class="row justify-content-center min-vh-100 align-items-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg border-0">
                <div class="card-body p-5 text-center">
                    <!-- Icon -->
                    <div class="w-20 h-20 bg-info rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center">
                        <i class="fas fa-envelope-open text-white text-3xl"></i>
                    </div>
                    
                    <h2 class="h4 text-gray-900 mb-3">Vérifiez votre adresse email</h2>
                    
                    <p class="text-muted mb-4">
                        Nous avons envoyé un lien de vérification à votre adresse email. 
                        Cliquez sur le lien dans l'email pour activer votre compte.
                    </p>

                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            <i class="fas fa-check-circle me-2"></i>
                            Un nouveau lien de vérification a été envoyé à votre adresse email.
                        </div>
                    @endif

                    <div class="mb-4">
                        <p class="text-muted small">
                            Email envoyé à : <strong>{{ Auth::user()->email }}</strong>
                        </p>
                    </div>

                    <!-- Resend Form -->
                    <form method="POST" action="{{ route('verification.resend') }}" class="mb-3">
                        @csrf
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-redo me-2"></i>Renvoyer l'email de vérification
                        </button>
                    </form>

                    <!-- Help Text -->
                    <div class="alert alert-light">
                        <h6 class="alert-heading">
                            <i class="fas fa-question-circle me-2"></i>Vous ne trouvez pas l'email ?
                        </h6>
                        <ul class="mb-0 text-start">
                            <li>Vérifiez votre dossier spam/courrier indésirable</li>
                            <li>Assurez-vous que l'adresse email est correcte</li>
                            <li>Attendez quelques minutes, l'email peut prendre du temps</li>
                        </ul>
                    </div>

                    <!-- Logout -->
                    <div class="text-center">
                        <a href="{{ route('logout') }}" 
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                           class="text-decoration-none text-muted">
                            <i class="fas fa-sign-out-alt me-2"></i>Se déconnecter
                        </a>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
