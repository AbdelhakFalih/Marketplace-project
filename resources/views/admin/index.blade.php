@extends('layouts.admin')

@section('title', 'Gestion des utilisateurs')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Gestion des utilisateurs</h1>
    <div>
        <button class="btn btn-primary">
            <i class="fas fa-plus me-2"></i>Nouvel utilisateur
        </button>
    </div>
</div>

<!-- Filters -->
<div class="card shadow mb-4">
    <div class="card-body">
        <form class="row g-3">
            <div class="col-md-4">
                <label class="form-label">Rechercher</label>
                <input type="text" class="form-control" placeholder="Nom, email...">
            </div>
            <div class="col-md-3">
                <label class="form-label">Statut</label>
                <select class="form-select">
                    <option>Tous</option>
                    <option>Actif</option>
                    <option>Inactif</option>
                    <option>Suspendu</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label">Rôle</label>
                <select class="form-select">
                    <option>Tous</option>
                    <option>Utilisateur</option>
                    <option>Coopérative</option>
                    <option>Admin</option>
                </select>
            </div>
            <div class="col-md-2">
                <label class="form-label">&nbsp;</label>
                <button type="submit" class="btn btn-primary d-block w-100">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Users Table -->
<div class="card shadow">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste des utilisateurs</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" class="form-check-input">
                        </th>
                        <th>Utilisateur</th>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Statut</th>
                        <th>Date d'inscription</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="checkbox" class="form-check-input">
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar me-3">
                                    <div class="w-10 h-10 bg-primary rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="fas fa-user text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="fw-bold">John Doe</div>
                                    <div class="text-muted small">ID: #001</div>
                                </div>
                            </div>
                        </td>
                        <td>john.doe@example.com</td>
                        <td><span class="badge bg-info">Utilisateur</span></td>
                        <td><span class="badge bg-success">Actif</span></td>
                        <td>15/01/2024</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="/admin/users/1" class="btn btn-sm btn-outline-primary" title="Voir">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <button class="btn btn-sm btn-outline-warning" title="Modifier">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger" title="Supprimer">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" class="form-check-input">
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar me-3">
                                    <div class="w-10 h-10 bg-success rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="fas fa-handshake text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="fw-bold">Coopérative Argan</div>
                                    <div class="text-muted small">ID: #002</div>
                                </div>
                            </div>
                        </td>
                        <td>contact@coop-argan.ma</td>
                        <td><span class="badge bg-success">Coopérative</span></td>
                        <td><span class="badge bg-warning">En attente</span></td>
                        <td>14/01/2024</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="/admin/users/2" class="btn btn-sm btn-outline-primary" title="Voir">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <button class="btn btn-sm btn-outline-warning" title="Modifier">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger" title="Supprimer">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <nav aria-label="Page navigation" class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <span class="page-link">Précédent</span>
                </li>
                <li class="page-item active">
                    <span class="page-link">1</span>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">Suivant</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@endsection
