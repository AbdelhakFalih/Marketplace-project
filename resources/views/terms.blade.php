@extends('layouts.app')

@section('title', __('Conditions Générales d\'Utilisation'))

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h1 class="display-4 fw-bold mb-4">{{ __('Conditions Générales d\'Utilisation') }}</h1>
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
                                <a class="nav-link px-0 py-2 text-sm" href="#article1">{{ __('1. Objet') }}</a>
                                <a class="nav-link px-0 py-2 text-sm" href="#article2">{{ __('2. Acceptation') }}</a>
                                <a class="nav-link px-0 py-2 text-sm" href="#article3">{{ __('3. Inscription') }}</a>
                                <a class="nav-link px-0 py-2 text-sm" href="#article4">{{ __('4. Services') }}</a>
                                <a class="nav-link px-0 py-2 text-sm" href="#article5">{{ __('5. Obligations') }}</a>
                                <a class="nav-link px-0 py-2 text-sm" href="#article6">{{ __('6. Transactions') }}</a>
                                <a class="nav-link px-0 py-2 text-sm" href="#article7">{{ __('7. Paiements') }}</a>
                                <a class="nav-link px-0 py-2 text-sm" href="#article8">{{ __('8. Responsabilité') }}</a>
                                <a class="nav-link px-0 py-2 text-sm" href="#article9">{{ __('9. Propriété intellectuelle') }}</a>
                                <a class="nav-link px-0 py-2 text-sm" href="#article10">{{ __('10. Résiliation') }}</a>
                                <a class="nav-link px-0 py-2 text-sm" href="#article11">{{ __('11. Droit applicable') }}</a>
                                <a class="nav-link px-0 py-2 text-sm" href="#article12">{{ __('12. Contact') }}</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-lg-9">
                <div class="prose max-w-none">
                    <!-- Article 1 -->
                    <section id="article1" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ __('1. Objet') }}</h2>
                        <p class="text-gray-700 mb-4">{{ __('Les présentes Conditions Générales d\'Utilisation (CGU) ont pour objet de définir les modalités et conditions d\'utilisation de la plateforme marketplace accessible à l\'adresse [URL], ci-après dénommée "la Plateforme".') }}</p>
                        <p class="text-gray-700 mb-4">{{ __('La Plateforme est un service de mise en relation entre vendeurs et acheteurs, permettant la vente et l\'achat de biens et services.') }}</p>
                    </section>
                    
                    <!-- Article 2 -->
                    <section id="article2" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ __('2. Acceptation des conditions') }}</h2>
                        <p class="text-gray-700 mb-4">{{ __('L\'utilisation de la Plateforme implique l\'acceptation pleine et entière des présentes CGU. Si vous n\'acceptez pas ces conditions, vous ne devez pas utiliser la Plateforme.') }}</p>
                        <p class="text-gray-700 mb-4">{{ __('Nous nous réservons le droit de modifier ces CGU à tout moment. Les modifications entreront en vigueur dès leur publication sur la Plateforme.') }}</p>
                    </section>
                    
                    <!-- Article 3 -->
                    <section id="article3" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ __('3. Inscription et compte utilisateur') }}</h2>
                        <p class="text-gray-700 mb-4">{{ __('Pour utiliser certains services de la Plateforme, vous devez créer un compte utilisateur en fournissant des informations exactes et complètes.') }}</p>
                        <p class="text-gray-700 mb-4">{{ __('Vous êtes responsable de :') }}</p>
                        <ul class="list-disc pl-6 mb-4 text-gray-700">
                            <li>{{ __('La confidentialité de vos identifiants de connexion') }}</li>
                            <li>{{ __('L\'exactitude des informations fournies') }}</li>
                            <li>{{ __('La mise à jour de vos informations personnelles') }}</li>
                            <li>{{ __('Toutes les activités effectuées sous votre compte') }}</li>
                        </ul>
                    </section>
                    
                    <!-- Article 4 -->
                    <section id="article4" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ __('4. Services proposés') }}</h2>
                        <p class="text-gray-700 mb-4">{{ __('La Plateforme propose les services suivants :') }}</p>
                        <ul class="list-disc pl-6 mb-4 text-gray-700">
                            <li>{{ __('Mise en relation entre vendeurs et acheteurs') }}</li>
                            <li>{{ __('Publication d\'annonces de vente') }}</li>
                            <li>{{ __('Système de recherche et de filtrage') }}</li>
                            <li>{{ __('Messagerie intégrée') }}</li>
                            <li>{{ __('Système de notation et d\'avis') }}</li>
                            <li>{{ __('Services de paiement sécurisé') }}</li>
                        </ul>
                    </section>
                    
                    <!-- Article 5 -->
                    <section id="article5" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ __('5. Obligations des utilisateurs') }}</h2>
                        <p class="text-gray-700 mb-4">{{ __('En utilisant la Plateforme, vous vous engagez à :') }}</p>
                        <ul class="list-disc pl-6 mb-4 text-gray-700">
                            <li>{{ __('Respecter les lois et réglementations en vigueur') }}</li>
                            <li>{{ __('Ne pas publier de contenu illégal, offensant ou trompeur') }}</li>
                            <li>{{ __('Fournir des informations exactes sur les produits vendus') }}</li>
                            <li>{{ __('Respecter les droits de propriété intellectuelle') }}</li>
                            <li>{{ __('Ne pas utiliser la Plateforme à des fins frauduleuses') }}</li>
                            <li>{{ __('Maintenir un comportement respectueux envers les autres utilisateurs') }}</li>
                        </ul>
                    </section>
                    
                    <!-- Article 6 -->
                    <section id="article6" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ __('6. Transactions') }}</h2>
                        <p class="text-gray-700 mb-4">{{ __('La Plateforme facilite les transactions entre utilisateurs mais n\'est pas partie aux contrats de vente conclus entre vendeurs et acheteurs.') }}</p>
                        <p class="text-gray-700 mb-4">{{ __('Les vendeurs sont responsables de :') }}</p>
                        <ul class="list-disc pl-6 mb-4 text-gray-700">
                            <li>{{ __('La description exacte de leurs produits') }}</li>
                            <li>{{ __('Le respect des délais de livraison') }}</li>
                            <li>{{ __('La qualité des produits vendus') }}</li>
                            <li>{{ __('Le service après-vente') }}</li>
                        </ul>
                    </section>
                    
                    <!-- Article 7 -->
                    <section id="article7" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ __('7. Paiements et commissions') }}</h2>
                        <p class="text-gray-700 mb-4">{{ __('Les paiements sont traités par des prestataires de services de paiement tiers sécurisés.') }}</p>
                        <p class="text-gray-700 mb-4">{{ __('La Plateforme peut percevoir une commission sur les transactions réalisées. Le montant de cette commission est indiqué lors de la publication de l\'annonce.') }}</p>
                    </section>
                    
                    <!-- Article 8 -->
                    <section id="article8" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ __('8. Limitation de responsabilité') }}</h2>
                        <p class="text-gray-700 mb-4">{{ __('La Plateforme ne peut être tenue responsable :') }}</p>
                        <ul class="list-disc pl-6 mb-4 text-gray-700">
                            <li>{{ __('Des dommages directs ou indirects résultant de l\'utilisation de la Plateforme') }}</li>
                            <li>{{ __('De la qualité, de la conformité ou de la légalité des produits vendus') }}</li>
                            <li>{{ __('Des actions ou omissions des utilisateurs') }}</li>
                            <li>{{ __('Des interruptions temporaires du service') }}</li>
                        </ul>
                    </section>
                    
                    <!-- Article 9 -->
                    <section id="article9" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ __('9. Propriété intellectuelle') }}</h2>
                        <p class="text-gray-700 mb-4">{{ __('Tous les éléments de la Plateforme (textes, images, logos, etc.) sont protégés par les droits de propriété intellectuelle et appartiennent à la société ou à ses partenaires.') }}</p>
                        <p class="text-gray-700 mb-4">{{ __('Toute reproduction, représentation, modification ou adaptation sans autorisation est interdite.') }}</p>
                    </section>
                    
                    <!-- Article 10 -->
                    <section id="article10" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ __('10. Résiliation') }}</h2>
                        <p class="text-gray-700 mb-4">{{ __('Vous pouvez résilier votre compte à tout moment en nous contactant.') }}</p>
                        <p class="text-gray-700 mb-4">{{ __('Nous nous réservons le droit de suspendre ou de résilier votre compte en cas de violation des présentes CGU.') }}</p>
                    </section>
                    
                    <!-- Article 11 -->
                    <section id="article11" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ __('11. Droit applicable et juridiction') }}</h2>
                        <p class="text-gray-700 mb-4">{{ __('Les présentes CGU sont soumises au droit français. En cas de litige, les tribunaux français seront seuls compétents.') }}</p>
                    </section>
                    
                    <!-- Article 12 -->
                    <section id="article12" class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ __('12. Contact') }}</h2>
                        <p class="text-gray-700 mb-4">{{ __('Pour toute question concernant ces CGU, vous pouvez nous contacter :') }}</p>
                        <ul class="list-none mb-4 text-gray-700">
                            <li><strong>{{ __('Email :') }}</strong> legal@marketplace.com</li>
                            <li><strong>{{ __('Adresse :') }}</strong> 123 Rue de la Paix, 75001 Paris, France</li>
                            <li><strong>{{ __('Téléphone :') }}</strong> +33 1 23 45 67 89</li>
                        </ul>
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
