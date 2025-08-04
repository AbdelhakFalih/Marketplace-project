{{-- ============================================
    COMPONENTS BLADE POUR MARKETPLACE COOPÉRATIVE
    ============================================ --}}

{{-- ============================================
    NAVBARS ET SIDEBARS
    ============================================ --}}

{{-- 1. NAVBAR PRINCIPALE (Public) --}}
<nav class="navbar-main bg-white shadow-sm border-b border-gray-200 sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <!-- Top Bar -->
        <div class="flex items-center justify-between py-2 text-sm border-b border-gray-100">
            <div class="flex items-center space-x-4">
                <span class="text-gray-600">
                    <i class="fas fa-phone mr-1"></i>
                    <span data-translate="contact.phone">+212 123 456 789</span>
                </span>
                <span class="text-gray-600">
                    <i class="fas fa-envelope mr-1"></i>
                    <span data-translate="contact.email">contact@marketplace.ma</span>
                </span>
            </div>
            
            <!-- Language & Auth -->
            <div class="flex items-center space-x-4">
                <!-- Language Switcher -->
                <div class="dropdown relative">
                    <button class="flex items-center space-x-1 text-gray-600 hover:text-primary-600">
                        <i class="fas fa-globe"></i>
                        <span id="current-lang">FR</span>
                        <i class="fas fa-chevron-down text-xs"></i>
                    </button>
                    <div class="dropdown-menu absolute right-0 mt-2 w-32 bg-white rounded-md shadow-lg border hidden">
                        <a href="#" onclick="changeLanguage('fr')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Français</a>
                        <a href="#" onclick="changeLanguage('ar')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">العربية</a>
                        <a href="#" onclick="changeLanguage('en')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">English</a>
                    </div>
                </div>
                
                <!-- Quick Auth Links -->
                <div class="flex items-center space-x-2 text-sm">
                    @guest
                    <a href="/login" class="text-gray-600 hover:text-primary-600" data-translate="nav.login">Connexion</a>
                    <span class="text-gray-400">|</span>
                    <a href="/register" class="text-gray-600 hover:text-primary-600" data-translate="nav.register">Inscription</a>
                    @else
                    <span class="text-gray-600">Bonjour, {{ Auth::user()->name }}</span>
                    @endguest
                </div>
            </div>
        </div>
        
        <!-- Main Navigation -->
        <div class="flex items-center justify-between py-4">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-cooperative-500 rounded-xl flex items-center justify-center">
                        <i class="fas fa-handshake text-white text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900" data-translate="site.name">CoopMarket</h1>
                        <p class="text-xs text-gray-500" data-translate="site.tagline">Marketplace Coopérative</p>
                    </div>
                </a>
            </div>
            
            <!-- Search Bar -->
            <div class="flex-1 max-w-2xl mx-8">
                <div class="relative">
                    <input type="text" 
                           placeholder="Rechercher des produits, coopératives..." 
                           data-translate-placeholder="search.placeholder"
                           class="w-full px-4 py-3 pl-12 pr-20 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                    <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    <button class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-primary-500 text-white px-6 py-2 rounded-lg hover:bg-primary-600 transition-colors">
                        <span data-translate="search.button">Rechercher</span>
                    </button>
                </div>
            </div>
            
            <!-- User Actions -->
            <div class="flex items-center space-x-4">
                <!-- Cart -->
                <a href="/cart" class="relative p-3 text-gray-600 hover:text-primary-600 hover:bg-gray-100 rounded-lg transition-colors">
                    <i class="fas fa-shopping-cart text-xl"></i>
                    <span class="absolute -top-1 -right-1 bg-cooperative-500 text-white text-xs rounded-full w-6 h-6 flex items-center justify-center">3</span>
                </a>
                
                <!-- Favorites -->
                <a href="/favorites" class="p-3 text-gray-600 hover:text-primary-600 hover:bg-gray-100 rounded-lg transition-colors">
                    <i class="fas fa-heart text-xl"></i>
                </a>
                
                <!-- User Menu -->
                <div class="dropdown relative">
                    <button class="flex items-center space-x-2 p-3 text-gray-600 hover:text-primary-600 hover:bg-gray-100 rounded-lg transition-colors">
                        <i class="fas fa-user-circle text-xl"></i>
                        <span data-translate="nav.account">Compte</span>
                        <i class="fas fa-chevron-down text-xs"></i>
                    </button>
                    <div class="dropdown-menu absolute right-0 mt-2 w-56 bg-white rounded-xl shadow-lg border hidden">
                        @guest
                        <div class="p-4 border-b border-gray-100">
                            <p class="font-semibold text-gray-900">Invité</p>
                            <p class="text-sm text-gray-500">Connectez-vous pour plus d'options</p>
                        </div>
                        <div class="p-2">
                            <a href="/login" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                                <i class="fas fa-sign-in-alt mr-3 w-4"></i>
                                <span data-translate="nav.login">Se connecter</span>
                            </a>
                            <a href="/register" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                                <i class="fas fa-user-plus mr-3 w-4"></i>
                                <span data-translate="nav.register">S'inscrire</span>
                            </a>
                        </div>
                        @else
                        <div class="p-4 border-b border-gray-100">
                            <p class="font-semibold text-gray-900">{{ Auth::user()->name }}</p>
                            <p class="text-sm text-gray-500">{{ Auth::user()->email }}</p>
                        </div>
                        <div class="p-2">
                            <a href="/user/dashboard" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                                <i class="fas fa-tachometer-alt mr-3 w-4"></i>
                                <span data-translate="nav.dashboard">Tableau de bord</span>
                            </a>
                            <a href="/user/profile" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                                <i class="fas fa-user mr-3 w-4"></i>
                                <span data-translate="nav.profile">Mon Profil</span>
                            </a>
                            <a href="/user/orders" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                                <i class="fas fa-box mr-3 w-4"></i>
                                <span data-translate="nav.orders">Mes Commandes</span>
                            </a>
                            <hr class="my-1">
                            <a href="/logout" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                                <i class="fas fa-sign-out-alt mr-3 w-4"></i>
                                <span data-translate="nav.logout">Déconnexion</span>
                            </a>
                        </div>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Main Menu -->
        <div class="border-t border-gray-100 py-4">
            <ul class="flex items-center justify-center space-x-12">
                <li><a href="/" class="text-gray-700 hover:text-primary-600 font-medium transition-colors {{ request()->is('/') ? 'text-primary-600 font-semibold' : '' }}" data-translate="nav.home">Accueil</a></li>
                <li><a href="/products" class="text-gray-700 hover:text-primary-600 transition-colors {{ request()->is('products*') ? 'text-primary-600 font-semibold' : '' }}" data-translate="nav.products">Produits</a></li>
                <li><a href="/cooperatives" class="text-gray-700 hover:text-primary-600 transition-colors {{ request()->is('cooperatives*') ? 'text-primary-600 font-semibold' : '' }}" data-translate="nav.cooperatives">Coopératives</a></li>
                <li><a href="/categories" class="text-gray-700 hover:text-primary-600 transition-colors {{ request()->is('categories*') ? 'text-primary-600 font-semibold' : '' }}" data-translate="nav.categories">Catégories</a></li>
                <li><a href="/about" class="text-gray-700 hover:text-primary-600 transition-colors {{ request()->is('about') ? 'text-primary-600 font-semibold' : '' }}" data-translate="nav.about">À propos</a></li>
                <li><a href="/contact" class="text-gray-700 hover:text-primary-600 transition-colors {{ request()->is('contact') ? 'text-primary-600 font-semibold' : '' }}" data-translate="nav.contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

