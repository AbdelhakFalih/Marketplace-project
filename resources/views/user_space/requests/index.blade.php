@extends('layouts.user_space')

@section('title', __('Mes demandes'))

@section('content')
<div class="container-fluid px-4 py-6">
    <!-- Header -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="h3 mb-2 text-gray-800">{{ __('Mes demandes') }}</h1>
                    <p class="text-muted">{{ __('Gérez vos recherches de produits') }}</p>
                </div>
                <div class="d-flex gap-2">
                    <a href="{{ route('user.requests.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>{{ __('Nouvelle demande') }}
                    </a>
                    <button class="btn btn-outline-secondary" onclick="exportRequests()">
                        <i class="fas fa-download me-2"></i>{{ __('Exporter') }}
                    </button>
                </div>
            </div>

            <!-- Statistiques rapides -->
            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="card bg-info text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4 class="mb-0">{{ $totalRequests ?? 8 }}</h4>
                                    <p class="mb-0">{{ __('Total demandes') }}</p>
                                </div>
                                <i class="fas fa-search fa-2x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4 class="mb-0">{{ $activeRequests ?? 5 }}</h4>
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
                                    <h4 class="mb-0">{{ $responsesReceived ?? 23 }}</h4>
                                    <p class="mb-0">{{ __('Réponses reçues') }}</p>
                                </div>
                                <i class="fas fa-reply fa-2x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4 class="mb-0">{{ $fulfilledRequests ?? 3 }}</h4>
                                    <p class="mb-0">{{ __('Satisfaites') }}</p>
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
                                   placeholder="{{ __('Titre de la demande...') }}" 
                                   value="{{ request('search') }}">
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">{{ __('Statut') }}</label>
                            <select name="status" class="form-select">
                                <option value="">{{ __('Tous') }}</option>
                                <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>{{ __('Active') }}</option>
                                <option value="fulfilled" {{ request('status') == 'fulfilled' ? 'selected' : '' }}>{{ __('Satisfaite') }}</option>
                                <option value="expired" {{ request('status') == 'expired' ? 'selected' : '' }}>{{ __('Expirée') }}</option>
                                <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>{{ __('Annulée') }}</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">{{ __('Urgence') }}</label>
                            <select name="urgency" class="form-select">
                                <option value="">{{ __('Toutes') }}</option>
                                <option value="low" {{ request('urgency') == 'low' ? 'selected' : '' }}>{{ __('Faible') }}</option>
                                <option value="medium" {{ request('urgency') == 'medium' ? 'selected' : '' }}>{{ __('Moyenne') }}</option>
                                <option value="high" {{ request('urgency') == 'high' ? 'selected' : '' }}>{{ __('Élevée') }}</option>
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
                            <label class="form-label">{{ __('Tri par') }}</label>
                            <select name="sort" class="form-select">
                                <option value="created_at" {{ request('sort') == 'created_at' ? 'selected' : '' }}>{{ __('Plus récent') }}</option>
                                <option value="urgency" {{ request('sort') == 'urgency' ? 'selected' : '' }}>{{ __('Urgence') }}</option>
                                <option value="budget" {{ request('sort') == 'budget' ? 'selected' : '' }}>{{ __('Budget') }}</option>
                                <option value="responses" {{ request('sort') == 'responses' ? 'selected' : '' }}>{{ __('Réponses') }}</option>
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

    <!-- Liste des demandes -->
    <div class="row">
        @forelse($requests ?? [] as $request)
        <div class="col-lg-6 col-md-12 mb-4">
            <div class="card h-100 shadow-sm hover-shadow transition-all">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="flex-grow-1">
                            <h5 class="card-title mb-2">{{ $request->title ?? 'Recherche tomates bio locales' }}</h5>
                            <div class="d-flex align-items-center mb-2">
                                <span class="badge bg-{{ $request->urgency == 'high' ? 'danger' : ($request->urgency == 'medium' ? 'warning' : 'secondary') }} me-2">
                                    {{ $request->urgency == 'high' ? __('Urgent') : ($request->urgency == 'medium' ? __('Moyen') : __('Normal')) }}
                                </span>
                                <span class="badge bg-primary">{{ $request->category ?? 'Légumes' }}</span>
                                @php
                                    $status = $request->status ?? 'active';
                                    $statusConfig = [
                                        'active' => ['class' => 'success', 'text' => __('Active')],
                                        'fulfilled' => ['class' => 'info', 'text' => __('Satisfaite')],
                                        'expired' => ['class' => 'danger', 'text' => __('Expirée')],
                                        'cancelled' => ['class' => 'secondary', 'text' => __('Annulée')]
                                    ];
                                    $config = $statusConfig[$status] ?? $statusConfig['active'];
                                @endphp
                                <span class="badge bg-{{ $config['class'] }} ms-2">{{ $config['text'] }}</span>
                            </div>
                        </div>
                        <div class="text-end">
                            <div class="h5 text-success mb-0">{{ $request->budget ?? '15.00' }}€</div>
                            <small class="text-muted">{{ __('Budget max') }}</small>
                        </div>
                    </div>

                    <p class="card-text">{{ Str::limit($request->description ?? 'Je recherche des tomates biologiques cultivées localement pour mes conserves maison. Quantité souhaitée : 10kg minimum.', 120) }}</p>

                    <div class="row mb-3">
                        <div class="col-6">
                            <small class="text-muted">
                                <i class="fas fa-weight me-1"></i>
                                {{ __('Quantité') }}: {{ $request->quantity ?? '10' }} {{ $request->unit ?? 'kg' }}
                            </small>
                        </div>
                        <div class="col-6">
                            <small class="text-muted">
                                <i class="fas fa-calendar me-1"></i>
                                {{ __('Souhaité pour le') }}: {{ $request->needed_by ?? '15/12/2024' }}
                            </small>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <small class="text-muted">
                                <i class="fas fa-clock me-1"></i>
                                {{ __('Publié') }} {{ $request->created_at ?? 'il y a 3 jours' }}
                            </small>
                        </div>
                        <div class="col-6">
                            <small class="text-muted">
                                <i class="fas fa-eye me-1"></i>
                                {{ $request->views ?? 45 }} {{ __('vues') }}
                            </small>
                        </div>
                    </div>

                    <!-- Réponses reçues -->
                    @if(isset($request->responses_count) && $request->responses_count > 0)
                    <div class="alert alert-info py-2 mb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="small">
                                <i class="fas fa-comments me-1"></i>
                                {{ $request->responses_count }} {{ __('réponse(s) reçue(s)') }}
                            </span>
                            <a href="{{ route('user.requests.responses', $request->id ?? 1) }}" class="btn btn-sm btn-outline-info">
                                {{ __('Voir') }}
                            </a>
                        </div>
                    </div>
                    @endif

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group btn-group-sm">
                            <a href="{{ route('user.requests.show', $request->id ?? 1) }}" class="btn btn-outline-primary">
                                <i class="fas fa-eye me-1"></i>{{ __('Voir') }}
                            </a>
                            @if(($request->status ?? 'active') == 'active')
                            <a href="{{ route('user.requests.edit', $request->id ?? 1) }}" class="btn btn-outline-warning">
                                <i class="fas fa-edit me-1"></i>{{ __('Modifier') }}
                            </a>
                            @endif
                        </div>
                        
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <ul class="dropdown-menu">
                                @if(($request->status ?? 'active') == 'active')
                                <li><a class="dropdown-item" href="#" onclick="pauseRequest({{ $request->id ?? 1 }})">
                                    <i class="fas fa-pause me-2"></i>{{ __('Mettre en pause') }}
                                </a></li>
                                <li><a class="dropdown-item" href="#" onclick="promoteRequest({{ $request->id ?? 1 }})">
                                    <i class="fas fa-bullhorn me-2"></i>{{ __('Promouvoir') }}
                                </a></li>
                                <li><hr class="dropdown-divider"></li>
                                @endif
                                <li><a class="dropdown-item" href="#" onclick="duplicateRequest({{ $request->id ?? 1 }})">
                                    <i class="fas fa-copy me-2"></i>{{ __('Dupliquer') }}
                                </a></li>
                                <li><a class="dropdown-item text-danger" href="#" onclick="deleteRequest({{ $request->id ?? 1 }})">
                                    <i class="fas fa-trash me-2"></i>{{ __('Supprimer') }}
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="text-center py-5">
                <i class="fas fa-search fa-3x text-muted mb-3"></i>
                <h4>{{ __('Aucune demande') }}</h4>
                <p class="text-muted">{{ __('Vous n\'avez pas encore publié de demande') }}</p>
                <a href="{{ route('user.requests.create') }}" class="btn btn-primary">
                    {{ __('Créer ma première demande') }}
                </a>
            </div>
        </div>
        @endforelse
    </div>

    <!-- Pagination -->
    @if(isset($requests) && method_exists($requests, 'links'))
    <div class="d-flex justify-content-center mt-4">
        {{ $requests->links() }}
    </div>
    @endif
