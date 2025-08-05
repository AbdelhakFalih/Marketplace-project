<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title data-translate="site.title">@yield('title', 'Marketplace Coopérative')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: { 50: '#f0f9ff', 500: '#3b82f6', 600: '#2563eb', 700: '#1d4ed8' },
                        cooperative: { 50: '#f0fdf4', 500: '#22c55e', 600: '#16a34a', 700: '#15803d' }
                    }
                }
            }
        }
    </script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    @stack('styles')
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
    
    <!-- Header -->
    <header class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-50">
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
                        <a href="/login" class="text-gray-600 hover:text-primary-600" data-translate="nav.login">Connexion</a>
                        <span class="text-gray-400">|</span>
                        <a href="/register" class="text-gray-600 hover:text-primary-600" data-translate="nav.register">Inscription</a>
                    </div>
                </div>
            </div>
            
            <!-- Main Navigation -->
            <nav class="flex items-center justify-between py-4">
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
                        </div>
                    </div>
                </div>
            </nav>
            
            <!-- Main Menu -->
            <div class="border-t border-gray-100 py-4">
                <ul class="flex items-center justify-center space-x-12">
                    <li><a href="/" class="text-gray-700 hover:text-primary-600 font-medium transition-colors" data-translate="nav.home">Accueil</a></li>
                    <li><a href="/products" class="text-gray-700 hover:text-primary-600 transition-colors" data-translate="nav.products">Produits</a></li>
                    <li><a href="/cooperatives" class="text-gray-700 hover:text-primary-600 transition-colors" data-translate="nav.cooperatives">Coopératives</a></li>
                    <li><a href="/categories" class="text-gray-700 hover:text-primary-600 transition-colors" data-translate="nav.categories">Catégories</a></li>
                    <li><a href="/about" class="text-gray-700 hover:text-primary-600 transition-colors" data-translate="nav.about">À propos</a></li>
                    <li><a href="/contact" class="text-gray-700 hover:text-primary-600 transition-colors" data-translate="nav.contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>
    
    <!-- Breadcrumb -->
    @if(isset($breadcrumbs))
    <div class="bg-white border-b border-gray-200">
        <div class="container mx-auto px-4 py-3">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2">
                    <li><a href="/" class="text-gray-500 hover:text-gray-700">Accueil</a></li>
                    @foreach($breadcrumbs as $breadcrumb)
                    <li class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                        @if($loop->last)
                            <span class="text-gray-900 font-medium">{{ $breadcrumb['name'] }}</span>
                        @else
                            <a href="{{ $breadcrumb['url'] }}" class="text-gray-500 hover:text-gray-700">{{ $breadcrumb['name'] }}</a>
                        @endif
                    </li>
                    @endforeach
                </ol>
            </nav>
        </div>
    </div>
    @endif
    
    <!-- Flash Messages -->
    @include('partials.flash-messages')
    
    <!-- Main Content -->
    <main class="flex-1">
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-20">
        <div class="container mx-auto px-4 py-16">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="md:col-span-2">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-10 h-10 bg-cooperative-500 rounded-xl flex items-center justify-center">
                            <i class="fas fa-handshake text-white text-lg"></i>
                        </div>
                        <h3 class="text-2xl font-bold" data-translate="site.name">CoopMarket</h3>
                    </div>
                    <p class="text-gray-400 mb-6 max-w-md" data-translate="footer.description">
                        Plateforme dédiée aux coopératives marocaines pour promouvoir leurs produits locaux et authentiques.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center text-gray-400 hover:text-white hover:bg-cooperative-500 transition-colors">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center text-gray-400 hover:text-white hover:bg-cooperative-500 transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center text-gray-400 hover:text-white hover:bg-cooperative-500 transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center text-gray-400 hover:text-white hover:bg-cooperative-500 transition-colors">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-6" data-translate="footer.quick_links">Liens Rapides</h4>
                    <ul class="space-y-3">
                        <li><a href="/about" class="text-gray-400 hover:text-white transition-colors" data-translate="nav.about">À propos</a></li>
                        <li><a href="/cooperatives" class="text-gray-400 hover:text-white transition-colors" data-translate="nav.cooperatives">Coopératives</a></li>
                        <li><a href="/products" class="text-gray-400 hover:text-white transition-colors" data-translate="nav.products">Produits</a></li>
                        <li><a href="/contact" class="text-gray-400 hover:text-white transition-colors" data-translate="nav.contact">Contact</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold mb-6" data-translate="footer.contact">Contact</h4>
                    <div class="space-y-3 text-gray-400">
                        <p class="flex items-center"><i class="fas fa-map-marker-alt mr-3 w-4"></i>Casablanca, Maroc</p>
                        <p class="flex items-center"><i class="fas fa-phone mr-3 w-4"></i>+212 123 456 789</p>
                        <p class="flex items-center"><i class="fas fa-envelope mr-3 w-4"></i>contact@marketplace.ma</p>
                    </div>
                </div>
            </div>
            
            <hr class="border-gray-800 my-12">
            
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">
                    &copy; 2024 <span data-translate="site.name">CoopMarket</span>. 
                    <span data-translate="footer.rights">Tous droits réservés.</span>
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="/privacy" class="text-gray-400 hover:text-white text-sm transition-colors" data-translate="footer.privacy">Confidentialité</a>
                    <a href="/terms" class="text-gray-400 hover:text-white text-sm transition-colors" data-translate="footer.terms">Conditions</a>
                    <a href="/cookies" class="text-gray-400 hover:text-white text-sm transition-colors" data-translate="footer.cookies">Cookies</a>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Scripts -->
    <script src="{{ asset('js/translations.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