{{-- 2. NAVBAR MOBILE --}}
<nav class="navbar-mobile lg:hidden bg-white shadow-sm border-b border-gray-200 sticky top-0 z-50">
    <div class="px-4 py-3">
        <div class="flex items-center justify-between">
            <!-- Logo Mobile -->
            <a href="/" class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-cooperative-500 rounded-lg flex items-center justify-center">
                    <i class="fas fa-handshake text-white"></i>
                </div>
                <span class="text-lg font-bold text-gray-900">CoopMarket</span>
            </a>
            
            <!-- Mobile Actions -->
            <div class="flex items-center space-x-3">
                <!-- Search Button -->
                <button onclick="toggleMobileSearch()" class="p-2 text-gray-600 hover:text-primary-600">
                    <i class="fas fa-search text-lg"></i>
                </button>
                
                <!-- Cart -->
                <a href="/cart" class="relative p-2 text-gray-600 hover:text-primary-600">
                    <i class="fas fa-shopping-cart text-lg"></i>
                    <span class="absolute -top-1 -right-1 bg-cooperative-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                </a>
                
                <!-- Menu Toggle -->
                <button onclick="toggleMobileMenu()" class="p-2 text-gray-600 hover:text-primary-600">
                    <i class="fas fa-bars text-lg"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Search (Hidden by default) -->
        <div id="mobile-search" class="hidden mt-3">
            <div class="relative">
                <input type="text" 
                       placeholder="Rechercher..." 
                       class="w-full px-4 py-2 pl-10 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
            </div>
        </div>
    </div>
    
    <!-- Mobile Menu (Hidden by default) -->
    <div id="mobile-menu" class="hidden border-t border-gray-200 bg-white">
        <div class="px-4 py-4 space-y-2">
            <a href="/" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-lg">Accueil</a>
            <a href="/products" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-lg">Produits</a>
            <a href="/cooperatives" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-lg">Coopératives</a>
            <a href="/categories" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-lg">Catégories</a>
            <a href="/about" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-lg">À propos</a>
            <a href="/contact" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-lg">Contact</a>
            
            <hr class="my-3">
            
            @guest
            <a href="/login" class="block px-3 py-2 text-primary-600 hover:bg-primary-50 rounded-lg font-medium">Se connecter</a>
            <a href="/register" class="block px-3 py-2 text-cooperative-600 hover:bg-cooperative-50 rounded-lg font-medium">S'inscrire</a>
            @else
            <a href="/user/dashboard" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-lg">Mon espace</a>
            <a href="/logout" class="block px-3 py-2 text-red-600 hover:bg-red-50 rounded-lg">Déconnexion</a>
            @endguest
        </div>
    </div>
</nav>

