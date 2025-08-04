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
        <h1>{{ __('Mes demandes') }}</h1>
        @if($demands->isEmpty())
            <div class="alert alert-warning">
                <h3>{{ __('Vous n\'avez encore publié aucune demande.') }}</h3>
            </div>
        @else
            <div class="row">
                @foreach($demands as $demand)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-success text-white">
                                <h5 class="mb-0">{{ $demand->name }}</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><strong>{{ __('Type') }}:</strong> {{ __($demand->type) }}</p>
                                <p class="card-text"><strong>{{ __('Ville') }}:</strong> {{ $demand->city }}</p>
                                <p class="card-text"><strong>{{ __('Délai') }}:</strong> {{ $demand->deadline ?? __('N/A') }}</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('demands.show', $demand->id) }}" class="btn btn-primary btn-sm">{{ __('Détails') }}</a>
                                <a href="{{ route('demands.edit', $demand->id) }}" class="btn btn-warning btn-sm">{{ __('Modifier') }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        <a href="{{ route('user.create-demand',[ 'id' => auth()->id() ]) }}" class="btn btn-success mt-3">{{ __('Créer une demande') }}</a>
        <a href="{{ route('user.home') }}" class="btn btn-secondary mt-3">{{ __('Retour au tableau de bord') }}</a>
    </div>
    <style>
        .card:hover {
            transform: translateY(-5px);
            transition: transform 0.2s;
        }
        [dir="rtl"] .card-title,
        [dir="rtl"] .card-text,
        [dir="rtl"] .card-footer {
            text-align: right;
        }
    </style>
@endsection
