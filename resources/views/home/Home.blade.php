@extends('layouts.app')

@section('content')
    <main class="container my-5">
        <section class="intro text-center">
            <h1 class="display-4" data-i18n="header">Bienvenue sur Marketplace Coopératives</h1>
            <h2 class="mb-3" data-i18n="home">Une plateforme pour les coopératives et les commerçants</h2>
            <p class="mb-4" data-i18n="register">
                Publiez vos produits, trouvez des partenaires et développez votre activité grâce à une interface simple et rapide.
            </p>
            <a href="{{ route('register') }}" class="btn btn-success" data-i18n="signUpBtn">Rejoindre maintenant</a>
        </section>
        <section class="mt-5">
            <h3 class="text-center mb-4" data-i18n="featured">Produits en vedette</h3>
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/product1.jpg') }}" class="d-block w-100" alt="Produit 1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 data-i18n="product1">Produit Local 1</h5>
                            <p data-i18n="product1Desc">Frais et authentique</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/product2.jpg') }}" class="d-block w-100" alt="Produit 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 data-i18n="product2">Produit Local 2</h5>
                            <p data-i18n="product2Desc">Qualité coopérative</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/product3.jpg') }}" class="d-block w-100" alt="Produit 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 data-i18n="product3">Produit Local 3</h5>
                            <p data-i18n="product3Desc">Soutien local</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden" data-i18n="prev">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden" data-i18n="next">Suivant</span>
                </button>
            </div>
        </section>
    </main>
@endsection
