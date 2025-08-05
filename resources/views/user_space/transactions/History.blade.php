@extends('layouts.user')

@section('title')
<span data-translate="transactions.history">Historique des transactions</span>
@endsection

@section('content')
<div class="container-fluid px-4 py-6">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-2 text-primary-green" data-translate="transactions.history">Historique des transactions</h1>
            <p class="text-muted">Consultez l'historique complet de vos transactions</p>
        </div>
        <div class="btn-group">
            <button class="btn btn-outline-primary-green" onclick="exportTransactions()">
                <i class="fas fa-download me-2"></i>Exporter
            </button>
            <button class="btn btn-primary-green" onclick="printHistory()">
                <i class="fas fa-print me-2"></i>Imprimer
            </button>
        </div>
    </div>

    <!-- Statistiques globales -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card bg-primary-green text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">{{ $totalTransactions ?? 45 }}</h4>
                            <p class="mb-0">Total transactions</p>
                        </div>
                        <i class="fas fa-exchange-alt fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-secondary-green text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">{{ $totalAmount ?? '1,250' }}€</h4>
                            <p class="mb-0">Montant total</p>
                        </div>
                        <i class="fas fa-euro-sign fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary-green-light text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">{{ $avgTransaction ?? '27.80' }}€</h4>
                            <p class="mb-0">Montant moyen</p>
                        </div>
                        <i class="fas fa-chart-line fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary-green-dark text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">{{ $thisMonth ?? 8 }}</h4>
                            <p class="mb-0">Ce mois-ci</p>
                        </div>
                        <i class="fas fa-calendar fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres avancés -->
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form method="GET" class="row g-3">
                <div class="col-md-2">
                    <label class="form-label">Période</label>
                    <select name="period" class="form-select">
                        <option value="">Toutes</option>
                        <option value="today" {{ request('period') == 'today' ? 'selected' : '' }}>Aujourd'hui</option>
                        <option value="week" {{ request('period') == 'week' ? 'selected' : '' }}>Cette semaine</option>
                        <option value="month" {{ request('period') == 'month' ? 'selected' : '' }}>Ce mois</option>
                        <option value="year" {{ request('period') == 'year' ? 'selected' : '' }}>Cette année</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Du</label>
                    <input type="date" name="date_from" class="form-control" value="{{ request('date_from') }}">
                </div>
                <div class="col-md-2">
                    <label class="form-label">Au</label>
                    <input type="date" name="date_to" class="form-control" value="{{ request('date_to') }}">
                </div>
                <div class="col-md-2">
                    <label class="form-label">Statut</label>
                    <select name="status" class="form-select">
                        <option value="">Tous</option>
                        <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Terminé</option>
                        <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>En attente</option>
                        <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Annulé</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Type</label>
                    <select name="type" class="form-select">
                        <option value="">Tous</option>
                        <option value="purchase" {{ request('type') == 'purchase' ? 'selected' : '' }}>Achat</option>
                        <option value="sale" {{ request('type') == 'sale' ? 'selected' : '' }}>Vente</option>
                    </select>
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-outline-primary-green w-100">
                        <i class="fas fa-filter"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Graphique des transactions -->
    <div class="card shadow-sm mb-4">
        <div class="card-header">
            <h6 class="mb-0">Évolution des transactions</h6>
        </div>
        <div class="card-body">
            <canvas id="transactionChart" height="100"></canvas>
        </div>
    </div>

    <!-- Liste des transactions -->
    <div class="card shadow-sm">
        <div class="card-header">
            <h6 class="mb-0">Historique détaillé</h6>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Date</th>
                            <th>Référence</th>
                            <th>Type</th>
                            <th>Produit</th>
                            <th>Partenaire</th>
                            <th>Montant</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($transactions ?? [] as $transaction)
                        <tr>
                            <td>
                                <small class="text-muted">{{ $transaction->created_at ?? '15/12/2024' }}</small>
                            </td>
                            <td>
                                <span class="font-monospace small">#{{ $transaction->reference ?? 'TXN-2024-001' }}</span>
                            </td>
                            <td>
                                <span class="badge bg-{{ $transaction->type == 'purchase' ? 'primary' : 'success' }}">
                                    {{ $transaction->type == 'purchase' ? 'Achat' : 'Vente' }}
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ $transaction->product_image ?? '/placeholder.svg?height=30&width=30&text=P' }}" 
                                         class="rounded me-2" width="30" height="30">
                                    <div>
                                        <div class="fw-medium">{{ $transaction->product_name ?? 'Tomates bio' }}</div>
                                        <small class="text-muted">{{ $transaction->quantity ?? '5' }} {{ $transaction->unit ?? 'kg' }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <div class="fw-medium">{{ $transaction->partner_name ?? 'Coopérative Bio Sud' }}</div>
                                    <small class="text-muted">{{ $transaction->partner_location ?? 'Marseille' }}</small>
                                </div>
                            </td>
                            <td>
                                <span class="fw-bold text-{{ $transaction->type == 'purchase' ? 'danger' : 'success' }}">
                                    {{ $transaction->type == 'purchase' ? '-' : '+' }}{{ $transaction->amount ?? '17.50' }}€
                                </span>
                            </td>
                            <td>
                                <span class="badge bg-{{ $transaction->status == 'completed' ? 'success' : ($transaction->status == 'pending' ? 'warning' : 'danger') }}">
                                    {{ $transaction->status == 'completed' ? 'Terminé' : ($transaction->status == 'pending' ? 'En attente' : 'Annulé') }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <button class="btn btn-outline-primary-green" onclick="viewTransaction({{ $transaction->id ?? 1 }})">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-outline-secondary" onclick="downloadInvoice({{ $transaction->id ?? 1 }})">
                                        <i class="fas fa-download"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center py-4">
                                <i class="fas fa-exchange-alt fa-3x text-muted mb-3"></i>
                                <h6>Aucune transaction trouvée</h6>
                                <p class="text-muted">Vos transactions apparaîtront ici</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        <nav>
            <ul class="pagination">
                <li class="page-item"><a class="page-link text-primary-green" href="#">Précédent</a></li>
                <li class="page-item active"><a class="page-link bg-primary-green border-primary-green" href="#">1</a></li>
                <li class="page-item"><a class="page-link text-primary-green" href="#">2</a></li>
                <li class="page-item"><a class="page-link text-primary-green" href="#">3</a></li>
                <li class="page-item"><a class="page-link text-primary-green" href="#">Suivant</a></li>
            </ul>
        </nav>
    </div>
</div>

<!-- Modal détail transaction -->
<div class="modal fade" id="transactionModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Détail de la transaction</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="transactionDetails">
                <!-- Contenu chargé dynamiquement -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary-green" onclick="downloadInvoice()">
                    <i class="fas fa-download me-2"></i>Télécharger la facture
                </button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// Graphique des transactions
const ctx = document.getElementById('transactionChart').getContext('2d');
const transactionChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aoû', 'Sep', 'Oct', 'Nov', 'Déc'],
        datasets: [{
            label: 'Achats',
            data: [120, 190, 300, 500, 200, 300, 450, 600, 400, 350, 280, 320],
            borderColor: 'var(--primary-green)',
            backgroundColor: 'var(--accent-green)',
            tension: 0.4
        }, {
            label: 'Ventes',
            data: [80, 150, 200, 300, 150, 250, 350, 400, 300, 250, 200, 280],
            borderColor: 'var(--secondary-green)',
            backgroundColor: 'var(--secondary-green)',
            tension: 0.4
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    callback: function(value) {
                        return value + '€';
                    }
                }
            }
        }
    }
});

