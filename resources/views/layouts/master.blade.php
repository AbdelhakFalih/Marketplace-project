<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title data-translate="site.title">Marketplace Coopérative</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                        },
                        cooperative: {
                            50: '#f0fdf4',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <style>
        .dropdown:hover .dropdown-menu { display: block; }
        .fade-in { animation: fadeIn 0.3s ease-in; }
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
    </style>
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
                
                <!-- Language Switcher -->
                <div class="flex items-center space-x-4">
                    <div class="dropdown relative">
                        <button class="flex items-center space-x-1 text-gray-600 hover:text-primary-600">
                            <i class="fas fa-globe"></i>
                            <span id="current-lang">FR</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="dropdown-menu absolute right-0 mt-2 w-32 bg-white rounded-md shadow-lg border hidden">
                            <a href="#" onclick="changeLanguage('fr')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-flag mr-2"></i>Français
                            </a>
                            <a href="#" onclick="changeLanguage('ar')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-flag mr-2"></i>العربية
                            </a>
                            <a href="#" onclick="changeLanguage('en')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-flag mr-2"></i>English
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Main Navigation -->
            <nav class="flex items-center justify-between py-4">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="flex items-center space-x-2">
                        <div class="w-10 h-10 bg-cooperative-500 rounded-lg flex items-center justify-center">
                            <i class="fas fa-handshake text-white text-lg"></i>
                        </div>
                        <div>
                            <h1 class="text-xl font-bold text-gray-900" data-translate="site.name">CoopMarket</h1>
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
                               class="w-full px-4 py-2 pl-10 pr-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <button class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-primary-500 text-white px-4 py-1 rounded-md hover:bg-primary-600">
                            <span data-translate="search.button">Rechercher</span>
                        </button>
                    </div>
                </div>
                
                <!-- User Actions -->
                <div class="flex items-center space-x-4">
                    <!-- Cart -->
                    <a href="/cart" class="relative p-2 text-gray-600 hover:text-primary-600">
                        <i class="fas fa-shopping-cart text-xl"></i>
                        <span class="absolute -top-1 -right-1 bg-cooperative-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                    </a>
                    
                    <!-- Favorites -->
                    <a href="/favorites" class="p-2 text-gray-600 hover:text-primary-600">
                        <i class="fas fa-heart text-xl"></i>
                    </a>
                    
                    <!-- User Menu -->
                    <div class="dropdown relative">
                        <button class="flex items-center space-x-2 p-2 text-gray-600 hover:text-primary-600">
                            <i class="fas fa-user-circle text-xl"></i>
                            <span data-translate="nav.account">Mon Compte</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="dropdown-menu absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg border hidden">
                            <a href="/login" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-sign-in-alt mr-2"></i>
                                <span data-translate="nav.login">Se connecter</span>
                            </a>
                            <a href="/register" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-user-plus mr-2"></i>
                                <span data-translate="nav.register">S'inscrire</span>
                            </a>
                            <hr class="my-1">
                            <a href="/dashboard" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-tachometer-alt mr-2"></i>
                                <span data-translate="nav.dashboard">Tableau de bord</span>
                            </a>
                            <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-user mr-2"></i>
                                <span data-translate="nav.profile">Mon Profil</span>
                            </a>
                            <a href="/orders" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-box mr-2"></i>
                                <span data-translate="nav.orders">Mes Commandes</span>
                            </a>
                            <hr class="my-1">
                            <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-sign-out-alt mr-2"></i>
                                <span data-translate="nav.logout">Déconnexion</span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            
            <!-- Main Menu -->
            <div class="border-t border-gray-100 py-3">
                <ul class="flex items-center space-x-8">
                    <li><a href="/" class="text-gray-700 hover:text-primary-600 font-medium" data-translate="nav.home">Accueil</a></li>
                    <li><a href="/products" class="text-gray-700 hover:text-primary-600" data-translate="nav.products">Produits</a></li>
                    <li><a href="/cooperatives" class="text-gray-700 hover:text-primary-600" data-translate="nav.cooperatives">Coopératives</a></li>
                    <li><a href="/categories" class="text-gray-700 hover:text-primary-600" data-translate="nav.categories">Catégories</a></li>
                    <li><a href="/about" class="text-gray-700 hover:text-primary-600" data-translate="nav.about">À propos</a></li>
                    <li><a href="/contact" class="text-gray-700 hover:text-primary-600" data-translate="nav.contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>
    
    <!-- Flash Messages -->
    <div id="flash-messages" class="container mx-auto px-4 mt-4">
        <!-- Success Message -->
        <div id="success-message" class="hidden bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4 fade-in">
            <div class="flex items-center">
                <i class="fas fa-check-circle mr-2"></i>
                <span id="success-text"></span>
                <button onclick="closeMessage('success-message')" class="ml-auto">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        
        <!-- Error Message -->
        <div id="error-message" class="hidden bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4 fade-in">
            <div class="flex items-center">
                <i class="fas fa-exclamation-circle mr-2"></i>
                <span id="error-text"></span>
                <button onclick="closeMessage('error-message')" class="ml-auto">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        
        <!-- Warning Message -->
        <div id="warning-message" class="hidden bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded mb-4 fade-in">
            <div class="flex items-center">
                <i class="fas fa-exclamation-triangle mr-2"></i>
                <span id="warning-text"></span>
                <button onclick="closeMessage('warning-message')" class="ml-auto">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Main Content -->
    <main class="flex-1">
        <!-- Content will be inserted here -->
        <div id="main-content">
            <!-- Page content goes here -->
        </div>
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-16">
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-8 h-8 bg-cooperative-500 rounded-lg flex items-center justify-center">
                            <i class="fas fa-handshake text-white"></i>
                        </div>
                        <h3 class="text-lg font-bold" data-translate="site.name">CoopMarket</h3>
                    </div>
                    <p class="text-gray-400 mb-4" data-translate="footer.description">
                        Plateforme dédiée aux coopératives marocaines pour promouvoir leurs produits locaux et authentiques.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4" data-translate="footer.quick_links">Liens Rapides</h4>
                    <ul class="space-y-2">
                        <li><a href="/about" class="text-gray-400 hover:text-white" data-translate="nav.about">À propos</a></li>
                        <li><a href="/cooperatives" class="text-gray-400 hover:text-white" data-translate="nav.cooperatives">Coopératives</a></li>
                        <li><a href="/products" class="text-gray-400 hover:text-white" data-translate="nav.products">Produits</a></li>
                        <li><a href="/contact" class="text-gray-400 hover:text-white" data-translate="nav.contact">Contact</a></li>
                    </ul>
                </div>
                
                <!-- Customer Service -->
                <div>
                    <h4 class="text-lg font-semibold mb-4" data-translate="footer.customer_service">Service Client</h4>
                    <ul class="space-y-2">
                        <li><a href="/help" class="text-gray-400 hover:text-white" data-translate="footer.help">Aide</a></li>
                        <li><a href="/shipping" class="text-gray-400 hover:text-white" data-translate="footer.shipping">Livraison</a></li>
                        <li><a href="/returns" class="text-gray-400 hover:text-white" data-translate="footer.returns">Retours</a></li>
                        <li><a href="/faq" class="text-gray-400 hover:text-white" data-translate="footer.faq">FAQ</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold mb-4" data-translate="footer.contact">Contact</h4>
                    <div class="space-y-2 text-gray-400">
                        <p><i class="fas fa-map-marker-alt mr-2"></i>Casablanca, Maroc</p>
                        <p><i class="fas fa-phone mr-2"></i>+212 123 456 789</p>
                        <p><i class="fas fa-envelope mr-2"></i>contact@marketplace.ma</p>
                    </div>
                </div>
            </div>
            
            <hr class="border-gray-800 my-8">
            
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">
                    &copy; 2024 <span data-translate="site.name">CoopMarket</span>. 
                    <span data-translate="footer.rights">Tous droits réservés.</span>
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="/privacy" class="text-gray-400 hover:text-white text-sm" data-translate="footer.privacy">Confidentialité</a>
                    <a href="/terms" class="text-gray-400 hover:text-white text-sm" data-translate="footer.terms">Conditions</a>
                    <a href="/cookies" class="text-gray-400 hover:text-white text-sm" data-translate="footer.cookies">Cookies</a>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Translation Script -->
    <script src="js/translations.js"></script>
    
    <!-- Main JavaScript -->
    <script>
        // Close flash messages
        function closeMessage(messageId) {
            document.getElementById(messageId).classList.add('hidden');
        }
        
        // Show flash message
        function showMessage(type, message) {
            const messageElement = document.getElementById(type + '-message');
            const textElement = document.getElementById(type + '-text');
            textElement.textContent = message;
            messageElement.classList.remove('hidden');
            
            // Auto hide after 5 seconds
            setTimeout(() => {
                messageElement.classList.add('hidden');
            }, 5000);
        }
        
        // Mobile menu toggle (if needed)
        function toggleMobileMenu() {
            // Implementation for mobile menu
        }
    </script>
</body>
</html>
