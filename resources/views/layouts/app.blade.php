<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marketplace Coopératives</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.7/css/flag-icons.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
@include('partials.Components', ['compo' => 'Menu principale'])

<div class="container mt-4">
    @yield('content')
</div>

@include('partials.Components', ['compo' => 'Footer'])

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js')}}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
