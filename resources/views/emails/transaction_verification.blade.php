@extends('layouts.email')

@section('title', 'Vérification de transaction')
@section('header', 'Vérification de transaction')

@section('content')
<h2>{{ __('Bonjour') }} {{ $user->name }},</h2>

<p>{{ __('Une nouvelle transaction nécessite votre vérification sur') }} <strong>{{ config('app.name') }}</strong>.</p>

<div style="background-color: #f8f9fa; padding: 20px; border-radius: 5px; margin: 20px 0;">
    <h3 style="margin-top: 0; color: #495057;">{{ __('Détails de la transaction') }}</h3>
    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="padding: 8px 0; font-weight: 600;">{{ __('ID Transaction :') }}</td>
            <td style="padding: 8px 0;">#{{ $transaction->id }}</td>
        </tr>
        <tr>
            <td style="padding: 8px 0; font-weight: 600;">{{ __('Type :') }}</td>
            <td style="padding: 8px 0;">{{ $transaction->type }}</td>
        </tr>
        <tr>
            <td style="padding: 8px 0; font-weight: 600;">{{ __('Montant :') }}</td>
            <td style="padding: 8px 0; font-size: 18px; font-weight: 600; color: #28a745;">
                {{ number_format($transaction->amount, 2) }} €
            </td>
        </tr>
        <tr>
            <td style="padding: 8px 0; font-weight: 600;">{{ __('Date :') }}</td>
            <td style="padding: 8px 0;">{{ $transaction->created_at->format('d/m/Y à H:i') }}</td>
        </tr>
        @if($transaction->description)
        <tr>
            <td style="padding: 8px 0; font-weight: 600;">{{ __('Description :') }}</td>
            <td style="padding: 8px 0;">{{ $transaction->description }}</td>
        </tr>
        @endif
    </table>
</div>

<p>{{ __('Pour des raisons de sécurité, veuillez vérifier cette transaction en cliquant sur le bouton ci-dessous :') }}</p>

<div class="text-center">
    <a href="{{ $verificationUrl }}" class="btn btn-success">
        {{ __('Vérifier la transaction') }}
    </a>
</div>

<div class="alert alert-warning">
    <strong>{{ __('Important :') }}</strong> {{ __('Ce lien de vérification expirera dans 2 heures.') }}
</div>

<h3>{{ __('Mesures de sécurité :') }}</h3>
<ul>
    <li>{{ __('Vérifiez toujours l\'URL dans votre navigateur') }}</li>
    <li>{{ __('Ne partagez jamais vos codes de vérification') }}</li>
    <li>{{ __('Contactez-nous en cas de transaction suspecte') }}</li>
</ul>

<p>{{ __('Si le bouton ne fonctionne pas, copiez ce lien :') }}</p>
<p style="word-break: break-all; color: #007bff;">{{ $verificationUrl }}</p>

<hr style="margin: 30px 0; border: none; border-top: 1px solid #e9ecef;">

<p class="text-muted">
    {{ __('Si vous n\'avez pas initié cette transaction, contactez immédiatement notre support.') }}
</p>

<p>{{ __('Cordialement,') }}<br>
{{ __('L\'équipe sécurité') }} {{ config('app.name') }}</p>
@endsection
