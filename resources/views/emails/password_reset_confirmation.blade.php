@extends('layouts.email')

@section('title', 'Mot de passe modifié')
@section('header', 'Mot de passe modifié')

@section('content')
<h2>{{ __('Bonjour') }} {{ $user->name }},</h2>

<div class="alert alert-success text-center">
    <h3 style="margin: 0; color: #155724;">
        ✅ {{ __('Votre mot de passe a été modifié avec succès !') }}
    </h3>
</div>

<p>{{ __('Votre mot de passe a été mis à jour sur') }} <strong>{{ config('app.name') }}</strong> {{ __('le') }} <strong>{{ now()->format('d/m/Y à H:i:s') }}</strong>.</p>

<div style="background-color: #f8f9fa; padding: 20px; border-radius: 5px; margin: 20px 0;">
    <h3 style="margin-top: 0; color: #495057;">{{ __('Détails de la modification') }}</h3>
    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="padding: 8px 0; font-weight: 600;">{{ __('Compte :') }}</td>
            <td style="padding: 8px 0;">{{ $user->email }}</td>
        </tr>
        <tr>
            <td style="padding: 8px 0; font-weight: 600;">{{ __('Date :') }}</td>
            <td style="padding: 8px 0;">{{ now()->format('d/m/Y à H:i:s') }}</td>
        </tr>
        <tr>
            <td style="padding: 8px 0; font-weight: 600;">{{ __('Adresse IP :') }}</td>
            <td style="padding: 8px 0;">{{ request()->ip() }}</td>
        </tr>
        <tr>
            <td style="padding: 8px 0; font-weight: 600;">{{ __('Navigateur :') }}</td>
            <td style="padding: 8px 0;">{{ request()->userAgent() }}</td>
        </tr>
    </table>
</div>

<p>{{ __('Votre compte est maintenant sécurisé avec votre nouveau mot de passe.') }}</p>

<div class="text-center">
    <a href="{{ route('login') }}" class="btn">
        {{ __('Se connecter') }}
    </a>
</div>

<h3>{{ __('Recommandations de sécurité') }}</h3>
<ul>
    <li>{{ __('Déconnectez-vous de tous vos appareils et reconnectez-vous') }}</li>
    <li>{{ __('Vérifiez l\'activité récente de votre compte') }}</li>
    <li>{{ __('Activez l\'authentification à deux facteurs si disponible') }}</li>
    <li>{{ __('Ne partagez jamais votre mot de passe') }}</li>
</ul>

<div class="alert alert-warning">
    <strong>{{ __('Vous n\'avez pas modifié votre mot de passe ?') }}</strong><br>
    {{ __('Si vous n\'êtes pas à l\'origine de cette modification, votre compte pourrait être compromis. Contactez immédiatement notre équipe de sécurité.') }}
</div>

<div class="text-center">
    <a href="mailto:{{ config('mail.security_email', 'security@example.com') }}" class="btn" style="background-color: #dc3545;">
        {{ __('Signaler un problème de sécurité') }}
    </a>
</div>

<hr style="margin: 30px 0; border: none; border-top: 1px solid #e9ecef;">

<p>{{ __('Si vous avez des questions, n\'hésitez pas à nous contacter :') }}</p>
<ul>
    <li>{{ __('Email :') }} <a href="mailto:{{ config('mail.support_email') }}">{{ config('mail.support_email') }}</a></li>
    <li>{{ __('Téléphone :') }} {{ config('app.phone', '01 23 45 67 89') }}</li>
    <li>{{ __('Support en ligne :') }} <a href="{{ route('support') }}">{{ __('Centre d\'aide') }}</a></li>
</ul>

<p>{{ __('Cordialement,') }}<br>
{{ __('L\'équipe sécurité') }} {{ config('app.name') }}</p>
@endsection
