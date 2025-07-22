@extends('layouts.user')
@section('content')
    <div class="container">
        <h1>{{ __('My Demands') }}</h1>
        @foreach($demands as $demand)
            <p>{{ $demand->name }} - <a href="{{ route('requests.edit', $demand->id) }}">{{ __('Edit') }}</a></p>
        @endforeach
        <a href="{{ route('requests.create') }}">{{ __('Create Demand') }}</a>
        <a href="{{ route('user_space') }}">{{ __('Back to Dashboard') }}</a>
    </div>
@endsection
