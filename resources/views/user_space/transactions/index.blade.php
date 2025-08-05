@extends('layouts.user')

@section('title', __('Mes transactions'))

@section('content')
<div class="container-fluid px-4 py-6">
    <!-- Header -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="h3 mb-2 text-gray-800">{{ __('Mes transactions') }}</h1>
                    <p class="text-muted">{{ __('Suivez l\'état de vos achats et ventes') }}</p>
                </div>
                <div class="btn-group">
                    <button class="btn btn-outline-primary" onclick="exportTransactions()">
                        <i class="fas fa-download me-2"></i>{{ __('Exporter') }}
                    </button>
                </div>
            </div>

            <!-- Filtres -->
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <form method="GET" action="{{ route('transactions.index') }}" class="row g-3">
                        <div class="col-md-2">
                            <label class="form-label">{{ __('Type') }}</label>
                            <select name="type" class="form-select">
                                <option value="">{{ __('Tous') }}</option>
                                <option value="purchase" {{ request('type') == 'purchase' ? 'selected' : '' }}>{{ __('Achats') }}</option>
                                <option value="sale" {{ request('type') == 'sale' ? 'selected' : '' }}>{{ __('Ventes') }}</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">{{ __('Statut') }}</label>
                            <select name="status" class="form-select">
                                <option value="">{{ __('Tous') }}</option>
                                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>{{ __('En attente') }}</option>
                                <option value="confirmed" {{ request('status') == 'confirmed' ? 'selected' : '' }}>{{ __('Confirmé') }}</option>
                                <option value="shipped" {{ request('status') == 'shipped' ? 'selected' : '' }}>{{ __('Expédié') }}</option>
                                <option value="delivered" {{ request('status') == 'delivered' ? 'selected' : '' }}>{{ __('Livré') }}</option>
                                <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>{{ __('Annulé') }}</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">{{ __('Date début') }}</label>
                            <input type="date" name="date_from" class="form-control" value="{{ request('date_from') }}">
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">{{ __('Date fin') }}</label>
                            <input type="date" name="date_to" class="form-control" value="{{ request('date_to') }}">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">{{ __('Rechercher') }}</label>
                            <input type="text" name="search" class="form-control" 
                                   placeholder="{{ __('Produit, référence...') }}" 
                                   value="{{ request('search') }}">
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

    <!-- Statistiques -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">{{ $totalTransactions ?? 45 }}</h4>
                            <p class="mb-0">{{ __('Total transactions') }}</p>
                        </div>
                        <i class="fas fa-exchange-alt fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">{{ $totalSales ?? '1,250.80' }}€</h4>
                            <p class="mb-0">{{ __('Total ventes') }}</p>
                        </div>
                        <i class="fas fa-arrow-up fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">{{ $totalPurchases ?? '890.50' }}€</h4>
                            <p class="mb-0">{{ __('Total achats') }}</p>
                        </div>
                        <i class="fas fa-arrow-down fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">{{ $pendingTransactions ?? 8 }}</h4>
                            <p class="mb-0">{{ __('En attente') }}</p>
                        </div>
                        <i class="fas fa-clock fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des transactions -->
    <div class="card shadow-sm">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-0">{{ __('Historique des transactions') }}</h6>
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
                            <th>{{ __('Référence') }}</th>
                            <th>{{ __('Type') }}</th>
                            <th>{{ __('Produit') }}</th>
                            <th>{{ __('Partenaire') }}</th>
                            <th>{{ __('Montant') }}</th>
                            <th>{{ __('Statut') }}</th>
                            <th>{{ __('Date') }}</th>
                            <th>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($transactions ?? [] as $transaction)
                        <tr>
                            <td>
                                <strong>#{{ $transaction->reference ?? 'TXN-2024-001' }}</strong>
                            </td>
                            <td>
                                @if(($transaction->type ?? 'purchase') == 'purchase')
                                    <span class="badge bg-info">
                                        <i class="fas fa-shopping-cart me-1"></i>{{ __('Achat') }}
                                    </span>
                                @else
                                    <span class="badge bg-success">
                                        <i class="fas fa-store me-1"></i>{{ __('Vente') }}
                                    </span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ $transaction->product->image ?? '/placeholder.svg?height=40&width=40' }}" 
                                         class="rounded me-2" width="40" height="40" style="object-fit: cover;">
                                    <div>
                                        <div class="fw-medium">{{ $transaction->product->title ?? 'Tomates bio' }}</div>
                                        <small class="text-muted">{{ $transaction->quantity ?? '5' }} {{ $transaction->unit ?? 'kg' }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <div class="fw-medium">{{ $transaction->partner->name ?? 'Coopérative Bio Sud' }}</div>
                                    <small class="text-muted">{{ $transaction->partner->location ?? 'Marseille' }}</small>
                                </div>
                            </td>
                            <td>
                                <span class="fw-bold text-{{ ($transaction->type ?? 'purchase') == 'purchase' ? 'danger' : 'success' }}">
                                    {{ ($transaction->type ?? 'purchase') == 'purchase' ? '-' : '+' }}{{ $transaction->amount ?? '17.50' }}€
                                </span>
                            </td>
                            <td>
                                @php
                                    $status = $transaction->status ?? 'confirmed';
                                    $statusConfig = [
                                        'pending' => ['class' => 'warning', 'icon' => 'clock', 'text' => __('En attente')],
                                        'confirmed' => ['class' => 'info', 'icon' => 'check', 'text' => __('Confirmé')],
                                        'shipped' => ['class' => 'primary', 'icon' => 'truck', 'text' => __('Expédié')],
                                        'delivered' => ['class' => 'success', 'icon' => 'check-circle', 'text' => __('Livré')],
                                        'cancelled' => ['class' => 'danger', 'icon' => 'times', 'text' => __('Annulé')]
                                    ];
                                    $config = $statusConfig[$status] ?? $statusConfig['pending'];
                                @endphp
                                <span class="badge bg-{{ $config['class'] }}">
                                    <i class="fas fa-{{ $config['icon'] }} me-1"></i>{{ $config['text'] }}
                                </span>
                            </td>
                            <td>
                                <div>{{ $transaction->created_at ?? '15/12/2024' }}</div>
                                <small class="text-muted">{{ $transaction->time ?? '14:30' }}</small>
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('transactions.show', $transaction->id ?? 1) }}" 
                                       class="btn btn-outline-primary" title="{{ __('Voir détails') }}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    @if(($transaction->status ?? 'confirmed') == 'delivered')
                                    <button class="btn btn-outline-warning" onclick="rateTransaction({{ $transaction->id ?? 1 }})" 
                                            title="{{ __('Évaluer') }}">
                                        <i class="fas fa-star"></i>
                                    </button>
                                    @endif
                                    <button class="btn btn-outline-secondary" onclick="downloadInvoice({{ $transaction->id ?? 1 }})" 
                                            title="{{ __('Télécharger facture') }}">
                                        <i class="fas fa-download"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center py-5">
                                <i class="fas fa-exchange-alt fa-3x text-muted mb-3"></i>
                                <h5>{{ __('Aucune transaction') }}</h5>
                                <p class="text-muted">{{ __('Vos transactions apparaîtront ici') }}</p>
                                <a href="{{ route('offers.index') }}" class="btn btn-primary">
                                    {{ __('Découvrir les offres') }}
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
    @if(isset($transactions) && method_exists($transactions, 'links'))
    <div class="d-flex justify-content-center mt-4">
        {{ $transactions->links() }}
    </div>
    @endif
