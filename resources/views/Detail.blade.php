<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ $user_data->name }} – {{ __('header') }}</title>
</head>
<body>
<div class="full-width-card">
    <div class="card w-100" style="max-width: 1000px;">
        <div class="card-header">
            <h2 data-i18n="profile">Profil de {{ $user_data->name }}</h2>
        </div>
        <div class="row g-0">
            <div class="col-md-6">
                <img src="{{ asset('images/user.png') }}" class="card-img-left img-fluid" alt="{{ $user_data->name }}">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong data-i18n="fullName">Nom :</strong> {{ $user_data->name }}</li>
                        <li class="list-group-item"><strong data-i18n="email">Email :</strong> {{ $user_data->email }}</li>
                        <li class="list-group-item"><strong data-i18n="role">Rôle :</strong> {{ $user_data->role }}</li>
                        <li class="list-group-item"><strong data-i18n="password">Mot de passe :</strong> {{ $user_data->password ?? __('notAvailable') }}</li>
                        <li class="list-group-item"><strong data-i18n="registrationDate">Date d'Inscription :</strong> {{ $user_data->created_at }}</li>
                        <li class="list-group-item"><strong data-i18n="lastModified">Dernière modification :</strong> {{ $user_data->updated_at }}</li>
                    </ul>
                    <div class="password-warning" data-i18n="passwordWarning">
                        * Affichage du mot de passe à des fins de démonstration uniquement. Ne pas utiliser en production.
                    </div>
                    <div class="card-footer text-center mt-3">
                        <a href="#" class="btn btn-secondary" onclick="window.history.back(); return false;" data-i18n="back">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
