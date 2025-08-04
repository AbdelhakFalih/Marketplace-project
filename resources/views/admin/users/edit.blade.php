@extends('layouts.admin')

@section('title', 'Modifier utilisateur')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Modifier utilisateur</h1>
    <div>
        <a href="/admin/users" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-2"></i>Retour
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Informations utilisateur</h6>
            </div>
            <div class="card-body">
                <form>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Prénom</label>
                            <input type="text" class="form-control" value="John">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nom</label>
                            <input type="text" class="form-control" value="Doe">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" value="john.doe@example.com">
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Téléphone</label>
                            <input type="tel" class="form-control" value="+212 123 456 789">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date de naissance</label>
                            <input type="date" class="form-control" value="1990-01-01">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Adresse</label>
                        <textarea class="form-control" rows="3">123 Rue Example, Casablanca, Maroc</textarea>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Rôle</label>
                            <select class="form-select">
                                <option>Utilisateur</option>
                                <option>Coopérative</option>
                                <option>Admin</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Statut</label>
                            <select class="form-select">
                                <option>Actif</option>
                                <option>Inactif</option>
                                <option>Suspendu</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">
                                Email vérifié
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">
                                Téléphone vérifié
                            </label>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary me-2">Annuler</button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i>Enregistrer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Photo de profil</h6>
            </div>
            <div class="card-body text-center">
                <div class="w-32 h-32 bg-gray-200 rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center">
                    <i class="fas fa-user fa-3x text-gray-400"></i>
                </div>
                <button class="btn btn-primary btn-sm">
                    <i class="fas fa-upload me-2"></i>Changer photo
                </button>
            </div>
        </div>
        
        <div class="card shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Statistiques</h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <span>Transactions</span>
                        <strong>12</strong>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <span>Dernière connexion</span>
                        <strong>Aujourd'hui</strong>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <span>Membre depuis</span>
                        <strong>Jan 2024</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
