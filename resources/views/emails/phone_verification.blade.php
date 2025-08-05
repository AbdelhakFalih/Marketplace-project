@extends('layouts.email')

@section('title', 'Vérification de numéro de téléphone')
@section('header', 'Vérification de téléphone')

@section('content')
<h2>{{ __('Bonjour') }} {{ $user->name }},</h2>

<p>{{ __('Vôtre address mail est bien verifié dans nôtre application !') }} <strong>{{ config('app.name') }}</strong>.</p>

<p>{{ __('Un conseiller va vous contacter a un certains moment . !') }} <strong>{{ config('app.name') }}</strong>.</p>

<p>{{ __('Vous pouvez maintenez découvrir votre propre espace en se connectant dans nôtre applications  !') }} <strong>{{ config('app.name') }}</strong>.</p>

<p>{{ __('Cordialement,') }}<br>
{{ __('L\'équipe') }} {{ config('app.name') }}</p>
@endsection
