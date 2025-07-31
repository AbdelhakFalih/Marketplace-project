@extends('layouts.guest')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Welcome to Marketplace Coopératives') }}</div>
        <div class="card-body text-center">
            <h2>{{ __('Join our community') }}</h2>
            <p>{{ __('Connect with cooperatives and merchants across regions.') }}</p>
            @auth
                <a href="{{ route('profile.create') }}" class="btn btn-primary">{{ __('Complete Your Profile') }}</a>
                <a href="{{ route('offers.index') }}" class="btn btn-secondary">{{ __('Browse Offers') }}</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary">{{ __('Login') }}</a>
                <a href="{{ route('register') }}" class="btn btn-secondary">{{ __('Register') }}</a>
            @endauth
        </div>
    </div>
</div>
@endsection
