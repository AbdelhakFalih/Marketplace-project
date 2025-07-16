@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Contact Administrator') }}</div>
        <div class="card-body">
            <form action="{{ route('admin.contact') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>{{ __('Subject') }}</label>
                    <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" required>
                    @error('subject')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>{{ __('Message') }}</label>
                    <textarea name="message" class="form-control @error('message') is-invalid @enderror" required></textarea>
                    @error('message')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">{{ __('Send') }}</button>
            </form>
            <hr>
            <p>{{ __('Or contact us directly:') }}</p>
            <p>📧 {{ __('Email') }}: <a href="mailto:admin@coopmaroc.ma">admin@coopmaroc.ma</a></p>
            <p>📞 {{ __('Phone') }}: +212 6 12 34 56 78</p>
        </div>
    </div>
</div>
@endsection
