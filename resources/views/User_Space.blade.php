<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@if(isset($role))
            {{ ucfirst($role) }} {{ __('userDashboard') }}
        @else
            {{ __('adminDashboard') }}
        @endif</title>
</head>
<body>
<header>
    @include('partials.Components', ['compo' => 'Menu User-space'])
</header>

@if($role == 'admin')
    <div class="dashboard">
        @include('partials/Components', ['compo' => 'sidebar admin'])
        <div class="dashboard-content">
            <div class="container">
                <h2 class="section-title" data-i18n="accountManagement">Gestion des Comptes</h2>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-3">
                    @foreach($users as $user)
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('images/user.png') }}" class="card-img-top" alt="{{ $user->name }}"
                                     style="height: 150px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $user->name }}</h5>
                                    <p class="card-text" data-i18n="roleLabel">Rôle : {{ $user->role }}</p>
                                    <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-primary"
                                       data-i18n="viewDetails">Voir Détails</a>
                                    <button type="button" class="btn btn-danger" data-i18n="delete"
                                            onclick="deleteUser({{ $user->id }}, this)">Supprimer</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="container mt-5">
                <h2 class="section-title" data-i18n="offerManagement">Gestion des Offres</h2>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-3">
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('images/panier.png') }}" class="card-img-top" alt="Offre 1"
                                 style="height: 150px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">Offre 1</h5>
                                <p class="card-text">Description de l'offre 1</p>
                                <a href="#" class="btn btn-primary" data-i18n="viewDetails">Voir Détails</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@elseif($role == 'cooperative' || $role == 'commerçant')
    <div class="dashboard">
        @include('partials/Components', ['compo' => 'sidebar'])
        <div class="dashboard-content">
            <section class="dashboard">
                <h2 data-i18n="activitySummary">Résumé de votre activité</h2>
                <div class="stats-grid">
                    <div class="stat-card">
                        <h3 data-i18n="publishedOffers">Offres publiées</h3>
                        <p>5</p>
                    </div>
                    <div class="stat-card">
                        <h3 data-i18n="sentRequests">Demandes envoyées</h3>
                        <p>3</p>
                    </div>
                    <div class="stat-card">
                        <h3 data-i18n="notifications">Notifications</h3>
                        <p>7</p>
                    </div>
                    <div class="stat-card">
                        <h3 data-i18n="earnedPoints">Points gagnés</h3>
                        <p>120</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
@else
    <div class="container mt-5 text-center">
        @include('partials.Components', ['compo' => 'Errors_Page'], ['msg' => __('loginRequired')])
    </div>
@endif

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel" data-i18n="loginRequiredModal">Connexion Requise</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p data-i18n="loginPrompt">Veuillez vous connecter pour accéder au contenu.</p>
                <a href="{{ route('login') }}" class="btn btn-success" data-i18n="login">Se connecter</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var loginFailed = {{ isset($loginFailed) && $loginFailed ? 'true' : 'false' }};
        if (loginFailed) {
            var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
            loginModal.show();
        }
    });

    function deleteUser(userId, btn) {
        if(confirm('Voulez-vous vraiment supprimer cet utilisateur ?')) {
            fetch("{{ url('/admin/users') }}/" + userId, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                if(response.ok) {
                    // Supprime la carte utilisateur du DOM
                    btn.closest('.col').remove();
                } else {
                    alert('Erreur lors de la suppression.');
                }
            });
        }
    }
</script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
