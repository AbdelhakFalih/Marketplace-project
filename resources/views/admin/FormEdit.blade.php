{{-- filepath: resources/views/admin/FormEdit.blade.php --}}
@extends('layouts.admin')

@section('content')
<div class="container py-5">
    @include('partials.Components', ['compo' => 'sidebar admin'])
    <div class="card mx-auto" style="max-width: 500px;">
        <div class="card-body">
            <h5 class="card-title">Modifier l'utilisateur</h5>
            <form action="{{ route('admin.updateUser') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="{{ $user->name ?? $user->nom }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" value="{{ $user->password }}">
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Rôle</label>
                    <select class="form-select" id="role" name="role">
                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="cooperative" {{ $user->role == 'cooperative' ? 'selected' : '' }}>Coopérative</option>
                        <option value="commercant" {{ $user->role == 'commercant' ? 'selected' : '' }}>Commerçant</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Enregistrer</button>
                <a href="{{ route('admin.User_Management') }}" class="btn btn-secondary">Annuler</a>
            </form>
        </div>
    </div>
</div>
@endsection
