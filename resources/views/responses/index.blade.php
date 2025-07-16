@extends('layouts.app')

@section('title', __('Responses'))

@section('content')
    <div class="container">
        <h1>{{ __('My Responses') }}</h1>
        @if($responses->isEmpty())
            <p>{{ __('No responses yet.') }}</p>
        @else
            <ul>
                @foreach($responses as $response)
                    <li>{{ $response->message }} - {{ $response->demand->name }}
                        <a href="{{ route('responses.edit', $response->id) }}">{{ __('Edit') }}</a>
                        <form action="{{ route('responses.destroy', $response->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit">{{ __('Delete') }}</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        @endif
        <a href="{{ route('responses.create') }}" class="btn btn-primary">{{ __('Create Response') }}</a>
    </div>
@endsection
