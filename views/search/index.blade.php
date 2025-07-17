@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Search for Products or Services') }}</div>
        <div class="card-body">
            <form action="{{ route('search.index') }}" method="GET">
                <div class="form-group">
                    <label>{{ __('Keyword') }}</label>
                    <input type="text" name="keyword" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{ __('Category') }}</label>
                    <select name="category" class="form-control">
                        <option value="">{{ __('-- All --') }}</option>
                        <option value="product">{{ __('Product') }}</option>
                        <option value="service">{{ __('Service') }}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>{{ __('Locality') }}</label>
                    <input type="text" name="locality" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">{{ __('Search') }}</button>
            </form>
            <hr>
            <h5>{{ __('Search Results') }}</h5>
            <div class="row">
                @foreach($results as $result)
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h6>{{ $result->name }}</h6>
                                @if($result->type === 'product')
                                    <p>{{ __('Price') }}: {{ $result->price }} MAD</p>
                                @else
                                    <p>{{ __('Category') }}: {{ __($result->type) }}</p>
                                @endif
                                <p>{{ __('Locality') }}: {{ $result->locality }}</p>
                                <a href="{{ $result->type === 'product' ? route('offers.show', $result) : route('demands.show', $result) }}" class="btn btn-sm btn-info">{{ __('View Details') }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
