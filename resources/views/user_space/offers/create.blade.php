@extends('layouts.app')

@section('title')
<span data-translate="offers.create">Publier une offre</span>
@endsection

@section('content')
<div class="container-fluid px-4 py-6">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="h3 mb-2 text-primary-green" data-translate="offers.create">Publier une nouvelle offre</h1>
                    <p class="text-muted">Partagez vos produits avec la communauté</p>
                </div>
                <a href="{{ route('offers.index') }}" class="btn btn-outline-primary-green">
                    <i class="fas fa-arrow-left me-2"></i><span data-translate="common.back">Retour</span>
                </a>
            </div>

            <!-- Formulaire -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <form method="POST" action="{{ route('offers.store') }}" enctype="multipart/form-data" id="offerForm">
                        @csrf
                        
                        <!-- Étapes -->
                        <div class="progress mb-4" style="height: 8px;">
                            <div class="progress-bar bg-primary-green" role="progressbar" style="width: 33%" id="progressBar"></div>
                        </div>

                        <!-- Étape 1: Informations de base -->
                        <div class="step" id="step1">
                            <h5 class="mb-4 text-primary-green">Étape 1: Informations de base</h5>
                            
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Titre de l'offre <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                               id="title" name="title" value="{{ old('title') }}" 
                                               placeholder="Ex: Tomates bio de saison" required>
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
                                            <option value="fruits" {{ old('category') == 'fruits' ? 'selected' : '' }}>Fruits</option>
                                            <option value="legumes" {{ old('category') == 'legumes' ? 'selected' : '' }}>Légumes</option>
                                            <option value="cereales" {{ old('category') == 'cereales' ? 'selected' : '' }}>Céréales</option>
                                            <option value="produits-laitiers" {{ old('category') == 'produits-laitiers' ? 'selected' : '' }}>Produits laitiers</option>
                                            <option value="viandes" {{ old('category') == 'viandes' ? 'selected' : '' }}>Viandes</option>
                                            <option value="autres" {{ old('category') == 'autres' ? 'selected' : '' }}>Autres</option>
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
                                          id="description" name="description" rows="4" required
                                          placeholder="Décrivez votre produit: origine, méthode de culture, qualités...">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="form-text">Minimum 50 caractères</div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="price" class="form-label">Prix unitaire <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="number" class="form-control @error('price') is-invalid @enderror" 
                                                   id="price" name="price" value="{{ old('price') }}" 
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
                                               id="quantity" name="quantity" value="{{ old('quantity') }}" 
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
                                            <option value="kg" {{ old('unit') == 'kg' ? 'selected' : '' }}>Kilogramme (kg)</option>
                                            <option value="g" {{ old('unit') == 'g' ? 'selected' : '' }}>Gramme (g)</option>
                                            <option value="l" {{ old('unit') == 'l' ? 'selected' : '' }}>Litre (l)</option>
                                            <option value="piece" {{ old('unit') == 'piece' ? 'selected' : '' }}>Pièce</option>
                                            <option value="botte" {{ old('unit') == 'botte' ? 'selected' : '' }}>Botte</option>
                                            <option value="panier" {{ old('unit') == 'panier' ? 'selected' : '' }}>Panier</option>
                                        </select>
                                        @error('unit')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-primary-green" onclick="nextStep(2)">
                                    <span data-translate="common.next">Suivant</span> <i class="fas fa-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Étape 2: Images et détails -->
                        <div class="step d-none" id="step2">
                            <h5 class="mb-4 text-primary-green">Étape 2: Images et détails</h5>
                            
                            <div class="mb-4">
                                <label class="form-label">Images du produit <span class="text-danger">*</span></label>
                                <div class="border rounded p-4 text-center border-primary-green" id="imageUploadArea">
                                    <i class="fas fa-cloud-upload-alt fa-3x text-primary-green mb-3"></i>
                                    <p class="mb-2">Glissez vos images ici ou cliquez pour sélectionner</p>
                                    <input type="file" class="form-control d-none" id="images" name="images[]" 
                                           multiple accept="image/*" onchange="previewImages(this)">
                                    <button type="button" class="btn btn-outline-primary-green" onclick="document.getElementById('images').click()">
                                        Choisir des images
                                    </button>
                                    <div class="form-text mt-2">Maximum 5 images, formats JPG/PNG, taille max 2MB par image</div>
                                </div>
                                <div id="imagePreview" class="row mt-3"></div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="origin" class="form-label">Origine</label>
                                        <input type="text" class="form-control" id="origin" name="origin" 
                                               value="{{ old('origin') }}" placeholder="Ex: France, Provence">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="certification" class="form-label">Certifications</label>
                                        <select class="form-select" id="certification" name="certification">
                                            <option value="">Aucune certification</option>
                                            <option value="bio-ab" {{ old('certification') == 'bio-ab' ? 'selected' : '' }}>Bio AB</option>
                                            <option value="demeter" {{ old('certification') == 'demeter' ? 'selected' : '' }}>Demeter</option>
                                            <option value="nature-progres" {{ old('certification') == 'nature-progres' ? 'selected' : '' }}>Nature & Progrès</option>
                                            <option value="ecocert" {{ old('certification') == 'ecocert' ? 'selected' : '' }}>Ecocert</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-outline-secondary" onclick="prevStep(1)">
                                    <i class="fas fa-arrow-left me-2"></i><span data-translate="common.previous">Précédent</span>
                                </button>
                                <button type="button" class="btn btn-primary-green" onclick="nextStep(3)">
                                    <span data-translate="common.next">Suivant</span> <i class="fas fa-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Étape 3: Publication -->
                        <div class="step d-none" id="step3">
                            <h5 class="mb-4 text-primary-green">Étape 3: Publication</h5>
                            
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                                    <label class="form-check-label" for="terms">
                                        J'accepte les <a href="#" class="text-primary-green">conditions générales</a> 
                                        et la <a href="#" class="text-primary-green">politique de confidentialité</a>
                                    </label>
                                </div>
                            </div>

                            <!-- Aperçu de l'offre -->
                            <div class="card bg-light mb-4">
                                <div class="card-header bg-primary-green text-white">
                                    <h6 class="mb-0">Aperçu de votre offre</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div id="previewImage" class="bg-secondary rounded" style="height: 120px; display: flex; align-items: center; justify-content: center;">
                                                <i class="fas fa-image fa-2x text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <h6 id="previewTitle">Titre de votre offre</h6>
                                            <p class="text-muted mb-2" id="previewDescription">Description de votre produit...</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <span class="h5 text-primary-green" id="previewPrice">0.00€</span>
                                                    <span class="text-muted" id="previewUnit">/unité</span>
                                                </div>
                                                <div class="text-muted">
                                                    <small>Quantité: <span id="previewQuantity">0</span></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-outline-secondary" onclick="prevStep(2)">
                                    <i class="fas fa-arrow-left me-2"></i><span data-translate="common.previous">Précédent</span>
                                </button>
                                <div>
                                    <button type="submit" name="action" value="draft" class="btn btn-outline-primary-green me-2">
                                        <i class="fas fa-save me-2"></i>Sauvegarder en brouillon
                                    </button>
                                    <button type="submit" name="action" value="publish" class="btn btn-primary-green">
                                        <i class="fas fa-check me-2"></i>Publier l'offre
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
let currentStep = 1;

