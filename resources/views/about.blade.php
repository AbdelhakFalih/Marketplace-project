@extends('layouts.app')

@section('title', __('À propos'))

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h1 class="display-4 fw-bold mb-4">{{ __('À propos de nous') }}</h1>
            <p class="lead max-w-3xl mx-auto">{{ __('Découvrez notre histoire, notre mission et les valeurs qui nous guident dans la création de la meilleure marketplace.') }}</p>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('Notre Mission') }}</h2>
                <p class="text-lg text-gray-600 mb-4">{{ __('Nous nous efforçons de créer une plateforme de commerce en ligne sécurisée, accessible et innovante qui connecte les acheteurs et les vendeurs du monde entier.') }}</p>
                <p class="text-gray-600 mb-4">{{ __('Notre objectif est de démocratiser le commerce électronique en offrant des outils puissants et une expérience utilisateur exceptionnelle à tous nos utilisateurs, qu\'ils soient particuliers ou professionnels.') }}</p>
                <div class="d-flex gap-4 flex-wrap">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-green-600 me-2"></i>
                        <span>{{ __('Sécurité garantie') }}</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-green-600 me-2"></i>
                        <span>{{ __('Support 24/7') }}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="/placeholder.svg?height=400&width=500" alt="Notre équipe" class="img-fluid rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('Nos Valeurs') }}</h2>
            <p class="text-lg text-gray-600">{{ __('Les principes qui guident chacune de nos actions') }}</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-handshake text-blue-600 text-2xl"></i>
                    </div>
                    <h5 class="font-bold mb-3">{{ __('Confiance') }}</h5>
                    <p class="text-gray-600">{{ __('Nous construisons des relations durables basées sur la transparence et l\'intégrité.') }}</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="bg-green-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-lightbulb text-green-600 text-2xl"></i>
                    </div>
                    <h5 class="font-bold mb-3">{{ __('Innovation') }}</h5>
                    <p class="text-gray-600">{{ __('Nous innovons constamment pour améliorer l\'expérience de nos utilisateurs.') }}</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-purple-600 text-2xl"></i>
                    </div>
                    <h5 class="font-bold mb-3">{{ __('Communauté') }}</h5>
                    <p class="text-gray-600">{{ __('Nous favorisons une communauté inclusive et bienveillante pour tous.') }}</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="bg-orange-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-star text-orange-600 text-2xl"></i>
                    </div>
                    <h5 class="font-bold mb-3">{{ __('Excellence') }}</h5>
                    <p class="text-gray-600">{{ __('Nous visons l\'excellence dans tout ce que nous faisons.') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('Notre Équipe') }}</h2>
            <p class="text-lg text-gray-600">{{ __('Rencontrez les personnes passionnées qui rendent tout cela possible') }}</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm text-center">
                    <div class="card-body p-4">
                        <img src="/placeholder.svg?height=150&width=150" alt="CEO" class="rounded-full w-24 h-24 mx-auto mb-4 object-cover">
                        <h5 class="font-bold mb-2">{{ __('Marie Dubois') }}</h5>
                        <p class="text-blue-600 mb-3">{{ __('CEO & Fondatrice') }}</p>
                        <p class="text-gray-600 text-sm">{{ __('Passionnée par l\'innovation et le commerce électronique depuis plus de 10 ans.') }}</p>
                        <div class="d-flex justify-content-center gap-2 mt-3">
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm text-center">
                    <div class="card-body p-4">
                        <img src="/placeholder.svg?height=150&width=150" alt="CTO" class="rounded-full w-24 h-24 mx-auto mb-4 object-cover">
                        <h5 class="font-bold mb-2">{{ __('Pierre Martin') }}</h5>
                        <p class="text-blue-600 mb-3">{{ __('CTO') }}</p>
                        <p class="text-gray-600 text-sm">{{ __('Expert en technologies web et sécurité, architecte de notre plateforme.') }}</p>
                        <div class="d-flex justify-content-center gap-2 mt-3">
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm text-center">
                    <div class="card-body p-4">
                        <img src="/placeholder.svg?height=150&width=150" alt="Marketing Director" class="rounded-full w-24 h-24 mx-auto mb-4 object-cover">
                        <h5 class="font-bold mb-2">{{ __('Sophie Bernard') }}</h5>
                        <p class="text-blue-600 mb-3">{{ __('Directrice Marketing') }}</p>
                        <p class="text-gray-600 text-sm">{{ __('Spécialiste en marketing digital et expérience utilisateur.') }}</p>
                        <div class="d-flex justify-content-center gap-2 mt-3">
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Timeline Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('Notre Histoire') }}</h2>
            <p class="text-lg text-gray-600">{{ __('Les étapes clés de notre développement') }}</p>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <div class="relative">
                <!-- Timeline line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 bg-blue-200 h-full"></div>
                
                <!-- Timeline items -->
                <div class="space-y-12">
                    <div class="flex items-center">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="bg-white p-4 rounded-lg shadow-sm">
                                <h4 class="font-bold text-blue-600 mb-2">2020</h4>
                                <h5 class="font-semibold mb-2">{{ __('Création de l\'entreprise') }}</h5>
                                <p class="text-gray-600 text-sm">{{ __('Lancement de l\'idée et développement du concept initial.') }}</p>
                            </div>
                        </div>
                        <div class="w-4 h-4 bg-blue-600 rounded-full relative z-10"></div>
                        <div class="w-1/2 pl-8"></div>
                    </div>
                    
                    <div class="flex items-center">
                        <div class="w-1/2 pr-8"></div>
                        <div class="w-4 h-4 bg-green-600 rounded-full relative z-10"></div>
                        <div class="w-1/2 pl-8">
                            <div class="bg-white p-4 rounded-lg shadow-sm">
                                <h4 class="font-bold text-green-600 mb-2">2021</h4>
                                <h5 class="font-semibold mb-2">{{ __('Lancement de la plateforme') }}</h5>
                                <p class="text-gray-600 text-sm">{{ __('Mise en ligne de la première version et premiers utilisateurs.') }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="bg-white p-4 rounded-lg shadow-sm">
                                <h4 class="font-bold text-purple-600 mb-2">2022</h4>
                                <h5 class="font-semibold mb-2">{{ __('Expansion internationale') }}</h5>
                                <p class="text-gray-600 text-sm">{{ __('Ouverture à de nouveaux marchés et partenariats stratégiques.') }}</p>
                            </div>
                        </div>
                        <div class="w-4 h-4 bg-purple-600 rounded-full relative z-10"></div>
                        <div class="w-1/2 pl-8"></div>
                    </div>
                    
                    <div class="flex items-center">
                        <div class="w-1/2 pr-8"></div>
                        <div class="w-4 h-4 bg-orange-600 rounded-full relative z-10"></div>
                        <div class="w-1/2 pl-8">
                            <div class="bg-white p-4 rounded-lg shadow-sm">
                                <h4 class="font-bold text-orange-600 mb-2">2023</h4>
                                <h5 class="font-semibold mb-2">{{ __('Nouvelles fonctionnalités') }}</h5>
                                <p class="text-gray-600 text-sm">{{ __('Intégration de l\'IA et amélioration de l\'expérience utilisateur.') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-purple-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">{{ __('Rejoignez notre aventure') }}</h2>
        <p class="text-lg mb-6 opacity-90">{{ __('Faites partie de notre communauté grandissante') }}</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="{{ route('register') }}" class="btn btn-light btn-lg px-5">{{ __('Créer un compte') }}</a>
            <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg px-5">{{ __('Nous contacter') }}</a>
        </div>
    </div>
</section>
@endsection