{{-- 3. SIDEBAR ADMIN --}}
<div id="admin-sidebar" class="sidebar-admin fixed inset-y-0 left-0 z-50 w-64 bg-gray-900 text-white transition-all duration-300 transform -translate-x-full lg:translate-x-0">
    <!-- Logo -->
    <div class="flex items-center justify-center h-16 bg-gray-800 border-b border-gray-700">
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-red-500 rounded-lg flex items-center justify-center">
                <i class="fas fa-cog text-white"></i>
            </div>
            <span class="text-lg font-bold">Admin Panel</span>
        </div>
    </div>
    
    <!-- Navigation -->
    <nav class="mt-8 px-4">
        <div class="mb-6">
            <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Navigation</h3>
        </div>
        
        <!-- Dashboard -->
        <a href="/admin/dashboard" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors mb-1 {{ request()->is('admin/dashboard') ? 'bg-gray-800 text-white' : '' }}">
            <i class="fas fa-tachometer-alt w-5 mr-3"></i>
            <span>Tableau de bord</span>
        </a>
        
        <!-- Users Management -->
        <div class="mb-1">
            <button onclick="toggleSubmenu('admin-users-menu')" class="flex items-center justify-between w-full px-4 py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors">
                <div class="flex items-center">
                    <i class="fas fa-users w-5 mr-3"></i>
                    <span>Utilisateurs</span>
                </div>
                <i class="fas fa-chevron-down text-xs"></i>
            </button>
            <div id="admin-users-menu" class="hidden ml-8 mt-2 space-y-1">
                <a href="/admin/users" class="block px-4 py-2 text-sm text-gray-400 hover:text-white rounded-lg">Tous les utilisateurs</a>
                <a href="/admin/users/create" class="block px-4 py-2 text-sm text-gray-400 hover:text-white rounded-lg">Ajouter utilisateur</a>
                <a href="/admin/users/roles" class="block px-4 py-2 text-sm text-gray-400 hover:text-white rounded-lg">Rôles & Permissions</a>
            </div>
        </div>
        
        <!-- Cooperatives Management -->
        <div class="mb-1">
            <button onclick="toggleSubmenu('admin-coops-menu')" class="flex items-center justify-between w-full px-4 py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors">
                <div class="flex items-center">
                    <i class="fas fa-handshake w-5 mr-3"></i>
                    <span>Coopératives</span>
                </div>
                <i class="fas fa-chevron-down text-xs"></i>
            </button>
            <div id="admin-coops-menu" class="hidden ml-8 mt-2 space-y-1">
                <a href="/admin/cooperatives" class="block px-4 py-2 text-sm text-gray-400 hover:text-white rounded-lg">Toutes les coopératives</a>
                <a href="/admin/cooperatives/pending" class="block px-4 py-2 text-sm text-gray-400 hover:text-white rounded-lg">En attente d'approbation</a>
                <a href="/admin/cooperatives/create" class="block px-4 py-2 text-sm text-gray-400 hover:text-white rounded-lg">Ajouter coopérative</a>
            </div>
        </div>
        
        <!-- Products Management -->
        <div class="mb-1">
            <button onclick="toggleSubmenu('admin-products-menu')" class="flex items-center justify-between w-full px-4 py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors">
                <div class="flex items-center">
                    <i class="fas fa-box w-5 mr-3"></i>
                    <span>Produits</span>
                </div>
                <i class="fas fa-chevron-down text-xs"></i>
            </button>
            <div id="admin-products-menu" class="hidden ml-8 mt-2 space-y-1">
                <a href="/admin/products" class="block px-4 py-2 text-sm text-gray-400 hover:text-white rounded-lg">Tous les produits</a>
                <a href="/admin/products/categories" class="block px-4 py-2 text-sm text-gray-400 hover:text-white rounded-lg">Catégories</a>
                <a href="/admin/products/pending" class="block px-4 py-2 text-sm text-gray-400 hover:text-white rounded-lg">En attente</a>
            </div>
        </div>
        
        <!-- Orders -->
        <a href="/admin/orders" class="flex items-center justify-between px-4 py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors mb-1 {{ request()->is('admin/orders*') ? 'bg-gray-800 text-white' : '' }}">
            <div class="flex items-center">
                <i class="fas fa-shopping-cart w-5 mr-3"></i>
                <span>Commandes</span>
            </div>
            <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full">12</span>
        </a>
        
        <!-- Reports -->
        <div class="mb-1">
            <button onclick="toggleSubmenu('admin-reports-menu')" class="flex items-center justify-between w-full px-4 py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors">
                <div class="flex items-center">
                    <i class="fas fa-chart-bar w-5 mr-3"></i>
                    <span>Rapports</span>
                </div>
                <i class="fas fa-chevron-down text-xs"></i>
            </button>
            <div id="admin-reports-menu" class="hidden ml-8 mt-2 space-y-1">
                <a href="/admin/reports/sales" class="block px-4 py-2 text-sm text-gray-400 hover:text-white rounded-lg">Ventes</a>
                <a href="/admin/reports/users" class="block px-4 py-2 text-sm text-gray-400 hover:text-white rounded-lg">Utilisateurs</a>
                <a href="/admin/reports/cooperatives" class="block px-4 py-2 text-sm text-gray-400 hover:text-white rounded-lg">Coopératives</a>
            </div>
        </div>
        
        <!-- Settings -->
        <div class="mt-8 pt-8 border-t border-gray-700">
            <div class="mb-4">
                <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Système</h3>
            </div>
            
            <a href="/admin/settings" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors mb-1 {{ request()->is('admin/settings*') ? 'bg-gray-800 text-white' : '' }}">
                <i class="fas fa-cog w-5 mr-3"></i>
                <span>Paramètres</span>
            </a>
            
            <a href="/admin/logs" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-colors mb-1 {{ request()->is('admin/logs*') ? 'bg-gray-800 text-white' : '' }}">
                <i class="fas fa-file-alt w-5 mr-3"></i>
                <span>Logs système</span>
            </a>
        </div>
    </nav>
</div>

