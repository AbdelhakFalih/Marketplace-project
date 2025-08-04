@extends('layouts.user_space')

@section('title', 'Changer mot de passe')

@section('content')
<div class="card shadow">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Changer mon mot de passe</h6>
    </div>
    <div class="card-body">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Mot de passe actuel</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="currentPassword">
                            <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('currentPassword')">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Nouveau mot de passe</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="newPassword">
                            <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('newPassword')">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <div class="form-text">
                            Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule et un chiffre.
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Confirmer le nouveau mot de passe</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="confirmPassword">
                            <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('confirmPassword')">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Password Strength Indicator -->
                    <div class="mb-3">
                        <label class="form-label">Force du mot de passe</label>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%"></div>
                        </div>
                        <small class="text-muted">Faible</small>
                    </div>
                    
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle me-2"></i>
                        <strong>Conseils de sécurité :</strong>
                        <ul class="mb-0 mt-2">
                            <li>Utilisez un mot de passe unique pour ce compte</li>
                            <li>Mélangez lettres, chiffres et symboles</li>
                            <li>Évitez les informations personnelles</li>
                            <li>Changez votre mot de passe régulièrement</li>
                        </ul>
                    </div>
                    
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary me-2">Annuler</button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-key me-2"></i>Changer le mot de passe
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Recent Login Activity -->
<div class="card shadow mt-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Activité de connexion récente</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Appareil</th>
                        <th>Localisation</th>
                        <th>Adresse IP</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Aujourd'hui 14:30</td>
                        <td>Chrome sur Windows</td>
                        <td>Casablanca, Maroc</td>
                        <td>192.168.1.100</td>
                        <td><span class="badge bg-success">Actuelle</span></td>
                    </tr>
                    <tr>
                        <td>Hier 09:15</td>
                        <td>Safari sur iPhone</td>
                        <td>Casablanca, Maroc</td>
                        <td>192.168.1.101</td>
                        <td><span class="badge bg-secondary">Terminée</span></td>
                    </tr>
                    <tr>
                        <td>15/01/2024 18:45</td>
                        <td>Firefox sur Linux</td>
                        <td>Rabat, Maroc</td>
                        <td>10.0.0.50</td>
                        <td><span class="badge bg-secondary">Terminée</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
function togglePassword(fieldId) {
    const field = document.getElementById(fieldId);
    const button = field.nextElementSibling;
    const icon = button.querySelector('i');
    
    if (field.type === 'password') {
        field.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        field.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
}

// Password strength checker
document.getElementById('newPassword').addEventListener('input', function() {
    const password = this.value;
    const progressBar = document.querySelector('.progress-bar');
    const strengthText = document.querySelector('.progress').nextElementSibling;
    
    let strength = 0;
    let strengthLabel = 'Très faible';
    let colorClass = 'bg-danger';
    
    if (password.length >= 8) strength++;
    if (/[a-z]/.test(password)) strength++;
    if (/[A-Z]/.test(password)) strength++;
    if (/[0-9]/.test(password)) strength++;
    if (/[^A-Za-z0-9]/.test(password)) strength++;
    
    switch (strength) {
        case 0:
        case 1:
            strengthLabel = 'Très faible';
            colorClass = 'bg-danger';
            break;
        case 2:
            strengthLabel = 'Faible';
            colorClass = 'bg-warning';
            break;
        case 3:
            strengthLabel = 'Moyen';
            colorClass = 'bg-info';
            break;
        case 4:
            strengthLabel = 'Fort';
            colorClass = 'bg-success';
            break;
        case 5:
            strengthLabel = 'Très fort';
            colorClass = 'bg-success';
            break;
    }
    
    progressBar.className = `progress-bar ${colorClass}`;
    progressBar.style.width = `${(strength / 5) * 100}%`;
    strengthText.textContent = strengthLabel;
});
</script>
@endpush
