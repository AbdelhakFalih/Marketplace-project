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
        <div class="card">
            <div class="card-header">{{ __('Détails de l\'offre') }}</div>
            <div class="card-body">
                <h3>{{ $offer->name }}</h3>
                <p><strong>{{ __('Coopérative') }}:</strong> {{ $offer->user->name }}</p>
                <p><strong>{{ __('Localité') }}:</strong> {{ $offer->user->location }}</p>
                <p><strong>{{ __('Type') }}:</strong> {{ $offer->type }}</p>
                <p><strong>{{ __('Prix') }}:</strong> {{ $offer->price }} MAD</p>
                <p><strong>{{ __('Fiche technique') }}:</strong> <a href="{{ asset('storage/' . $offer->technical_sheet) }}" target="_blank">{{ __('Télécharger PDF') }}</a></p>
                <p><strong>{{ __('Flyer') }}:</strong> <a href="{{ asset('storage/' . $offer->flyer) }}" target="_blank">{{ __('Voir le flyer') }}</a></p>
                <p><strong>{{ __('Conditions de livraison') }}:</strong> {{ $offer->delivery_conditions }}</p>
                @if($offer->store1_city)
                    <p><strong>{{ __('Magasin 1') }}:</strong> {{ $offer->store1_city }}</p>
                @endif
                @if($offer->store2_city)
                    <p><strong>{{ __('Magasin 2') }}:</strong> {{ $offer->store2_city }}</p>
                @endif
                <p><strong>{{ __('Réseaux sociaux') }}:</strong></p>
                <ul>
                    <li><a href="{{ $offer->user->facebook_url ?? '#' }}" target="_blank">{{ __('Facebook') }}</a></li>
                    <li><a href="{{ $offer->user->instagram_url ?? '#' }}" target="_blank">{{ __('Instagram') }}</a></li>
                    <li><a href="{{ $offer->user->x_url ?? '#' }}" target="_blank">{{ __('X') }}</a></li>
                </ul>
                <form action="{{ route('offers.interest', $offer->id) }}" method="POST" style="margin-top: 20px;">
                    @csrf
                    <label>
                        <input type="checkbox" name="interet" required>
                        {{ __('Je suis intéressé par ce produit') }}
                    </label><br>
                    <button type="submit" class="btn btn-primary mt-2">{{ __('Manifester mon intérêt') }}</button>
                </form>
                <a href="{{ route('user.home') }}" class="btn btn-secondary mt-2">{{ __('Retour à la recherche') }}</a>
            </div>
        </div>
    </div>
@endsection
