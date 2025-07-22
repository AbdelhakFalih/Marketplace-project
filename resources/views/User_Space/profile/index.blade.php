@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>{{ __('My Profiles') }}</h1>
        @foreach($profiles as $profile)
            <p>{{ $profile->name }} - <a href="{{ route('profile.edit', $profile->id) }}">{{ __('Edit') }}</a></p>
        @endforeach
        <a href="{{ route('profile.create') }}">{{ __('Create Profile') }}</a>
        <a href="{{ route('user_space') }}">{{ __('Back to Dashboard') }}</a>
    </div>
@endsection