{{-- 4. SIDEBAR USER --}}
<div class="sidebar-user bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <!-- User Info Card -->
    <div class="p-6 bg-gradient-to-r from-blue-500 to-blue-600 text-white">
        <div class="flex items-center space-x-4">
            <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                @if(Auth::check() && Auth::user()->avatar)
                    <img src="{{ Auth::user()->avatar }}" alt="Avatar" class="w-14 h-14 rounded-full">
                @else
                    <i class="fas fa-user text-2xl"></i>
                @endif
            </div>
            <div>
                <h3 class="font-semibold text-lg">{{ Auth::user()->name ?? 'Utilisateur' }}</h3>
                <p class="text-blue-100 text-sm">Membre depuis {{ Auth::user()->created_at->format('M Y') ?? '2024' }}</p>
            </div>
        </div>
    </div>
    
    <!-- Navigation Menu -->
    <nav class="p-4">
        <ul class="space-y-2">
            <li>
                <a href="/user/dashboard" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors {{ request()->is('user/dashboard') ? 'bg-blue-50 text-blue-600 border-r-2 border-blue-500' : '' }}">
                    <i class="fas fa-tachometer-alt mr-3 w-5"></i>
                    <span>Tableau de bord</span>
                </a>
            </li>
            
            <li>
                <a href="/user/profile" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors {{ request()->is('user/profile*') ? 'bg-blue-50 text-blue-600 border-r-2 border-blue-500' : '' }}">
                    <i class="fas fa-user mr-3 w-5"></i>
                    <span>Mon Profil</span>
                </a>
            </li>
            
            <li>
                <a href="/user/orders" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors {{ request()->is('user/orders*') ? 'bg-blue-50 text-blue-600 border-r-2 border-blue-500' : '' }}">
                    <i class="fas fa-shopping-bag mr-3 w-5"></i>
                    <span>Mes Commandes</span>
                    <span class="ml-auto bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">3</span>
                </a>
            </li>
            
            <li>
                <a href="/user/favorites" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors {{ request()->is('user/favorites*') ? 'bg-blue-50 text-blue-600 border-r-2 border-blue-500' : '' }}">
                    <i class="fas fa-heart mr-3 w-5"></i>
                    <span>Mes Favoris</span>
                </a>
            </li>
            
            <li>
                <a href="/user/addresses" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors {{ request()->is('user/addresses*') ? 'bg-blue-50 text-blue-600 border-r-2 border-blue-500' : '' }}">
                    <i class="fas fa-map-marker-alt mr-3 w-5"></i>
                    <span>Mes Adresses</span>
                </a>
            </li>
            
            <li>
                <a href="/user/payments" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors {{ request()->is('user/payments*') ? 'bg-blue-50 text-blue-600 border-r-2 border-blue-500' : '' }}">
                    <i class="fas fa-credit-card mr-3 w-5"></i>
                    <span>Moyens de paiement</span>
                </a>
            </li>
            
            <li>
                <a href="/user/messages" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors {{ request()->is('user/messages*') ? 'bg-blue-50 text-blue-600 border-r-2 border-blue-500' : '' }}">
                    <i class="fas fa-envelope mr-3 w-5"></i>
                    <span>Messages</span>
                    <span class="ml-auto bg-red-500 text-white text-xs px-2 py-1 rounded-full">2</span>
                </a>
            </li>
            
            <li>
                <a href="/user/reviews" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors {{ request()->is('user/reviews*') ? 'bg-blue-50 text-blue-600 border-r-2 border-blue-500' : '' }}">
                    <i class="fas fa-star mr-3 w-5"></i>
                    <span>Mes Avis</span>
                </a>
            </li>
            
            <hr class="my-4">
            
            <li>
                <a href="/user/settings" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors {{ request()->is('user/settings*') ? 'bg-blue-50 text-blue-600 border-r-2 border-blue-500' : '' }}">
                    <i class="fas fa-cog mr-3 w-5"></i>
                    <span>Paramètres</span>
                </a>
            </li>
            
            <li>
                <a href="/user/help" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
                    <i class="fas fa-question-circle mr-3 w-5"></i>
                    <span>Aide</span>
                </a>
            </li>
        </ul>
    </nav>
</div>

{{-- 5. HEADER ADMIN --}}
<header class="header-admin bg-white shadow-sm border-b border-gray-200 h-16 flex items-center justify-between px-6">
    <!-- Left Side -->
    <div class="flex items-center space-x-4">
        <button onclick="toggleAdminSidebar()" class="p-2 rounded-lg text-gray-500 hover:bg-gray-100 lg:hidden">
            <i class="fas fa-bars"></i>
        </button>
        
        <div>
            <h1 class="text-xl font-semibold text-gray-900">@yield('page-title', 'Administration')</h1>
            <p class="text-sm text-gray-500">@yield('page-description', 'Gestion de la marketplace')</p>
        </div>
    </div>
    
    <!-- Right Side -->
    <div class="flex items-center space-x-4">
        <!-- Notifications -->
        <div class="relative">
            <button class="p-2 text-gray-500 hover:bg-gray-100 rounded-lg relative">
                <i class="fas fa-bell text-lg"></i>
                <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
            </button>
        </div>
        
        <!-- Quick Actions -->
        <button class="p-2 text-gray-500 hover:bg-gray-100 rounded-lg">
            <i class="fas fa-plus text-lg"></i>
        </button>
        
        <!-- Admin Profile -->
        <div class="dropdown relative">
            <button class="flex items-center space-x-3 p-2 rounded-lg hover:bg-gray-100">
                <div class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center">
                    <i class="fas fa-user text-white text-sm"></i>
                </div>
                <div class="text-left">
                    <p class="text-sm font-medium text-gray-900">{{ Auth::user()->name ?? 'Admin User' }}</p>
                    <p class="text-xs text-gray-500">Administrateur</p>
                </div>
                <i class="fas fa-chevron-down text-gray-400"></i>
            </button>
            
            <div class="dropdown-menu absolute right-0 mt-2 w-56 bg-white rounded-xl shadow-lg border hidden">
                <div class="p-4 border-b border-gray-100">
                    <p class="font-semibold text-gray-900">{{ Auth::user()->name ?? 'Admin User' }}</p>
                    <p class="text-sm text-gray-500">{{ Auth::user()->email ?? 'admin@marketplace.ma' }}</p>
                </div>
                <div class="p-2">
                    <a href="/admin/profile" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-user mr-3 w-4"></i>Mon Profil
                    </a>
                    <a href="/admin/settings" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-cog mr-3 w-4"></i>Paramètres
                    </a>
                    <a href="/" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-external-link-alt mr-3 w-4"></i>Voir le site
                    </a>
                    <hr class="my-2">
                    <a href="/admin/logout" class="flex items-center px-4 py-3 text-sm text-red-600 hover:bg-red-50 rounded-lg">
                        <i class="fas fa-sign-out-alt mr-3 w-4"></i>Déconnexion
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

