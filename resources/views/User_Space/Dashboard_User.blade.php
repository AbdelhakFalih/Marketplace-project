@extends('layouts.user')
@section('content')
@if($user->role === 'cooperative' || $user->role === 'commerçant')
<div class="dashboard">
    <div class="dashboard-content">
        <section class="dashboard">
            <h2 data-i18n="activitySummary">Résumé de votre activité</h2>
            <div class="stats-grid">
                <div class="stat-card">
                    <h3 data-i18n="publishedOffers">Offres publiées</h3>
                    <p>5</p>
                </div>
                <div class="stat-card">
                    <h3 data-i18n="sentRequests">Demandes envoyées</h3>
                    <p>3</p>
                </div>
                <div class="stat-card">
                    <h3 data-i18n="notifications">Notifications</h3>
                    <p>7</p>
                </div>
                <div class="stat-card">
                    <h3 data-i18n="earnedPoints">Points gagnés</h3>
                    <p>120</p>
                </div>
            </div>
        </section>
    </div>
</div>
@else
<div class="container mt-5 text-center">
    @include('partials.Components', ['compo' => 'Errors_Page'], ['msg' => __('loginRequired')])
</div>
@endif
@endsection
