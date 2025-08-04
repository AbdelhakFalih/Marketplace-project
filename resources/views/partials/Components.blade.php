@php
    use Illuminate\Support\Facades\Auth;
@endphp

@if ($compo === "Menu principale")
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}" data-i18n="home">Marketplace Coopératives</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}" data-i18n="home">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('produits') ? 'active' : '' }}" href="{{ route('produits') }}" data-i18n="products">Produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}" data-i18n="about">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}" data-i18n="contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('cooperatives') ? 'active' : '' }}" href="{{ route('cooperatives') }}" data-i18n="cooperatives">Coopératives</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center">
                        @if (Auth::check())
                            <a class="btn btn-primary mx-2" href="{{ route('user.dashboard', ['id' => Auth::id()]) }}" data-i18n="dashboard">Tableau de bord</a>
                        @else
                            <a class="btn btn-primary mx-2" href="{{ route('login') }}" data-i18n="login">Connexion</a>
                            <a class="btn btn-primary mx-2" href="{{ route('register') }}" data-i18n="register">Inscription</a>
                        @endif
                            <button class="lang-btn" onclick="changeLanguage('fr')">
                                <span class="fi fi-fr"  style="width: 50px;"></span>
                            </button>
                            <button class="lang-btn" onclick="changeLanguage('ar')">
                                <span class="fi fi-ma" style="width: 50px;"></span>
                            </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
@elseif ($compo === "Menu User-space")
    <header style="margin-bottom: 50px;">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('user.dashboard', ['id' => Auth::id()]) }}" data-i18n="dashboard">Espace {{ $user }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarUserSpace" aria-controls="navbarUserSpace" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarUserSpace">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @if (Auth::check())
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('user.offers') ? 'active' : '' }}" href="{{ route('user.offers', ['id' => Auth::id()]) }}" data-i18n="myOffers">Mes Offres</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('user.profile') ? 'active' : '' }}" href="{{ route('user.profile', ['id' => Auth::id()]) }}" data-i18n="profile">Profil</a>
                            </li>
                        @endif
                    </ul>
                    <div class="d-flex align-items-center">
                        <button class="lang-btn" onclick="changeLanguage('fr')">
                            <img src="{{ asset('images/france.jpg') }}" alt="Français" class="w-100 h-100 rounded-circle">
                        </button>
                        <button class="lang-btn" onclick="changeLanguage('ar')">
                            <img src="{{ asset('images/maroc.jpg') }}" alt="Français" class="w-100 h-100 rounded-circle">
                        </button>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a href="{{ route('logout') }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-i18n="logout">Déconnexion</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

@elseif ($compo === "sidebar" && $user_id !== null)
    <nav class="sidebar">
        <a href="{{ route('user.home') }}" data-i18n="viewMoreOffers"><i class="fa-solid fa-magnifying-glass"></i> {{ __('Voir plus d\'offres') }}</a>
        <a href="{{ route('user.create-offer', ['id' => $user_id]) }}" data-i18n="addOffer"><i class="fa-solid fa-plus"></i> {{ __('Ajouter une offre') }}</a>
        <a href="{{ route('user.MyOffers', ['id' => $user_id]) }}" data-i18n="myOffers"><i class="fa-solid fa-list"></i> {{ __('Voir mes offres') }}</a>
        <a href="{{ route('user.create-demand', ['id' => $user_id]) }}" data-i18n="addDemand"><i class="fa-solid fa-plus-circle"></i> {{ __('Ajouter une demande') }}</a>
        <a href="{{ route('user.demands', ['id' => $user_id]) }}" data-i18n="myDemands"><i class="fa-solid fa-clipboard-list"></i> {{ __('Voir mes demandes') }}</a>
        <a href="{{ route('user.inbox', ['id' => $user_id]) }}" data-i18n="inbox"><i class="fa-solid fa-envelope"></i> {{ __('Boîte de réception') }}</a>
        <a href="{{ route('user.notifications', ['id' => $user_id]) }}" data-i18n="notifications"><i class="fa-solid fa-bell"></i> {{ __('Notifications') }}</a>
        <div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-i18n="profileMenu">
                <i class="fa-solid fa-user"></i> {{ __('Mon profil') }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                <li><a class="dropdown-item" href="{{ route('user.dashboard', ['id' => $user_id]) }}" data-i18n="dashboard"><i class="fa-solid fa-user"></i> {{ __('Tableau de bord') }}</a></li>
                <li><a class="dropdown-item" href="{{ route('user.profile', ['id' => $user_id]) }}" data-i18n="editProfile"><i class="fa-solid fa-edit"></i> {{ __('Modifier mon profil') }}</a></li>
                <li><a class="dropdown-item" href="{{ route('user.reset_password', ['id' => $user_id])}}" data-i18n="resetPassword"><i class="fa-solid fa-key"></i> {{ __('Réinitialiser le mot de passe') }}</a></li>
            </ul>
        </div>
    </nav>

@elseif ($compo === "sidebar admin")
    <nav class="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.User_Management') }}" data-i18n="userManagement"><i class="fa-solid fa-users-cog"></i> {{ __('Gestion utilisateurs') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.statistics') }}" data-i18n="statistics"><i class="fa-solid fa-chart-bar"></i> {{ __('Statistiques') }}</a>
            </li>
        </ul>
    </nav>

@elseif ($compo === "Footer")
    <footer>
        <p>&copy; {{ date('Y') }} Marketplace Coopératives - {{ __('Tous droits réservés') }}</p>
        <div class="mt-2">
            <a href="#" class="mx-2" data-i18n="facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="#" class="mx-2" data-i18n="instagram"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="#" class="mx-2" data-i18n="x"><i class="fab fa-x-twitter"></i> X</a>
        </div>
        <div class="mt-2">
            <a href="" class="mx-2" data-i18n="terms">{{ __('Conditions d\'utilisation') }}</a>
            <a href="" class="mx-2" data-i18n="privacy">{{ __('Politique de confidentialité') }}</a>
            <a href="{{ route('contact') }}" class="mx-2" data-i18n="contact">{{ __('Contact') }}</a>
        </div>
    </footer>

@elseif ($compo === "Errors_Page")
    <div class="container mt-5">
        <div class="alert alert-danger text-center">
            <h4>{{ __('Oops!') }}</h4>
            <p>{{ $message }}</p>
            <a href="{{ route('user.home') }}" class="btn btn-primary" data-i18n="backToHome">{{ __('Retour à l\'accueil') }}</a>
        </div>
    </div>

@elseif ($compo === "Menu admin")
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('admin.Dashboard') }}" data-i18n="adminDashboard">Admin - Marketplace Coopératives</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAdmin" aria-controls="navbarAdmin" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarAdmin">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.users') ? 'active' : '' }}" href="{{ route('admin.User_Management') }}" data-i18n="userManagement">Gestion utilisateurs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.stats') ? 'active' : '' }}" href="{{ route('admin.statistics') }}" data-i18n="statistics">Statistiques</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" data-i18n="logout">Déconnexion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
@endif