{{-- 6. HEADER USER --}}
<header class="header-user bg-white shadow-sm border-b border-gray-200 sticky top-0 z-40">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <!-- Logo & Back to Site -->
            <div class="flex items-center space-x-6">
                <a href="/" class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-cooperative-500 rounded-lg flex items-center justify-center">
                        <i class="fas fa-handshake text-white"></i>
                    </div>
                    <span class="text-lg font-bold text-gray-900">CoopMarket</span>
                </a>
                
                <div class="h-6 w-px bg-gray-300"></div>
                
                <h1 class="text-lg font-semibold text-gray-900">Mon Espace</h1>
            </div>
            
            <!-- User Info & Actions -->
            <div class="flex items-center space-x-4">
                <!-- Notifications -->
                <div class="relative">
                    <button class="p-2 text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-bell text-lg"></i>
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">2</span>
                    </button>
                </div>
                
                <!-- Messages -->
                <a href="/user/messages" class="p-2 text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-lg">
                    <i class="fas fa-envelope text-lg"></i>
                </a>
                
                <!-- User Profile -->
                <div class="dropdown relative">
                    <button class="flex items-center space-x-3 p-2 rounded-lg hover:bg-gray-100">
                        <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-white text-sm"></i>
                        </div>
                        <div class="text-left">
                            <p class="text-sm font-medium text-gray-900">{{ Auth::user()->name ?? 'Utilisateur' }}</p>
                            <p class="text-xs text-gray-500">{{ Auth::user()->email ?? 'user@example.com' }}</p>
                        </div>
                        <i class="fas fa-chevron-down text-gray-400"></i>
                    </button>
                    
                    <div class="dropdown-menu absolute right-0 mt-2 w-56 bg-white rounded-xl shadow-lg border hidden">
                        <div class="p-4 border-b border-gray-100">
                            <p class="font-semibold text-gray-900">{{ Auth::user()->name ?? 'Utilisateur' }}</p>
                            <p class="text-sm text-gray-500">{{ Auth::user()->email ?? 'user@example.com' }}</p>
                        </div>
                        <div class="p-2">
                            <a href="/user/profile" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                                <i class="fas fa-user mr-3 w-4"></i>Mon Profil
                            </a>
                            <a href="/user/settings" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                                <i class="fas fa-cog mr-3 w-4"></i>Paramètres
                            </a>
                            <a href="/" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                                <i class="fas fa-home mr-3 w-4"></i>Retour au site
                            </a>
                            <hr class="my-2">
                            <a href="/logout" class="flex items-center px-4 py-3 text-sm text-red-600 hover:bg-red-50 rounded-lg">
                                <i class="fas fa-sign-out-alt mr-3 w-4"></i>Déconnexion
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

{{-- 1. BOUTONS --}}
{{-- Bouton Principal --}}
@php
function renderButton($text, $type = 'primary', $size = 'md', $icon = null, $href = null, $onclick = null, $disabled = false) {
    $baseClasses = 'inline-flex items-center justify-center font-medium rounded-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2';
    
    $sizeClasses = [
        'sm' => 'px-3 py-2 text-sm',
        'md' => 'px-4 py-2.5 text-sm',
        'lg' => 'px-6 py-3 text-base',
        'xl' => 'px-8 py-4 text-lg'
    ];
    
    $typeClasses = [
        'primary' => 'bg-primary-500 text-white hover:bg-primary-600 focus:ring-primary-500',
        'secondary' => 'bg-gray-200 text-gray-900 hover:bg-gray-300 focus:ring-gray-500',
        'success' => 'bg-cooperative-500 text-white hover:bg-cooperative-600 focus:ring-cooperative-500',
        'danger' => 'bg-red-500 text-white hover:bg-red-600 focus:ring-red-500',
        'warning' => 'bg-yellow-500 text-white hover:bg-yellow-600 focus:ring-yellow-500',
        'outline' => 'border-2 border-primary-500 text-primary-500 hover:bg-primary-500 hover:text-white focus:ring-primary-500',
        'ghost' => 'text-gray-600 hover:bg-gray-100 focus:ring-gray-500'
    ];
    
    $classes = $baseClasses . ' ' . $sizeClasses[$size] . ' ' . $typeClasses[$type];
    
    if ($disabled) {
        $classes .= ' opacity-50 cursor-not-allowed';
    }
    
    $iconHtml = $icon ? "<i class='fas fa-{$icon} mr-2'></i>" : '';
    
    if ($href) {
        return "<a href='{$href}' class='{$classes}' " . ($onclick ? "onclick='{$onclick}'" : '') . ">{$iconHtml}{$text}</a>";
    } else {
        return "<button type='button' class='{$classes}' " . ($onclick ? "onclick='{$onclick}'" : '') . ($disabled ? 'disabled' : '') . ">{$iconHtml}{$text}</button>";
    }
}
@endphp

