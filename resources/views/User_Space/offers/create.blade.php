@extends('layouts.user')

@section('header')
    <header>
        @include('partials.Components', ['compo' => 'sidebar', 'user_id' => auth()->id()])
    </header>
@endsection

@section('content')
    @php
        $lang = app()->getLocale();
        $dir = $lang === 'ar' ? 'rtl' : 'ltr';
    @endphp
    <div class="container mt-5" dir="{{ $dir }}">
        <h1>{{ __('Ajouter une offre') }}</h1>
        <form action="{{ route('user.post-offer') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
            <div class="mb-3">
                <label for="name" class="form-label">{{ __('Nom du produit') }}</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">{{ __('Type') }}</label>
                <input type="text" class="form-control" id="type" name="type" required>
            </div>
            <div class="mb-3">
                <label for="technical_sheet" class="form-label">{{ __('Fiche technique') }}</label>
                <textarea class="form-control" id="technical_sheet" name="technical_sheet" required></textarea>
            </div>
            <div class="mb-3">
                <label for="flyer" class="form-label">{{ __('Flyer') }}</label>
                <input type="file" class="form-control" id="flyer" name="flyer" accept=".jpg,.png,.pdf">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">{{ __('Prix (MAD)') }}</label>
                <input type="number" class="form-control" id="price" name="price" min="0" step="0.01" required>
            </div>
            <div class="mb-3">
                <label for="delivery_conditions" class="form-label">{{ __('Conditions de livraison') }}</label>
                <select class="form-control" id="delivery_conditions" name="delivery_conditions" required>
                    <option value="home">{{ __('À domicile') }}</option>
                    <option value="store1">{{ __('Magasin 1') }}</option>
                    <option value="store2">{{ __('Magasin 2') }}</option>
                    <option value="cooperative">{{ __('Local de la coopérative') }}</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="store1_city" class="form-label">{{ __('Ville magasin 1') }}</label>
                <input type="text" class="form-control" id="store1_city" name="store1_city">
            </div>
            <div class="mb-3">
                <label for="store2_city" class="form-label">{{ __('Ville magasin 2') }}</label>
                <input type="text" class="form-control" id="store2_city" name="store2_city">
            </div>
            <button type="submit" class="btn btn-primary">{{ __('Publier') }}</button>
        </form>
    </div>
@endsection
