@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Add Cooperative / Merchant') }}</div>
        <div class="card-body">
            <form action="{{ route('profile.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>{{ __('Structure Name') }}</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required>
                    @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>{{ __('Type') }}</label>
                    <select name="type" class="form-control @error('type') is-invalid @enderror" required>
                        <option value="">{{ __('-- Select --') }}</option>
                        <option value="cooperative">{{ __('Cooperative') }}</option>
                        <option value="merchant">{{ __('Merchant') }}</option>
                    </select>
                    @error('type')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>{{ __('Locality') }}</label>
                    <input type="text" name="locality" class="form-control @error('locality') is-invalid @enderror" required>
                    @error('locality')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>{{ __('Main Activity') }}</label>
                    <input type="text" name="activity" class="form-control @error('activity') is-invalid @enderror" required>
                    @error('activity')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group cooperative-only">
                    <label>{{ __('Main Product') }}</label>
                    <input type="text" name="main_product" class="form-control @error('main_product') is-invalid @enderror">
                    @error('main_product')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group cooperative-only">
                    <label>{{ __('Responsible Person') }}</label>
                    <input type="text" name="president_name" class="form-control @error('president_name') is-invalid @enderror">
                    @error('president_name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group cooperative-only">
                    <label>{{ __('Unique Number') }}</label>
                    <input type="text" name="unique_number" class="form-control @error('unique_number') is-invalid @enderror">
                    @error('unique_number')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group merchant-only">
                    <label>{{ __('Patente Number') }}</label>
                    <input type="text" name="patente_number" class="form-control @error('patente_number') is-invalid @enderror">
                    @error('patente_number')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
            </form>
            <hr>
            <h5>{{ __('Registered Structures') }}</h5>
            <ul>
                @foreach($structures as $structure)
                    <li>{{ $structure->name }} – {{ $structure->locality }} – {{ $structure->main_product ?? $structure->activity }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<script>
    document.querySelector('select[name="type"]').addEventListener('change', function() {
        document.querySelectorAll('.cooperative-only').forEach(el => el.style.display = this.value === 'cooperative' ? 'block' : 'none');
        document.querySelectorAll('.merchant-only').forEach(el => el.style.display = this.value === 'merchant' ? 'block' : 'none');
    });
</script>
@endsection
