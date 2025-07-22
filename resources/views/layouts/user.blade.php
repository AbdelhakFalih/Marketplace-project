<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Marketplace Coopérative - Espace @if(isset($role))
            {{ ucfirst($role) }} {{ __('userDashboard') }}
        @else
            {{ __('adminDashboard') }}
        @endif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
@include('partials.Components', ['compo' => 'Menu User-space'])

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('partials.Components', ['compo' => 'sidebar'])
        </div>
        <div class="col-md-9 mt-4">
            @yield('content')
        </div>
    </div>
</div>

@include('partials.Components', ['compo' => 'Footer'])
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var loginFailed = {{ isset($loginFailed) && $loginFailed ? 'true' : 'false' }};
        if (loginFailed) {
            var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
            loginModal.show();
        }
    });

    function deleteUser(userId, btn) {
        if (confirm('Voulez-vous vraiment supprimer cet utilisateur ?')) {
            fetch("{{ url('/admin/users') }}/" + userId, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                }
            })
                .then(response => {
                    if (response.ok) {
                        // Supprime la carte utilisateur du DOM
                        btn.closest('.col').remove();
                    } else {
                        alert('Erreur lors de la suppression.');
                    }
                });
        }
    }
</script>
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>
