<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>{{ __('Transaction Confirmation') }}</title>
</head>
<body>
<h1>{{ __('Transaction Confirmed, :name!', ['name' => $user_name]) }}</h1>
<p>{{ __('Your transaction for :offer has been completed.', ['offer' => $offer_name]) }}</p>
<p>{{ __('Commission applied: :commission MAD', ['commission' => $commission]) }}</p>
<p>{{ __('Contact the admin for further details.') }}</p>
</body>
</html>
