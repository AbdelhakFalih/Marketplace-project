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
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">{{ __('Détails de la demande') }}</h5>
            </div>
            <div class="card-body">
                <h5>{{ $demand->name }}</h5>
                <p><strong>{{ __('Type') }}:</strong> {{ __($demand->type) }}</p>
                <p><strong>{{ __('Description') }}:</strong> {{ $demand->description }}</p>
                <p><strong>{{ __('Ville') }}:</strong> {{ $demand->city }}</p>
                <p><strong>{{ __('Délai') }}:</strong> {{ $demand->deadline ?? __('N/A') }}</p>
                @if(auth()->id() !== $demand->user_id)
                    <form action="{{ route('demands.respond', $demand->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">{{ __('Répondre à la demande') }}</button>
                    </form>
                @endif
                <a href="{{ route('user.demands') }}" class="btn btn-secondary mt-3">{{ __('Retour aux demandes') }}</a>
            </div>
        </div>
    </div>
    <style>
        [dir="rtl"] .card-body,
        [dir="rtl"] .card-header {
            text-align: right;
        }
    </style>
@endsection
