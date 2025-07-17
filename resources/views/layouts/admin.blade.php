<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - {{ config('app.name', 'Marketplace Coopératives') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
@include('partials.Components', ['compo' => 'Menu admin'])

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('partials.Components', ['compo' => 'sidebar admin'])
            <p class="text-danger">Debug: Sidebar include attempted. Check if visible.</p>
        </div>
        <div class="col-md-9 mt-4">
            @yield('content')
        </div>
    </div>
</div>

@include('partials.Components', ['compo' => 'Footer'])
</body>
</html>
