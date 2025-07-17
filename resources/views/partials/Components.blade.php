
@if($compo == "Menu principale")
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
                        <a class="nav-link text-white" href="{{ route('offers.public') }}" data-i18n="products">Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('about') }}" data-i18n="about">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('admin.contact.send') }}" data-i18n="contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('cooperatives') }}" data-i18n="cooperatives">Coopératives</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <a href="{{ route('login')}}" class="btn btn-outline-light mx-2" data-i18n="login">Connexion</a>
                    <a href="{{ route('register')}}" class="btn btn-outline-light mx-2" data-i18n="register">Inscription</a>
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
    <script>
        function changeLanguage(lang) {
            window.location.href = `/${lang}${window.location.pathname.replace(/\/(fr|ar)\//, '/')}`;
        }
        document.querySelectorAll('[data-i18n]').forEach(element => {
            element.textContent = window.i18n[element.getAttribute('data-i18n')] || element.textContent;
        });
        window.i18n = {
            header: '{{ __("header") }}',
            home: '{{ __("home") }}',
            products: '{{ __("products") }}',
            about: '{{ __("about") }}',
            contact: '{{ __("contact") }}',
            cooperatives: '{{ __("cooperatives") }}',
            login: '{{ __("login") }}',
            register: '{{ __("register") }}'
        };
    </script>
@elseif($compo == "Menu User-space")
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarUserSpace" aria-controls="navbarUserSpace" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <a class="navbar-brand text-white fw-bold" href="{{ route('dashboard') }}" data-i18n="userDashboard">Tableau de bord</a>
            <div class="collapse navbar-collapse" id="navbarUserSpace">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('profil') }}" data-i18n="profile">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('gestion.publications') }}" data-i18n="offers">Mes Offres & Demandes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('preferences.notifications') }}" data-i18n="preferences">Préférences notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('points') }}" data-i18n="points">Points</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('notifications.index') }}" data-i18n="notifications">Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('transactions.index') }}" data-i18n="transactions">Transactions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('mise.en.contact') }}" data-i18n="contact">Mise en contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-i18n="logout">Déconnexion</a>
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
    <script>
        function changeLanguage(lang) {
            window.location.href = `/${lang}${window.location.pathname.replace(/\/(fr|ar)\//, '/')}`;
        }
        document.querySelectorAll('[data-i18n]').forEach(element => {
            element.textContent = window.i18n[element.getAttribute('data-i18n')] || element.textContent;
        });
        window.i18n = {
            userDashboard: '{{ __("userDashboard") }}',
            profile: '{{ __("profile") }}',
            offers: '{{ __("offers") }}',
            preferences: '{{ __("preferences") }}',
            points: '{{ __("points") }}',
            notifications: '{{ __("notifications") }}',
            transactions: '{{ __("transactions") }}',
            contact: '{{ __("contact") }}',
            logout: '{{ __("logout") }}'
        };
    </script>
@elseif($compo == "sidebar")
    @auth
        <aside class="sidebar">
            <a href="{{ route('offers.create') }}" data-i18n="addOffer">➕ Ajouter une offre</a>
            <a href="{{ route('requests.create') }}" data-i18n="addRequest">📌 Ajouter une demande</a>
            <a href="{{ route('notifications.index') }}" data-i18n="viewNotifications">🔔 Voir les notifications</a>
            <a href="{{ route('profile.edit', auth()->user()->profiles->first()->id ?? 0) }}" data-i18n="editProfile">👤 Modifier mon profil</a>
        </aside>
    @endauth
    <script>
        document.querySelectorAll('[data-i18n]').forEach(element => {
            element.textContent = window.i18n[element.getAttribute('data-i18n')] || element.textContent;
        });
        window.i18n = {
            addOffer: '{{ __("addOffer") }}',
            addRequest: '{{ __("addRequest") }}',
            viewNotifications: '{{ __("viewNotifications") }}',
            editProfile: '{{ __("editProfile") }}'
        };
    </script>
@elseif($compo == "sidebar admin")
    @auth
        @if(auth()->user()->role === 'admin')
            <aside class="sidebar">
                <a href="{{ route('admin.users') }}" data-i18n="addUser">➕ Gérer les utilisateurs</a>
                <a href="{{ route('offers.public') }}" data-i18n="viewOffers">📌 Voir les offres</a>
                <a href="{{ route('requests.index') }}" data-i18n="viewRequests">📌 Voir les demandes</a>
                <a href="{{ route('transactions.index') }}" data-i18n="linkOfferRequest">📌 Lier une demande avec offre</a>
                <a href="{{ route('notifications.index') }}" data-i18n="viewNotifications">🔔 Voir les notifications</a>
                <a href="{{ route('profile.edit', auth()->user()->profiles->first()->id ?? 0) }}" data-i18n="editProfile">👤 Modifier mon profil</a>
            </aside>
        @endif
    @endauth
    <script>
        document.querySelectorAll('[data-i18n]').forEach(element => {
            element.textContent = window.i18n[element.getAttribute('data-i18n')] || element.textContent;
        });
        window.i18n = {
            addUser: '{{ __("addUser") }}',
            viewOffers: '{{ __("viewOffers") }}',
            viewRequests: '{{ __("viewRequests") }}',
            linkOfferRequest: '{{ __("linkOfferRequest") }}',
            viewNotifications: '{{ __("viewNotifications") }}',
            editProfile: '{{ __("editProfile") }}'
        };
    </script>
@elseif($compo == "Footer")
    <footer class="bg-light text-center py-4">
        <p data-i18n="copyright">© 2025 Marketplace Coopératives - Tous droits réservés</p>
        <div class="mt-2">
            <a href="{{ route('terms') }}" class="text-dark mx-2" data-i18n="terms">Conditions d'utilisation</a>
            <a href="{{ route('privacy') }}" class="text-dark mx-2" data-i18n="privacy">Politique de confidentialité</a>
        </div>
    </footer>
    <script>
        document.querySelectorAll('[data-i18n]').forEach(element => {
            element.textContent = window.i18n[element.getAttribute('data-i18n')] || element.textContent;
        });
        window.i18n = {
            copyright: '{{ __("copyright") }}',
            terms: '{{ __("terms") }}',
            privacy: '{{ __("privacy") }}'
        };
    </script>
@elseif($compo == "Errors_Page")
    <div class="container mt-5 text-center">
        <div class="alert alert-danger">
            <h1 class="display-4" data-i18n="errorOops">Oops!</h1>
            <p class="lead" data-i18n="errorMessage">{{ $msg }}</p>
        </div>
        <a href="{{ route('home') }}" class="btn btn-primary mt-3" data-i18n="backHome">Retour à l'accueil</a>
    </div>
    <script>
        document.querySelectorAll('[data-i18n]').forEach(element => {
            element.textContent = window.i18n[element.getAttribute('data-i18n')] || element.textContent;
        });
        window.i18n = {
            errorOops: '{{ __("errorOops") }}',
            errorMessage: '{{ __("errorMessage") }}',
            backHome: '{{ __("backHome") }}'
        };
    </script>
@endif
