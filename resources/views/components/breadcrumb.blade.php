{{-- BREADCRUMB / FIL D'ARIANE --}}
@if(isset($breadcrumbs) && count($breadcrumbs) > 0)
<nav aria-label="breadcrumb" class="bg-light py-2">
    <div class="container">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/" class="text-decoration-none">
                    <i class="fas fa-home me-1"></i>
                    <span data-translate="nav.home">Accueil</span>
                </a>
            </li>
            
            @foreach($breadcrumbs as $breadcrumb)
                @if($loop->last)
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ $breadcrumb['name'] }}
                    </li>
                @else
                    <li class="breadcrumb-item">
                        <a href="{{ $breadcrumb['url'] }}" class="text-decoration-none">
                            {{ $breadcrumb['name'] }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ol>
    </div>
</nav>
@endif

{{-- Breadcrumb automatique basé sur l'URL --}}
@if(!isset($breadcrumbs))
<nav aria-label="breadcrumb" class="bg-light py-2">
    <div class="container">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/" class="text-decoration-none">
                    <i class="fas fa-home me-1"></i>
                    <span data-translate="nav.home">Accueil</span>
                </a>
            </li>
            
            @php
                $segments = request()->segments();
                $url = '';
            @endphp
            
            @foreach($segments as $segment)
                @php
                    $url .= '/' . $segment;
                    $name = ucfirst(str_replace('-', ' ', $segment));
                    
                    // Traductions personnalisées
                    $translations = [
                        'user' => 'Mon Espace',
                        'admin' => 'Administration',
                        'dashboard' => 'Tableau de bord',
                        'profile' => 'Profil',
                        'orders' => 'Commandes',
                        'products' => 'Produits',
                        'cooperatives' => 'Coopératives',
                        'categories' => 'Catégories',
                        'settings' => 'Paramètres',
                        'users' => 'Utilisateurs',
                        'create' => 'Créer',
                        'edit' => 'Modifier'
                    ];
                    
                    if(isset($translations[$segment])) {
                        $name = $translations[$segment];
                    }
                @endphp
                
                @if($loop->last)
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ $name }}
                    </li>
                @else
                    <li class="breadcrumb-item">
                        <a href="{{ $url }}" class="text-decoration-none">
                            {{ $name }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ol>
    </div>
</nav>
@endif
