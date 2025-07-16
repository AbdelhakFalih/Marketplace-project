@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Transaction Details') }}</div>
        <div class="card-body">
            <p>{{ __('Date') }}: {{ $transaction->created_at->format('d/m/Y') }}</p>
            <p>{{ __('Product') }}: {{ $transaction->offer->name }}</p>
            <p>{{ __('Amount') }}: {{ $transaction->offer->price }} MAD</p>
            <p>{{ __('Fees') }}: {{ $transaction->commission ?? 0 }} MAD</p>
            <p>{{ __('Status') }}: {{ __($transaction->status) }}</p>
            <a href="{{ route('transactions.index') }}" class="btn btn-secondary">{{ __('Back to Transactions') }}</a>
        </div>
    </div>
</div>
@endsection
