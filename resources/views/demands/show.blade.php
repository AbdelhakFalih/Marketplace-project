@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Demand Details') }}</div>
        <div class="card-body">
            <h5>{{ $demand->name }}</h5>
            <p>{{ __('Type') }}: {{ __($demand->type) }}</p>
            <p>{{ __('Description') }}: {{ $demand->description }}</p>
            <p>{{ __('City') }}: {{ $demand->city }}</p>
            <p>{{ __('Deadline') }}: {{ $demand->deadline ?? __('N/A') }}</p>
            <form action="{{ route('demands.respond', $demand) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">{{ __('Respond to Demand') }}</button>
            </form>
            <a href="{{ route('demands.index') }}" class="btn btn-secondary">{{ __('Back to Demands') }}</a>
        </div>
    </div>
</div>
@endsection
