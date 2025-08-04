@extends('layouts.email')

@section('title', 'Vérification de numéro de téléphone')
@section('header', 'Vérification de téléphone')

@section('content')
<h2>{{ __('Bonjour') }} {{ $user->name }},</h2>

<p>{{ __('Vous avez demandé la vérification de votre numéro de téléphone sur') }} <strong>{{ config('app.name') }}</strong>.</p>

<div class="alert alert-info text-center">
    <h3 style="margin: 0; font-size: 32px; letter-spacing: 5px; color: #007bff;">
        {{ $verificationCode }}
    </h3>
    <p style="margin: 10px 0 0 0;">{{ __('Code de vérification') }}</p>
</div>

<p>{{ __('Saisissez ce code dans l\'application pour vérifier votre numéro de téléphone :') }}</p>
<p><strong>{{ $phoneNumber }}</strong></p>

<div class="alert alert-warning">
    <strong>{{ __('Attention :') }}</strong> {{ __('Ce code expirera dans 10 minutes pour des raisons de sécurité.') }}
</div>

<h3>{{ __('Instructions :') }}</h3>
<ol>
    <li>{{ __('Retournez sur') }} {{ config('app.name') }}</li>
    <li>{{ __('Accédez à la page de vérification de téléphone') }}</li>
    <li>{{ __('Saisissez le code à 6 chiffres ci-dessus') }}</li>
    <li>{{ __('Cliquez sur "Vérifier"') }}</li>
</ol>

<hr style="margin: 30px 0; border: none; border-top: 1px solid #e9ecef;">

<p class="text-muted">
    {{ __('Si vous n\'avez pas demandé cette vérification, veuillez ignorer cet email ou contactez notre support.') }}
</p>

<p>{{ __('Cordialement,') }}<br>
{{ __('L\'équipe') }} {{ config('app.name') }}</p>
@endsection
