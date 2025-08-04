@extends('layouts.user_space')

@section('title', 'Modifier mon profil')

@section('content')
<div class="card shadow">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Modifier mon profil</h6>
    </div>
    <div class="card-body">
        <form>
            <div class="row mb-4">
                <div class="col-md-4 text-center">
                    <div class="w-32 h-32 bg-gray-200 rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center">
                        <i class="fas fa-user fa-3x text-gray-400"></i>
                    </div>
                    <button type="button" class="btn btn-primary btn-sm">
                        <i class="fas fa-camera me-2"></i>Changer photo
                    </button>
                </div>
                
                <div class="col-md-8">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Prénom</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->first_name ?? 'John' }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nom</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->last_name ?? 'Doe' }}">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" value="{{ Auth::user()->email ?? 'john.doe@example.com' }}">
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Téléphone</label>
                            <input type="tel" class="form-control" value="{{ Auth::user()->phone ?? '+212 123 456 789' }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date de naissance</label>
                            <input type="date" class="form-control" value="{{ Auth::user()->birth_date ?? '1990-01-01' }}">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Bio</label>
                <textarea class="form-control" rows="4" placeholder="Parlez-nous de vous...">{{ Auth::user()->bio ?? '' }}</textarea>
            </div>
            
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Ville</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->city ?? 'Casablanca' }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Région</label>
                    <select class="form-select">
                        <option>Casablanca-Settat</option>
                        <option>Rabat-Salé-Kénitra</option>
                        <option>Marrakech-Safi</option>
                        <option>Fès-Meknès</option>
                        <option>Tanger-Tétouan-Al Hoceïma</option>
                    </select>
                </div>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Adresse complète</label>
                <textarea class="form-control" rows="3">{{ Auth::user()->address ?? '123 Rue Example, Casablanca, Maroc' }}</textarea>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Spécialités / Intérêts</label>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">Produits alimentaires</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Artisanat</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Textile</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Cosmétiques naturels</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Agriculture bio</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Services</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Formation</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Consulting</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Autres</label>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" checked>
                    <label class="form-check-label">
                        Recevoir des notifications par email
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                        Recevoir des notifications SMS
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" checked>
                    <label class="form-check-label">
                        Profil visible publiquement
                    </label>
                </div>
            </div>
            
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-secondary me-2">Annuler</button>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save me-2"></i>Enregistrer les modifications
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
