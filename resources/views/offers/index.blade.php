@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('All Offers') }}</div>
        <div class="card-body">
            <a href="{{ route('offers.create') }}" class="btn btn-primary mb-3">{{ __('Create New Offer') }}</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>{{ __('Product') }}</th>
                        <th>{{ __('Price') }}</th>
                        <th>{{ __('Locality') }}</th>
                        <th>{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($offers as $offer)
                        <tr>
                            <td>{{ $offer->name }}</td>
                            <td>{{ $offer->price }} MAD</td>
                            <td>{{ $offer->user->profile->locality }}</td>
                            <td>
                                <a href="{{ route('offers.show', $offer) }}" class="btn btn-sm btn-info">{{ __('View') }}</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
