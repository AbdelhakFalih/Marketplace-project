@extends('layouts.email')

@section('title', 'Réinitialisation de mot de passe')
@section('header', 'Réinitialisation de mot de passe')

@section('content')
<h2>{{ __('Bonjour') }} {{ $user->name }},</h2>

<p>{{ __('Vous avez demandé la réinitialisation de votre mot de passe sur') }} <strong>{{ config('app.name') }}</strong>.</p>

<p>{{ __('Pour créer un nouveau mot de passe, cliquez sur le bouton ci-dessous :') }}</p>

<div class="text-center">
    <a href="{{ $resetUrl }}" class="btn btn-warning">
        {{ __('Réinitialiser mon mot de passe') }}
    </a>
</div>

<div class="alert alert-warning">
    <strong>{{ __('Important :') }}</strong> {{ __('Ce lien expirera dans 60 minutes pour des raisons de sécurité.') }}
</div>

<h3>{{ __('Conseils de sécurité :') }}</h3>
<ul>
    <li>{{ __('Choisissez un mot de passe fort (au moins 8 caractères)') }}</li>
    <li>{{ __('Utilisez une combinaison de lettres, chiffres et symboles') }}</li>
    <li>{{ __('Ne réutilisez pas un ancien mot de passe') }}</li>
    <li>{{ __('Ne partagez jamais votre mot de passe') }}</li>
</ul>

<p>{{ __('Si le bouton ne fonctionne pas, vous pouvez copier et coller le lien suivant dans votre navigateur :') }}</p>
<p style="word-break: break-all; color: #007bff;">{{ $resetUrl }}</p>

<div style="background-color: #fff3cd; padding: 15px; border-radius: 5px; margin: 20px 0; border: 1px solid #ffeaa7;">
    <h4 style="margin-top: 0; color: #856404;">{{ __('Informations de sécurité') }}</h4>
    <p style="margin-bottom: 0; color: #856404;">
        {{ __('Cette demande a été effectuée depuis l\'adresse IP :') }} <strong>{{ request()->ip() }}</strong><br>
        {{ __('Date et heure :') }} <strong>{{ now()->format('d/m/Y à H:i:s') }}</strong>
    </p>
</div>

<hr style="margin: 30px 0; border: none; border-top: 1px solid #e9ecef;">

<p class="text-muted">
    {{ __('Si vous n\'avez pas demandé cette réinitialisation, vous pouvez ignorer cet email. Votre mot de passe actuel reste inchangé.') }}
</p>

<p class="text-muted">
    {{ __('Pour toute question de sécurité, contactez-nous immédiatement à') }} 
    <a href="mailto:{{ config('mail.security_email', 'security@example.com') }}">
        {{ config('mail.security_email', 'security@example.com') }}
    </a>
</p>

<p>{{ __('Cordialement,') }}<br>
{{ __('L\'équipe sécurité') }} {{ config('app.name') }}</p>
@endsection