</div>

<script>
function pauseRequest(requestId) {
    if (confirm('{{ __("Êtes-vous sûr de vouloir mettre cette demande en pause ?") }}')) {
        fetch(`/user/requests/${requestId}/pause`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Content-Type': 'application/json',
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showToast('{{ __("Demande mise en pause") }}', 'success');
                location.reload();
            }
        });
    }
}

function promoteRequest(requestId) {
    // Ouvrir modal de promotion
    $('#promoteModal').modal('show');
    document.getElementById('promoteForm').dataset.requestId = requestId;
}

function duplicateRequest(requestId) {
    if (confirm('{{ __("Voulez-vous créer une copie de cette demande ?") }}')) {
        fetch(`/user/requests/${requestId}/duplicate`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Content-Type': 'application/json',
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showToast('{{ __("Demande dupliquée avec succès") }}', 'success');
                location.reload();
            }
        });
    }
}

function deleteRequest(requestId) {
    if (confirm('{{ __("Êtes-vous sûr de vouloir supprimer cette demande ? Cette action est irréversible.") }}')) {
        fetch(`/user/requests/${requestId}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Content-Type': 'application/json',
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showToast('{{ __("Demande supprimée avec succès") }}', 'success');
                location.reload();
            }
        });
    }
}

function exportRequests() {
    const params = new URLSearchParams(window.location.search);
    params.set('export', 'csv');
    window.open(`/user/requests/export?${params.toString()}`, '_blank');
}
</script>
@endsection
