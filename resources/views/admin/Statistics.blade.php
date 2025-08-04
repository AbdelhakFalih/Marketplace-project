@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4" data-i18n="statistics">Statistiques</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Card 1: Users -->
            <div class="col">
                <div class="card h-100">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0" data-i18n="users">Utilisateurs</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong data-i18n="totalUsers">Nombre total d'utilisateurs :</strong> {{ $totalUsers }}</li>
                            <li class="list-group-item"><strong data-i18n="totalCooperatives">Nombre de coopératives :</strong> {{ $totalCooperatives }}</li>
                            <li class="list-group-item"><strong data-i18n="totalCommercants">Nombre de commerçants :</strong> {{ $totalCommercants }}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Card 2: Products and Services -->
            <div class="col">
                <div class="card h-100">
                    <div class="card-header bg-success text-white">
                        <h5 class="card-title mb-0" data-i18n="productsServices">Produits et Services</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong data-i18n="totalProducts">Nombre de produits :</strong> {{ $totalProduits }}</li>
                            <li class="list-group-item"><strong data-i18n="totalServices">Nombre de services :</strong> {{ $totalServices }}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Card 3: Offers, Demands, and Transactions -->
            <div class="col">
                <div class="card h-100">
                    <div class="card-header bg-info text-white">
                        <h5 class="card-title mb-0" data-i18n="offersDemandsTransactions">Offres, Demandes et Transactions</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong data-i18n="totalOffers">Nombre d'offres :</strong> {{ $totalOffres }}</li>
                            <li class="list-group-item"><strong data-i18n="totalDemands">Nombre de demandes :</strong> {{ $totalDemandes }}</li>
                            <li class="list-group-item"><strong data-i18n="totalTransactions">Nombre de transactions :</strong> {{ $totalTransactions }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
