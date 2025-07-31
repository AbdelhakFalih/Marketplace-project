<extends('layouts.app')
@section('content')
    <div class="container">
        <h1>{{ __('Account Confirmation') }}</h1>
        <p>{{ session('success') }}</p>
        <a href="{{ route('user_space') }}">{{ __('Go to Dashboard') }}</a>
    </div>
@endsection
