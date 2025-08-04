@extends('layouts.admin')

@section('title', 'Statistiques')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Statistiques et Rapports</h1>
    <div>
        <button class="btn btn-primary">
            <i class="fas fa-download me-2"></i>Exporter
        </button>
    </div>
</div>

<!-- Date Range Filter -->
<div class="card shadow mb-4">
    <div class="card-body">
        <form class="row g-3 align-items-end">
            <div class="col-md-3">
                <label class="form-label">Date de début</label>
                <input type="date" class="form-control">
            </div>
            <div class="col-md-3">
                <label class="form-label">Date de fin</label>
                <input type="date" class="form-control">
            </div>
            <div class="col-md-3">
                <label class="form-label">Période</label>
                <select class="form-select">
                    <option>7 derniers jours</option>
                    <option>30 derniers jours</option>
                    <option>3 derniers mois</option>
                    <option>Cette année</option>
                </select>
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary w-100">
                    <i class="fas fa-filter me-2"></i>Filtrer
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Key Metrics -->
<div class="row mb-4">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Revenus totaux</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">125,000 DH</div>
                        <div class="text-xs text-success">+12% ce mois</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Transactions</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">456</div>
                        <div class="text-xs text-success">+8% ce mois</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-exchange-alt fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Nouveaux utilisateurs</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">89</div>
                        <div class="text-xs text-success">+15% ce mois</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Taux de conversion</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">3.2%</div>
                        <div class="text-xs text-danger">-2% ce mois</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-percentage fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Charts -->
<div class="row">
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Évolution des revenus</h6>
            </div>
            <div class="card-body">
                <canvas id="revenueChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div>
    
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Top Coopératives</h6>
            </div>
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-1">Coopérative Argan</h6>
                            <small class="text-muted">45 transactions</small>
                        </div>
                        <span class="badge bg-primary rounded-pill">15,000 DH</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-1">Coopérative Olive</h6>
                            <small class="text-muted">32 transactions</small>
                        </div>
                        <span class="badge bg-primary rounded-pill">12,500 DH</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-1">Coopérative Textile</h6>
                            <small class="text-muted">28 transactions</small>
                        </div>
                        <span class="badge bg-primary rounded-pill">9,800 DH</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Répartition par région</h6>
            </div>
            <div class="card-body">
                <canvas id="regionChart" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Types de transactions</h6>
            </div>
            <div class="card-body">
                <canvas id="transactionTypesChart" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
// Revenue Chart
const ctx1 = document.getElementById('revenueChart').getContext('2d');
new Chart(ctx1, {
    type: 'line',
    data: {
        labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aoû', 'Sep', 'Oct', 'Nov', 'Déc'],
        datasets: [{
            label: 'Revenus (DH)',
            data: [8000, 12000, 15000, 18000, 22000, 25000, 28000, 32000, 35000, 38000, 42000, 45000],
            borderColor: 'rgb(75, 192, 192)',
            backgroundColor: 'rgba(75, 192, 192, 0.1)',
            tension: 0.1,
            fill: true
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Region Chart
const ctx2 = document.getElementById('regionChart').getContext('2d');
new Chart(ctx2, {
    type: 'doughnut',
    data: {
        labels: ['Casablanca', 'Rabat', 'Marrakech', 'Fès', 'Autres'],
        datasets: [{
            data: [35, 25, 20, 15, 5],
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF']
        }]
    }
});

// Transaction Types Chart
const ctx3 = document.getElementById('transactionTypesChart').getContext('2d');
new Chart(ctx3, {
    type: 'bar',
    data: {
        labels: ['Vente', 'Achat', 'Échange', 'Service'],
        datasets: [{
            label: 'Nombre de transactions',
            data: [120, 89, 45, 32],
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0']
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
@endpush