{{-- 2. CARTES DE PRODUITS --}}
<div class="product-card bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
    <div class="relative">
        <img src="{{ $product['image'] ?? '/placeholder.svg?height=200&width=300' }}" 
             alt="{{ $product['name'] ?? 'Produit' }}" 
             class="w-full h-48 object-cover">
        
        <!-- Badge de réduction -->
        @if(isset($product['discount']) && $product['discount'] > 0)
        <div class="absolute top-3 left-3 bg-red-500 text-white px-2 py-1 rounded-full text-xs font-semibold">
            -{{ $product['discount'] }}%
        </div>
        @endif
        
        <!-- Bouton favori -->
        <button class="absolute top-3 right-3 w-8 h-8 bg-white bg-opacity-80 rounded-full flex items-center justify-center text-gray-600 hover:text-red-500 hover:bg-white transition-colors">
            <i class="fas fa-heart"></i>
        </button>
        
        <!-- Badge coopérative -->
        <div class="absolute bottom-3 left-3 bg-cooperative-500 text-white px-2 py-1 rounded-full text-xs font-semibold flex items-center">
            <i class="fas fa-handshake mr-1"></i>
            {{ $product['cooperative'] ?? 'Coopérative' }}
        </div>
    </div>
    
    <div class="p-4">
        <h3 class="font-semibold text-gray-900 mb-2 line-clamp-2">{{ $product['name'] ?? 'Nom du produit' }}</h3>
        <p class="text-gray-600 text-sm mb-3 line-clamp-2">{{ $product['description'] ?? 'Description du produit...' }}</p>
        
        <!-- Prix -->
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center space-x-2">
                @if(isset($product['old_price']))
                <span class="text-gray-400 line-through text-sm">{{ $product['old_price'] }} DH</span>
                @endif
                <span class="text-lg font-bold text-gray-900">{{ $product['price'] ?? '0' }} DH</span>
            </div>
            
            <!-- Note -->
            <div class="flex items-center space-x-1">
                <div class="flex text-yellow-400">
                    @for($i = 1; $i <= 5; $i++)
                        <i class="fas fa-star {{ $i <= ($product['rating'] ?? 0) ? '' : 'text-gray-300' }}"></i>
                    @endfor
                </div>
                <span class="text-sm text-gray-500">({{ $product['reviews_count'] ?? 0 }})</span>
            </div>
        </div>
        
        <!-- Actions -->
        <div class="flex space-x-2">
            <button class="flex-1 bg-primary-500 text-white py-2 px-4 rounded-lg hover:bg-primary-600 transition-colors flex items-center justify-center">
                <i class="fas fa-shopping-cart mr-2"></i>
                Ajouter au panier
            </button>
            <button class="px-3 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                <i class="fas fa-eye text-gray-600"></i>
            </button>
        </div>
    </div>
</div>

{{-- 3. CARTE COOPÉRATIVE --}}
<div class="cooperative-card bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
    <div class="relative h-32 bg-gradient-to-r from-cooperative-500 to-cooperative-600">
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
        <div class="absolute bottom-4 left-4 text-white">
            <h3 class="text-lg font-bold">{{ $cooperative['name'] ?? 'Nom de la coopérative' }}</h3>
            <p class="text-cooperative-100 text-sm">{{ $cooperative['location'] ?? 'Localisation' }}</p>
        </div>
        
        <!-- Logo coopérative -->
        <div class="absolute -bottom-6 right-4 w-12 h-12 bg-white rounded-full border-4 border-white flex items-center justify-center">
            @if(isset($cooperative['logo']))
                <img src="{{ $cooperative['logo'] }}" alt="Logo" class="w-8 h-8 rounded-full">
            @else
                <i class="fas fa-handshake text-cooperative-500"></i>
            @endif
        </div>
    </div>
    
    <div class="p-4 pt-8">
        <p class="text-gray-600 text-sm mb-4 line-clamp-3">{{ $cooperative['description'] ?? 'Description de la coopérative...' }}</p>
        
        <!-- Statistiques -->
        <div class="grid grid-cols-3 gap-4 mb-4 text-center">
            <div>
                <div class="text-lg font-bold text-gray-900">{{ $cooperative['products_count'] ?? 0 }}</div>
                <div class="text-xs text-gray-500">Produits</div>
            </div>
            <div>
                <div class="text-lg font-bold text-gray-900">{{ $cooperative['members_count'] ?? 0 }}</div>
                <div class="text-xs text-gray-500">Membres</div>
            </div>
            <div>
                <div class="text-lg font-bold text-gray-900">{{ $cooperative['rating'] ?? '0.0' }}</div>
                <div class="text-xs text-gray-500">Note</div>
            </div>
        </div>
        
        <!-- Spécialités -->
        @if(isset($cooperative['specialties']))
        <div class="flex flex-wrap gap-1 mb-4">
            @foreach(array_slice($cooperative['specialties'], 0, 3) as $specialty)
            <span class="bg-cooperative-100 text-cooperative-700 px-2 py-1 rounded-full text-xs">{{ $specialty }}</span>
            @endforeach
        </div>
        @endif
        
        <!-- Action -->
        <a href="/cooperatives/{{ $cooperative['id'] ?? '#' }}" class="block w-full bg-cooperative-500 text-white text-center py-2 rounded-lg hover:bg-cooperative-600 transition-colors">
            Voir la coopérative
        </a>
    </div>
</div>

{{-- 4. FORMULAIRE DE RECHERCHE --}}
<div class="search-form bg-white rounded-xl shadow-sm border border-gray-200 p-6">
    <form action="/search" method="GET" class="space-y-4">
        <!-- Recherche principale -->
        <div class="relative">
            <input type="text" 
                   name="q" 
                   placeholder="Rechercher des produits, coopératives..." 
                   value="{{ request('q') }}"
                   class="w-full px-4 py-3 pl-12 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
            <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
        </div>
        
        <!-- Filtres -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Catégorie -->
            <select name="category" class="px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                <option value="">Toutes les catégories</option>
                <option value="alimentaire">Alimentaire</option>
                <option value="artisanat">Artisanat</option>
                <option value="textile">Textile</option>
                <option value="cosmetique">Cosmétique</option>
            </select>
            
            <!-- Région -->
            <select name="region" class="px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                <option value="">Toutes les régions</option>
                <option value="casablanca">Casablanca</option>
                <option value="rabat">Rabat</option>
                <option value="marrakech">Marrakech</option>
                <option value="fes">Fès</option>
            </select>
            
            <!-- Prix -->
            <select name="price_range" class="px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                <option value="">Tous les prix</option>
                <option value="0-100">0 - 100 DH</option>
                <option value="100-500">100 - 500 DH</option>
                <option value="500-1000">500 - 1000 DH</option>
                <option value="1000+">1000+ DH</option>
            </select>
        </div>
        
        <!-- Boutons -->
        <div class="flex space-x-3">
            <button type="submit" class="flex-1 bg-primary-500 text-white py-3 px-6 rounded-lg hover:bg-primary-600 transition-colors flex items-center justify-center">
                <i class="fas fa-search mr-2"></i>
                Rechercher
            </button>
            <button type="button" onclick="resetForm()" class="px-6 py-3 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                <i class="fas fa-undo"></i>
            </button>
        </div>
    </form>
