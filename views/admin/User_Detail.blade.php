@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        @include('partials.Components', ['compo' => 'sidebar admin'])
        @if($user)
            <div class="card mx-auto" style="max-width: 500px;">
                <img src="{{ asset('images/user.png') }}" class="card-img-top" alt="{{ $user->name ?? $user->nom ?? 'Utilisateur inconnu' }}" style="height: 150px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name ?? $user->nom ?? 'Utilisateur inconnu' }}</h5>
                    <p class="card-text"><strong>Email :</strong> {{ $user->email ?? 'Non disponible' }}</p>
                    <p class="card-text"><strong>Rôle :</strong> {{ $user->role ?? 'Non défini' }}</p>
                    <a href="{{ route('admin.User_Management', ['locale' => app()->getLocale()]) }}" class="btn btn-secondary mt-3">Retour à la liste</a>
                    <form action="{{ route('admin.users.destroy', ['locale' => app()->getLocale(), 'id' => $user->id ?? '']) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mt-3" onclick="return confirm('Voulez-vous vraiment supprimer cet utilisateur ?');">Supprimer</button>
                    </form>
                </div>
            </div>
        @else
            <div class="alert alert-warning" role="alert">
                Aucun utilisateur trouvé. <a href="{{ route('admin.User_Management', ['locale' => app()->getLocale()]) }}" class="alert-link">Retour à la liste</a>
            </div>
        @endif
    </div>
@endsection
