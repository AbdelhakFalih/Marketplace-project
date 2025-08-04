@extends('layouts.app')

@section('title', __('Questions Fréquentes'))

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h1 class="display-4 fw-bold mb-4">{{ __('Questions Fréquentes') }}</h1>
            <p class="lead max-w-3xl mx-auto">{{ __('Trouvez rapidement les réponses à vos questions les plus courantes.') }}</p>
        </div>
    </div>
</section>

<!-- Search Section -->
<section class="py-8 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto">
            <div class="position-relative">
                <input type="text" id="faqSearch" class="form-control form-control-lg ps-5" 
                       placeholder="{{ __('Rechercher dans la FAQ...') }}">
                <i class="fas fa-search position-absolute top-50 start-0 translate-middle-y ms-3 text-gray-400"></i>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Content -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="row">
            <!-- Categories -->
            <div class="col-lg-3 mb-5 mb-lg-0">
                <div class="sticky-top" style="top: 2rem;">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h5 class="font-bold mb-4">{{ __('Catégories') }}</h5>
                            <nav class="nav flex-column">
                                <a class="nav-link px-0 py-2 text-sm active" href="#general" data-category="general">
                                    <i class="fas fa-info-circle me-2"></i>{{ __('Général') }}
                                </a>
                                <a class="nav-link px-0 py-2 text-sm" href="#compte" data-category="compte">
                                    <i class="fas fa-user me-2"></i>{{ __('Compte') }}
                                </a>
                                <a class="nav-link px-0 py-2 text-sm" href="#vente" data-category="vente">
                                    <i class="fas fa-store me-2"></i>{{ __('Vendre') }}
                                </a>
                                <a class="nav-link px-0 py-2 text-sm" href="#achat" data-category="achat">
                                    <i class="fas fa-shopping-cart me-2"></i>{{ __('Acheter') }}
                                </a>
                                <a class="nav-link px-0 py-2 text-sm" href="#paiement" data-category="paiement">
                                    <i class="fas fa-credit-card me-2"></i>{{ __('Paiement') }}
                                </a>
                                <a class="nav-link px-0 py-2 text-sm" href="#securite" data-category="securite">
                                    <i class="fas fa-shield-alt me-2"></i>{{ __('Sécurité') }}
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- FAQ Items -->
            <div class="col-lg-9">
                <div id="faqAccordion">
                    <!-- Général -->
                    <div class="faq-category mb-5" data-category="general">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ __('Questions générales') }}</h3>
                        
                        <div class="accordion" id="generalAccordion">
                            <div class="accordion-item faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#general1">
                                        {{ __('Qu\'est-ce que cette plateforme ?') }}
                                    </button>
                                </h2>
                                <div id="general1" class="accordion-collapse collapse" data-bs-parent="#generalAccordion">
                                    <div class="accordion-body">
                                        {{ __('Notre plateforme est une marketplace qui permet aux utilisateurs d\'acheter et de vendre des produits et services en toute sécurité. Nous mettons en relation vendeurs et acheteurs tout en garantissant la sécurité des transactions.') }}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#general2">
                                        {{ __('Comment fonctionne la plateforme ?') }}
                                    </button>
                                </h2>
                                <div id="general2" class="accordion-collapse collapse" data-bs-parent="#generalAccordion">
                                    <div class="accordion-body">
                                        {{ __('C\'est simple : inscrivez-vous, créez votre profil, puis explorez les produits disponibles ou publiez vos propres annonces. Nos outils de recherche et de filtrage vous aident à trouver exactement ce que vous cherchez.') }}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#general3">
                                        {{ __('L\'utilisation est-elle gratuite ?') }}
                                    </button>
                                </h2>
                                <div id="general3" class="accordion-collapse collapse" data-bs-parent="#generalAccordion">
                                    <div class="accordion-body">
                                        {{ __('L\'inscription et la navigation sont entièrement gratuites. Nous prélevons une petite commission uniquement sur les ventes réussies pour maintenir et améliorer nos services.') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Compte -->
                    <div class="faq-category mb-5" data-category="compte">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ __('Gestion du compte') }}</h3>
                        
                        <div class="accordion" id="compteAccordion">
                            <div class="accordion-item faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#compte1">
                                        {{ __('Comment créer un compte ?') }}
                                    </button>
                                </h2>
                                <div id="compte1" class="accordion-collapse collapse" data-bs-parent="#compteAccordion">
                                    <div class="accordion-body">
                                        {{ __('Cliquez sur "S\'inscrire" en haut de la page, remplissez le formulaire avec vos informations, puis vérifiez votre email. Votre compte sera activé immédiatement après vérification.') }}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#compte2">
                                        {{ __('Comment modifier mes informations personnelles ?') }}
                                    </button>
                                </h2>
                                <div id="compte2" class="accordion-collapse collapse" data-bs-parent="#compteAccordion">
                                    <div class="accordion-body">
                                        {{ __('Connectez-vous à votre compte, allez dans "Mon profil" puis "Modifier le profil". Vous pouvez y changer vos informations personnelles, votre photo de profil et vos préférences.') }}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#compte3">
                                        {{ __('Comment supprimer mon compte ?') }}
                                    </button>
                                </h2>
                                <div id="compte3" class="accordion-collapse collapse" data-bs-parent="#compteAccordion">
                                    <div class="accordion-body">
                                        {{ __('Vous pouvez supprimer votre compte dans les paramètres de votre profil ou en nous contactant directement. Attention : cette action est irréversible et toutes vos données seront supprimées.') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Vente -->
                    <div class="faq-category mb-5" data-category="vente">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ __('Vendre sur la plateforme') }}</h3>
                        
                        <div class="accordion" id="venteAccordion">
                            <div class="accordion-item faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#vente1">
                                        {{ __('Comment publier une annonce ?') }}
                                    </button>
                                </h2>
                                <div id="vente1" class="accordion-collapse collapse" data-bs-parent="#venteAccordion">
                                    <div class="accordion-body">
                                        {{ __('Cliquez sur "Vendre" dans le menu principal, remplissez le formulaire avec les détails de votre produit, ajoutez des photos de qualité, fixez votre prix et publiez. Votre annonce sera visible immédiatement.') }}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#vente2">
                                        {{ __('Quels sont les frais de vente ?') }}
                                    </button>
                                </h2>
                                <div id="vente2" class="accordion-collapse collapse" data-bs-parent="#venteAccordion">
                                    <div class="accordion-body">
                                        {{ __('Nous prélevons une commission de 5% sur le prix de vente final. Cette commission couvre les frais de transaction, la sécurité et le support client. Aucun frais caché !') }}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#vente3">
                                        {{ __('Comment optimiser mes ventes ?') }}
                                    </button>
                                </h2>
                                <div id="vente3" class="accordion-collapse collapse" data-bs-parent="#venteAccordion">
                                    <div class="accordion-body">
                                        {{ __('Utilisez des photos de haute qualité, rédigez des descriptions détaillées, fixez des prix compétitifs et répondez rapidement aux messages. Un profil complet et des avis positifs augmentent aussi la confiance.') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Achat -->
                    <div class="faq-category mb-5" data-category="achat">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ __('Acheter sur la plateforme') }}</h3>
                        
                        <div class="accordion" id="achatAccordion">
                            <div class="accordion-item faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#achat1">
                                        {{ __('Comment passer une commande ?') }}
                                    </button>
                                </h2>
                                <div id="achat1" class="accordion-collapse collapse" data-bs-parent="#achatAccordion">
                                    <div class="accordion-body">
                                        {{ __('Trouvez le produit qui vous intéresse, cliquez sur "Acheter maintenant", vérifiez les détails de votre commande, choisissez votre mode de paiement et confirmez. Vous recevrez une confirmation par email.') }}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#achat2">
                                        {{ __('Puis-je annuler ma commande ?') }}
                                    </button>
                                </h2>
                                <div id="achat2" class="accordion-collapse collapse" data-bs-parent="#achatAccordion">
                                    <div class="accordion-body">
                                        {{ __('Vous pouvez annuler votre commande dans les 24h suivant l\'achat si le vendeur n\'a pas encore confirmé l\'expédition. Après ce délai, contactez directement le vendeur.') }}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#achat3">
                                        {{ __('Comment suivre ma commande ?') }}
                                    </button>
                                </h2>
                                <div id="achat3" class="accordion-collapse collapse" data-bs-parent="#achatAccordion">
                                    <div class="accordion-body">
                                        {{ __('Connectez-vous à votre compte et allez dans "Mes commandes". Vous y trouverez le statut de toutes vos commandes et les informations de suivi si disponibles.') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Paiement -->
                    <div class="faq-category mb-5" data-category="paiement">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ __('Paiement et facturation') }}</h3>
                        
                        <div class="accordion" id="paiementAccordion">
                            <div class="accordion-item faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paiement1">
                                        {{ __('Quels modes de paiement acceptez-vous ?') }}
                                    </button>
                                </h2>
                                <div id="paiement1" class="accordion-collapse collapse" data-bs-parent="#paiementAccordion">
                                    <div class="accordion-body">
                                        {{ __('Nous acceptons les cartes bancaires (Visa, Mastercard), PayPal, virements bancaires et certains portefeuilles électroniques. Tous les paiements sont sécurisés et chiffrés.') }}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paiement2">
                                        {{ __('Mes données de paiement sont-elles sécurisées ?') }}
                                    </button>
                                </h2>
                                <div id="paiement2" class="accordion-collapse collapse" data-bs-parent="#paiementAccordion">
                                    <div class="accordion-body">
                                        {{ __('Absolument ! Nous utilisons des prestataires de paiement certifiés PCI DSS et ne stockons jamais vos informations bancaires sur nos serveurs. Toutes les transactions sont chiffrées.') }}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paiement3">
                                        {{ __('Comment obtenir un remboursement ?') }}
                                    </button>
                                </h2>
                                <div id="paiement3" class="accordion-collapse collapse" data-bs-parent="#paiementAccordion">
                                    <div class="accordion-body">
                                        {{ __('En cas de problème avec votre commande, contactez d\'abord le vendeur. Si aucune solution n\'est trouvée, notre équipe de médiation interviendra pour résoudre le litige et organiser un remboursement si nécessaire.') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sécurité -->
                    <div class="faq-category mb-5" data-category="securite">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ __('Sécurité et confiance') }}</h3>
                        
                        <div class="accordion" id="securiteAccordion">
                            <div class="accordion-item faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#securite1">
                                        {{ __('Comment vérifiez-vous les vendeurs ?') }}
                                    </button>
                                </h2>
                                <div id="securite1" class="accordion-collapse collapse" data-bs-parent="#securiteAccordion">
                                    <div class="accordion-body">
                                        {{ __('Nous vérifions l\'identité des vendeurs, leur adresse email et leur numéro de téléphone. Les vendeurs professionnels doivent fournir des documents supplémentaires. Un système d\'avis et de notation aide aussi à identifier les vendeurs fiables.') }}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#securite2">
                                        {{ __('Que faire en cas de fraude ?') }}
                                    </button>
                                </h2>
                                <div id="securite2" class="accordion-collapse collapse" data-bs-parent="#securiteAccordion">
                                    <div class="accordion-body">
                                        {{ __('Signalez immédiatement tout comportement suspect via le bouton "Signaler" ou contactez notre support. Nous enquêtons sur tous les signalements et prenons des mesures appropriées, y compris la suspension de comptes.') }}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item faq-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#securite3">
                                        {{ __('Comment protégez-vous mes données personnelles ?') }}
                                    </button>
                                </h2>
                                <div id="securite3" class="accordion-collapse collapse" data-bs-parent="#securiteAccordion">
                                    <div class="accordion-body">
                                        {{ __('Nous respectons le RGPD et utilisons des technologies de chiffrement avancées. Vos données ne sont jamais vendues à des tiers et sont utilisées uniquement pour améliorer nos services. Consultez notre politique de confidentialité pour plus de détails.') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- No results message -->
                <div id="noResults" class="text-center py-8 d-none">
                    <i class="fas fa-search text-4xl text-gray-400 mb-4"></i>
                    <h4 class="text-gray-600 mb-2">{{ __('Aucun résultat trouvé') }}</h4>
                    <p class="text-gray-500">{{ __('Essayez avec d\'autres mots-clés ou parcourez les catégories.') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('Vous ne trouvez pas votre réponse ?') }}</h2>
            <p class="text-lg text-gray-600 mb-6">{{ __('Notre équipe de support est là pour vous aider') }}</p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg px-5">{{ __('Nous contacter') }}</a>
                <a href="mailto:support@marketplace.com" class="btn btn-outline-primary btn-lg px-5">{{ __('Envoyer un email') }}</a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('faqSearch');
    const faqItems = document.querySelectorAll('.faq-item');
    const categories = document.querySelectorAll('.faq-category');
    const categoryLinks = document.querySelectorAll('[data-category]');
    const noResults = document.getElementById('noResults');
    
    // Search functionality
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        let hasResults = false;
        
        faqItems.forEach(item => {
            const question = item.querySelector('.accordion-button').textContent.toLowerCase();
            const answer = item.querySelector('.accordion-body').textContent.toLowerCase();
            
            if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                item.style.display = 'block';
                hasResults = true;
            } else {
                item.style.display = 'none';
            }
        });
        
        // Show/hide categories based on visible items
        categories.forEach(category => {
            const visibleItems = category.querySelectorAll('.faq-item[style="display: block"], .faq-item:not([style*="display: none"])');
            if (searchTerm === '' || visibleItems.length > 0) {
                category.style.display = 'block';
            } else {
                category.style.display = 'none';
            }
        });
        
        // Show no results message
        if (searchTerm !== '' && !hasResults) {
            noResults.classList.remove('d-none');
        } else {
            noResults.classList.add('d-none');
        }
    });
    
    // Category filtering
    categoryLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Update active state
            categoryLinks.forEach(l => l.classList.remove('active', 'text-primary'));
            this.classList.add('active', 'text-primary');
            
            const targetCategory = this.getAttribute('data-category');
            
            // Show/hide categories
            categories.forEach(category => {
                if (category.getAttribute('data-category') === targetCategory) {
                    category.style.display = 'block';
                    category.scrollIntoView({ behavior: 'smooth', block: 'start' });
                } else {
                    category.style.display = 'none';
                }
            });
            
            // Clear search
            searchInput.value = '';
            faqItems.forEach(item => item.style.display = 'block');
            noResults.classList.add('d-none');
        });
    });
    
    // Show all categories by default
    document.querySelector('[data-category="general"]').addEventListener('click', function(e) {
        if (this.classList.contains('active')) {
            e.preventDefault();
            categories.forEach(category => category.style.display = 'block');
        }
    });
});
</script>
@endpush
