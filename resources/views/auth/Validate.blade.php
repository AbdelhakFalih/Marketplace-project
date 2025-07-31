@extends('layouts.app')

@section('title', 'Validate Account')

@section('content')
<div class="container mx-auto max-w-md mt-10 p-8 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-4 text-center text-blue-700">Account Validation</h1>
    <p class="mb-6 text-gray-700 text-center">Dear <p class="mb-6 text-gray-700 text-center">
        Dear {{ $name ?? 'User' }}, please confirm your account.
    </p>, please confirm your account.</p>
    <form method="POST" action="{{ route('confirmValidate') }}">
        @csrf
        <input type="hidden" name="name" value="{{ $name }}">
        <input type="hidden" name="email" value="{{ $email }}">
        <input type="hidden" name="password" value="{{ $password }}">
        <div class="flex flex-col items-center">
            <label class="inline-flex items-center mb-4">
                <input type="checkbox" name="confirmation" class="form-checkbox h-5 w-5 text-blue-600" required>
                <span class="ml-2 text-gray-600">Check this box to validate your account</span>
            </label>
            <button type="submit" class="btn btn-primary w-full text-center">Continue</button>
        </div>
    </form>
</div>
@endsection
