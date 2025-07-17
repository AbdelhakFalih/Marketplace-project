@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('My Transactions') }}</div>
        <div class="card-body">
            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th>{{ __('Date') }}</th>
                        <th>{{ __('Product') }}</th>
                        <th>{{ __('Amount') }}</th>
                        <th>{{ __('Fees') }}</th>
                        <th>{{ __('Status') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->created_at->format('d/m/Y') }}</td>
                            <td>{{ $transaction->offer->name }}</td>
                            <td>{{ $transaction->offer->price }} MAD</td>
                            <td>{{ $transaction->commission ?? 0 }} MAD</td>
                            <td>{{ __($transaction->status) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
