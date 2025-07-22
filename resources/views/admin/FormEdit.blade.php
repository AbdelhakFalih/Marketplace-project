@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        <div class="card mx-auto" style="max-width: 500px;">
            <div class="card-body">
                <h5 class="card-title" data-i18n="editUser">Modifier l'utilisateur</h5>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/admin/UpdateUser" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id ?? '' }}">
                    <div class="mb-3">
                        <label for="nom" class="form-label" data-i18n="nameLabel">Nom</label>
                        <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{ old('nom', $user->name ?? $user->nom ?? '') }}" required>
                        @error('nom')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label" data-i18n="emailLabel">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email ?? '') }}" required>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label" data-i18n="passwordLabel">Mot de passe</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="">
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="text-muted" data-i18n="passwordNote">Laissez vide pour ne pas modifier le mot de passe.</small>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label" data-i18n="roleLabel">Rôle</label>
                        <select class="form-select @error('role') is-invalid @enderror" id="role" name="role">
                            <option value="admin" {{ old('role', $user->role ?? '') == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="cooperative" {{ old('role', $user->role ?? '') == 'cooperative' ? 'selected' : '' }}>Coopérative</option>
                            <option value="commercant" {{ old('role', $user->role ?? '') == 'commercant' ? 'selected' : '' }}>Commerçant</option>
                        </select>
                        @error('role')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-success" data-i18n="save">Enregistrer</button>
                        <a href="{{ route('admin.User_Management') }}" class="btn btn-secondary" data-i18n="cancel">Annuler</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