</div>

{{-- 5. PAGINATION --}}
<div class="pagination flex items-center justify-between bg-white px-6 py-4 rounded-lg border border-gray-200">
    <div class="text-sm text-gray-700">
        Affichage de <span class="font-medium">{{ $pagination['from'] ?? 1 }}</span> à 
        <span class="font-medium">{{ $pagination['to'] ?? 10 }}</span> sur 
        <span class="font-medium">{{ $pagination['total'] ?? 100 }}</span> résultats
    </div>
    
    <div class="flex items-center space-x-2">
        <!-- Précédent -->
        @if(isset($pagination['prev_url']))
        <a href="{{ $pagination['prev_url'] }}" class="px-3 py-2 text-sm text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-md transition-colors">
            <i class="fas fa-chevron-left mr-1"></i>Précédent
        </a>
        @endif
        
        <!-- Numéros de pages -->
        <div class="flex space-x-1">
            @if(isset($pagination['pages']))
                @foreach($pagination['pages'] as $page)
                    @if($page['active'])
                        <span class="px-3 py-2 text-sm bg-primary-500 text-white rounded-md">{{ $page['number'] }}</span>
                    @else
                        <a href="{{ $page['url'] }}" class="px-3 py-2 text-sm text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-md transition-colors">{{ $page['number'] }}</a>
                    @endif
                @endforeach
            @endif
        </div>
        
        <!-- Suivant -->
        @if(isset($pagination['next_url']))
        <a href="{{ $pagination['next_url'] }}" class="px-3 py-2 text-sm text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-md transition-colors">
            Suivant<i class="fas fa-chevron-right ml-1"></i>
        </a>
        @endif
    </div>
</div>

{{-- 6. MODAL --}}
<div id="modal-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-xl shadow-xl max-w-md w-full max-h-screen overflow-y-auto">
        <!-- Header -->
        <div class="flex items-center justify-between p-6 border-b border-gray-200">
            <h3 id="modal-title" class="text-lg font-semibold text-gray-900">Titre du modal</h3>
            <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>
        
        <!-- Content -->
        <div id="modal-content" class="p-6">
            <!-- Le contenu sera injecté ici -->
        </div>
        
        <!-- Footer -->
        <div id="modal-footer" class="flex justify-end space-x-3 p-6 border-t border-gray-200">
            <button onclick="closeModal()" class="px-4 py-2 text-gray-600 hover:text-gray-800 transition-colors">
                Annuler
            </button>
            <button id="modal-confirm" class="px-4 py-2 bg-primary-500 text-white rounded-lg hover:bg-primary-600 transition-colors">
                Confirmer
            </button>
        </div>
    </div>
</div>

{{-- 7. BREADCRUMB --}}
<nav class="breadcrumb flex items-center space-x-2 text-sm text-gray-600 mb-6">
    <a href="/" class="hover:text-primary-600 transition-colors">
        <i class="fas fa-home"></i>
    </a>
    
    @if(isset($breadcrumbs))
        @foreach($breadcrumbs as $breadcrumb)
        <i class="fas fa-chevron-right text-gray-400"></i>
        @if($loop->last)
            <span class="text-gray-900 font-medium">{{ $breadcrumb['name'] }}</span>
        @else
            <a href="{{ $breadcrumb['url'] }}" class="hover:text-primary-600 transition-colors">{{ $breadcrumb['name'] }}</a>
        @endif
        @endforeach
    @endif
</nav>

{{-- 8. STATISTIQUES DASHBOARD --}}
<div class="stats-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    @php
    $stats = [
        ['title' => 'Utilisateurs', 'value' => '1,234', 'icon' => 'users', 'color' => 'blue', 'change' => '+12%'],
        ['title' => 'Coopératives', 'value' => '89', 'icon' => 'handshake', 'color' => 'green', 'change' => '+5%'],
        ['title' => 'Produits', 'value' => '2,567', 'icon' => 'box', 'color' => 'purple', 'change' => '+18%'],
        ['title' => 'Commandes', 'value' => '456', 'icon' => 'shopping-cart', 'color' => 'orange', 'change' => '+23%']
    ];
    @endphp
    
    @foreach($stats as $stat)
    <div class="stat-card bg-white rounded-xl shadow-sm border border-gray-200 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-600 mb-1">{{ $stat['title'] }}</p>
                <p class="text-2xl font-bold text-gray-900">{{ $stat['value'] }}</p>
                <p class="text-sm text-green-600 mt-1">
                    <i class="fas fa-arrow-up mr-1"></i>{{ $stat['change'] }}
                </p>
            </div>
            <div class="w-12 h-12 bg-{{ $stat['color'] }}-100 rounded-lg flex items-center justify-center">
                <i class="fas fa-{{ $stat['icon'] }} text-{{ $stat['color'] }}-500 text-xl"></i>
            </div>
        </div>
    </div>
    @endforeach
</div>

{{-- 9. TABLEAU RESPONSIVE --}}
<div class="table-container bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <input type="checkbox" class="rounded border-gray-300 text-primary-600 focus:ring-primary-500">
                    </th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    <th class="px-6 py-4 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <!-- Exemple de ligne -->
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <input type="checkbox" class="rounded border-gray-300 text-primary-600 focus:ring-primary-500">
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center mr-3">
                                <i class="fas fa-user text-gray-500"></i>
                            </div>
                            <div>
                                <div class="text-sm font-medium text-gray-900">John Doe</div>
                                <div class="text-sm text-gray-500">Utilisateur</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">john@example.com</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                            Actif
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">12/01/2024</td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <div class="flex items-center justify-end space-x-2">
                            <button class="text-primary-600 hover:text-primary-900 p-1">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-yellow-600 hover:text-yellow-900 p-1">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-900 p-1">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

