@if($compo === "Menu principale")
    <nav class="navbar navbar-expand-lg" style="background: linear-gradient(90deg, #2e7d32, #1b5e20);">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <a class="navbar-brand text-white fw-bold" href="{{ route('home') }}" data-i18n="header">Marketplace Coopératives</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white active" aria-current="page" href="{{ route('home') }}" data-i18n="home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('produits') }}" data-i18n="products">Produits</a> <!-- Corrected to offers.public -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('about') }}" data-i18n="about">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('contact') }}" data-i18n="contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('cooperatives') }}" data-i18n="cooperatives">Coopératives</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <a href="{{ route('login') }}" class="btn btn-outline-light mx-2" data-i18n="login">Connexion</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-light mx-2" data-i18n="register">Inscription</a>
                    <button id="lang-fr" title="Français" class="btn p-0 mx-2 lang-btn" onclick="changeLanguage('fr')">
                        <img src="{{ asset('images/france.jpg') }}" alt="Français" class="w-100 h-100 rounded-circle">
                    </button>
                    <span class="text-white mx-2">|</span>
                    <button id="lang-ar" title="العربية" class="btn p-0 mx-2 lang-btn" onclick="changeLanguage('ar')">
                        <img src="{{ asset('images/maroc.jpg') }}" alt="Arabe" class="w-100 h-100 rounded-circle">
                    </button>
                </div>
            </div>
        </div>
    </nav>
@elseif($compo === "Menu User-space")
    <nav class="navbar navbar-expand-lg" style="background: linear-gradient(90deg, #2e7d32, #1b5e20);">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarUserSpace" aria-controls="navbarUserSpace" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <a class="navbar-brand text-white fw-bold" href="" data-i18n="userDashboard">Tableau de bord</a> <!-- Corrected to user_space -->
            <div class="collapse navbar-collapse" id="navbarUserSpace">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('user.MyOffers',[ 'id' => 2 ])}}" data-i18n="offers">Mes Offres</a> <!-- Corrected to offers.index -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="" data-i18n="preferences">Parametre</a> <!-- Adjusted name -->
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <button id="lang-fr" title="Français" class="btn p-0 mx-2 lang-btn" onclick="changeLanguage('fr')">
                        <img src="{{ asset('images/france.jpg') }}" alt="Français" class="w-100 h-100 rounded-circle">
                    </button>
                    <span class="text-white mx-2">|</span>
                    <button id="lang-ar" title="العربية" class="btn p-0 mx-2 lang-btn" onclick="changeLanguage('ar')">
                        <img src="{{ asset('images/maroc.jpg') }}" alt="Arabe" class="w-100 h-100 rounded-circle">
                    </button>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </nav>
@elseif($compo === "sidebar")
    <nav class="navbar navbar-light bg-light">
        <div class="sidebar">
            <a href="{{ route('user.home') }}"   data-i18n="DiscoverOffer">📄Voir plus d'offres</a>
            <a href="{{ route('user.create-offer', ['id' => $user->id]) }}"  data-i18n="addOffer">➕ Ajouter une offre</a>
            <a href="{{ route('user.MyOffers',[ 'id' => 2 ]) }}"        data-i18n="viewOffers">📄 Voir mes offres</a>
            <a href="{{ route('user.create-demand', ['id' => $user->id]) }}" data-i18n="addRequest">📄 Ajouter une demande</a>
            <a href="{{ route('user.demands', ['id' => $user->id]) }}"       data-i18n="viewDemands">📄 Voir mes demandes</a>
            <a href="" data-i18n="viewInbox">📨 Boîte de réception</a>
            <a href="" data-i18n="viewNotifications">🔔 Voir les notifications</a>
            <a href="" data-i18n="editProfile">👤 Modifier mon profil</a>
        </div>
    </nav>
@elseif ($compo === 'sidebar admin')
    <nav class="navbar navbar-light bg-light">
        <div class="sidebar">
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.User_Management') }}" data-i18n="userManagement">Gestion des Utilisateurs</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.statistics') }}" data-i18n="statistics">Statistiques</a></li>
            </ul>
        </div>
    </nav>
@elseif($compo == "Footer")
    <footer class="bg-light text-center py-4">
        <p data-i18n="copyright">© 2025 Marketplace Coopératives - Tous droits réservés</p>
        <div class="mt-2">
            <a href="" class="text-dark mx-2" data-i18n="terms">Conditions d'utilisation</a>
            <a href="" class="text-dark mx-2" data-i18n="privacy">Politique de confidentialité</a>
        </div>
    </footer>
@elseif($compo === "Errors_Page")
    <div class="container mt-5 text-center">
        <div class="alert alert-danger">
            <h1 class="display-4" data-i18n="errorOops">Oops!</h1>
        </div>
        <a href="{{ route('home') }}" class="btn btn-primary mt-3" data-i18n="backHome">Retour à l'accueil</a>
    </div>
@elseif($compo === "Menu admin")
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="{{ route('admin.Dashboard') }}">Admin - Marketplace Coopératives</a> <!-- Corrected to user_space -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAdmin" aria-controls="navbarAdmin" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarAdmin">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.User_Management') }}">Gestion utilisateurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.statistics') }}">Statistiques</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-i18n="logout">Déconnexion</a>
                    </li>
                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </nav>
@endif
