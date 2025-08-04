@extends('layouts.app')

@section('title', __('Politique de Confidentialité'))

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h1 class="display-4 fw-bold mb-4">{{ __('Politique de Confidentialité') }}</h1>
            <p class="lead">{{ __('Dernière mise à jour : ') }}{{ date('d/m/Y') }}</p>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="row">
            <!-- Table of Contents -->
            <div class="col-lg-3 mb-5 mb-lg-0">
                <div class="sticky-top" style="top: 2rem;">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h5 class="font-bold mb-4">{{ __('Sommaire') }}</h5>
                            <nav class="nav flex-column">
                                <a class="nav-link px-0 py-2 text-sm" href="#introduction">{{ __('Introduction') }}</a>
                                <a class="nav-link px-0 py-2 text-sm" href="#donnees-collectees">{{ __('Données collectées') }}</a>
                                <a class="nav-link px-0 py-2 text-sm" href="#utilisation">{{ __('Utilisation des données') }}</a>
                                <a class="nav-link px-0 py-2 text-sm" href="#partage">{{ __('Partage des données') }}</a>
                                <a class="nav-link px-0 py-2 text-sm" href="#cookies">{{ __('Cookies') }}</a>
                                <a class="nav-link px-0 py-2 text-sm" href="#securite">{{ __('Sécurité') }}</a>
                                <a class="nav-link px-0 py-2 text-sm" href="#droits">{{ __('Vos droits') }}</a>
                                <a class="nav-link px-0 py-2 text-sm" href="#conservation">{{ __('Conservation') }}</a>
                                <a class="nav-link px-0 py-2 text-sm" href="#contact">{{ __('Contact') }}</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-lg-9">
                <div class="prose max-w-none">
                    <!-- Introduction -->
                    <section id="introduction" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ __('Introduction') }}</h2>
                        <p class="text-gray-700 mb-4">{{ __('Nous accordons une grande importance à la protection de vos données personnelles. Cette politique de confidentialité explique comment nous collectons, utilisons et protégeons vos informations personnelles lorsque vous utilisez notre plateforme.') }}</p>
                        <p class="text-gray-700 mb-4">{{ __('En utilisant notre service, vous acceptez les pratiques décrites dans cette politique de confidentialité.') }}</p>
                    </section>
                    
                    <!-- Données collectées -->
                    <section id="donnees-collectees" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ __('Données que nous collectons') }}</h2>
                        
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">{{ __('Informations que vous nous fournissez') }}</h3>
                        <ul class="list-disc pl-6 mb-4 text-gray-700">
                            <li>{{ __('Informations de compte (nom, email, mot de passe)') }}</li>
                            <li>{{ __('Informations de profil (photo, description, préférences)') }}</li>
                            <li>{{ __('Informations de contact (adresse, téléphone)') }}</li>
                            <li>{{ __('Informations de paiement (via nos prestataires sécurisés)') }}</li>
                            <li>{{ __('Communications avec notre support client') }}</li>
                        </ul>
                        
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">{{ __('Informations collectées automatiquement') }}</h3>
                        <ul class="list-disc pl-6 mb-4 text-gray-700">
                            <li>{{ __('Données de navigation (pages visitées, durée de visite)') }}</li>
                            <li>{{ __('Informations techniques (adresse IP, type de navigateur)') }}</li>
                            <li>{{ __('Données de géolocalisation (si autorisée)') }}</li>
                            <li>{{ __('Cookies et technologies similaires') }}</li>
                        </ul>
                    </section>
                    
                    <!-- Utilisation des données -->
                    <section id="utilisation" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ __('Comment nous utilisons vos données') }}</h2>
                        <p class="text-gray-700 mb-4">{{ __('Nous utilisons vos données personnelles pour :') }}</p>
                        <ul class="list-disc pl-6 mb-4 text-gray-700">
                            <li>{{ __('Fournir et améliorer nos services') }}</li>
                            <li>{{ __('Traiter vos transactions et commandes') }}</li>
                            <li>{{ __('Communiquer avec vous (notifications, support)') }}</li>
                            <li>{{ __('Personnaliser votre expérience utilisateur') }}</li>
                            <li>{{ __('Assurer la sécurité de la plateforme') }}</li>
                            <li>{{ __('Respecter nos obligations légales') }}</li>
                            <li>{{ __('Analyser l\'utilisation de nos services') }}</li>
                        </ul>
                    </section>
                    
                    <!-- Partage des données -->
                    <section id="partage" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ __('Partage de vos données') }}</h2>
                        <p class="text-gray-700 mb-4">{{ __('Nous ne vendons jamais vos données personnelles. Nous pouvons partager vos informations dans les cas suivants :') }}</p>
                        <ul class="list-disc pl-6 mb-4 text-gray-700">
                            <li>{{ __('Avec votre consentement explicite') }}</li>
                            <li>{{ __('Avec nos prestataires de services (paiement, livraison)') }}</li>
                            <li>{{ __('Pour respecter une obligation légale') }}</li>
                            <li>{{ __('Pour protéger nos droits et notre sécurité') }}</li>
                            <li>{{ __('En cas de fusion ou acquisition d\'entreprise') }}</li>
                        </ul>
                    </section>
                    
                    <!-- Cookies -->
                    <section id="cookies" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ __('Cookies et technologies similaires') }}</h2>
                        <p class="text-gray-700 mb-4">{{ __('Nous utilisons des cookies pour améliorer votre expérience sur notre plateforme :') }}</p>
                        
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">{{ __('Types de cookies utilisés') }}</h3>
                        <ul class="list-disc pl-6 mb-4 text-gray-700">
                            <li><strong>{{ __('Cookies essentiels :') }}</strong> {{ __('Nécessaires au fonctionnement du site') }}</li>
                            <li><strong>{{ __('Cookies de performance :') }}</strong> {{ __('Pour analyser l\'utilisation du site') }}</li>
                            <li><strong>{{ __('Cookies de personnalisation :') }}</strong> {{ __('Pour mémoriser vos préférences') }}</li>
                            <li><strong>{{ __('Cookies publicitaires :') }}</strong> {{ __('Pour afficher des publicités pertinentes') }}</li>
                        </ul>
                        
                        <p class="text-gray-700 mb-4">{{ __('Vous pouvez gérer vos préférences de cookies dans les paramètres de votre navigateur.') }}</p>
                    </section>
                    
                    <!-- Sécurité -->
                    <section id="securite" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ __('Sécurité de vos données') }}</h2>
                        <p class="text-gray-700 mb-4">{{ __('Nous mettons en place des mesures techniques et organisationnelles appropriées pour protéger vos données :') }}</p>
                        <ul class="list-disc pl-6 mb-4 text-gray-700">
                            <li>{{ __('Chiffrement des données sensibles') }}</li>
                            <li>{{ __('Accès restreint aux données personnelles') }}</li>
                            <li>{{ __('Surveillance continue de nos systèmes') }}</li>
                            <li>{{ __('Formation régulière de nos équipes') }}</li>
                            <li>{{ __('Audits de sécurité réguliers') }}</li>
                        </ul>
                    </section>
                    
                    <!-- Vos droits -->
                    <section id="droits" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ __('Vos droits') }}</h2>
                        <p class="text-gray-700 mb-4">{{ __('Conformément au RGPD, vous disposez des droits suivants :') }}</p>
                        <ul class="list-disc pl-6 mb-4 text-gray-700">
                            <li><strong>{{ __('Droit d\'accès :') }}</strong> {{ __('Obtenir une copie de vos données') }}</li>
                            <li><strong>{{ __('Droit de rectification :') }}</strong> {{ __('Corriger vos données inexactes') }}</li>
                            <li><strong>{{ __('Droit à l\'effacement :') }}</strong> {{ __('Supprimer vos données') }}</li>
                            <li><strong>{{ __('Droit à la portabilité :') }}</strong> {{ __('Récupérer vos données') }}</li>
                            <li><strong>{{ __('Droit d\'opposition :') }}</strong> {{ __('Vous opposer au traitement') }}</li>
                            <li><strong>{{ __('Droit de limitation :') }}</strong> {{ __('Limiter le traitement') }}</li>
                        </ul>
                        
                        <div class="bg-blue-50 border-l-4 border-blue-400 p-4 mb-4">
                            <p class="text-blue-800">
                                <i class="fas fa-info-circle me-2"></i>
                                {{ __('Pour exercer vos droits, contactez-nous à privacy@marketplace.com') }}
                            </p>
                        </div>
                    </section>
                    
                    <!-- Conservation -->
                    <section id="conservation" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ __('Conservation des données') }}</h2>
                        <p class="text-gray-700 mb-4">{{ __('Nous conservons vos données personnelles uniquement le temps nécessaire aux finalités pour lesquelles elles ont été collectées :') }}</p>
                        <ul class="list-disc pl-6 mb-4 text-gray-700">
                            <li>{{ __('Données de compte : pendant la durée de vie du compte + 3 ans') }}</li>
                            <li>{{ __('Données de transaction : 10 ans (obligations comptables)') }}</li>
                            <li>{{ __('Données de navigation : 13 mois maximum') }}</li>
                            <li>{{ __('Données de support : 3 ans après résolution') }}</li>
                        </ul>
                    </section>
                    
                    <!-- Contact -->
                    <section id="contact" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ __('Nous contacter') }}</h2>
                        <p class="text-gray-700 mb-4">{{ __('Pour toute question concernant cette politique de confidentialité ou vos données personnelles :') }}</p>
                        
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h5 class="font-bold mb-3">{{ __('Délégué à la Protection des Données') }}</h5>
                            <ul class="list-none mb-0 text-gray-700">
                                <li><strong>{{ __('Email :') }}</strong> privacy@marketplace.com</li>
                                <li><strong>{{ __('Adresse :') }}</strong> 123 Rue de la Paix, 75001 Paris, France</li>
                                <li><strong>{{ __('Téléphone :') }}</strong> +33 1 23 45 67 89</li>
                            </ul>
                        </div>
                        
                        <p class="text-gray-700 mt-4">{{ __('Vous avez également le droit de déposer une plainte auprès de la CNIL si vous estimez que vos droits ne sont pas respectés.') }}</p>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for table of contents
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
    
    // Highlight active section in table of contents
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link[href^="#"]');
    
    function highlightActiveSection() {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (window.pageYOffset >= sectionTop - 200) {
                current = section.getAttribute('id');
            }
        });
        
        navLinks.forEach(link => {
            link.classList.remove('active', 'text-primary');
            if (link.getAttribute('href') === '#' + current) {
                link.classList.add('active', 'text-primary');
            }
        });
    }
    
    window.addEventListener('scroll', highlightActiveSection);
    highlightActiveSection(); // Initial call
});
</script>
@endpush
