<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>{{ __('Account Confirmation') }}</title>
</head>
<body>
<h1>{{ __('Welcome, :name!', ['name' => $name]) }}</h1>
<p>{{ __('Thank you for registering. Your account has been created with the email: :email.', ['email' => $email]) }}</p>
<p>{{ __('Please log in to start using the marketplace.') }}</p>
<a href="{{ url('/login') }}">{{ __('Log In') }}</a>
</body>
</html>
