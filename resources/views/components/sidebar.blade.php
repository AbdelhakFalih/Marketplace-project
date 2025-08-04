{{-- SIDEBAR ADMIN --}}
<div class="bg-dark text-white vh-100 position-fixed" style="width: 250px; z-index: 1000;">
    <!-- Logo Admin -->
    <div class="p-3 border-bottom border-secondary">
        <div class="d-flex align-items-center">
            <div class="bg-danger rounded p-2 me-2">
                <i class="fas fa-cog text-white"></i>
            </div>
            <div>
                <h5 class="mb-0 fw-bold">Admin Panel</h5>
                <small class="text-muted">Gestion Marketplace</small>
            </div>
        </div>
    </div>
    
    <!-- Navigation -->
    <nav class="p-3">
        <div class="mb-3">
            <h6 class="text-uppercase text-muted small fw-bold mb-2">Navigation</h6>
        </div>
        
        <!-- Dashboard -->
        <a href="/admin/dashboard" class="nav-link text-white d-flex align-items-center p-2 rounded mb-1 {{ request()->is('admin/dashboard') ? 'bg-secondary' : '' }} hover-bg-secondary">
            <i class="fas fa-tachometer-alt me-2"></i>
            <span>Tableau de bord</span>
        </a>
        
        <!-- Utilisateurs -->
        <div class="mb-1">
            <button class="nav-link text-white d-flex align-items-center justify-content-between w-100 p-2 rounded border-0 bg-transparent hover-bg-secondary" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#usersMenu">
                <div class="d-flex align-items-center">
                    <i class="fas fa-users me-2"></i>
                    <span>Utilisateurs</span>
                </div>
                <i class="fas fa-chevron-down small"></i>
            </button>
            <div class="collapse ms-3 mt-1" id="usersMenu">
                <a href="/admin/users" class="nav-link text-muted small d-block p-2 rounded hover-text-white">Tous les utilisateurs</a>
                <a href="/admin/users/create" class="nav-link text-muted small d-block p-2 rounded hover-text-white">Ajouter utilisateur</a>
                <a href="/admin/users/roles" class="nav-link text-muted small d-block p-2 rounded hover-text-white">Rôles & Permissions</a>
            </div>
        </div>
        
        <!-- Coopératives -->
        <div class="mb-1">
            <button class="nav-link text-white d-flex align-items-center justify-content-between w-100 p-2 rounded border-0 bg-transparent hover-bg-secondary" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#cooperativesMenu">
                <div class="d-flex align-items-center">
                    <i class="fas fa-handshake me-2"></i>
                    <span>Coopératives</span>
                </div>
                <i class="fas fa-chevron-down small"></i>
            </button>
            <div class="collapse ms-3 mt-1" id="cooperativesMenu">
                <a href="/admin/cooperatives" class="nav-link text-muted small d-block p-2 rounded hover-text-white">Toutes les coopératives</a>
                <a href="/admin/cooperatives/pending" class="nav-link text-muted small d-block p-2 rounded hover-text-white">En attente d'approbation</a>
                <a href="/admin/cooperatives/create" class="nav-link text-muted small d-block p-2 rounded hover-text-white">Ajouter coopérative</a>
            </div>
        </div>
        
        <!-- Produits -->
        <div class="mb-1">
            <button class="nav-link text-white d-flex align-items-center justify-content-between w-100 p-2 rounded border-0 bg-transparent hover-bg-secondary" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#productsMenu">
                <div class="d-flex align-items-center">
                    <i class="fas fa-box me-2"></i>
                    <span>Produits</span>
                </div>
                <i class="fas fa-chevron-down small"></i>
            </button>
            <div class="collapse ms-3 mt-1" id="productsMenu">
                <a href="/admin/products" class="nav-link text-muted small d-block p-2 rounded hover-text-white">Tous les produits</a>
                <a href="/admin/products/categories" class="nav-link text-muted small d-block p-2 rounded hover-text-white">Catégories</a>
                <a href="/admin/products/pending" class="nav-link text-muted small d-block p-2 rounded hover-text-white">En attente</a>
            </div>
        </div>
        
        <!-- Commandes -->
        <a href="/admin/orders" class="nav-link text-white d-flex align-items-center justify-content-between p-2 rounded mb-1 {{ request()->is('admin/orders*') ? 'bg-secondary' : '' }} hover-bg-secondary">
            <div class="d-flex align-items-center">
                <i class="fas fa-shopping-cart me-2"></i>
                <span>Commandes</span>
            </div>
            <span class="badge bg-danger">12</span>
        </a>
        
        <!-- Rapports -->
        <div class="mb-1">
            <button class="nav-link text-white d-flex align-items-center justify-content-between w-100 p-2 rounded border-0 bg-transparent hover-bg-secondary" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#reportsMenu">
                <div class="d-flex align-items-center">
                    <i class="fas fa-chart-bar me-2"></i>
                    <span>Rapports</span>
                </div>
                <i class="fas fa-chevron-down small"></i>
            </button>
            <div class="collapse ms-3 mt-1" id="reportsMenu">
                <a href="/admin/reports/sales" class="nav-link text-muted small d-block p-2 rounded hover-text-white">Ventes</a>
                <a href="/admin/reports/users" class="nav-link text-muted small d-block p-2 rounded hover-text-white">Utilisateurs</a>
                <a href="/admin/reports/cooperatives" class="nav-link text-muted small d-block p-2 rounded hover-text-white">Coopératives</a>
            </div>
        </div>
        
        <!-- Système -->
        <div class="mt-4 pt-3 border-top border-secondary">
            <div class="mb-3">
                <h6 class="text-uppercase text-muted small fw-bold mb-2">Système</h6>
            </div>
            
            <a href="/admin/settings" class="nav-link text-white d-flex align-items-center p-2 rounded mb-1 {{ request()->is('admin/settings*') ? 'bg-secondary' : '' }} hover-bg-secondary">
                <i class="fas fa-cog me-2"></i>
                <span>Paramètres</span>
            </a>
            
            <a href="/admin/logs" class="nav-link text-white d-flex align-items-center p-2 rounded mb-1 {{ request()->is('admin/logs*') ? 'bg-secondary' : '' }} hover-bg-secondary">
                <i class="fas fa-file-alt me-2"></i>
                <span>Logs système</span>
            </a>
            
            <a href="/admin/backup" class="nav-link text-white d-flex align-items-center p-2 rounded mb-1 hover-bg-secondary">
                <i class="fas fa-database me-2"></i>
                <span>Sauvegarde</span>
            </a>
        </div>
    </nav>
</div>

<style>
.hover-bg-secondary:hover {
    background-color: rgba(108, 117, 125, 0.5) !important;
}

.hover-text-white:hover {
    color: white !important;
}
</style>