{{-- 10. FORMULAIRE DE CONTACT --}}
<div class="contact-form bg-white rounded-xl shadow-sm border border-gray-200 p-6">
    <form action="/contact" method="POST" class="space-y-6">
        @csrf
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nom complet</label>
                <input type="text" 
                       id="name" 
                       name="name" 
                       required
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
            </div>
            
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                <input type="email" 
                       id="email" 
                       name="email" 
                       required
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
            </div>
        </div>
        
        <div>
            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Sujet</label>
            <select id="subject" 
                    name="subject" 
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                <option value="">Choisir un sujet</option>
                <option value="general">Question générale</option>
                <option value="support">Support technique</option>
                <option value="partnership">Partenariat</option>
                <option value="complaint">Réclamation</option>
            </select>
        </div>
        
        <div>
            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
            <textarea id="message" 
                      name="message" 
                      rows="5" 
                      required
                      placeholder="Votre message..."
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent resize-none"></textarea>
        </div>
        
        <div class="flex items-center">
            <input type="checkbox" 
                   id="privacy" 
                   name="privacy" 
                   required
                   class="rounded border-gray-300 text-primary-600 focus:ring-primary-500 mr-3">
            <label for="privacy" class="text-sm text-gray-600">
                J'accepte la <a href="/privacy" class="text-primary-600 hover:underline">politique de confidentialité</a>
            </label>
        </div>
        
        <button type="submit" class="w-full bg-primary-500 text-white py-3 px-6 rounded-lg hover:bg-primary-600 transition-colors flex items-center justify-center">
            <i class="fas fa-paper-plane mr-2"></i>
            Envoyer le message
        </button>
    </form>
</div>

{{-- SCRIPTS JAVASCRIPT POUR LES COMPOSANTS --}}
<script>
// Modal functions
function openModal(title, content, confirmCallback = null) {
    document.getElementById('modal-title').textContent = title;
    document.getElementById('modal-content').innerHTML = content;
    document.getElementById('modal-overlay').classList.remove('hidden');
    
    if (confirmCallback) {
        document.getElementById('modal-confirm').onclick = confirmCallback;
    }
}

function closeModal() {
    document.getElementById('modal-overlay').classList.add('hidden');
}

// Form reset
function resetForm() {
    document.querySelector('.search-form form').reset();
}

// Table select all
function toggleSelectAll(checkbox) {
    const checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');
    checkboxes.forEach(cb => cb.checked = checkbox.checked);
}

// Notification toast
function showToast(message, type = 'success') {
    const toast = document.createElement('div');
    toast.className = `fixed top-4 right-4 z-50 px-6 py-4 rounded-lg shadow-lg text-white transition-all duration-300 transform translate-x-full`;
    
    const bgColor = {
        'success': 'bg-green-500',
        'error': 'bg-red-500',
        'warning': 'bg-yellow-500',
        'info': 'bg-blue-500'
    };
    
    toast.classList.add(bgColor[type]);
    toast.innerHTML = `
        <div class="flex items-center">
            <i class="fas fa-check-circle mr-2"></i>
            <span>${message}</span>
            <button onclick="this.parentElement.parentElement.remove()" class="ml-4 text-white hover:text-gray-200">
                <i class="fas fa-times"></i>
            </button>
        </div>
    `;
    
    document.body.appendChild(toast);
    
    // Animation d'entrée
    setTimeout(() => {
        toast.classList.remove('translate-x-full');
    }, 100);
    
    // Auto-suppression après 5 secondes
    setTimeout(() => {
        toast.classList.add('translate-x-full');
        setTimeout(() => toast.remove(), 300);
    }, 5000);
}

// Confirmation de suppression
function confirmDelete(message, callback) {
    openModal(
        'Confirmer la suppression',
        `<p class="text-gray-600">${message}</p>`,
        callback
    );
}

// Fonctions pour les navbars et sidebars
function toggleMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
}

function toggleMobileSearch() {
    const search = document.getElementById('mobile-search');
    search.classList.toggle('hidden');
}

function toggleAdminSidebar() {
    const sidebar = document.getElementById('admin-sidebar');
    sidebar.classList.toggle('-translate-x-full');
}

function toggleSubmenu(menuId) {
    const menu = document.getElementById(menuId);
    menu.classList.toggle('hidden');
    
    // Rotate chevron icon
    const button = menu.previousElementSibling;
    const chevron = button.querySelector('.fa-chevron-down');
    chevron.classList.toggle('rotate-180');
}

// Language change function
function changeLanguage(lang) {
    document.getElementById('current-lang').textContent = lang.toUpperCase();
    
    // Change direction for Arabic
    if (lang === 'ar') {
        document.documentElement.setAttribute('dir', 'rtl');
        document.documentElement.setAttribute('lang', 'ar');
    } else {
        document.documentElement.setAttribute('dir', 'ltr');
        document.documentElement.setAttribute('lang', lang);
    }
    
    // Save preference
    localStorage.setItem('preferred-language', lang);
    
    // Translate page if translation system is available
    if (typeof translatePage === 'function') {
        translatePage();
    }
}
</script>

{{-- STYLES CSS ADDITIONNELS --}}
<style>
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.dropdown:hover .dropdown-menu {
    display: block;
}

.fade-in {
    animation: fadeIn 0.3s ease-in;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}

.hover-scale:hover {
    transform: scale(1.02);
}

.transition-all {
    transition: all 0.3s ease;
}
</style>
