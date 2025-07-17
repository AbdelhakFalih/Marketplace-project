@if($compo === "Menu principale")
    <nav class="navbar navbar-expand-lg" style="background: linear-gradient(90deg, #2e7d32, #1b5e20);">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <a class="navbar-brand text-white fw-bold" href="{{ route('home', ['locale' => app()->getLocale()]) }}" data-i18n="header">Marketplace Coopératives</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white active" aria-current="page" href="{{ route('home', ['locale' => app()->getLocale()]) }}" data-i18n="home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('produits', ['locale' => app()->getLocale()]) }}" data-i18n="products">Produits</a> <!-- Corrected to offers.public -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('about', ['locale' => app()->getLocale()]) }}" data-i18n="about">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('contact', ['locale' => app()->getLocale()]) }}" data-i18n="contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('cooperatives', ['locale' => app()->getLocale()]) }}" data-i18n="cooperatives">Coopératives</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <a href="{{ route('login', ['locale' => app()->getLocale()]) }}" class="btn btn-outline-light mx-2" data-i18n="login">Connexion</a>
                    <a href="{{ route('register', ['locale' => app()->getLocale()]) }}" class="btn btn-outline-light mx-2" data-i18n="register">Inscription</a>
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
        <script>
            function changeLanguage(lang) {
            // Obtenir l'URL actuelle sans le segment de langue initial
            let pathname = window.location.pathname;
            const localeRegex = /^(\/(fr|ar))?/;
            pathname = pathname.replace(localeRegex, '/'); // Supprime le segment de langue initial
            window.location.href = `/${lang}${pathname === '/' ? '' : pathname}`;
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
            // ... autres traductions ...
        };
    </script>
    </script>
@elseif($compo === "Menu User-space")
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarUserSpace" aria-controls="navbarUserSpace" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <a class="navbar-brand text-white fw-bold" href="{{ route('admin.dashboard', ['locale' => app()->getLocale()]) }}" data-i18n="userDashboard">Tableau de bord</a> <!-- Corrected to user_space -->
            <div class="collapse navbar-collapse" id="navbarUserSpace">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('admin.User_Management', ['locale' => app()->getLocale()]) }}" data-i18n="offers">Gestion des Utlisateur</a> <!-- Corrected to offers.index -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('admin.statistics', ['locale' => app()->getLocale()]) }}" data-i18n="preferences">Statistique</a> <!-- Adjusted name -->
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
                <form id="logout-form" action="{{ route('logout', ['locale' => app()->getLocale()]) }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </nav>
    <script>
        function changeLanguage(lang) {
            // Obtenir l'URL actuelle sans le segment de langue initial
            let pathname = window.location.pathname;
            const localeRegex = /^(\/(fr|ar))?/;
            pathname = pathname.replace(localeRegex, '/'); // Supprime le segment de langue initial
            window.location.href = `/${lang}${pathname === '/' ? '' : pathname}`;
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
            // ... autres traductions ...
        };
    </script>
@elseif($compo === "sidebar")
    @auth
        <aside class="sidebar">
            <a href="" data-i18n="addOffer">➕ Ajouter une offre</a>
            <a href="" data-i18n="addRequest">📌 Ajouter une demande</a>
            <a href="" data-i18n="viewNotifications">🔔 Voir les notifications</a>
            <a href="" data-i18n="editProfile">👤 Modifier mon profil</a>
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
@elseif($compo === "sidebar admin")
    @auth
        @if(auth()->user()->role === 'admin')
            <aside class="sidebar">
                <a href="{{ route('admin.User_Management', ['locale' => app()->getLocale()]) }}" data-i18n="addUser">➕ Gérer les utilisateurs</a>
                <a href="{{ route('admin.Dashboard', ['locale' => app()->getLocale()]) }}" data-i18n="viewOffers">📌 Voir tableau de bord</a>
                <a href="{{ route('admin.statistics', ['locale' => app()->getLocale()]) }}" data-i18n="viewRequests">📌 Voir les statistiques</a>
            </aside>
        @endif
    @endauth
    <script>
        function changeLanguage(lang) {
            // Obtenir l'URL actuelle sans le segment de langue initial
            let pathname = window.location.pathname;
            const localeRegex = /^(\/(fr|ar))?/;
            pathname = pathname.replace(localeRegex, '/'); // Supprime le segment de langue initial
            window.location.href = `/${lang}${pathname === '/' ? '' : pathname}`;
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
            // ... autres traductions ...
        };
    </script>
@elseif($compo == "Footer")
    <footer class="bg-light text-center py-4">
        <p data-i18n="copyright">© 2025 Marketplace Coopératives - Tous droits réservés</p>
        <div class="mt-2">
            <a href="" class="text-dark mx-2" data-i18n="terms">Conditions d'utilisation</a>
            <a href="" class="text-dark mx-2" data-i18n="privacy">Politique de confidentialité</a>
        </div>
    </footer>
    <script>
        function changeLanguage(lang) {
            // Obtenir l'URL actuelle sans le segment de langue initial
            let pathname = window.location.pathname;
            const localeRegex = /^(\/(fr|ar))?/;
            pathname = pathname.replace(localeRegex, '/'); // Supprime le segment de langue initial
            window.location.href = `/${lang}${pathname === '/' ? '' : pathname}`;
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
            // ... autres traductions ...
        };
    </script>
@elseif($compo === "Errors_Page")
    <div class="container mt-5 text-center">
        <div class="alert alert-danger">
            <h1 class="display-4" data-i18n="errorOops">Oops!</h1>
            <p class="lead" data-i18n="errorMessage">{{ $msg }}</p>
        </div>
        <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="btn btn-primary mt-3" data-i18n="backHome">Retour à l'accueil</a>
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
@elseif($compo === "Menu admin")
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="{{ route('admin.Dashboard', ['locale' => app()->getLocale()]) }}">Admin - Marketplace Coopératives</a> <!-- Corrected to user_space -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAdmin" aria-controls="navbarAdmin" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarAdmin">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.User_Management', ['locale' => app()->getLocale()]) }}">Gestion utilisateurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.statistics', ['locale' => app()->getLocale()]) }}">Statistiques</a>
                    </li>
                </ul>
                <form id="logout-form-admin" action="{{ route('logout', ['locale' => app()->getLocale()]) }}" method="POST" class="d-flex ms-auto">
                    @csrf
                    <button class="btn btn-outline-light" type="submit">Déconnexion</button>
                </form>
            </div>
        </div>
    </nav>
@endif
