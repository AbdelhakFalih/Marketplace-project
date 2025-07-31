<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Marketplace Coopératives</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.7/css/flag-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
@include('partials.Components', ['compo' => 'Menu admin'])

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('partials.Components', ['compo' => 'sidebar admin'])
        </div>
        <div class="col-md-9 mt-4">
            @yield('content')
        </div>
    </div>
</div>

@include('partials.Components', ['compo' => 'Footer'])
</body>
</html>
