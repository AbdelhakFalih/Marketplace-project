@extends('layouts.user')
@section('content')
    <div class="container">
        <h1>{{ __('My Offers') }}</h1>
        @foreach($offers as $offer)
            <p>{{ $offer->name }} - <a href="{{ route('offers.edit', $offer->id) }}">{{ __('Edit') }}</a></p>
        @endforeach
    </div>
@endsection
