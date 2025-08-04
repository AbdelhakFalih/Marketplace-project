@extends('layouts.email')

@section('title', 'Vérification d\'adresse email')
@section('header', 'Vérification d\'adresse email')

@section('content')
<h2>{{ __('Bonjour') }} {{ $user->name }},</h2>

<p>{{ __('Merci de vous être inscrit sur') }} <strong>{{ config('app.name') }}</strong> !</p>

<p>{{ __('Pour finaliser votre inscription et sécuriser votre compte, veuillez vérifier votre adresse email en cliquant sur le bouton ci-dessous :') }}</p>

<div class="text-center">
    <a href="{{ $verificationUrl }}" class="btn">
        {{ __('Vérifier mon adresse email') }}
    </a>
</div>

<div class="alert alert-info">
    <strong>{{ __('Important :') }}</strong> {{ __('Ce lien de vérification expirera dans 24 heures.') }}
</div>

<p>{{ __('Si le bouton ne fonctionne pas, vous pouvez copier et coller le lien suivant dans votre navigateur :') }}</p>
<p style="word-break: break-all; color: #007bff;">{{ $verificationUrl }}</p>

<hr style="margin: 30px 0; border: none; border-top: 1px solid #e9ecef;">

<p class="text-muted">
    {{ __('Si vous n\'avez pas créé de compte sur') }} {{ config('app.name') }}, {{ __('vous pouvez ignorer cet email.') }}
</p>

<p>{{ __('Cordialement,') }}<br>
{{ __('L\'équipe') }} {{ config('app.name') }}</p>
@endsection
