@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('My Profile') }}</div>
        <div class="card-body">
            <h5>{{ $profile->name }}</h5>
            <p>{{ __('Type') }}: {{ __($profile->type) }}</p>
            <p>{{ __('Locality') }}: {{ $profile->locality }}</p>
            <p>{{ __('Main Activity') }}: {{ $profile->activity }}</p>
            @if($profile->type === 'cooperative')
                <p>{{ __('Main Product') }}: {{ $profile->main_product }}</p>
                <p>{{ __('Responsible Person') }}: {{ $profile->president_name }}</p>
                <p>{{ __('Unique Number') }}: {{ $profile->unique_number }}</p>
            @else
                <p>{{ __('Patente Number') }}: {{ $profile->patente_number }}</p>
            @endif
            @if($profile->facebook_url)
                <p><a href="{{ $profile->facebook_url }}" target="_blank">{{ __('Facebook') }}</a></p>
            @endif
            @if($profile->instagram_url)
                <p><a href="{{ $profile->instagram_url }}" target="_blank">{{ __('Instagram') }}</a></p>
            @endif
            @if($profile->x_url)
                <p><a href="{{ $profile->x_url }}" target="_blank">{{ __('X') }}</a></p>
            @endif
        </div>
    </div>
</div>
@endsection
