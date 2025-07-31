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
        @if($page === "My offers")
            <h1>{{ __('Mes offres') }}</h1>
            @if($offers->isEmpty())
                <div class="alert alert-warning">
                    <h3>{{ __('Vous n\'avez encore publié aucune offre.') }}</h3>
                </div>
            @else
                <div class="row">
                    @foreach($offers as $offer)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-header bg-success text-white">
                                    <h5 class="card-title mb-0">{{ $offer->name }} ({{ $offer->type }})</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text"><strong>{{ __('Prix') }}:</strong> {{ $offer->price }} MAD</p>
                                    <p class="card-text"><strong>{{ __('Livraison') }}:</strong> {{ __($offer->delivery_conditions) }}</p>
                                    @if($offer->store1_city)
                                        <p class="card-text"><strong>{{ __('Magasin 1') }}:</strong> {{ $offer->store1_city }}</p>
                                    @endif
                                    @if($offer->store2_city)
                                        <p class="card-text"><strong>{{ __('Magasin 2') }}:</strong> {{ $offer->store2_city }}</p>
                                    @endif
                                    @if($offer->interest_count)
                                        <p class="card-text"><strong>{{ __('Intérêts') }}:</strong> {{ $offer->interest_count }}</p>
                                    @endif
                                </div>
                                <div class="card-footer">
                                    <a href="{{ route('offers.show', $offer->id) }}" class="btn btn-primary btn-sm">{{ __('Détails') }}</a>
                                    @if(auth()->id() === $offer->user_id)
                                        <a href="{{ route('offers.edit', $offer->id) }}" class="btn btn-warning btn-sm">{{ __('Modifier') }}</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        @elseif($page === "User Home")
            <h1>{{ __('Découvrir plus d\'offres') }}</h1>
            @if($offers->isEmpty())
                <div class="alert alert-warning">
                    <h3>{{ __('Aucune offre disponible pour le moment.') }}</h3>
                </div>
            @else
                <div class="row">
                    @foreach($offers as $offer)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-header bg-success text-white">
                                    <h5 class="card-title mb-0">{{ $offer->name }} ({{ $offer->type }})</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text"><strong>{{ __('Prix') }}:</strong> {{ $offer->price }} MAD</p>
                                    <p class="card-text"><strong>{{ __('Livraison') }}:</strong> {{ __($offer->delivery_conditions) }}</p>
                                    @if($offer->store1_city)
                                        <p class="card-text"><strong>{{ __('Magasin 1') }}:</strong> {{ $offer->store1_city }}</p>
                                    @endif
                                    @if($offer->store2_city)
                                        <p class="card-text"><strong>{{ __('Magasin 2') }}:</strong> {{ $offer->store2_city }}</p>
                                    @endif
                                    @if($offer->interest_count)
                                        <p class="card-text"><strong>{{ __('Intérêts') }}:</strong> {{ $offer->interest_count }}</p>
                                    @endif
                                </div>
                                <div class="card-footer">
                                    <a href="{{ route('offers.show', $offer->id) }}" class="btn btn-primary btn-sm">{{ __('Détails') }}</a>
                                    @if(auth()->id() === $offer->user_id)
                                        <a href="{{ route('offers.edit', $offer->id) }}" class="btn btn-warning btn-sm">{{ __('Modifier') }}</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        @else
            <div class="text-center">
                <div class="alert alert-danger">
                    <h1 class="display-4" data-i18n="errorOops">{{ __('Oops!') }}</h1>
                    <h3>{{ __('Erreur : Vous n\'avez encore publié aucune offre !') }}</h3>
                </div>
                <a href="{{ route('user.home') }}" class="btn btn-primary mt-3" data-i18n="backHome">{{ __('Retour à l\'accueil') }}</a>
            </div>
        @endif
        <p><strong>{{ __('Réseaux sociaux') }}:</strong></p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="{{ auth()->check() ? auth()->user()->facebook_url ?? '#' : '#' }}" target="_blank">{{ __('Facebook') }}</a></li>
            <li class="list-inline-item"><a href="{{ auth()->check() ? auth()->user()->instagram_url ?? '#' : '#' }}" target="_blank">{{ __('Instagram') }}</a></li>
            <li class="list-inline-item"><a href="{{ auth()->check() ? auth()->user()->x_url ?? '#' : '#' }}" target="_blank">{{ __('X') }}</a></li>
        </ul>
    </div>
@endsection

@section('styles')
    <style>
        .card {
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        [dir="rtl"] .card-title {
            text-align: right;
        }
        [dir="rtl"] .card-text {
            text-align: right;
        }
        [dir="rtl"] .card-footer {
            text-align: right;
        }
        .list-inline-item:not(:last-child) {
            margin-right: {{ $lang === 'ar' ? '0' : '1rem' }};
            margin-left: {{ $lang === 'ar' ? '1rem' : '0' }};
        }
    </style>
@endsection
