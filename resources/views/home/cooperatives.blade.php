@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Liste des coopératives</h2>
    <div class="row">
        @forelse($cooperatives as $coop)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('images/user.png') }}" class="card-img-top" alt="{{ $coop->name ?? 'Coopérative' }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $coop->name ?? 'Coopérative' }}</h5>
                        <p class="card-text">{{ $coop->email ?? '' }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p>Aucune coopérative trouvée.</p>
        @endforelse
    </div>
</div>
@endsection
