@extends('layouts.user')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">{{ __('Publish a Product Offer') }}</div>
            <div class="card-body">
                <form id="offer-form" action="{{ route('user.post-offer') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <input type="hidden" name="password" id="hidden-password" value="">
                    <div class="form-group">
                        <label>{{ __('Product Name') }}</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required>
                        @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>{{ __('Technical Sheet') }}</label>
                        <textarea name="technical_sheet" class="form-control @error('technical_sheet') is-invalid @enderror" required></textarea>
                        @error('technical_sheet')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>{{ __('Flyer (image or PDF)') }}</label>
                        <input type="file" name="flyer" class="form-control-file @error('flyer') is-invalid @enderror" accept="image/*,application/pdf">
                        @error('flyer')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>{{ __('Price (in MAD)') }}</label>
                        <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" step="0.01" required>
                        @error('price')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>{{ __('Delivery Options') }}</label>
                        <select name="delivery_option" class="form-control @error('delivery_option') is-invalid @enderror" required>
                            <option value="">{{ __('-- Select --') }}</option>
                            <option value="home">{{ __('Home Delivery') }}</option>
                            <option value="store1">{{ __('Store Casablanca') }}</option>
                            <option value="store2">{{ __('Store Rabat') }}</option>
                            <option value="cooperative">{{ __('Cooperative Local') }}</option>
                        </select>
                        @error('delivery_option')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        <input type="password" name="user_pass" class="form-control @error('user_pass') is-invalid @enderror" step="0.01" required>
                    </div>
                    <input type="submit" value="Publish Offer">
                </form
            </div>'
        </div>
@endsection
