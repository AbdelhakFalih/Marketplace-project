@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        @if($user)
            <div class="card mx-auto" style="max-width: 500px;">
                <img src="{{ asset('images/user.png') }}" class="card-img-top" alt="{{ $user->name ?? $user->nom ?? 'Utilisateur inconnu' }}" style="height: 150px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name ?? $user->nom ?? 'Utilisateur inconnu' }}</h5>
                    <p class="card-text"><strong>Email :</strong> {{ $user->email ?? 'Non disponible' }}</p>
                    <p class="card-text"><strong>Rôle :</strong> {{ $user->role ?? 'Non défini' }}</p>
                    <a href="{{ route('admin.User_Management') }}" class="btn btn-secondary mt-3">Retour à la liste</a>
                    <a href="{{ route('admin.formedit', ['id' => $user->id]) }}" class="btn btn-warning mt-3 ms-2" data-i18n="edit">Modifier</a>
                    <a class="btn btn-danger" data-i18n="delete" onclick="return confirm('Voulez-vous vraiment supprimer cet utilisateur ?');" href="/admin/DeleteUser?id={{ $user->id }}">Supprimer</a>
                </div>
                </div>
            </div>
        @else
            <div class="alert alert-warning text-center" role="alert">
                Aucun utilisateur trouvé. <a href="{{ route('admin.User_Management') }}" class="alert-link">Retour à la liste</a>
            </div>
        @endif
    </div>
@endsection