function nextStep(step) {
    if (validateStep(currentStep)) {
        document.getElementById(`step${currentStep}`).classList.add('d-none');
        document.getElementById(`step${step}`).classList.remove('d-none');
        currentStep = step;
        updateProgressBar();
        updatePreview();
    }
}

function prevStep(step) {
    document.getElementById(`step${currentStep}`).classList.add('d-none');
    document.getElementById(`step${step}`).classList.remove('d-none');
    currentStep = step;
    updateProgressBar();
}

function updateProgressBar() {
    const progress = (currentStep / 3) * 100;
    document.getElementById('progressBar').style.width = progress + '%';
}

function validateStep(step) {
    let isValid = true;
    const stepElement = document.getElementById(`step${step}`);
    const requiredFields = stepElement.querySelectorAll('[required]');
    
    requiredFields.forEach(field => {
        if (!field.value.trim()) {
            field.classList.add('is-invalid');
            isValid = false;
        } else {
            field.classList.remove('is-invalid');
        }
    });
    
    return isValid;
}

function previewImages(input) {
    const preview = document.getElementById('imagePreview');
    preview.innerHTML = '';
    
    if (input.files) {
        Array.from(input.files).forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = function(e) {
                const col = document.createElement('div');
                col.className = 'col-md-3 mb-2';
                col.innerHTML = `
                    <div class="position-relative">
                        <img src="${e.target.result}" class="img-fluid rounded" style="height: 120px; object-fit: cover; width: 100%;">
                        <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-1" onclick="removeImage(${index})">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                `;
                preview.appendChild(col);
                
                // Mettre à jour l'aperçu avec la première image
                if (index === 0) {
                    document.getElementById('previewImage').innerHTML = `<img src="${e.target.result}" class="img-fluid rounded" style="height: 120px; object-fit: cover; width: 100%;">`;
                }
            };
            reader.readAsDataURL(file);
        });
    }
}

function updatePreview() {
    document.getElementById('previewTitle').textContent = document.getElementById('title').value || 'Titre de votre offre';
    document.getElementById('previewDescription').textContent = document.getElementById('description').value || 'Description de votre produit...';
    document.getElementById('previewPrice').textContent = (document.getElementById('price').value || '0.00') + '€';
    document.getElementById('previewUnit').textContent = '/' + (document.getElementById('unit').value || 'unité');
    document.getElementById('previewQuantity').textContent = document.getElementById('quantity').value || '0';
}

// Mise à jour en temps réel de l'aperçu
document.addEventListener('DOMContentLoaded', function() {
    ['title', 'description', 'price', 'quantity', 'unit'].forEach(id => {
        document.getElementById(id).addEventListener('input', updatePreview);
    });
});
</script>
@endsection
