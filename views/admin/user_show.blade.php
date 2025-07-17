@extends('layouts.admin')

@section('content')
    <div class="container py-5">
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
                                    <a href="{{ route('admin.users_show', ['locale' => app()->getLocale(), 'id' => $user->id]) }}" class="btn btn-primary"
                                       data-i18n="viewDetails">Voir Détails</a>
                                    <button type="button" class="btn btn-danger" data-i18n="delete"
                                            onclick="deleteUser({{ $user->id }}, this)">Supprimer</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
