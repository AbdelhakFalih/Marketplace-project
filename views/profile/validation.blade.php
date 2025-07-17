@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Profile Validated') }}</div>
        <div class="card-body text-center">
            <h2>🎉 {{ __('Profile validated successfully') }}</h2>
            <p>{{ __('Your profile has been verified and validated by our team.') }}</p>
            <p>{{ __('You can now:') }}</p>
            <ul class="list-unstyled">
                <li>➕ {{ __('Publish your product offers') }}</li>
                <li>🔍 {{ __('Search or respond to demands') }}</li>
                <li>💬 {{ __('Connect with other cooperatives or merchants') }}</li>
            </ul>
            <a href="{{ route('offers.create') }}" class="btn btn-primary">{{ __('Publish an Offer') }}</a>
            <a href="{{ route('demands.create') }}" class="btn btn-secondary">{{ __('Publish a Demand') }}</a>
        </div>
    </div>
</div>
@endsection
