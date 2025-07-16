@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Submit a Demand') }}</div>
        <div class="card-body">
            <form action="{{ route('demands.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>{{ __('Type of Demand') }}</label>
                    <select name="type" class="form-control @error('type') is-invalid @enderror" required>
                        <option value="">{{ __('-- Choose --') }}</option>
                        <option value="product">{{ __('Product') }}</option>
                        <option value="service">{{ __('Service') }}</option>
                    </select>
                    @error('type')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>{{ __('Title of the Demand') }}</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required>
                    @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>{{ __('Detailed Description') }}</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" required></textarea>
                    @error('description')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>{{ __('City / Region') }}</label>
                    <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" required>
                    @error('city')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>{{ __('Desired Deadline (e.g., 2 weeks)') }}</label>
                    <input type="text" name="deadline" class="form-control @error('deadline') is-invalid @enderror">
                    @error('deadline')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">{{ __('Publish Demand') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection
