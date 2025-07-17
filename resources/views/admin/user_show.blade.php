
@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Détails de l'utilisateur</h2>
    <div class="card mx-auto" style="max-width: 500px;">
        <img src="{{ asset('images/user.png') }}" class="card-img-top" alt="{{ $user->name }}" style="height: 150px; object-fit: cover;">
        <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <p class="card-text"><strong>Email :</strong> {{ $user->email }}</p>
            <p class="card-text"><strong>Rôle :</strong> {{ $user->role }}</p>
            <p class="card-text"><strong>Créé le :</strong> {{ $user->created_at->format('d/m/Y H:i') }}</p>
            <a href="{{ route('admin.users') }}" class="btn btn-secondary mt-3">Retour à la liste</a>
            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mt-3" onclick="return confirm('Voulez-vous vraiment supprimer cet utilisateur ?');">Supprimer</button>
            </form>
        </div>
    </div>
</div>