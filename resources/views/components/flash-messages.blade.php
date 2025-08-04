{{-- MESSAGES FLASH / NOTIFICATIONS --}}
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <div class="d-flex align-items-center">
        <i class="fas fa-check-circle me-2"></i>
        <div>
            <strong>Succès !</strong>
            {{ session('success') }}
        </div>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <div class="d-flex align-items-center">
        <i class="fas fa-exclamation-circle me-2"></i>
        <div>
            <strong>Erreur !</strong>
            {{ session('error') }}
        </div>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session('warning'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <div class="d-flex align-items-center">
        <i class="fas fa-exclamation-triangle me-2"></i>
        <div>
            <strong>Attention !</strong>
            {{ session('warning') }}
        </div>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session('info'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
    <div class="d-flex align-items-center">
        <i class="fas fa-info-circle me-2"></i>
        <div>
            <strong>Information :</strong>
            {{ session('info') }}
        </div>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

{{-- Erreurs de validation --}}
@if($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <div class="d-flex align-items-start">
        <i class="fas fa-exclamation-circle me-2 mt-1"></i>
        <div>
            <strong>Erreurs de validation :</strong>
            <ul class="mb-0 mt-2">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

{{-- Toast Notifications (JavaScript) --}}
<div id="toast-container" class="position-fixed top-0 end-0 p-3" style="z-index: 1055;">
    <!-- Les toasts seront ajoutés ici dynamiquement -->
</div>

<script>
// Fonction pour afficher un toast
function showToast(message, type = 'success', duration = 5000) {
    const toastContainer = document.getElementById('toast-container');
    const toastId = 'toast-' + Date.now();
    
    const toastTypes = {
        'success': { class: 'bg-success', icon: 'fa-check-circle' },
        'error': { class: 'bg-danger', icon: 'fa-exclamation-circle' },
        'warning': { class: 'bg-warning', icon: 'fa-exclamation-triangle' },
        'info': { class: 'bg-info', icon: 'fa-info-circle' }
    };
    
    const toastType = toastTypes[type] || toastTypes['success'];
    
    const toastHTML = `
        <div id="${toastId}" class="toast align-items-center text-white ${toastType.class} border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body d-flex align-items-center">
                    <i class="fas ${toastType.icon} me-2"></i>
                    ${message}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    `;
    
    toastContainer.insertAdjacentHTML('beforeend', toastHTML);
    
    const toastElement = document.getElementById(toastId);
    const toast = new bootstrap.Toast(toastElement, {
        autohide: true,
        delay: duration
    });
    
    toast.show();
    
    // Supprimer l'élément du DOM après fermeture
    toastElement.addEventListener('hidden.bs.toast', function() {
        toastElement.remove();
    });
}

// Auto-hide alerts après 5 secondes
document.addEventListener('DOMContentLoaded', function() {
    const alerts = document.querySelectorAll('.alert:not(.alert-permanent)');
    alerts.forEach(function(alert) {
        setTimeout(function() {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        }, 5000);
    });
});
</script>

<style>
.alert {
    border-left: 4px solid;
}

.alert-success {
    border-left-color: #198754;
}

.alert-danger {
    border-left-color: #dc3545;
}

.alert-warning {
    border-left-color: #ffc107;
}

.alert-info {
    border-left-color: #0dcaf0;
}

.toast {
    min-width: 300px;
}
</style>
