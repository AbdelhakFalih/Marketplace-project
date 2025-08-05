@extends('layouts.user')

@section('title')
<span data-translate="transactions.my_transactions">Mes transactions</span>
@endsection

@section('content')
<div class="container-fluid px-4 py-6">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-2 text-primary-green" data-translate="transactions.my_transactions">Mes transactions</h1>
            <p class="text-muted">Gérez vos transactions en cours et terminées</p>
        </div>
        <div class="btn-group">
            <a href="{{ route('transactions.history') }}" class="btn btn-outline-primary-green">
                <i class="fas fa-history me-2"></i>Historique complet
            </a>
            <button class="btn btn-primary-green" onclick="createTransaction()">
                <i class="fas fa-plus me-2"></i>Nouvelle transaction
            </button>
        </div>
    </div>

    <!-- Statistiques rapides -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card bg-primary-green text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">{{ $activeTransactions ?? 5 }}</h4>
                            <p class="mb-0">En cours</p>
                        </div>
                        <i class="fas fa-clock fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-secondary-green text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">{{ $completedTransactions ?? 12 }}</h4>
                            <p class="mb-0">Terminées</p>
                        </div>
                        <i class="fas fa-check-circle fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary-green-light text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">{{ $pendingPayments ?? 3 }}</h4>
                            <p class="mb-0">Paiements en attente</p>
                        </div>
                        <i class="fas fa-credit-card fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary-green-dark text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">{{ $monthlyTotal ?? '340' }}€</h4>
                            <p class="mb-0">Ce mois</p>
                        </div>
                        <i class="fas fa-euro-sign fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Onglets -->
    <ul class="nav nav-tabs mb-4" role="tablist">
        <li class="nav-item">
            <a class="nav-link active text-primary-green" data-bs-toggle="tab" href="#active">
                En cours <span class="badge bg-primary-green ms-2">{{ $activeTransactions ?? 5 }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-primary-green" data-bs-toggle="tab" href="#completed">
                Terminées <span class="badge bg-secondary-green ms-2">{{ $completedTransactions ?? 12 }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-primary-green" data-bs-toggle="tab" href="#pending">
                En attente <span class="badge bg-warning ms-2">{{ $pendingPayments ?? 3 }}</span>
            </a>
        </li>
    </ul>

    <!-- Contenu des onglets -->
    <div class="tab-content">
        <!-- Transactions en cours -->
        <div class="tab-pane fade show active" id="active">
            <div class="row">
                @forelse($activeTransactionsList ?? [] as $transaction)
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="card shadow-sm border-start border-primary-green border-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div>
                                    <h6 class="card-title mb-1">{{ $transaction->product_name ?? 'Tomates bio de saison' }}</h6>
                                    <small class="text-muted">#{{ $transaction->reference ?? 'TXN-2024-001' }}</small>
                                </div>
                                <span class="badge bg-warning">En cours</span>
                            </div>

                            <div class="row mb-3">
                                <div class="col-6">
                                    <small class="text-muted">Partenaire</small>
                                    <div class="fw-medium">{{ $transaction->partner_name ?? 'Coopérative Bio Sud' }}</div>
                                </div>
                                <div class="col-6">
                                    <small class="text-muted">Montant</small>
                                    <div class="fw-medium text-primary-green">{{ $transaction->amount ?? '17.50' }}€</div>
                                </div>
                            </div>

                            <div class="progress mb-3" style="height: 8px;">
                                <div class="progress-bar bg-primary-green" style="width: {{ $transaction->progress ?? 60 }}%"></div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">
                                    <i class="fas fa-clock me-1"></i>
                                    Étape: {{ $transaction->current_step ?? 'Confirmation paiement' }}
                                </small>
                                <div class="btn-group btn-group-sm">
                                    <button class="btn btn-outline-primary-green" onclick="viewTransaction({{ $transaction->id ?? 1 }})">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-primary-green" onclick="continueTransaction({{ $transaction->id ?? 1 }})">
                                        Continuer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <div class="text-center py-5">
                        <i class="fas fa-clock fa-3x text-muted mb-3"></i>
                        <h5>Aucune transaction en cours</h5>
                        <p class="text-muted">Vos transactions actives apparaîtront ici</p>
                    </div>
                </div>
                @endforelse
            </div>
        </div>

        <!-- Transactions terminées -->
        <div class="tab-pane fade" id="completed">
            <div class="row">
                @forelse($completedTransactionsList ?? [] as $transaction)
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div>
                                    <h6 class="card-title mb-1">{{ $transaction->product_name ?? 'Courgettes bio' }}</h6>
                                    <small class="text-muted">#{{ $transaction->reference ?? 'TXN-2024-002' }}</small>
                                </div>
                                <span class="badge bg-success">Terminé</span>
                            </div>

                            <div class="row mb-3">
                                <div class="col-6">
                                    <small class="text-muted">Partenaire</small>
                                    <div class="fw-medium">{{ $transaction->partner_name ?? 'Ferme des Collines' }}</div>
                                </div>
                                <div class="col-6">
                                    <small class="text-muted">Montant</small>
                                    <div class="fw-medium text-success">{{ $transaction->amount ?? '24.00' }}€</div>
