@extends('layouts.user')
@section('header')
    <header>
        @include('partials.Components', ['compo' => 'sidebar', 'user_id' => auth()->id()])
    </header>
@endsection
@section('content')
    <div class="container mt-5">
        <section class="edit-profile">
            <h2 data-i18n="editProfile">{{ __('Modifier le profil') }}</h2><br>
            <form action="{{ route('user.updateProfile') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label style="font-size: 1.25rem;"> <span data-i18n="name">{{ __('Nom') }}</span> </label>
                    <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" required style="width: 100%;"><br>
                </div>
                <div class="mb-3">
                    <label style="font-size: 1.25rem;"><span data-i18n="email">{{ __('Email') }}</span> : </label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required style="width: 100%;"><br>
                </div>
                <div class="mb-3">
                    <label style="font-size: 1.25rem;"> <span data-i18n="phone">{{ __('Rôle') }}  </label>
                    <input type="text" name="role" value="{{ old('phone', $user->role) }}" class="form-control" style="width: 100%;"> <br>
                </div>
                <div>
                    <input type="submit" value="enregistrer" class="btn btn-outline-primary btn-block">
                    <input type="submit" value="annuler" class="btn btn-outline-secondary btn-block">
                </div>
            </form>
        </section>
    </div>
@endsection
