@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>{{ __('My Offers') }}</h1>
        @foreach($offers as $offer)
            <p>{{ $offer->name }} - <a href="{{ route('offers.edit', $offer->id) }}">{{ __('Edit') }}</a></p>
        @endforeach
        <a href="{{ route('offers.create') }}">{{ __('Create Offer') }}</a>
        <a href="{{ route('offers.public') }}">{{ __('View Public Offers') }}</a>
        <a href="{{ route('user_space') }}">{{ __('Back to Dashboard') }}</a>
    </div>
@endsection
