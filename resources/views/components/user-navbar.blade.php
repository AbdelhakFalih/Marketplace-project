{{-- NAVBAR ESPACE UTILISATEUR --}}
<nav class="navbar navbar-expand-lg bg-white shadow-sm border-bottom sticky-top">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between w-100">
            <!-- Logo & Back to Site -->
            <div class="d-flex align-items-center">
                <a href="/" class="navbar-brand d-flex align-items-center text-decoration-none me-4">
                    <div class="bg-success rounded-3 p-2 me-2">
                        <i class="fas fa-handshake text-white"></i>
                    </div>
                    <span class="fw-bold text-dark">CoopMarket</span>
                </a>
                
                <div class="vr d-none d-md-block me-4"></div>
                
                <h4 class="mb-0 fw-bold text-dark d-none d-md-block">Mon Espace</h4>
            </div>
            
            <!-- User Info & Actions -->
            <div class="d-flex align-items-center">
                <!-- Notifications -->
                <div class="dropdown me-3">
                    <button class="btn btn-outline-secondary position-relative" type="button" data-bs-toggle="dropdown">
                        <i class="fas fa-bell"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            2
                        </span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" style="width: 300px;">
                        <li><h6 class="dropdown-header">Notifications</h6></li>
                        <li>
                            <a class="dropdown-item d-flex align-items-start" href="#">
                                <div class="bg-success rounded-circle p-2 me-3">
                                    <i class="fas fa-check text-white small"></i>
                                </div>
                                <div>
                                    <div class="fw-bold small">Commande expédiée</div>
                                    <div class="text-muted small">Votre commande #1234 est en route</div>
                                    <div class="text-muted small">Il y a 2h</div>
                                </div>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item d-flex align-items-start" href="#">
                                <div class="bg-primary rounded-circle p-2 me-3">
                                    <i class="fas fa-heart text-white small"></i>
                                </div>
                                <div>
                                    <div class="fw-bold small">Produit en promotion</div>
                                    <div class="text-muted small">Un de vos favoris est en promo</div>
                                    <div class="text-muted small">Il y a 1 jour</div>
                                </div>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-center" href="/user/notifications">Voir toutes</a></li>
                    </ul>
                </div>
                
                <!-- Messages -->
                <a href="/user/messages" class="btn btn-outline-secondary me-3 position-relative">
                    <i class="fas fa-envelope"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                        1
                    </span>
                </a>
                
                <!-- User Profile -->
                <div class="dropdown">
                    <button class="btn btn-outline-secondary d-flex align-items-center" type="button" data-bs-toggle="dropdown">
                        <div class="bg-primary rounded-circle p-2 me-2">
                            @if(Auth::check() && Auth::user()->avatar)
                                <img src="{{ Auth::user()->avatar }}" alt="Avatar" class="rounded-circle" style="width: 20px; height: 20px;">
                            @else
                                <i class="fas fa-user text-white small"></i>
                            @endif
                        </div>
                        <div class="text-start d-none d-md-block">
                            <div class="fw-bold small">{{ Auth::user()->name ?? 'Utilisateur' }}</div>
                            <div class="text-muted small">{{ Auth::user()->email ?? 'user@example.com' }}</div>
                        </div>
                        <i class="fas fa-chevron-down ms-2"></i>
                    </button>
                    
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><h6 class="dropdown-header">{{ Auth::user()->name ?? 'Utilisateur' }}</h6></li>
                        <li><small class="dropdown-item-text text-muted">{{ Auth::user()->email ?? 'user@example.com' }}</small></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/user/profile">
                            <i class="fas fa-user me-2"></i>Mon Profil
                        </a></li>
                        <li><a class="dropdown-item" href="/user/settings">
                            <i class="fas fa-cog me-2"></i>Paramètres
                        </a></li>
                        <li><a class="dropdown-item" href="/">
                            <i class="fas fa-home me-2"></i>Retour au site
                        </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="/logout">
                            <i class="fas fa-sign-out-alt me-2"></i>Déconnexion
                        </a></li>
                    </ul>
                </div>
                
                <!-- Mobile Menu Toggle -->
                <button class="navbar-toggler ms-2 d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#userNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div class="collapse navbar-collapse mt-3 d-lg-none" id="userNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('user/dashboard') ? 'active fw-bold' : '' }}" href="/user/dashboard">
                        <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('user/profile*') ? 'active fw-bold' : '' }}" href="/user/profile">
                        <i class="fas fa-user me-2"></i>Mon Profil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/user/orders">
                        <i class="fas fa-shopping-bag me-2"></i>Mes Commandes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/user/favorites">
                        <i class="fas fa-heart me-2"></i>Mes Favoris
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/user/settings">
                        <i class="fas fa-cog me-2"></i>Paramètres
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
