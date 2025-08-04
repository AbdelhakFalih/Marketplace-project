{{-- NAVBAR ADMIN --}}
<nav class="navbar navbar-expand-lg bg-white shadow-sm border-bottom" style="margin-left: 250px;">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between w-100">
            <!-- Left Side -->
            <div class="d-flex align-items-center">
                <button class="btn btn-outline-secondary me-3 d-lg-none" type="button" onclick="toggleSidebar()">
                    <i class="fas fa-bars"></i>
                </button>
                
                <div>
                    <h4 class="mb-0 fw-bold text-dark">@yield('page-title', 'Administration')</h4>
                    <small class="text-muted">@yield('page-description', 'Gestion de la marketplace')</small>
                </div>
            </div>
            
            <!-- Right Side -->
            <div class="d-flex align-items-center">
                <!-- Notifications -->
                <div class="dropdown me-3">
                    <button class="btn btn-outline-secondary position-relative" type="button" data-bs-toggle="dropdown">
                        <i class="fas fa-bell"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            3
                        </span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" style="width: 300px;">
                        <li><h6 class="dropdown-header">Notifications récentes</h6></li>
                        <li>
                            <a class="dropdown-item d-flex align-items-start" href="#">
                                <div class="bg-primary rounded-circle p-2 me-3">
                                    <i class="fas fa-user text-white small"></i>
                                </div>
                                <div>
                                    <div class="fw-bold small">Nouvel utilisateur</div>
                                    <div class="text-muted small">John Doe s'est inscrit</div>
                                    <div class="text-muted small">Il y a 5 min</div>
                                </div>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item d-flex align-items-start" href="#">
                                <div class="bg-success rounded-circle p-2 me-3">
                                    <i class="fas fa-shopping-cart text-white small"></i>
                                </div>
                                <div>
                                    <div class="fw-bold small">Nouvelle commande</div>
                                    <div class="text-muted small">Commande #1234 reçue</div>
                                    <div class="text-muted small">Il y a 15 min</div>
                                </div>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item d-flex align-items-start" href="#">
                                <div class="bg-warning rounded-circle p-2 me-3">
                                    <i class="fas fa-handshake text-white small"></i>
                                </div>
                                <div>
                                    <div class="fw-bold small">Coopérative en attente</div>
                                    <div class="text-muted small">Validation requise</div>
                                    <div class="text-muted small">Il y a 1h</div>
                                </div>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-center" href="/admin/notifications">Voir toutes les notifications</a></li>
                    </ul>
                </div>
                
                <!-- Quick Actions -->
                <div class="dropdown me-3">
                    <button class="btn btn-success" type="button" data-bs-toggle="dropdown">
                        <i class="fas fa-plus me-1"></i>
                        <span class="d-none d-md-inline">Ajouter</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="/admin/users/create">
                            <i class="fas fa-user me-2"></i>Nouvel utilisateur
                        </a></li>
                        <li><a class="dropdown-item" href="/admin/cooperatives/create">
                            <i class="fas fa-handshake me-2"></i>Nouvelle coopérative
                        </a></li>
                        <li><a class="dropdown-item" href="/admin/products/create">
                            <i class="fas fa-box me-2"></i>Nouveau produit
                        </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/admin/categories/create">
                            <i class="fas fa-tags me-2"></i>Nouvelle catégorie
                        </a></li>
                    </ul>
                </div>
                
                <!-- Admin Profile -->
                <div class="dropdown">
                    <button class="btn btn-outline-secondary d-flex align-items-center" type="button" data-bs-toggle="dropdown">
                        <div class="bg-danger rounded-circle p-2 me-2">
                            <i class="fas fa-user text-white small"></i>
                        </div>
                        <div class="text-start d-none d-md-block">
                            <div class="fw-bold small">{{ Auth::user()->name ?? 'Admin User' }}</div>
                            <div class="text-muted small">Administrateur</div>
                        </div>
                        <i class="fas fa-chevron-down ms-2"></i>
                    </button>
                    
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><h6 class="dropdown-header">{{ Auth::user()->name ?? 'Admin User' }}</h6></li>
                        <li><small class="dropdown-item-text text-muted">{{ Auth::user()->email ?? 'admin@marketplace.ma' }}</small></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/admin/profile">
                            <i class="fas fa-user me-2"></i>Mon Profil
                        </a></li>
                        <li><a class="dropdown-item" href="/admin/settings">
                            <i class="fas fa-cog me-2"></i>Paramètres
                        </a></li>
                        <li><a class="dropdown-item" href="/" target="_blank">
                            <i class="fas fa-external-link-alt me-2"></i>Voir le site
                        </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="/admin/logout">
                            <i class="fas fa-sign-out-alt me-2"></i>Déconnexion
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
function toggleSidebar() {
    // Toggle sidebar visibility on mobile
    const sidebar = document.querySelector('.bg-dark.vh-100');
    sidebar.classList.toggle('d-none');
}
</script>
