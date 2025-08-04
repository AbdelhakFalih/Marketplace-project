@extends('layouts.app')

@section('title', __('Contact'))

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h1 class="display-4 fw-bold mb-4">{{ __('Contactez-nous') }}</h1>
            <p class="lead max-w-3xl mx-auto">{{ __('Nous sommes là pour vous aider. N\'hésitez pas à nous contacter pour toute question ou suggestion.') }}</p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="row">
            <!-- Contact Form -->
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <h3 class="font-bold mb-4">{{ __('Envoyez-nous un message') }}</h3>
                        
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif
                        
                        <form action="{{ route('contact.send') }}" method="POST" id="contactForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="first_name" class="form-label">{{ __('Prénom') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" 
                                           id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                                    @error('first_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="last_name" class="form-label">{{ __('Nom') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" 
                                           id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                                    @error('last_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">{{ __('Email') }} <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                           id="email" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">{{ __('Téléphone') }}</label>
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" 
                                           id="phone" name="phone" value="{{ old('phone') }}">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="subject" class="form-label">{{ __('Sujet') }} <span class="text-danger">*</span></label>
                                <select class="form-select @error('subject') is-invalid @enderror" id="subject" name="subject" required>
                                    <option value="">{{ __('Sélectionnez un sujet') }}</option>
                                    <option value="general" {{ old('subject') == 'general' ? 'selected' : '' }}>{{ __('Question générale') }}</option>
                                    <option value="support" {{ old('subject') == 'support' ? 'selected' : '' }}>{{ __('Support technique') }}</option>
                                    <option value="billing" {{ old('subject') == 'billing' ? 'selected' : '' }}>{{ __('Facturation') }}</option>
                                    <option value="partnership" {{ old('subject') == 'partnership' ? 'selected' : '' }}>{{ __('Partenariat') }}</option>
                                    <option value="other" {{ old('subject') == 'other' ? 'selected' : '' }}>{{ __('Autre') }}</option>
                                </select>
                                @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label for="message" class="form-label">{{ __('Message') }} <span class="text-danger">*</span></label>
                                <textarea class="form-control @error('message') is-invalid @enderror" 
                                          id="message" name="message" rows="6" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input @error('privacy') is-invalid @enderror" 
                                           type="checkbox" id="privacy" name="privacy" required>
                                    <label class="form-check-label" for="privacy">
                                        {{ __('J\'accepte la') }} <a href="{{ route('privacy') }}" target="_blank">{{ __('politique de confidentialité') }}</a> <span class="text-danger">*</span>
                                    </label>
                                    @error('privacy')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-lg px-5" id="submitBtn">
                                <span class="spinner-border spinner-border-sm me-2 d-none" id="spinner"></span>
                                {{ __('Envoyer le message') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Contact Info -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 2rem;">
                    <!-- Contact Details -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <h5 class="font-bold mb-4">{{ __('Informations de contact') }}</h5>
                            
                            <div class="d-flex align-items-start mb-3">
                                <div class="bg-blue-100 rounded-full p-2 me-3 flex-shrink-0">
                                    <i class="fas fa-map-marker-alt text-blue-600"></i>
                                </div>
                                <div>
                                    <h6 class="font-semibold mb-1">{{ __('Adresse') }}</h6>
                                    <p class="text-gray-600 mb-0">123 Rue de la Paix<br>75001 Paris, France</p>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-start mb-3">
                                <div class="bg-green-100 rounded-full p-2 me-3 flex-shrink-0">
                                    <i class="fas fa-phone text-green-600"></i>
                                </div>
                                <div>
                                    <h6 class="font-semibold mb-1">{{ __('Téléphone') }}</h6>
                                    <p class="text-gray-600 mb-0">+33 1 23 45 67 89</p>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-start mb-3">
                                <div class="bg-purple-100 rounded-full p-2 me-3 flex-shrink-0">
                                    <i class="fas fa-envelope text-purple-600"></i>
                                </div>
                                <div>
                                    <h6 class="font-semibold mb-1">{{ __('Email') }}</h6>
                                    <p class="text-gray-600 mb-0">contact@marketplace.com</p>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-start">
                                <div class="bg-orange-100 rounded-full p-2 me-3 flex-shrink-0">
                                    <i class="fas fa-clock text-orange-600"></i>
                                </div>
                                <div>
                                    <h6 class="font-semibold mb-1">{{ __('Horaires') }}</h6>
                                    <p class="text-gray-600 mb-0">{{ __('Lun-Ven: 9h-18h') }}<br>{{ __('Sam: 9h-12h') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <h5 class="font-bold mb-4">{{ __('Suivez-nous') }}</h5>
                            <div class="d-flex gap-3">
                                <a href="#" class="btn btn-outline-primary btn-sm">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="btn btn-outline-info btn-sm">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-outline-primary btn-sm">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Link -->
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h5 class="font-bold mb-3">{{ __('Besoin d\'aide rapide ?') }}</h5>
                            <p class="text-gray-600 mb-3">{{ __('Consultez notre FAQ pour trouver des réponses immédiates.') }}</p>
                            <a href="{{ route('faq') }}" class="btn btn-outline-primary">{{ __('Voir la FAQ') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('Notre localisation') }}</h2>
            <p class="text-lg text-gray-600">{{ __('Venez nous rendre visite à notre bureau parisien') }}</p>
        </div>
        
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="aspect-video bg-gray-200 flex items-center justify-center">
                <div class="text-center">
                    <i class="fas fa-map-marked-alt text-4xl text-gray-400 mb-3"></i>
                    <p class="text-gray-600">{{ __('Carte interactive') }}</p>
                    <p class="text-sm text-gray-500">{{ __('123 Rue de la Paix, 75001 Paris') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const spinner = document.getElementById('spinner');
    
    form.addEventListener('submit', function(e) {
        submitBtn.disabled = true;
        spinner.classList.remove('d-none');
        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>' + '{{ __("Envoi en cours...") }}';
    });
    
    // Character counter for message
    const messageTextarea = document.getElementById('message');
    const maxLength = 1000;
    
    if (messageTextarea) {
        const counter = document.createElement('div');
        counter.className = 'text-muted text-sm mt-1';
        counter.innerHTML = `0/${maxLength} {{ __('caractères') }}`;
        messageTextarea.parentNode.appendChild(counter);
        
        messageTextarea.addEventListener('input', function() {
            const length = this.value.length;
            counter.innerHTML = `${length}/${maxLength} {{ __('caractères') }}`;
            
            if (length > maxLength * 0.9) {
                counter.classList.add('text-warning');
            } else {
                counter.classList.remove('text-warning');
            }
            
            if (length >= maxLength) {
                counter.classList.add('text-danger');
                counter.classList.remove('text-warning');
            } else {
                counter.classList.remove('text-danger');
            }
        });
    }
});
</script>
@endpush
