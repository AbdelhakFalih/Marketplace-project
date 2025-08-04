@extends('layouts.email')

@section('title', 'Confirmation de transaction')
@section('header', 'Transaction confirmée')

@section('content')
<h2>{{ __('Bonjour') }} {{ $user->name }},</h2>

<div class="alert alert-success text-center">
    <h3 style="margin: 0; color: #155724;">
        ✅ {{ __('Transaction confirmée avec succès !') }}
    </h3>
</div>

<p>{{ __('Votre transaction a été traitée et confirmée sur') }} <strong>{{ config('app.name') }}</strong>.</p>

<div style="background-color: #f8f9fa; padding: 20px; border-radius: 5px; margin: 20px 0;">
    <h3 style="margin-top: 0; color: #495057;">{{ __('Récapitulatif de la transaction') }}</h3>
    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="padding: 8px 0; font-weight: 600;">{{ __('ID Transaction :') }}</td>
            <td style="padding: 8px 0;">#{{ $transaction->id }}</td>
        </tr>
        <tr>
            <td style="padding: 8px 0; font-weight: 600;">{{ __('Statut :') }}</td>
            <td style="padding: 8px 0;">
                <span style="background-color: #28a745; color: white; padding: 4px 8px; border-radius: 3px; font-size: 12px;">
                    {{ __('CONFIRMÉE') }}
                </span>
            </td>
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
            <td style="padding: 8px 0; font-weight: 600;">{{ __('Date de création :') }}</td>
            <td style="padding: 8px 0;">{{ $transaction->created_at->format('d/m/Y à H:i') }}</td>
        </tr>
        <tr>
            <td style="padding: 8px 0; font-weight: 600;">{{ __('Date de confirmation :') }}</td>
            <td style="padding: 8px 0;">{{ now()->format('d/m/Y à H:i') }}</td>
        </tr>
        @if($transaction->reference)
        <tr>
            <td style="padding: 8px 0; font-weight: 600;">{{ __('Référence :') }}</td>
            <td style="padding: 8px 0;">{{ $transaction->reference }}</td>
        </tr>
        @endif
    </table>
</div>

@if($transaction->type === 'purchase')
<div style="background-color: #e7f3ff; padding: 15px; border-radius: 5px; margin: 20px 0;">
    <h4 style="margin-top: 0; color: #0066cc;">{{ __('Prochaines étapes') }}</h4>
    <ul style="margin-bottom: 0;">
        <li>{{ __('Vous recevrez bientôt les détails de livraison') }}</li>
        <li>{{ __('Un email de suivi vous sera envoyé') }}</li>
        <li>{{ __('Vous pouvez suivre votre commande dans votre espace utilisateur') }}</li>
    </ul>
</div>
@endif

<div class="text-center mt-3">
    <a href="{{ route('user.transactions.show', $transaction->id) }}" class="btn">
        {{ __('Voir les détails') }}
    </a>
</div>

<h3>{{ __('Besoin d\'aide ?') }}</h3>
<p>{{ __('Si vous avez des questions concernant cette transaction :') }}</p>
<ul>
    <li>{{ __('Consultez notre') }} <a href="{{ route('faq') }}">{{ __('FAQ') }}</a></li>
    <li>{{ __('Contactez notre support à') }} <a href="mailto:{{ config('mail.support_email') }}">{{ config('mail.support_email') }}</a></li>
    <li>{{ __('Appelez-nous au') }} {{ config('app.phone', '01 23 45 67 89') }}</li>
</ul>

<hr style="margin: 30px 0; border: none; border-top: 1px solid #e9ecef;">

<p>{{ __('Merci de votre confiance !') }}</p>

<p>{{ __('Cordialement,') }}<br>
{{ __('L\'équipe') }} {{ config('app.name') }}</p>
@endsection
