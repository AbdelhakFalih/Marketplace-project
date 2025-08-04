<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Mon Espace - @yield('title', 'Dashboard')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: { 50: '#f0f9ff', 500: '#3b82f6', 600: '#2563eb', 700: '#1d4ed8' },
                        user: { 50: '#f8fafc', 500: '#6366f1', 600: '#4f46e5', 700: '#4338ca' }
                    }
                }
            }
        }
    </script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    @stack('styles')
</head>
<body class="bg-gray-50">
    <!-- User Navbar -->
    @include('components.user-navbar')
    
    <!-- Breadcrumb -->
    @include('components.breadcrumb')
    
    <!-- Main Content -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-3">
                <!-- User Sidebar -->
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <div class="w-16 h-16 bg-user-500 rounded-full mx-auto flex items-center justify-center mb-3">
                                <i class="fas fa-user text-white text-2xl"></i>
                            </div>
                            <h5 class="card-title">{{ Auth::user()->name ?? 'Utilisateur' }}</h5>
                            <p class="text-muted small">Membre depuis {{ Auth::user()->created_at->format('M Y') ?? '2024' }}</p>
                        </div>
                        
                        <nav class="nav flex-column">
                            <a class="nav-link {{ request()->is('user/dashboard') ? 'active bg-user-50 text-user-600' : '' }}" href="/user/dashboard">
                                <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                            </a>
                            <a class="nav-link {{ request()->is('user/profile*') ? 'active bg-user-50 text-user-600' : '' }}" href="/user/profile">
                                <i class="fas fa-user me-2"></i>Mon Profil
                            </a>
                            <a class="nav-link" href="/user/orders">
                                <i class="fas fa-shopping-bag me-2"></i>Mes Commandes
                            </a>
                            <a class="nav-link" href="/user/favorites">
                                <i class="fas fa-heart me-2"></i>Mes Favoris
                            </a>
                            <a class="nav-link" href="/user/settings">
                                <i class="fas fa-cog me-2"></i>Paramètres
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-9">
                @yield('content')
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    @stack('scripts')
</body>
</html>
