{{-- filepath: resources/views/admin/dashboard.blade.php --}}
@extends('layouts.admin')

@section('content')
<div class="container py-5">
    <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>
        <div class="card-body">
            <h1>Bienvenue dans votre espace admin</h1>
            <h3>Veuillez utiliser le menu pour découvrir plus de fonctionnalités.</h3>
        </div>
    </div>
</div>
@endsection
