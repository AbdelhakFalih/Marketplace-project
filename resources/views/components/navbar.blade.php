{{-- NAVBAR PRINCIPALE PUBLIQUE --}}
<nav class="navbar navbar-expand-lg bg-white shadow-sm border-bottom sticky-top">
    <div class="container">
        <!-- Top Bar -->
        <div class="w-100 border-bottom pb-2 mb-3 d-none d-lg-block">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="d-flex align-items-center text-muted small">
                        <span class="me-4">
                            <i class="fas fa-phone me-1"></i>
                            <span data-translate="contact.phone">+212 123 456 789</span>
                        </span>
                        <span>
                            <i class="fas fa-envelope me-1"></i>
                            <span data-translate="contact.email">contact@marketplace.ma</span>
                        </span>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="d-flex align-items-center justify-content-end">
                        <!-- Language Switcher -->
                        <div class="dropdown me-3">
                            <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                <i class="fas fa-globe me-1"></i>
                                <span id="current-lang">FR</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" onclick="changeLanguage('fr')">Français</a></li>
                                <li><a class="dropdown-item" href="#" onclick="changeLanguage('ar')">العربية</a></li>
                                <li><a class="dropdown-item" href="#" onclick="changeLanguage('en')">English</a></li>
                            </ul>
                        </div>
                        
                        <!-- Quick Auth Links -->
                        @guest
                        <a href="/login" class="text-decoration-none me-2" data-translate="nav.login">Connexion</a>
                        <span class="text-muted">|</span>
                        <a href="/register" class="text-decoration-none ms-2" data-translate="nav.register">Inscription</a>
                        @else
                        <span class="text-muted">Bonjour, {{ Auth::user()->name }}</span>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Main Navigation -->
        <div class="w-100">
            <div class="row align-items-center">
                <!-- Logo -->
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="/" class="navbar-brand d-flex align-items-center text-decoration-none">
                        <div class="bg-success rounded-3 p-2 me-2">
                            <i class="fas fa-handshake text-white fs-4"></i>
                        </div>
                        <div>
                            <h4 class="mb-0 fw-bold text-dark" data-translate="site.name">CoopMarket</h4>
                            <small class="text-muted" data-translate="site.tagline">Marketplace Coopérative</small>
                        </div>
                    </a>
                </div>
                
                <!-- Search Bar -->
                <div class="col-lg-6 col-md-8 d-none d-md-block">
                    <form class="position-relative">
                        <input type="text" 
                               class="form-control form-control-lg ps-5 pe-5" 
                               placeholder="Rechercher des produits, coopératives..." 
                               data-translate-placeholder="search.placeholder">
                        <i class="fas fa-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                        <button type="submit" class="btn btn-primary position-absolute top-50 end-0 translate-middle-y me-2">
                            <span data-translate="search.button">Rechercher</span>
                        </button>
                    </form>
                </div>
                
                <!-- User Actions -->
                <div class="col-lg-3 col-6">
                    <div class="d-flex align-items-center justify-content-end">
                        <!-- Mobile Search Toggle -->
                        <button class="btn btn-outline-secondary me-2 d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#mobileSearch">
                            <i class="fas fa-search"></i>
                        </button>
                        
                        <!-- Cart -->
                        <a href="/cart" class="btn btn-outline-secondary position-relative me-2">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                3
                            </span>
                        </a>
                        
                        <!-- Favorites -->
                        <a href="/favorites" class="btn btn-outline-secondary me-2">
                            <i class="fas fa-heart"></i>
                        </a>
                        
                        <!-- User Menu -->
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                <i class="fas fa-user-circle"></i>
                                <span class="d-none d-lg-inline ms-1" data-translate="nav.account">Compte</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                @guest
                                <li><h6 class="dropdown-header">Invité</h6></li>
                                <li><a class="dropdown-item" href="/login">
                                    <i class="fas fa-sign-in-alt me-2"></i>
                                    <span data-translate="nav.login">Se connecter</span>
                                </a></li>
                                <li><a class="dropdown-item" href="/register">
                                    <i class="fas fa-user-plus me-2"></i>
                                    <span data-translate="nav.register">S'inscrire</span>
                                </a></li>
                                @else
                                <li><h6 class="dropdown-header">{{ Auth::user()->name }}</h6></li>
                                <li><a class="dropdown-item" href="/user/dashboard">
                                    <i class="fas fa-tachometer-alt me-2"></i>
                                    <span data-translate="nav.dashboard">Tableau de bord</span>
                                </a></li>
                                <li><a class="dropdown-item" href="/user/profile">
                                    <i class="fas fa-user me-2"></i>
                                    <span data-translate="nav.profile">Mon Profil</span>
                                </a></li>
                                <li><a class="dropdown-item" href="/user/orders">
                                    <i class="fas fa-box me-2"></i>
                                    <span data-translate="nav.orders">Mes Commandes</span>
                                </a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger" href="/logout">
                                    <i class="fas fa-sign-out-alt me-2"></i>
                                    <span data-translate="nav.logout">Déconnexion</span>
                                </a></li>
                                @endguest
                            </ul>
                        </div>
                        
                        <!-- Mobile Menu Toggle -->
                        <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Mobile Search -->
            <div class="collapse mt-3 d-md-none" id="mobileSearch">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Rechercher...">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Main Menu -->
        <div class="collapse navbar-collapse mt-3" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active fw-bold' : '' }}" href="/" data-translate="nav.home">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('products*') ? 'active fw-bold' : '' }}" href="/products" data-translate="nav.products">Produits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('cooperatives*') ? 'active fw-bold' : '' }}" href="/cooperatives" data-translate="nav.cooperatives">Coopératives</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('categories*') ? 'active fw-bold' : '' }}" href="/categories" data-translate="nav.categories">Catégories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active fw-bold' : '' }}" href="/about" data-translate="nav.about">À propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active fw-bold' : '' }}" href="/contact" data-translate="nav.contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
