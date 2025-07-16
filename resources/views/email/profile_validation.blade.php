<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>{{ __('Profile Validation Request') }}</title>
</head>
<body>
<h1>{{ __('New Profile Validation Request') }}</h1>
<p>{{ __('User :name has submitted a profile for :type validation.', ['name' => $user_name, 'type' => $profile_name]) }}</p>
<p>{{ __('Please review and approve the profile.') }}</p>
<a href="{{ url('/profile/' . $profile_name->id) }}">{{ __('Review Profile') }}</a>
</body>
</html>
