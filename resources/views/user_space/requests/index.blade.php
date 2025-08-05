@extends('layouts.app')

@section('title', __('Demandes de produits'))

@section('content')
<div class="container-fluid px-4 py-6">
    <!-- Header -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="h3 mb-2 text-gray-800">{{ __('Demandes de produits') }}</h1>
                    <p class="text-muted">{{ __('Découvrez ce que recherchent nos membres') }}</p>
                </div>
                <a href="{{ route('requests.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i>{{ __('Publier une demande') }}
                </a>
            </div>

            <!-- Filtres -->
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <form method="GET" action="{{ route('requests.index') }}" class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">{{ __('Rechercher') }}</label>
                            <input type="text" name="search" class="form-control" 
                                   placeholder="{{ __('Produit recherché...') }}" 
                                   value="{{ request('search') }}">
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">{{ __('Catégorie') }}</label>
                            <select name="category" class="form-select">
                                <option value="">{{ __('Toutes') }}</option>
                                <option value="fruits" {{ request('category') == 'fruits' ? 'selected' : '' }}>{{ __('Fruits') }}</option>
                                <option value="legumes" {{ request('category') == 'legumes' ? 'selected' : '' }}>{{ __('Légumes') }}</option>
                                <option value="cereales" {{ request('category') ==  }}</option>
                                <option value="cereales" {{ request('category') == 'cereales' ? 'selected' : '' }}>{{ __('Céréales') }}</option>
                                <option value="produits-laitiers" {{ request('category') == 'produits-laitiers' ? 'selected' : '' }}>{{ __('Produits laitiers') }}</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">{{ __('Budget max') }}</label>
                            <input type="number" name="max_budget" class="form-control" 
                                   placeholder="0.00" value="{{ request('max_budget') }}">
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">{{ __('Localisation') }}</label>
                            <input type="text" name="location" class="form-control" 
                                   placeholder="{{ __('Ville...') }}" value="{{ request('location') }}">
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
            <div class="card bg-info text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">{{ $totalRequests ?? 89 }}</h4>
                            <p class="mb-0">{{ __('Demandes actives') }}</p>
                        </div>
                        <i class="fas fa-search fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">{{ $urgentRequests ?? 12 }}</h4>
                            <p class="mb-0">{{ __('Demandes urgentes') }}</p>
                        </div>
                        <i class="fas fa-exclamation-triangle fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">{{ $matchedRequests ?? 34 }}</h4>
                            <p class="mb-0">{{ __('Demandes satisfaites') }}</p>
                        </div>
                        <i class="fas fa-check-circle fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">{{ $avgBudget ?? '25.80' }}€</h4>
                            <p class="mb-0">{{ __('Budget moyen') }}</p>
                        </div>
                        <i class="fas fa-euro-sign fa-2x opacity-75"></i>
                    </div>
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
                                <i class="fas fa-map-marker-alt me-1"></i>
                                {{ $request->location ?? 'Lyon' }}
                            </small>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <small class="text-muted">
                                <i class="fas fa-calendar me-1"></i>
                                {{ __('Souhaité pour le') }}: {{ $request->needed_by ?? '15/12/2024' }}
                            </small>
                        </div>
                        <div class="col-6">
                            <small class="text-muted">
                                <i class="fas fa-user me-1"></i>
                                {{ $request->user->name ?? 'Marie D.' }}
                            </small>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">
                                <i class="fas fa-clock me-1"></i>
                                {{ __('Publié') }} {{ $request->created_at ?? 'il y a 3 jours' }}
                            </small>
                        </div>
                        <div class="btn-group">
                            <a href="{{ route('requests.show', $request->id ?? 1) }}" class="btn btn-outline-primary btn-sm">
                                <i class="fas fa-eye me-1"></i>{{ __('Voir') }}
                            </a>
                            <button class="btn btn-primary btn-sm" onclick="respondToRequest({{ $request->id ?? 1 }})">
                                <i class="fas fa-reply me-1"></i>{{ __('Répondre') }}
                            </button>
                        </div>
                    </div>

                    @if(isset($request->responses_count) && $request->responses_count > 0)
                    <div class="mt-2 pt-2 border-top">
                        <small class="text-success">
                            <i class="fas fa-comments me-1"></i>
                            {{ $request->responses_count }} {{ __('réponse(s) reçue(s)') }}
                        </small>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="text-center py-5">
                <i class="fas fa-search fa-3x text-muted mb-3"></i>
                <h4>{{ __('Aucune demande trouvée') }}</h4>
                <p class="text-muted">{{ __('Soyez le premier à publier une demande') }}</p>
                <a href="{{ route('requests.create') }}" class="btn btn-primary">
                    {{ __('Publier une demande') }}
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
function respondToRequest(requestId) {
    // Redirection vers le formulaire de réponse
    window.location.href = `/requests/${requestId}/respond`;
}
</script>
@endsection
