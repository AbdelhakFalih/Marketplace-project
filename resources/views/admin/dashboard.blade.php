@extends('layouts.admin')

@section('title', 'Tableau de bord')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tableau de bord</h1>
    <div>
        <button class="btn btn-primary">
            <i class="fas fa-plus me-2"></i>Nouveau
        </button>
    </div>
</div>

<!-- Stats Cards -->
<div class="row mb-4">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Utilisateurs</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">1,234</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
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
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Coopératives</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">89</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-handshake fa-2x text-gray-300"></i>
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
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Transactions</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">456</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-exchange-alt fa-2x text-gray-300"></i>
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
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Revenus</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">125,000 DH</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Charts Row -->
<div class="row">
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Évolution des transactions</h6>
            </div>
            <div class="card-body">
                <canvas id="transactionsChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div>
    
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Répartition par catégorie</h6>
            </div>
            <div class="card-body">
                <canvas id="categoriesChart" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- Recent Activity -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Activité récente</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Utilisateur</th>
                        <th>Action</th>
                        <th>Date</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>Nouvelle transaction</td>
                        <td>2024/01/15</td>
                        <td><span class="badge bg-success">Complétée</span></td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>Inscription coopérative</td>
                        <td>2024/01/14</td>
                        <td><span class="badge bg-warning">En attente</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
// Transactions Chart
const ctx1 = document.getElementById('transactionsChart').getContext('2d');
new Chart(ctx1, {
    type: 'line',
    data: {
        labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun'],
        datasets: [{
            label: 'Transactions',
            data: [12, 19, 3, 5, 2, 3],
            borderColor: 'rgb(75, 192, 192)',
            tension: 0.1
        }]
    }
});

// Categories Chart
const ctx2 = document.getElementById('categoriesChart').getContext('2d');
new Chart(ctx2, {
    type: 'doughnut',
    data: {
        labels: ['Alimentaire', 'Artisanat', 'Textile', 'Autres'],
        datasets: [{
            data: [30, 25, 20, 25],
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0']
        }]
    }
});
</script>
@endpush
