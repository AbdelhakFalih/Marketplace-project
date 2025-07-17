@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Offer Details') }}</div>
        <div class="card-body">
            <h5>{{ $offer->name }}</h5>
            <p>{{ __('Price') }}: {{ $offer->price }} MAD</p>
            <p>{{ __('Technical Sheet') }}: {{ $offer->technical_sheet }}</p>
            @if($offer->flyer)
                <p>{{ __('Flyer') }}: <a href="{{ asset('storage/' . $offer->flyer) }}" target="_blank">{{ __('View Flyer') }}</a></p>
            @endif
            <p>{{ __('Delivery Option') }}: {{ __($offer->delivery_option) }}</p>
            <p>{{ __('Interest Count') }}: {{ $offer->interest_count }}</p>
            <a href="{{ route('offers.index') }}" class="btn btn-secondary">{{ __('Back to Offers') }}</a>
        </div>
    </div>
</div>
@endsection
