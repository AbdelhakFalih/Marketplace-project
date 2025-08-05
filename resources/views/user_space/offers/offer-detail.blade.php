@extends('layouts.app')

@section('title', $offer->title ?? 'Détail de l\'offre')

@section('content')
<div class="container-fluid px-4 py-6">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-primary-green" data-translate="nav.home">Accueil</a></li>
            <li class="breadcrumb-item"><a href="{{ route('offers.index') }}" class="text-primary-green" data-translate="nav.offers">Offres</a></li>
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
                        <img id="mainImage" src="{{ $offer->image ?? '/placeholder.svg?height=400&width=600&text=Tomates+bio' }}" 
                             class="img-fluid rounded" alt="{{ $offer->title ?? 'Tomates bio' }}" style="width: 100%; height: 400px; object-fit: cover;">
                    </div>
                    
                    <!-- Galerie d'images -->
                    <div class="image-gallery px-3 pb-3">
                        <div class="row g-2">
                            @for($i = 1; $i <= 4; $i++)
                            <div class="col-3">
                                <img src="{{ '/placeholder.svg?height=100&width=100&text=Image' . $i }}" 
                                     class="img-fluid rounded cursor-pointer gallery-thumb border border-primary-green" 
                                     onclick="changeMainImage(this.src)"
                                     style="height: 80px; object-fit: cover; cursor: pointer;">
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
                            <h1 class="h3 mb-2 text-primary-green">{{ $offer->title ?? 'Tomates bio de saison' }}</h1>
                            <div class="d-flex align-items-center mb-2">
                                <div class="rating me-3">
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="fas fa-star {{ $i <= ($offer->rating ?? 4) ? 'text-warning' : 'text-muted' }}"></i>
                                    @endfor
                                    <span class="ms-2 text-muted">({{ $offer->reviews_count ?? 12 }} avis)</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <span class="badge bg-secondary-green fs-6">{{ $offer->status ?? 'Disponible' }}</span>
                        </div>
                    </div>

                    <!-- Prix et quantité -->
                    <div class="row mb-4">
                        <div class="col-6">
                            <div class="price-section">
                                <span class="h2 text-primary-green mb-0">{{ $offer->price ?? '3.50' }}€</span>
                                <span class="text-muted">/ {{ $offer->unit ?? 'kg' }}</span>
                                <div class="text-muted small">Prix unitaire</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="quantity-section">
                                <span class="h4 mb-0">{{ $offer->quantity ?? '50' }} {{ $offer->unit ?? 'kg' }}</span>
                                <div class="text-muted small">Quantité disponible</div>
                            </div>
                        </div>
                    </div>

                    <!-- Informations coopérative -->
                    <div class="cooperative-info mb-4 p-3 bg-accent-green rounded">
                        <div class="d-flex align-items-center">
                            <img src="{{ $offer->cooperative->logo ?? '/placeholder.svg?height=50&width=50&text=Logo' }}" 
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
                                    <span class="small text-muted ms-1">({{ $offer->cooperative->reviews_count ?? 45 }} avis)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="description mb-4">
                        <h6>Description</h6>
                        <p class="text-muted">{{ $offer->description ?? 'Tomates biologiques cultivées sans pesticides ni engrais chimiques. Récoltées à maturité parfaite, elles offrent un goût authentique et une texture ferme. Idéales pour salades, sauces ou consommation directe.' }}</p>
                    </div>

                    <!-- Actions -->
                    <div class="actions">
                        <form class="mb-3">
                            <div class="row align-items-end">
                                <div class="col-4">
                                    <label class="form-label">Quantité</label>
                                    <div class="input-group">
                                        <button type="button" class="btn btn-outline-primary-green" onclick="decreaseQuantity()">-</button>
                                        <input type="number" id="quantity" class="form-control text-center" value="1" min="1" max="{{ $offer->quantity ?? 50 }}">
                                        <button type="button" class="btn btn-outline-primary-green" onclick="increaseQuantity()">+</button>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="d-grid gap-2 d-md-flex">
                                        <button type="button" class="btn btn-primary-green flex-fill" onclick="addToCart()">
                                            <i class="fas fa-shopping-cart me-2"></i>Ajouter au panier
                                        </button>
                                        <button type="button" class="btn btn-outline-danger" onclick="addToWishlist()">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="d-grid gap-2 d-md-flex">
                            <button class="btn btn-secondary-green flex-fill" onclick="buyNow()">
                                <i class="fas fa-bolt me-2"></i>Acheter maintenant
                            </button>
                            <button class="btn btn-outline-primary-green" onclick="contactSeller()">
                                <i class="fas fa-envelope me-2"></i>Contacter
                            </button>
                        </div>
                    </div>
                </div>
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
    showToast(`${quantity} produit(s) ajouté(s) au panier`, 'success');
}

function addToWishlist() {
    showToast('Produit ajouté aux favoris', 'success');
}

function buyNow() {
    window.location.href = '/checkout';
}

function contactSeller() {
    alert('Fonctionnalité de contact en cours de développement');
}

function showToast(message, type) {
    const toast = document.createElement('div');
    toast.className = `alert alert-${type === 'success' ? 'success' : 'danger'} position-fixed`;
    toast.style.cssText = 'top: 20px; right: 20px; z-index: 9999;';
    toast.textContent = message;
    document.body.appendChild(toast);
    
    setTimeout(() => {
        toast.remove();
    }, 3000);
}
</script>
@endsection
