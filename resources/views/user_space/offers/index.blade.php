@extends('layouts.app')

@section('title')
<span data-translate="offers.title">Offres disponibles</span>
@endsection

@section('content')
<div class="container-fluid px-4 py-6">
    <!-- Header avec filtres -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="h3 mb-2 text-primary-green" data-translate="offers.title">Offres disponibles</h1>
                    <p class="text-muted">Découvrez les produits proposés par nos coopératives</p>
                </div>
                <a href="{{ route('offers.create') }}" class="btn btn-primary-green">
                    <i class="fas fa-plus me-2"></i><span data-translate="offers.create">Publier une offre</span>
                </a>
            </div>

            <!-- Filtres avancés -->
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <form method="GET" action="{{ route('offers.index') }}" class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">Rechercher</label>
                            <input type="text" name="search" class="form-control" 
                                   placeholder="Nom du produit..." 
                                   value="{{ request('search') }}">
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Catégorie</label>
                            <select name="category" class="form-select">
                                <option value="">Toutes</option>
                                <option value="fruits" {{ request('category') == 'fruits' ? 'selected' : '' }}>Fruits</option>
                                <option value="legumes" {{ request('category') == 'legumes' ? 'selected' : '' }}>Légumes</option>
                                <option value="cereales" {{ request('category') == 'cereales' ? 'selected' : '' }}>Céréales</option>
                                <option value="produits-laitiers" {{ request('category') == 'produits-laitiers' ? 'selected' : '' }}>Produits laitiers</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Prix max</label>
                            <input type="number" name="max_price" class="form-control" 
                                   placeholder="0.00" value="{{ request('max_price') }}">
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Localisation</label>
                            <input type="text" name="location" class="form-control" 
                                   placeholder="Ville..." value="{{ request('location') }}">
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Tri par</label>
                            <select name="sort" class="form-select">
                                <option value="created_at" {{ request('sort') == 'created_at' ? 'selected' : '' }}>Plus récent</option>
                                <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Prix croissant</option>
                                <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Prix décroissant</option>
                                <option value="quantity" {{ request('sort') == 'quantity' ? 'selected' : '' }}>Quantité</option>
                            </select>
                        </div>
                        <div class="col-md-1 d-flex align-items-end">
                            <button type="submit" class="btn btn-outline-primary-green w-100">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistiques rapides -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card bg-primary-green text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">{{ $totalOffers ?? 156 }}</h4>
                            <p class="mb-0">Offres actives</p>
                        </div>
                        <i class="fas fa-shopping-bag fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-secondary-green text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">{{ $totalCooperatives ?? 23 }}</h4>
                            <p class="mb-0">Coopératives</p>
                        </div>
                        <i class="fas fa-users fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary-green-light text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">{{ $avgPrice ?? '12.50' }}€</h4>
                            <p class="mb-0">Prix moyen</p>
                        </div>
                        <i class="fas fa-euro-sign fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary-green-dark text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">{{ $newToday ?? 8 }}</h4>
                            <p class="mb-0">Nouvelles aujourd'hui</p>
                        </div>
                        <i class="fas fa-plus-circle fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des offres -->
    <div class="row">
        @forelse($offers ?? [] as $offer)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow-sm hover-shadow transition-all">
                <div class="position-relative">
                    <img src="{{ $offer->image ?? '/placeholder.svg?height=200&width=300&text=Tomates+bio' }}" 
                         class="card-img-top" alt="{{ $offer->title ?? 'Tomates bio' }}" style="height: 200px; object-fit: cover;">
                    <div class="position-absolute top-0 end-0 m-2">
                        <span class="badge bg-secondary-green">{{ $offer->status ?? 'Disponible' }}</span>
                    </div>
                    <div class="position-absolute bottom-0 start-0 m-2">
                        <span class="badge bg-primary-green">{{ $offer->category ?? 'Légumes' }}</span>
                    </div>
                </div>
                
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $offer->title ?? 'Tomates bio de saison' }}</h5>
                    <p class="text-muted small mb-2">
                        <i class="fas fa-map-marker-alt me-1"></i>
                        {{ $offer->cooperative->name ?? 'Coopérative Bio du Sud' }} - {{ $offer->location ?? 'Marseille' }}
                    </p>
                    <p class="card-text flex-grow-1">{{ Str::limit($offer->description ?? 'Tomates biologiques cultivées sans pesticides, récoltées à maturité pour un goût authentique.', 100) }}</p>
                    
                    <div class="row align-items-center mt-auto">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <span class="h5 mb-0 text-primary-green">{{ $offer->price ?? '3.50' }}€</span>
                                <small class="text-muted ms-1">/{{ $offer->unit ?? 'kg' }}</small>
                            </div>
                            <small class="text-muted">Quantité: {{ $offer->quantity ?? '50' }} {{ $offer->unit ?? 'kg' }}</small>
                        </div>
                        <div class="col-6 text-end">
                            <div class="btn-group" role="group">
                                <a href="{{ route('offers.show', $offer->id ?? 1) }}" class="btn btn-outline-primary-green btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <button class="btn btn-outline-danger btn-sm" onclick="addToWishlist({{ $offer->id ?? 1 }})">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <button class="btn btn-primary-green btn-sm" onclick="addToCart({{ $offer->id ?? 1 }})">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="fas fa-clock me-1"></i>
                                Publié {{ $offer->created_at ?? '2 jours' }}
                            </small>
                            <div class="rating">
                                @for($i = 1; $i <= 5; $i++)
                                    <i class="fas fa-star {{ $i <= ($offer->rating ?? 4) ? 'text-warning' : 'text-muted' }}"></i>
                                @endfor
                                <small class="text-muted ms-1">({{ $offer->reviews_count ?? 12 }})</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="text-center py-5">
                <i class="fas fa-search fa-3x text-muted mb-3"></i>
                <h4 data-translate="common.no_results">Aucune offre trouvée</h4>
                <p class="text-muted">Essayez de modifier vos critères de recherche</p>
                <a href="{{ route('offers.create') }}" class="btn btn-primary-green">
                    <span data-translate="offers.create">Publier la première offre</span>
                </a>
            </div>
        </div>
        @endforelse
    </div>

    <!-- Pagination -->
    @if(isset($offers) && method_exists($offers, 'links'))
    <div class="d-flex justify-content-center mt-4">
        {{ $offers->links() }}
    </div>
    @endif
</div>

<script>
function addToCart(offerId) {
    fetch(`/offers/${offerId}/add-to-cart`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json',
        },
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showToast('Produit ajouté au panier', 'success');
        }
    });
}

function addToWishlist(offerId) {
    fetch(`/offers/${offerId}/add-to-wishlist`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json',
        },
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showToast('Produit ajouté aux favoris', 'success');
        }
    });
}

function showToast(message, type) {
    // Créer et afficher un toast
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
