@extends('layouts.app')

@section('title', $offer->title ?? 'Détail de l\'offre')

@section('content')
<div class="container-fluid px-4 py-6">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Accueil') }}</a></li>
            <li class="breadcrumb-item"><a href="{{ route('offers.index') }}">{{ __('Offres') }}</a></li>
            <li class="breadcrumb-item active">{{ $offer->title ?? 'Tomates bio de saison' }}</li>
        </ol>
    </nav>

    <div class="row">
        <!-- Images du produit -->
        <div class="col-lg-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body p-0">
                    <!-- Image principale -->
                    <div class="main-image mb-3">
                        <img id="mainImage" src="{{ $offer->image ?? '/placeholder.svg?height=400&width=600' }}" 
                             class="img-fluid rounded" alt="{{ $offer->title ?? 'Tomates bio' }}" style="width: 100%; height: 400px; object-fit: cover;">
                    </div>
                    
                    <!-- Galerie d'images -->
                    <div class="image-gallery px-3 pb-3">
                        <div class="row g-2">
                            @for($i = 1; $i <= 4; $i++)
                            <div class="col-3">
                                <img src="{{ '/placeholder.svg?height=100&width=100' . $i }}" 
                                     class="img-fluid rounded cursor-pointer gallery-thumb" 
                                     onclick="changeMainImage(this.src)"
                                     style="height: 80px; object-fit: cover;">
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Informations du produit -->
        <div class="col-lg-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <!-- En-tête -->
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <h1 class="h3 mb-2">{{ $offer->title ?? 'Tomates bio de saison' }}</h1>
                            <div class="d-flex align-items-center mb-2">
                                <div class="rating me-3">
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="fas fa-star {{ $i <= ($offer->rating ?? 4) ? 'text-warning' : 'text-muted' }}"></i>
                                    @endfor
                                    <span class="ms-2 text-muted">({{ $offer->reviews_count ?? 12 }} {{ __('avis') }})</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <span class="badge bg-success fs-6">{{ $offer->status ?? 'Disponible' }}</span>
                        </div>
                    </div>

                    <!-- Prix et quantité -->
                    <div class="row mb-4">
                        <div class="col-6">
                            <div class="price-section">
                                <span class="h2 text-success mb-0">{{ $offer->price ?? '3.50' }}€</span>
                                <span class="text-muted">/ {{ $offer->unit ?? 'kg' }}</span>
                                <div class="text-muted small">{{ __('Prix unitaire') }}</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="quantity-section">
                                <span class="h4 mb-0">{{ $offer->quantity ?? '50' }} {{ $offer->unit ?? 'kg' }}</span>
                                <div class="text-muted small">{{ __('Quantité disponible') }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Informations coopérative -->
                    <div class="cooperative-info mb-4 p-3 bg-light rounded">
                        <div class="d-flex align-items-center">
                            <img src="{{ $offer->cooperative->logo ?? '/placeholder.svg?height=50&width=50' }}" 
                                 class="rounded-circle me-3" width="50" height="50" alt="Logo">
                            <div>
                                <h6 class="mb-1">{{ $offer->cooperative->name ?? 'Coopérative Bio du Sud' }}</h6>
                                <p class="text-muted mb-1">
                                    <i class="fas fa-map-marker-alt me-1"></i>
                                    {{ $offer->location ?? 'Marseille, France' }}
                                </p>
                                <div class="rating">
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="fas fa-star {{ $i <= ($offer->cooperative->rating ?? 5) ? 'text-warning' : 'text-muted' }} small"></i>
                                    @endfor
                                    <span class="small text-muted ms-1">({{ $offer->cooperative->reviews_count ?? 45 }} {{ __('avis') }})</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="description mb-4">
                        <h6>{{ __('Description') }}</h6>
                        <p class="text-muted">{{ $offer->description ?? 'Tomates biologiques cultivées sans pesticides ni engrais chimiques. Récoltées à maturité parfaite, elles offrent un goût authentique et une texture ferme. Idéales pour salades, sauces ou consommation directe.' }}</p>
                    </div>

                    <!-- Caractéristiques -->
                    <div class="characteristics mb-4">
                        <h6>{{ __('Caractéristiques') }}</h6>
                        <div class="row">
                            <div class="col-6">
                                <ul class="list-unstyled">
                                    <li><strong>{{ __('Catégorie') }}:</strong> {{ $offer->category ?? 'Légumes' }}</li>
                                    <li><strong>{{ __('Origine') }}:</strong> {{ $offer->origin ?? 'France' }}</li>
                                    <li><strong>{{ __('Certification') }}:</strong> {{ $offer->certification ?? 'Bio AB' }}</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="list-unstyled">
                                    <li><strong>{{ __('Saison') }}:</strong> {{ $offer->season ?? 'Été' }}</li>
                                    <li><strong>{{ __('Conservation') }}:</strong> {{ $offer->storage ?? '7 jours' }}</li>
                                    <li><strong>{{ __('Livraison') }}:</strong> {{ $offer->delivery ?? '24-48h' }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="actions">
                        <form class="mb-3">
                            <div class="row align-items-end">
                                <div class="col-4">
                                    <label class="form-label">{{ __('Quantité') }}</label>
                                    <div class="input-group">
                                        <button type="button" class="btn btn-outline-secondary" onclick="decreaseQuantity()">-</button>
                                        <input type="number" id="quantity" class="form-control text-center" value="1" min="1" max="{{ $offer->quantity ?? 50 }}">
                                        <button type="button" class="btn btn-outline-secondary" onclick="increaseQuantity()">+</button>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="d-grid gap-2 d-md-flex">
                                        <button type="button" class="btn btn-primary flex-fill" onclick="addToCart()">
                                            <i class="fas fa-shopping-cart me-2"></i>{{ __('Ajouter au panier') }}
                                        </button>
                                        <button type="button" class="btn btn-outline-danger" onclick="addToWishlist()">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="d-grid gap-2 d-md-flex">
                            <button class="btn btn-success flex-fill" onclick="buyNow()">
                                <i class="fas fa-bolt me-2"></i>{{ __('Acheter maintenant') }}
                            </button>
                            <button class="btn btn-outline-primary" onclick="contactSeller()">
                                <i class="fas fa-envelope me-2"></i>{{ __('Contacter') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Onglets d'informations -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#details">{{ __('Détails') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#reviews">{{ __('Avis') }} ({{ $offer->reviews_count ?? 12 }})</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#cooperative">{{ __('Coopérative') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#delivery">{{ __('Livraison') }}</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <!-- Détails -->
                        <div class="tab-pane fade show active" id="details">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>{{ __('Informations nutritionnelles') }}</h6>
                                    <table class="table table-sm">
                                        <tr><td>{{ __('Calories') }}</td><td>18 kcal/100g</td></tr>
                                        <tr><td>{{ __('Glucides') }}</td><td>3.9g</td></tr>
                                        <tr><td>{{ __('Protéines') }}</td><td>0.9g</td></tr>
                                        <tr><td>{{ __('Lipides') }}</td><td>0.2g</td></tr>
                                        <tr><td>{{ __('Fibres') }}</td><td>1.2g</td></tr>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <h6>{{ __('Conseils de préparation') }}</h6>
                                    <ul>
                                        <li>{{ __('Rincer à l\'eau claire avant consommation') }}</li>
                                        <li>{{ __('Conserver au réfrigérateur') }}</li>
                                        <li>{{ __('Idéal en salade ou en sauce') }}</li>
                                        <li>{{ __('Peut être congelé après blanchiment') }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Avis -->
                        <div class="tab-pane fade" id="reviews">
                            <div class="reviews-section">
                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <div class="text-center">
                                            <div class="h2 mb-0">{{ $offer->rating ?? '4.2' }}/5</div>
                                            <div class="rating mb-2">
                                                @for($i = 1; $i <= 5; $i++)
                                                    <i class="fas fa-star {{ $i <= ($offer->rating ?? 4) ? 'text-warning' : 'text-muted' }}"></i>
                                                @endfor
                                            </div>
                                            <p class="text-muted">{{ $offer->reviews_count ?? 12 }} {{ __('avis') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        @for($i = 5; $i >= 1; $i--)
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="me-2">{{ $i }} <i class="fas fa-star text-warning"></i></span>
                                            <div class="progress flex-grow-1 me-2" style="height: 8px;">
                                                <div class="progress-bar bg-warning" style="width: {{ rand(10, 80) }}%"></div>
                                            </div>
                                            <span class="text-muted small">{{ rand(1, 8) }}</span>
                                        </div>
                                        @endfor
                                    </div>
                                </div>

                                <!-- Liste des avis -->
                                @for($i = 1; $i <= 3; $i++)
                                <div class="review-item border-bottom pb-3 mb-3">
                                    <div class="d-flex align-items-start">
                                        <img src="/placeholder.svg?height=40&width=40" 
                                             class="rounded-circle me-3" width="40" height="40">
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div>
                                                    <h6 class="mb-1">{{ ['Marie L.', 'Pierre D.', 'Sophie M.'][$i-1] }}</h6>
                                                    <div class="rating mb-2">
                                                        @for($j = 1; $j <= 5; $j++)
                                                            <i class="fas fa-star {{ $j <= [5, 4, 5][$i-1] ? 'text-warning' : 'text-muted' }} small"></i>
                                                        @endfor
                                                    </div>
                                                </div>
                                                <small class="text-muted">{{ ['Il y a 2 jours', 'Il y a 1 semaine', 'Il y a 2 semaines'][$i-1] }}</small>
                                            </div>
                                            <p class="mb-0">{{ ['Excellentes tomates, très goûteuses et fraîches. Livraison rapide.', 'Produit de qualité, conforme à la description. Je recommande cette coopérative.', 'Tomates parfaites pour mes salades. Très satisfaite de mon achat.'][$i-1] }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>

                        <!-- Coopérative -->
                        <div class="tab-pane fade" id="cooperative">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="/placeholder.svg?height=200&width=300" 
                                         class="img-fluid rounded mb-3">
                                </div>
                                <div class="col-md-8">
                                    <h5>{{ $offer->cooperative->name ?? 'Coopérative Bio du Sud' }}</h5>
                                    <p class="text-muted">{{ $offer->cooperative->description ?? 'Fondée en 1995, notre coopérative regroupe 25 producteurs biologiques de la région PACA. Nous nous engageons à produire des fruits et légumes de qualité dans le respect de l\'environnement.' }}</p>
                                    
                                    <div class="row">
                                        <div class="col-6">
                                            <ul class="list-unstyled">
                                                <li><strong>{{ __('Fondée en') }}:</strong> 1995</li>
                                                <li><strong>{{ __('Producteurs') }}:</strong> 25</li>
                                                <li><strong>{{ __('Certifications') }}:</strong> Bio AB, Demeter</li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <ul class="list-unstyled">
                                                <li><strong>{{ __('Localisation') }}:</strong> Marseille</li>
                                                <li><strong>{{ __('Spécialités') }}:</strong> Légumes, Fruits</li>
                                                <li><strong>{{ __('Note') }}:</strong> 4.8/5 (45 avis)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Livraison -->
                        <div class="tab-pane fade" id="delivery">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>{{ __('Options de livraison') }}</h6>
                                    <div class="list-group">
                                        <div class="list-group-item">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h6 class="mb-1">{{ __('Livraison standard') }}</h6>
                                                    <p class="mb-1">{{ __('3-5 jours ouvrés') }}</p>
                                                </div>
                                                <span class="text-success">{{ __('Gratuit') }}</span>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h6 class="mb-1">{{ __('Livraison express') }}</h6>
                                                    <p class="mb-1">{{ __('24-48h') }}</p>
                                                </div>
                                                <span>5.90€</span>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h6 class="mb-1">{{ __('Retrait en point relais') }}</h6>
                                                    <p class="mb-1">{{ __('2-4 jours ouvrés') }}</p>
                                                </div>
                                                <span class="text-success">{{ __('Gratuit') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h6>{{ __('Zones de livraison') }}</h6>
                                    <ul>
                                        <li>{{ __('France métropolitaine') }}</li>
                                        <li>{{ __('Corse') }} (+2€)</li>
                                        <li>{{ __('DOM-TOM') }} (sur devis)</li>
                                    </ul>
                                    
                                    <h6 class="mt-4">{{ __('Conditions') }}</h6>
                                    <ul>
                                        <li>{{ __('Commande minimum') }}: 20€</li>
                                        <li>{{ __('Livraison gratuite') }} dès 50€</li>
                                        <li>{{ __('Emballage écologique') }}</li>
                                        <li>{{ __('Fraîcheur garantie') }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Produits similaires -->
    <div class="row mt-5">
        <div class="col-12">
            <h4 class="mb-4">{{ __('Produits similaires') }}</h4>
            <div class="row">
                @for($i = 1; $i <= 4; $i++)
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=200&width=300" 
                             class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h6 class="card-title">{{ ['Courgettes bio', 'Aubergines bio', 'Poivrons bio', 'Concombres bio'][$i-1] }}</h6>
                            <p class="text-muted small">{{ ['2.80€/kg', '4.20€/kg', '3.90€/kg', '2.50€/kg'][$i-1] }}</p>
                            <div class="d-grid">
                                <button class="btn btn-outline-primary btn-sm">{{ __('Voir') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>

<script>
function changeMainImage(src) {
    document.getElementById('mainImage').src = src;
}

function increaseQuantity() {
    const input = document.getElementById('quantity');
    const max = parseInt(input.getAttribute('max'));
    if (parseInt(input.value) < max) {
        input.value = parseInt(input.value) + 1;
    }
}

function decreaseQuantity() {
    const input = document.getElementById('quantity');
    if (parseInt(input.value) > 1) {
        input.value = parseInt(input.value) - 1;
    }
}

function addToCart() {
    const quantity = document.getElementById('quantity').value;
    // Logique d'ajout au panier
    showToast(`${quantity} produit(s) ajouté(s) au panier`, 'success');
}

function addToWishlist() {
    // Logique d'ajout aux favoris
    showToast('Produit ajouté aux favoris', 'success');
}

function buyNow() {
    // Redirection vers le checkout
    window.location.href = '/checkout';
}

function contactSeller() {
    // Ouvrir modal de contact
    $('#contactModal').modal('show');
}
</script>
@endsection
