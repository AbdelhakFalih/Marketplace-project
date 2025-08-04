@extends('layouts.app')

@section('title', __('Accueil'))

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-20">
    <div class="container mx-auto px-4">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">{{ __('Bienvenue sur notre Marketplace') }}</h1>
                <p class="lead mb-4">{{ __('Découvrez des milliers de produits et services de qualité. Achetez, vendez et échangez en toute sécurité.') }}</p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="{{ route('register') }}" class="btn btn-light btn-lg px-4">{{ __('Commencer') }}</a>
                    <a href="#features" class="btn btn-outline-light btn-lg px-4">{{ __('En savoir plus') }}</a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img src="/placeholder.svg?height=400&width=500" alt="Marketplace" class="img-fluid rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('Pourquoi nous choisir ?') }}</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">{{ __('Notre plateforme offre une expérience unique pour tous vos besoins d\'achat et de vente.') }}</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover:shadow-lg transition-shadow">
                    <div class="card-body text-center p-4">
                        <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-shield-alt text-blue-600 text-2xl"></i>
                        </div>
                        <h5 class="card-title font-bold mb-3">{{ __('Sécurisé') }}</h5>
                        <p class="card-text text-gray-600">{{ __('Transactions sécurisées avec système de vérification avancé et protection des données.') }}</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover:shadow-lg transition-shadow">
                    <div class="card-body text-center p-4">
                        <div class="bg-green-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-users text-green-600 text-2xl"></i>
                        </div>
                        <h5 class="card-title font-bold mb-3">{{ __('Communauté') }}</h5>
                        <p class="card-text text-gray-600">{{ __('Rejoignez une communauté active de vendeurs et acheteurs vérifiés.') }}</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover:shadow-lg transition-shadow">
                    <div class="card-body text-center p-4">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-rocket text-purple-600 text-2xl"></i>
                        </div>
                        <h5 class="card-title font-bold mb-3">{{ __('Rapide') }}</h5>
                        <p class="card-text text-gray-600">{{ __('Interface intuitive et processus optimisés pour une expérience fluide.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="row text-center">
            <div class="col-md-3 col-6 mb-4">
                <div class="p-4">
                    <h3 class="text-4xl font-bold text-blue-600 mb-2">10K+</h3>
                    <p class="text-gray-600">{{ __('Utilisateurs actifs') }}</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="p-4">
                    <h3 class="text-4xl font-bold text-green-600 mb-2">50K+</h3>
                    <p class="text-gray-600">{{ __('Produits vendus') }}</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="p-4">
                    <h3 class="text-4xl font-bold text-purple-600 mb-2">98%</h3>
                    <p class="text-gray-600">{{ __('Satisfaction client') }}</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="p-4">
                    <h3 class="text-4xl font-bold text-orange-600 mb-2">24/7</h3>
                    <p class="text-gray-600">{{ __('Support client') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How it works -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('Comment ça marche ?') }}</h2>
            <p class="text-lg text-gray-600">{{ __('Trois étapes simples pour commencer') }}</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4 text-center">
                <div class="mb-4">
                    <div class="bg-blue-600 text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">1</div>
                    <h5 class="font-bold mb-3">{{ __('Inscrivez-vous') }}</h5>
                    <p class="text-gray-600">{{ __('Créez votre compte gratuitement en quelques minutes') }}</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="mb-4">
                    <div class="bg-green-600 text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">2</div>
                    <h5 class="font-bold mb-3">{{ __('Explorez') }}</h5>
                    <p class="text-gray-600">{{ __('Découvrez des milliers de produits ou publiez vos annonces') }}</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="mb-4">
                    <div class="bg-purple-600 text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">3</div>
                    <h5 class="font-bold mb-3">{{ __('Transigez') }}</h5>
                    <p class="text-gray-600">{{ __('Achetez et vendez en toute sécurité avec notre système de protection') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-r from-purple-600 to-blue-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">{{ __('Prêt à commencer ?') }}</h2>
        <p class="text-lg mb-6 opacity-90">{{ __('Rejoignez des milliers d\'utilisateurs satisfaits dès aujourd\'hui') }}</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="{{ route('register') }}" class="btn btn-light btn-lg px-5">{{ __('Créer un compte') }}</a>
            <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg px-5">{{ __('Nous contacter') }}</a>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Counter animation
    const counters = document.querySelectorAll('.text-4xl');
    const animateCounter = (counter) => {
        const target = parseInt(counter.textContent.replace(/[^\d]/g, ''));
        const increment = target / 100;
        let current = 0;
        
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                counter.textContent = counter.textContent.replace(/\d+/, target);
                clearInterval(timer);
            } else {
                counter.textContent = counter.textContent.replace(/\d+/, Math.floor(current));
            }
        }, 20);
    };
    
    // Intersection Observer for counter animation
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    });
    
    counters.forEach(counter => observer.observe(counter));
});
</script>
@endpush
