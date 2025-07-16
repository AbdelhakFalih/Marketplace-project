extends('layouts.guest')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Welcome!') }}</div>
        <div class="card-body text-center">
            <h2>{{ __('Your account has been created successfully') }} 🎉</h2>
            <p>{{ __('Please verify your email address to confirm your account.') }}</p>
            <p>{{ __('Once confirmed, you can:') }}</p>
            <ul class="list-unstyled">
                <li>📌 {{ __('Complete your profile') }}</li>
                <li>📦 {{ __('Publish offers and demands') }}</li>
                <li>🔔 {{ __('Receive notifications') }}</li>
                <li>🤝 {{ __('Participate in transactions with other members') }}</li>
            </ul>
            <a href="{{ route('admin.contact') }}" class="btn btn-link">{{ __('Need help? Contact the administrator') }}</a>
        </div>
    </div>
</div>
@endsection
