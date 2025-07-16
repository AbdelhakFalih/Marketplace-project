<?php if($compo == "Menu principale"): ?>
    <nav class="navbar navbar-expand-lg" style="background: linear-gradient(90deg, #2e7d32, #1b5e20);">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <a class="navbar-brand text-white fw-bold" href="#" data-i18n="header">Marketplace Coopératives</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white active" aria-current="page" href="<?php echo e(url('/')); ?>" data-i18n="home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo e(url('/products')); ?>" data-i18n="products">Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo e(url('/about')); ?>" data-i18n="about">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo e(url('/contact')); ?>" data-i18n="contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo e(url('/cooperatives')); ?>" data-i18n="cooperatives">Coopératives</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <a href="<?php echo e(url('/login')); ?>" class="btn btn-outline-light mx-2" data-i18n="login">Connexion</a>
                    <a href="<?php echo e(url('/register')); ?>" class="btn btn-outline-light mx-2" data-i18n="register">Inscription</a>
                    <button id="lang-fr" title="Français" class="btn p-0 mx-2 lang-btn" onclick="changeLanguage('fr')">
                        <img src="<?php echo e(asset('images/france.jpg')); ?>" alt="Français" class="w-100 h-100 rounded-circle">
                    </button>
                    <span class="text-white mx-2">|</span>
                    <button id="lang-ar" title="العربية" class="btn p-0 mx-2 lang-btn" onclick="changeLanguage('ar')">
                        <img src="<?php echo e(asset('images/maroc.jpg')); ?>" alt="Arabe" class="w-100 h-100 rounded-circle">
                    </button>
                </div>
            </div>
        </div>
    </nav>
<?php elseif($compo == "Menu User-space"): ?>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarUserSpace" aria-controls="navbarUserSpace" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <a class="navbar-brand text-white fw-bold" href="<?php echo e(url('/user-space')); ?>" data-i18n="userDashboard">Tableau de bord</a>
            <div class="collapse navbar-collapse" id="navbarUserSpace">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo e(url('/user-space/profile')); ?>" data-i18n="profile">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo e(url('/user-space/offers')); ?>" data-i18n="offers">Mes Offres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo e(url('/user-space/notifications')); ?>" data-i18n="notifications">Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo e(url('/logout')); ?>" data-i18n="logout">Déconnexion</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <button id="lang-fr" title="Français" class="btn p-0 mx-2 lang-btn" onclick="changeLanguage('fr')">
                        <img src="<?php echo e(asset('images/france.jpg')); ?>" alt="Français" class="w-100 h-100 rounded-circle">
                    </button>
                    <span class="text-white mx-2">|</span>
                    <button id="lang-ar" title="العربية" class="btn p-0 mx-2 lang-btn" onclick="changeLanguage('ar')">
                        <img src="<?php echo e(asset('images/maroc.jpg')); ?>" alt="Arabe" class="w-100 h-100 rounded-circle">
                    </button>
                </div>
            </div>
        </div>
    </nav>
<?php elseif($compo == "sidebar"): ?>
    <aside class="sidebar">
        <a href="ajouter-offre.html" data-i18n="addOffer">➕ Ajouter une offre</a>
        <a href="ajouter-demande.html" data-i18n="addRequest">📌 Ajouter une demande</a>
        <a href="notifications.html" data-i18n="viewNotifications">🔔 Voir les notifications</a>
        <a href="profil.html" data-i18n="editProfile">👤 Modifier mon profil</a>
    </aside>
<?php elseif($compo == "sidebar admin"): ?>
    <aside class="sidebar">
        <a href="#" data-i18n="addUser">➕ Ajouter un utilisateur</a>
        <a href="#" data-i18n="ViewOffer">📌 Voir les offres</a>
        <a href="#" data-i18n="ViewRequest">📌 Voir les demandes</a>
        <a href="#" data-i18n="LinkOfferRequest">📌 Lier une demande avec offre</a>
        <a href="#" data-i18n="viewNotifications">🔔 Voir les notifications</a>
        <a href="#" data-i18n="editProfile">👤 Modifier mon profil</a>
    </aside>
<?php elseif($compo == "Footer"): ?>
    <footer class="bg-light text-center py-4">
        <p data-i18n="copyright">© 2025 Marketplace Coopératives - Tous droits réservés</p>
        <div class="mt-2">
            <a href="<?php echo e(url('/terms')); ?>" class="text-dark mx-2" data-i18n="terms">Conditions d'utilisation</a>
            <a href="<?php echo e(url('/privacy')); ?>" class="text-dark mx-2" data-i18n="privacy">Politique de confidentialité</a>
        </div>
    </footer>
<?php elseif($compo == "Errors_Page"): ?>
    <div class="container mt-5 text-center">
        <div class="alert alert-danger">
            <h1 class="display-4" data-i18n="errorOops">Oops!</h1>
            <p class="lead" data-i18n="errorMessage"><?php echo e($msg); ?></p>
        </div>
        <a href="<?php echo e(url('/')); ?>" class="btn btn-primary mt-3" data-i18n="backHome">Retour à l'accueil</a>
    </div>
<?php endif; ?>
<?php /**PATH C:\Users\hp\Application-Marketplace\resources\views/Components.blade.php ENDPATH**/ ?>