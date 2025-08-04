@extends('layouts.user_space')

@section('title', 'Mon Dashboard')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Bienvenue, {{ Auth::user()->name ?? 'Utilisateur' }} !</h6>
    </div>
    <div class="card-body">
        <p class="mb-0">Voici un aperçu de votre activité sur la plateforme.</p>
    </div>
</div>

<!-- Quick Stats -->
<div class="row mb-4">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Mes Offres</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-tags fa-2x text-gray-300"></i>
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
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Mes Demandes</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">8</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-search fa-2x text-gray-300"></i>
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
                        <div class="h5 mb-0 font-weight-bold text-gray-800">25</div>
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
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Messages</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-envelope fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent Activity -->
<div class="row">
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Activité récente</h6>
            </div>
            <div class="card-body">
                <div class="timeline">
                    <div class="timeline-item mb-3">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 bg-success rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check text-white"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Transaction complétée</h6>
                                <p class="text-muted mb-1">Vente d'huile d'argan à Coopérative Atlas</p>
                                <small class="text-muted">Il y a 2 heures</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="timeline-item mb-3">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 bg-info rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fas fa-message text-white"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Nouveau message</h6>
                                <p class="text-muted mb-1">Message de Coopérative Olive concernant votre demande</p>
                                <small class="text-muted">Il y a 5 heures</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="timeline-item mb-3">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 bg-warning rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fas fa-plus text-white"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Nouvelle offre publiée</h6>
                                <p class="text-muted mb-1">Votre offre "Miel de montagne" a été publiée</p>
                                <small class="text-muted">Hier</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Actions rapides</h6>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="/offers/create" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Créer une offre
                    </a>
                    <a href="/demands/create" class="btn btn-success">
                        <i class="fas fa-search me-2"></i>Créer une demande
                    </a>
                    <a href="/transactions" class="btn btn-info">
                        <i class="fas fa-exchange-alt me-2"></i>Voir mes transactions
                    </a>
                    <a href="/user/profile/edit" class="btn btn-secondary">
                        <i class="fas fa-user me-2"></i>Modifier mon profil
                    </a>
                </div>
            </div>
        </div>
        
        <div class="card shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Notifications</h6>
            </div>
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <div class="list-group-item px-0">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-primary rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fas fa-bell text-white text-sm"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1 text-sm">Nouvelle demande</h6>
                                <p class="text-muted mb-0 text-xs">Quelqu'un cherche vos produits</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="list-group-item px-0">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-success rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check text-white text-sm"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1 text-sm">Profil vérifié</h6>
                                <p class="text-muted mb-0 text-xs">Votre profil a été vérifié</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
