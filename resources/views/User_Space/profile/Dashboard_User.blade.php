@extends('layouts.user')
@section('header')
    <header>
        @include('partials.Components', ['compo' => 'sidebar', 'user_id' => auth()->id()])
    </header>
@endsection
@section('content')
    @php
        $lang = app()->getLocale();
        $dir = $lang === 'ar' ? 'rtl' : 'ltr';
    @endphp
    <div class="dashboard" dir="{{ $dir }}">
        @if($user->role === 'cooperative' || $user->role === 'commerçant')
            <div class="container mt-5">
                <section class="dashboard">
                    <div class="row">
                        <!-- Texte à gauche -->
                        <div class="col-md-3">
                            <h2 data-i18n="activitySummary" class="mb-4">{{ __('Résumé de votre activité') }}</h2>
                        </div>

                        <!-- Cartes à droite -->
                        <div class="col-md-9">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="card h-100 shadow-sm hover-card" style="min-height: 200px;">
                                        <div class="card-body text-center">
                                            <h3 data-i18n="publishedOffers">{{ __('Offres publiées') }}</h3>
                                            <p class="card-text">{{ \App\Models\Offre::where('user_id', $user->id)->count() }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100 shadow-sm hover-card" style="min-height: 200px;">
                                        <div class="card-body text-center">
                                            <h3 data-i18n="sentRequests">{{ __('Demandes envoyées') }}</h3>
                                            <p class="card-text">{{ \App\Models\Demand::where('user_id', $user->id)->count() }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100 shadow-sm hover-card" style="min-height: 200px;">
                                        <div class="card-body text-center">
                                            <h3 data-i18n="notifications">{{ __('Notifications') }}</h3>
                                            <p class="card-text">{{ \App\Models\Notification::where('user_id', $user->id)->count() }}</p>
                                            <a href="{{ route('user.notifications') }}" class="btn btn-primary btn-sm" data-i18n="viewNotifications">{{ __('Voir les notifications') }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100 shadow-sm hover-card" style="min-height: 200px;">
                                        <div class="card-body text-center">
                                            <h3 data-i18n="earnedPoints">{{ __('Points gagnés') }}</h3>
                                            <p class="card-text">{{ $user->points ?? 120 }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Profil utilisateur -->
                <footer class="mt-5">
                    <div class="card shadow-sm hover-card">
                        <div class="card-body">
                            <h3>{{ __('Profil') }}</h3>
                            <p><strong>{{ __('Nom') }}:</strong> {{ $user->name }}</p>
                            <p><strong>{{ __('Localité') }}:</strong> {{ $user->location }}</p>
                            <p><strong>{{ __('Activité') }}:</strong> {{ $user->activity }}</p>
                            <p><strong>{{ __('Réseaux sociaux') }}:</strong></p>
                            <ul class="list-unstyled">
                                <li><a href="{{ $user->facebook_url ?? '#' }}" target="_blank" class="text-decoration-none">{{ __('Facebook') }}</a></li>
                                <li><a href="{{ $user->instagram_url ?? '#' }}" target="_blank" class="text-decoration-none">{{ __('Instagram') }}</a></li>
                                <li><a href="{{ $user->x_url ?? '#' }}" target="_blank" class="text-decoration-none">{{ __('X') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </footer>
            </div>
        @else
            <div class="container mt-5 text-center">
                @include('partials.Components', ['compo' => 'Errors_Page', 'msg' => __('loginRequired')])
            </div>
        @endif
    </div>

    <style>
        .card {
            border: none;
            transition: all 0.3s ease-in-out;
        }
        .shadow-sm {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .hover-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        .card-body {
            padding: 2rem;
        }
        .card h3 {
            font-size: 1.5rem;
            margin-bottom: 0.75rem;
        }
        .card-text {
            font-size: 1.25rem;
            color: #333;
        }
        .btn-sm {
            padding: 0.25rem 0.5rem;
        }
    </style>
@endsection
