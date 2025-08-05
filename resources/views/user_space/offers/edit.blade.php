@extends('layouts.app')

@section('title')
<span data-translate="offers.edit">Modifier l'offre</span>
@endsection

@section('content')
<div class="container-fluid px-4 py-6">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="h3 mb-2 text-primary-green" data-translate="offers.edit">Modifier l'offre</h1>
                    <p class="text-muted">{{ $offer->title ?? 'Tomates bio de saison' }}</p>
                </div>
                <div>
                    <a href="{{ route('offers.show', $offer->id ?? 1) }}" class="btn btn-outline-secondary me-2">
                        <i class="fas fa-eye me-2"></i><span data-translate="common.view">Voir</span>
                    </a>
                    <a href="{{ route('offers.index') }}" class="btn btn-outline-primary-green">
                        <i class="fas fa-arrow-left me-2"></i><span data-translate="common.back">Retour</span>
                    </a>
                </div>
            </div>

            <!-- Formulaire de modification -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <form method="POST" action="{{ route('offers.update', $offer->id ?? 1) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Titre de l'offre <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                           id="title" name="title" value="{{ old('title', $offer->title ?? 'Tomates bio de saison') }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="category" class="form-label">Catégorie <span class="text-danger">*</span></label>
                                    <select class="form-select @error('category') is-invalid @enderror" id="category" name="category" required>
                                        <option value="">Sélectionner...</option>
                                        <option value="fruits" {{ old('category', $offer->category ?? 'legumes') == 'fruits' ? 'selected' : '' }}>Fruits</option>
                                        <option value="legumes" {{ old('category', $offer->category ?? 'legumes') == 'legumes' ? 'selected' : '' }}>Légumes</option>
                                        <option value="cereales" {{ old('category', $offer->category ?? 'legumes') == 'cereales' ? 'selected' : '' }}>Céréales</option>
                                        <option value="produits-laitiers" {{ old('category', $offer->category ?? 'legumes') == 'produits-laitiers' ? 'selected' : '' }}>Produits laitiers</option>
                                        <option value="viandes" {{ old('category', $offer->category ?? 'legumes') == 'viandes' ? 'selected' : '' }}>Viandes</option>
                                        <option value="autres" {{ old('category', $offer->category ?? 'legumes') == 'autres' ? 'selected' : '' }}>Autres</option>
                                    </select>
                                    @error('category')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                      id="description" name="description" rows="4" required>{{ old('description', $offer->description ?? 'Tomates biologiques cultivées sans pesticides, récoltées à maturité pour un goût authentique.') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="price" class="form-label">Prix unitaire <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="number" class="form-control @error('price') is-invalid @enderror" 
                                               id="price" name="price" value="{{ old('price', $offer->price ?? '3.50') }}" 
                                               step="0.01" min="0" required>
                                        <span class="input-group-text">€</span>
                                    </div>
                                    @error('price')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="quantity" class="form-label">Quantité disponible <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control @error('quantity') is-invalid @enderror" 
                                           id="quantity" name="quantity" value="{{ old('quantity', $offer->quantity ?? '50') }}" 
                                           min="1" required>
                                    @error('quantity')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="unit" class="form-label">Unité <span class="text-danger">*</span></label>
                                    <select class="form-select @error('unit') is-invalid @enderror" id="unit" name="unit" required>
                                        <option value="">Sélectionner...</option>
                                        <option value="kg" {{ old('unit', $offer->unit ?? 'kg') == 'kg' ? 'selected' : '' }}>Kilogramme (kg)</option>
                                        <option value="g" {{ old('unit', $offer->unit ?? 'kg') == 'g' ? 'selected' : '' }}>Gramme (g)</option>
                                        <option value="l" {{ old('unit', $offer->unit ?? 'kg') == 'l' ? 'selected' : '' }}>Litre (l)</option>
                                        <option value="piece" {{ old('unit', $offer->unit ?? 'kg') == 'piece' ? 'selected' : '' }}>Pièce</option>
                                        <option value="botte" {{ old('unit', $offer->unit ?? 'kg') == 'botte' ? 'selected' : '' }}>Botte</option>
                                        <option value="panier" {{ old('unit', $offer->unit ?? 'kg') == 'panier' ? 'selected' : '' }}>Panier</option>
                                    </select>
                                    @error('unit')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Images actuelles -->
                        <div class="mb-4">
                            <label class="form-label">Images actuelles</label>
                            <div class="row" id="currentImages">
                                @for($i = 1; $i <= 3; $i++)
                                <div class="col-md-4 mb-2">
                                    <div class="position-relative">
                                        <img src="/placeholder.svg?height=150&width=200&text=Image{{ $i }}" 
                                             class="img-fluid rounded" style="height: 150px; object-fit: cover; width: 100%;">
                                        <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-1" 
                                                onclick="removeCurrentImage({{ $i }})">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>

                        <!-- Nouvelles images -->
                        <div class="mb-4">
                            <label class="form-label">Ajouter de nouvelles images</label>
                            <div class="border rounded p-4 text-center border-primary-green">
                                <i class="fas fa-cloud-upload-alt fa-2x text-primary-green mb-3"></i>
                                <p class="mb-2">Glissez vos images ici ou cliquez pour sélectionner</p>
                                <input type="file" class="form-control d-none" id="newImages" name="new_images[]" 
                                       multiple accept="image/*" onchange="previewNewImages(this)">
                                <button type="button" class="btn btn-outline-primary-green" onclick="document.getElementById('newImages').click()">
                                    Choisir des images
                                </button>
                            </div>
                            <div id="newImagePreview" class="row mt-3"></div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="origin" class="form-label">Origine</label>
                                    <input type="text" class="form-control" id="origin" name="origin" 
                                           value="{{ old('origin', $offer->origin ?? 'France, Provence') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="certification" class="form-label">Certifications</label>
                                    <select class="form-select" id="certification" name="certification">
                                        <option value="">Aucune certification</option>
                                        <option value="bio-ab" {{ old('certification', $offer->certification ?? 'bio-ab') == 'bio-ab' ? 'selected' : '' }}>Bio AB</option>
                                        <option value="demeter" {{ old('certification', $offer->certification ?? 'bio-ab') == 'demeter' ? 'selected' : '' }}>Demeter</option>
                                        <option value="nature-progres" {{ old('certification', $offer->certification ?? 'bio-ab') == 'nature-progres' ? 'selected' : '' }}>Nature & Progrès</option>
                                        <option value="ecocert" {{ old('certification', $offer->certification ?? 'bio-ab') == 'ecocert' ? 'selected' : '' }}>Ecocert</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status" class="form-label">Statut</label>
                                    <select class="form-select" id="status" name="status">
                                        <option value="active" {{ old('status', $offer->status ?? 'active') == 'active' ? 'selected' : '' }}>Actif</option>
                                        <option value="inactive" {{ old('status', $offer->status ?? 'active') == 'inactive' ? 'selected' : '' }}>Inactif</option>
                                        <option value="sold_out" {{ old('status', $offer->status ?? 'active') == 'sold_out' ? 'selected' : '' }}>Épuisé</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="available_until" class="form-label">Disponible jusqu'au</label>
                                    <input type="date" class="form-control" id="available_until" name="available_until" 
                                           value="{{ old('available_until', $offer->available_until ?? date('Y-m-d', strtotime('+30 days'))) }}">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-outline-danger" onclick="confirmDelete()">
                                <i class="fas fa-trash me-2"></i><span data-translate="common.delete">Supprimer</span>
                            </button>
                            <div>
                                <button type="submit" name="action" value="draft" class="btn btn-outline-primary-green me-2">
                                    <i class="fas fa-save me-2"></i>Sauvegarder en brouillon
                                </button>
                                <button type="submit" name="action" value="update" class="btn btn-primary-green">
                                    <i class="fas fa-check me-2"></i><span data-translate="common.save">Enregistrer</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmation de suppression -->
<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmer la suppression</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Êtes-vous sûr de vouloir supprimer cette offre ? Cette action est irréversible.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <form method="POST" action="{{ route('offers.destroy', $offer->id ?? 1) }}" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer définitivement</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function previewNewImages(input) {
    const preview = document.getElementById('newImagePreview');
    preview.innerHTML = '';
    
    if (input.files) {
        Array.from(input.files).forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = function(e) {
                const col = document.createElement('div');
                col.className = 'col-md-4 mb-2';
                col.innerHTML = `
                    <div class="position-relative">
                        <img src="${e.target.result}" class="img-fluid rounded" style="height: 150px; object-fit: cover; width: 100%;">
                        <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-1" onclick="removeNewImage(${index})">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                `;
                preview.appendChild(col);
            };
            reader.readAsDataURL(file);
        });
    }
}

function removeCurrentImage(imageId) {
    if (confirm('Supprimer cette image ?')) {
        // Logique pour marquer l'image comme supprimée
        const imageElement = event.target.closest('.col-md-4');
        imageElement.style.opacity = '0.5';
        imageElement.innerHTML += '<input type="hidden" name="remove_images[]" value="' + imageId + '">';
    }
}

function removeNewImage(index) {
    // Logique pour supprimer une nouvelle image
    console.log('Remove new image', index);
}

function confirmDelete() {
    const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
    modal.show();
}
</script>
@endsection