function viewTransaction(id) {
    // Charger les détails de la transaction
    fetch(`/transactions/${id}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('transactionDetails').innerHTML = `
                <div class="row">
                    <div class="col-md-6">
                        <h6>Informations générales</h6>
                        <p><strong>Référence:</strong> #TXN-2024-${id.toString().padStart(3, '0')}</p>
                        <p><strong>Date:</strong> 15/12/2024</p>
                        <p><strong>Type:</strong> Achat</p>
                        <p><strong>Statut:</strong> <span class="badge bg-success">Terminé</span></p>
                    </div>
                    <div class="col-md-6">
                        <h6>Détails produit</h6>
                        <p><strong>Produit:</strong> Tomates bio</p>
                        <p><strong>Quantité:</strong> 5 kg</p>
                        <p><strong>Prix unitaire:</strong> 3.50€/kg</p>
                        <p><strong>Total:</strong> 17.50€</p>
                    </div>
                </div>
            `;
            const modal = new bootstrap.Modal(document.getElementById('transactionModal'));
            modal.show();
        });
}

function downloadInvoice(id) {
    window.open(`/transactions/${id}/invoice`, '_blank');
}

function exportTransactions() {
    window.open('/transactions/export', '_blank');
}

function printHistory() {
    window.print();
}
</script>
@endsection
