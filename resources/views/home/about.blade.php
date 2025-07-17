@extends('views.layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4">À propos de Marketplace Coopératives</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p>
                    Marketplace Coopératives est une plateforme dédiée à la mise en relation des coopératives et
                    commerçants du Maroc.
                    Notre objectif est de faciliter les échanges, promouvoir les produits locaux et soutenir l’économie
                    solidaire.
                </p>
                <h3 class="mt-4">Nos valeurs</h3>
                <ul>
                    <li>Collaboration et entraide</li>
                    <li>Transparence et confiance</li>
                    <li>Innovation sociale</li>
                    <li>Respect de l’environnement</li>
                </ul>
                <h3 class="mt-4">Fonctionnalités principales</h3>
                <ul>
                    <li>Gestion des offres et demandes</li>
                    <li>Notifications personnalisées</li>
                    <li>Espace utilisateur sécurisé</li>
                    <li>Support et assistance</li>
                </ul>
                <h3 class="mt-4">Contact</h3>
                <p>
                    Pour toute question ou suggestion, <a href="{{ route('admin.contact.send') }}">contactez-nous</a>.
                </p>
            </div>
        </div>
    </div>
@endsection
