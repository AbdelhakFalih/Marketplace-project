@extends('layouts.admin')

@section('title', 'Détails utilisateur')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Détails de l'utilisateur</h1>
    <div>
        <a href="/admin/users" class="btn btn-secondary me-2">
            <i class="fas fa-arrow-left me-2"></i>Retour à la liste
        </a>
        <a href="/admin/users/{{ $user['id'] ?? '1' }}/edit" class="btn btn-warning me-2">
            <i class="fas fa-edit me-2"></i>Modifier
        </a>
        <button class="btn btn-danger" onclick="confirmDelete()">
            <i class="fas fa-trash me-2"></i>Supprimer
        </button>
    </div>
</div>

<div class="row">
    <!-- User Profile Card -->
    <div class="col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Profil utilisateur</h6>
            </div>
            <div class="card-body text-center">
                <!-- Profile Picture -->
                <div class="w-32 h-32 bg-gray-200 rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center">
                    @if(isset($user['avatar']))
                        <img src="{{ $user['avatar'] }}" alt="Avatar" class="w-32 h-32 rounded-circle object-cover">
                    @else
                        <i class="fas fa-user fa-3x text-gray-400"></i>
                    @endif
                </div>
                
                <h5 class="card-title mb-1">{{ $user['name'] ?? 'John Doe' }}</h5>
                <p class="text-muted mb-2">{{ $user['email'] ?? 'john.doe@example.com' }}</p>
                
                <!-- Status Badge -->
                @php
                    $status = $user['status'] ?? 'active';
                    $statusClass = $status === 'active' ? 'success' : ($status === 'inactive' ? 'secondary' : 'danger');
                    $statusText = $status === 'active' ? 'Actif' : ($status === 'inactive' ? 'Inactif' : 'Suspendu');
                @endphp
                <span class="badge bg-{{ $statusClass }} mb-3">{{ $statusText }}</span>
                
                <!-- Role Badge -->
                @php
                    $role = $user['role'] ?? 'user';
                    $roleClass = $role === 'admin' ? 'danger' : ($role === 'cooperative' ? 'success' : 'info');
                    $roleText = $role === 'admin' ? 'Administrateur' : ($role === 'cooperative' ? 'Coopérative' : 'Utilisateur');
                @endphp
                <div class="mb-3">
                    <span class="badge bg-{{ $roleClass }}">{{ $roleText }}</span>
                </div>
                
                <!-- Quick Actions -->
                <div class="d-grid gap-2">
                    @if($status === 'active')
                        <button class="btn btn-warning btn-sm" onclick="suspendUser()">
                            <i class="fas fa-ban me-2"></i>Suspendre
                        </button>
                    @else
                        <button class="btn btn-success btn-sm" onclick="activateUser()">
                            <i class="fas fa-check me-2"></i>Activer
                        </button>
                    @endif
                    
                    <button class="btn btn-info btn-sm" onclick="sendMessage()">
                        <i class="fas fa-envelope me-2"></i>Envoyer un message
                    </button>
                    
                    <button class="btn btn-secondary btn-sm" onclick="resetPassword()">
                        <i class="fas fa-key me-2"></i>Réinitialiser mot de passe
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Verification Status -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Statut de vérification</h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Email</span>
                        @if($user['email_verified'] ?? true)
                            <span class="badge bg-success">
                                <i class="fas fa-check me-1"></i>Vérifié
                            </span>
                        @else
                            <span class="badge bg-warning">
                                <i class="fas fa-clock me-1"></i>En attente
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Téléphone</span>
                        @if($user['phone_verified'] ?? false)
                            <span class="badge bg-success">
                                <i class="fas fa-check me-1"></i>Vérifié
                            </span>
                        @else
                            <span class="badge bg-secondary">
                                <i class="fas fa-times me-1"></i>Non vérifié
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Identité</span>
                        @if($user['identity_verified'] ?? false)
                            <span class="badge bg-success">
                                <i class="fas fa-check me-1"></i>Vérifié
                            </span>
                        @else
                            <span class="badge bg-secondary">
                                <i class="fas fa-times me-1"></i>Non vérifié
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- User Details -->
    <div class="col-lg-8">
        <!-- Personal Information -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Informations personnelles</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-borderless">
                            <tr>
                                <td class="fw-bold">Prénom :</td>
                                <td>{{ $user['first_name'] ?? 'John' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Nom :</td>
                                <td>{{ $user['last_name'] ?? 'Doe' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Email :</td>
                                <td>{{ $user['email'] ?? 'john.doe@example.com' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Téléphone :</td>
                                <td>{{ $user['phone'] ?? '+212 123 456 789' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Date de naissance :</td>
                                <td>{{ $user['birth_date'] ?? '01/01/1990' }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-borderless">
                            <tr>
                                <td class="fw-bold">Ville :</td>
                                <td>{{ $user['city'] ?? 'Casablanca' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Région :</td>
                                <td>{{ $user['region'] ?? 'Casablanca-Settat' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Adresse :</td>
                                <td>{{ $user['address'] ?? '123 Rue Example, Casablanca' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Date d'inscription :</td>
                                <td>{{ $user['created_at'] ?? '15/01/2024' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Dernière connexion :</td>
                                <td>{{ $user['last_login'] ?? 'Aujourd\'hui à 14:30' }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                @if(isset($user['bio']) && $user['bio'])
                <div class="mt-3">
                    <h6 class="fw-bold">Bio :</h6>
                    <p class="text-muted">{{ $user['bio'] }}</p>
                </div>
                @endif
            </div>
        </div>
        
        <!-- Statistics -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Statistiques d'activité</h6>
            </div>
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-md-3">
                        <div class="border-end">
                            <h4 class="text-primary">{{ $user['offers_count'] ?? '12' }}</h4>
                            <p class="text-muted mb-0">Offres publiées</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="border-end">
                            <h4 class="text-success">{{ $user['demands_count'] ?? '8' }}</h4>
                            <p class="text-muted mb-0">Demandes créées</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="border-end">
                            <h4 class="text-info">{{ $user['transactions_count'] ?? '25' }}</h4>
                            <p class="text-muted mb-0">Transactions</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4 class="text-warning">{{ $user['rating'] ?? '4.5' }}/5</h4>
                        <p class="text-muted mb-0">Note moyenne</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Recent Activity -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Activité récente</h6>
                <a href="/admin/users/{{ $user['id'] ?? '1' }}/activity" class="btn btn-sm btn-outline-primary">
                    Voir tout
                </a>
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
                                <p class="text-muted mb-1">Vente d'huile d'argan - 500 DH</p>
                                <small class="text-muted">Il y a 2 heures</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="timeline-item mb-3">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 bg-info rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fas fa-plus text-white"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Nouvelle offre publiée</h6>
                                <p class="text-muted mb-1">Miel de montagne - 50 kg disponibles</p>
                                <small class="text-muted">Il y a 5 heures</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="timeline-item mb-3">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 bg-warning rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fas fa-search text-white"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Nouvelle demande créée</h6>
                                <p class="text-muted mb-1">Recherche de produits textiles traditionnels</p>
                                <small class="text-muted">Hier</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 bg-primary rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fas fa-user text-white"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Profil mis à jour</h6>
                                <p class="text-muted mb-1">Informations de contact modifiées</p>
                                <small class="text-muted">Il y a 3 jours</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Transactions History -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Historique des transactions</h6>
                <a href="/admin/transactions?user={{ $user['id'] ?? '1' }}" class="btn btn-sm btn-outline-primary">
                    Voir toutes
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Type</th>
                                <th>Produit</th>
                                <th>Montant</th>
                                <th>Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>15/01/2024</td>
                                <td><span class="badge bg-success">Vente</span></td>
                                <td>Huile d'argan bio</td>
                                <td>500 DH</td>
                                <td><span class="badge bg-success">Complétée</span></td>
                            </tr>
                            <tr>
                                <td>12/01/2024</td>
                                <td><span class="badge bg-info">Achat</span></td>
                                <td>Tapis berbère</td>
                                <td>1,200 DH</td>
                                <td><span class="badge bg-success">Complétée</span></td>
                            </tr>
                            <tr>
                                <td>10/01/2024</td>
                                <td><span class="badge bg-warning">Échange</span></td>
                                <td>Miel contre olives</td>
                                <td>-</td>
                                <td><span class="badge bg-warning">En cours</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- Notes Admin -->
        <div class="card shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Notes administratives</h6>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <textarea class="form-control" rows="4" placeholder="Ajouter une note sur cet utilisateur...">{{ $user['admin_notes'] ?? '' }}</textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i>Enregistrer la note
                        </button>
                    </div>
                </form>
                
                @if(isset($user['admin_notes_history']))
                <div class="mt-4">
                    <h6>Historique des notes :</h6>
                    <div class="border-start border-3 border-primary ps-3">
                        <div class="mb-2">
                            <small class="text-muted">Admin - 14/01/2024 à 10:30</small>
                            <p class="mb-0">Utilisateur très actif, transactions toujours réussies.</p>
                        </div>
                        <div class="mb-2">
                            <small class="text-muted">Admin - 10/01/2024 à 15:45</small>
                            <p class="mb-0">Première transaction effectuée avec succès.</p>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Modals -->
<!-- Suspend User Modal -->
<div class="modal fade" id="suspendModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Suspendre l'utilisateur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Êtes-vous sûr de vouloir suspendre cet utilisateur ?</p>
                <div class="mb-3">
                    <label class="form-label">Raison de la suspension</label>
                    <textarea class="form-control" rows="3" placeholder="Expliquez la raison..."></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-warning">Suspendre</button>
            </div>
        </div>
    </div>
</div>

<!-- Send Message Modal -->
<div class="modal fade" id="messageModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Envoyer un message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Sujet</label>
                        <input type="text" class="form-control" placeholder="Sujet du message">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea class="form-control" rows="5" placeholder="Votre message..."></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Envoyer</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
function confirmDelete() {
    if (confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ? Cette action est irréversible.')) {
        // Logique de suppression
        alert('Utilisateur supprimé avec succès');
    }
}

function suspendUser() {
    const modal = new bootstrap.Modal(document.getElementById('suspendModal'));
    modal.show();
}

function activateUser() {
    if (confirm('Êtes-vous sûr de vouloir activer cet utilisateur ?')) {
        // Logique d'activation
        alert('Utilisateur activé avec succès');
        location.reload();
    }
}

function sendMessage() {
    const modal = new bootstrap.Modal(document.getElementById('messageModal'));
    modal.show();
}

function resetPassword() {
    if (confirm('Êtes-vous sûr de vouloir réinitialiser le mot de passe de cet utilisateur ? Un email sera envoyé avec les nouvelles instructions.')) {
        // Logique de réinitialisation
        alert('Email de réinitialisation envoyé avec succès');
    }
}
</script>
@endpush

@push('styles')
<style>
.timeline-item {
    position: relative;
}

.timeline-item:not(:last-child)::after {
    content: '';
    position: absolute;
    left: 20px;
    top: 40px;
    bottom: -20px;
    width: 2px;
    background-color: #e3e6f0;
}

.border-end {
    border-right: 1px solid #e3e6f0 !important;
}

.object-cover {
    object-fit: cover;
}
</style>
@endpush
