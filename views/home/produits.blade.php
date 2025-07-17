@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Tous les produits</h2>
    <div class="row">
        @forelse($products as $produit)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('images/product1.jpg') }}" class="card-img-top" alt="{{ $produit->nom ?? 'Produit' }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $produit->nom ?? 'Produit' }}</h5>
                        <p class="card-text">{{ $produit->description ?? '' }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p>Aucun produit trouvé.</p>
        @endforelse
    </div>
</div>
@endsection
