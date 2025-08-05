@extends('layouts.user_space')

@section('title', __('Mes offres'))

@section('content')
<div class="container-fluid px-4 py-6">
    <!-- Header -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="h3 mb-2 text-gray-800">{{ __('Mes offres') }}</h1>
                    <p class="text-muted">{{ __('Gérez vos produits en vente') }}</p>
                </div>
                <div class="d-flex gap-2">
                    <a href="{{ route('user.offers.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>{{ __('Nouvelle offre') }}
                    </a>
                    <button class="btn btn-outline-secondary" onclick="exportOffers()">
                        <i class="fas fa-download me-2"></i>{{ __('Exporter') }}
                    </button>
                </div>
            </div>

            <!-- Statistiques rapides -->
            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4 class="mb-0">{{ $totalOffers ?? 12 }}</h4>
                                    <p class="mb-0">{{ __('Total offres') }}</p>
                                </div>
                                <i class="fas fa-shopping-bag fa-2x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4 class="mb-0">{{ $activeOffers ?? 8 }}</h4>
                                    <p class="mb-0">{{ __('Actives') }}</p>
                                </div>
                                <i class="fas fa-check-circle fa-2x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-warning text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4 class="mb-0">{{ $pendingOffers ?? 2 }}</h4>
                                    <p class="mb-0">{{ __('En attente') }}</p>
                                </div>
                                <i class="fas fa-clock fa-2x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-info text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4 class="mb-0">{{ $soldOffers ?? 15 }}</h4>
                                    <p class="mb-0">{{ __('Vendues') }}</p>
                                </div>
                                <i class="fas fa-handshake fa-2x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filtres -->
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <form method="GET" class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">{{ __('Rechercher') }}</label>
                            <input type="text" name="search" class="form-control" 
                                   placeholder="{{ __('Titre du produit...') }}" 
                                   value="{{ request('search') }}">
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">{{ __('Statut') }}</label>
                            <select name="status" class="form-select">
                                <option value="">{{ __('Tous') }}</option>
                                <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>{{ __('Active') }}</option>
                                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>{{ __('En attente') }}</option>
                                <option value="sold" {{ request('status') == 'sold' ? 'selected' : '' }}>{{ __('Vendue') }}</option>
                                <option value="expired" {{ request('status') == 'expired' ? 'selected' : '' }}>{{ __('Expirée') }}</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">{{ __('Catégorie') }}</label>
                            <select name="category" class="form-select">
                                <option value="">{{ __('Toutes') }}</option>
                                <option value="fruits" {{ request('category') == 'fruits' ? 'selected' : '' }}>{{ __('Fruits') }}</option>
                                <option value="legumes" {{ request('category') == 'legumes' ? 'selected' : '' }}>{{ __('Légumes') }}</option>
                                <option value="cereales" {{ request('category') == 'cereales' ? 'selected' : '' }}>{{ __('Céréales') }}</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">{{ __('Date création') }}</label>
                            <input type="date" name="created_date" class="form-control" value="{{ request('created_date') }}">
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">{{ __('Tri par') }}</label>
                            <select name="sort" class="form-select">
                                <option value="created_at" {{ request('sort') == 'created_at' ? 'selected' : '' }}>{{ __('Plus récent') }}</option>
                                <option value="title" {{ request('sort') == 'title' ? 'selected' : '' }}>{{ __('Titre') }}</option>
                                <option value="price" {{ request('sort') == 'price' ? 'selected' : '' }}>{{ __('Prix') }}</option>
                                <option value="views" {{ request('sort') == 'views' ? 'selected' : '' }}>{{ __('Vues') }}</option>
                            </select>
                        </div>
                        <div class="col-md-1 d-flex align-items-end">
                            <button type="submit" class="btn btn-outline-primary w-100">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des offres -->
    <div class="card shadow-sm">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-0">{{ __('Liste de mes offres') }}</h6>
                <div class="btn-group btn-group-sm">
                    <button class="btn btn-outline-secondary active" onclick="toggleView('list')">
                        <i class="fas fa-list"></i>
                    </button>
                    <button class="btn btn-outline-secondary" onclick="toggleView('grid')">
                        <i class="fas fa-th"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>{{ __('Produit') }}</th>
                            <th>{{ __('Prix') }}</th>
                            <th>{{ __('Quantité') }}</th>
                            <th>{{ __('Statut') }}</th>
                            <th>{{ __('Vues') }}</th>
                            <th>{{ __('Créé le') }}</th>
                            <th>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($offers ?? [] as $offer)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ $offer->image ?? '/placeholder.svg?height=50&width=50' }}" 
                                         class="rounded me-3" width="50" height="50" style="object-fit: cover;">
                                    <div>
                                        <h6 class="mb-1">{{ $offer->title ?? 'Tomates bio de saison' }}</h6>
                                        <small class="text-muted">{{ $offer->category ?? 'Légumes' }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="fw-bold text-success">{{ $offer->price ?? '3.50' }}€</span>
                                <small class="text-muted d-block">/{{ $offer->unit ?? 'kg' }}</small>
                            </td>
                            <td>
                                <span class="fw-medium">{{ $offer->quantity ?? '25' }}</span>
                                <small class="text-muted d-block">{{ $offer->unit ?? 'kg' }}</small>
                            </td>
                            <td>
                                @php
                                    $status = $offer->status ?? 'active';
                                    $statusConfig = [
                                        'active' => ['class' => 'success', 'icon' => 'check-circle', 'text' => __('Active')],
                                        'pending' => ['class' => 'warning', 'icon' => 'clock', 'text' => __('En attente')],
                                        'sold' => ['class' => 'info', 'icon' => 'handshake', 'text' => __('Vendue')],
                                        'expired' => ['class' => 'danger', 'icon' => 'times-circle', 'text' => __('Expirée')]
                                    ];
                                    $config = $statusConfig[$status] ?? $statusConfig['active'];
                                @endphp
                                <span class="badge bg-{{ $config['class'] }}">
                                    <i class="fas fa-{{ $config['icon'] }} me-1"></i>{{ $config['text'] }}
                                </span>
                            </td>
                            <td>
                                <span class="fw-medium">{{ $offer->views ?? 45 }}</span>
                                <small class="text-muted d-block">{{ __('vues') }}</small>
                            </td>
                            <td>
                                <span>{{ $offer->created_at ?? '15/12/2024' }}</span>
                                <small class="text-muted d-block">{{ $offer->time ?? '14:30' }}</small>
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('user.offers.show', $offer->id ?? 1) }}" 
                                       class="btn btn-outline-primary" title="{{ __('Voir') }}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('user.offers.edit', $offer->id ?? 1) }}" 
                                       class="btn btn-outline-warning" title="{{ __('Modifier') }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    @if(($offer->status ?? 'active') == 'active')
                                    <button class="btn btn-outline-secondary" 
                                            onclick="toggleStatus({{ $offer->id ?? 1 }})" 
                                            title="{{ __('Désactiver') }}">
                                        <i class="fas fa-pause"></i>
                                    </button>
                                    @endif
                                    <button class="btn btn-outline-danger" 
                                            onclick="deleteOffer({{ $offer->id ?? 1 }})" 
                                            title="{{ __('Supprimer') }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center py-5">
                                <i class="fas fa-shopping-bag fa-3x text-muted mb-3"></i>
                                <h5>{{ __('Aucune offre') }}</h5>
                                <p class="text-muted">{{ __('Vous n\'avez pas encore publié d\'offre') }}</p>
                                <a href="{{ route('user.offers.create') }}" class="btn btn-primary">
                                    {{ __('Créer ma première offre') }}
                                </a>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    @if(isset($offers) && method_exists($offers, 'links'))
    <div class="d-flex justify-content-center mt-4">
        {{ $offers->links() }}
    </div>
    @endif
</div>

<script>
function toggleStatus(offerId) {
    if (confirm('{{ __("Êtes-vous sûr de vouloir changer le statut de cette offre ?") }}')) {
        fetch(`/user/offers/${offerId}/toggle-status`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Content-Type': 'application/json',
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showToast('{{ __("Statut mis à jour avec succès") }}', 'success');
                location.reload();
            }
        });
    }
}

function deleteOffer(offerId) {
    if (confirm('{{ __("Êtes-vous sûr de vouloir supprimer cette offre ? Cette action est irréversible.") }}')) {
        fetch(`/user/offers/${offerId}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Content-Type': 'application/json',
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showToast('{{ __("Offre supprimée avec succès") }}', 'success');
                location.reload();
            }
        });
    }
}

function exportOffers() {
    const params = new URLSearchParams(window.location.search);
    params.set('export', 'csv');
    window.open(`/user/offers/export?${params.toString()}`, '_blank');
}

function toggleView(view) {
    console.log('Toggle view:', view);
}
</script>
@endsection