</div>

<!-- Modal d'évaluation -->
<div class="modal fade" id="ratingModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Évaluer la transaction') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="ratingForm">
                    <div class="mb-3">
                        <label class="form-label">{{ __('Note globale') }}</label>
                        <div class="rating-input">
                            @for($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star rating-star" data-rating="{{ $i }}"></i>
                            @endfor
                        </div>
                        <input type="hidden" id="rating" name="rating" value="0">
                    </div>
                    <div class="mb-3">
                        <label for="comment" class="form-label">{{ __('Commentaire') }}</label>
                        <textarea class="form-control" id="comment" name="comment" rows="3" 
                                  placeholder="{{ __('Partagez votre expérience...') }}"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Annuler') }}</button>
                <button type="button" class="btn btn-primary" onclick="submitRating()">{{ __('Envoyer') }}</button>
            </div>
        </div>
    </div>
</div>

<script>
function rateTransaction(transactionId) {
    document.getElementById('ratingForm').dataset.transactionId = transactionId;
    new bootstrap.Modal(document.getElementById('ratingModal')).show();
}

function downloadInvoice(transactionId) {
    window.open(`/transactions/${transactionId}/invoice`, '_blank');
}

function exportTransactions() {
    const params = new URLSearchParams(window.location.search);
    params.set('export', 'csv');
    window.open(`/transactions/export?${params.toString()}`, '_blank');
}

function toggleView(view) {
    // Logique pour changer la vue (liste/grille)
    console.log('Toggle view:', view);
}

function submitRating() {
    const form = document.getElementById('ratingForm');
    const transactionId = form.dataset.transactionId;
    const rating = document.getElementById('rating').value;
    const comment = document.getElementById('comment').value;
    
    if (rating == 0) {
        alert('{{ __("Veuillez sélectionner une note") }}');
        return;
    }
    
    fetch(`/transactions/${transactionId}/rate`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ rating, comment })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            bootstrap.Modal.getInstance(document.getElementById('ratingModal')).hide();
            showToast('{{ __("Évaluation envoyée avec succès") }}', 'success');
            location.reload();
        }
    });
}

// Gestion des étoiles de notation
document.addEventListener('DOMContentLoaded', function() {
    const stars = document.querySelectorAll('.rating-star');
    stars.forEach(star => {
        star.addEventListener('click', function() {
            const rating = this.dataset.rating;
            document.getElementById('rating').value = rating;
            
            stars.forEach((s, index) => {
                if (index < rating) {
                    s.classList.add('text-warning');
                    s.classList.remove('text-muted');
                } else {
                    s.classList.add('text-muted');
                    s.classList.remove('text-warning');
                }
            });
        });
    });
});
</script>
@endsection
