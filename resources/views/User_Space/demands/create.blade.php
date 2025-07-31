@extends('layouts.user')

@section('header')
    <header>
        @include('partials.Components', ['compo' => 'sidebar', 'user_id' => auth()->id()])
    </header>
@endsection

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">{{ __('Publier une demande') }}</h5>
            </div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('user.post-demand') }}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                    <div class="mb-3">
                        <label class="form-label">{{ __('Type de demande') }}</label>
                        <select name="type" class="form-control @error('type') is-invalid @enderror" required>
                            <option value="">{{ __('-- Choisir --') }}</option>
                            <option value="product">{{ __('Produit') }}</option>
                            <option value="service">{{ __('Service') }}</option>
                        </select>
                        @error('type')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{ __('Titre de la demande') }}</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{ __('Description détaillée') }}</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="5" required>{{ old('description') }}</textarea>
                        @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{ __('Ville / Région') }}</label>
                        <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}" required>
                        @error('city')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{ __('Délai souhaité (ex. 2 semaines)') }}</label>
                        <input type="text" name="deadline" class="form-control @error('deadline') is-invalid @enderror" value="{{ old('deadline') }}">
                        @error('deadline')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('Publier la demande') }}</button>
                </form>
            </div>
        </div>
    </div>
    <style>
        [dir="rtl"] .form-label,
        [dir="rtl"] .invalid-feedback {
            text-align: right;
        }
    </style>
@endsection
