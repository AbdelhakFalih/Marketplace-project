<nav class="navbar navbar-expand-lg" style="background: linear-gradient(90deg, #2e7d32, #1b5e20);">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="filter: invert(1);"></span> <!-- Inverted for contrast -->
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
                <a href="<?php echo e(url('/login')); ?>" class="btn btn-outline-light mx-2" data-i18n="login" style="border-color: rgba(255, 255, 255, 0.5); transition: all 0.3s ease;">Connexion</a>
                <a href="<?php echo e(url('/register')); ?>" class="btn btn-outline-light mx-2" data-i18n="register" style="border-color: rgba(255, 255, 255, 0.5); transition: all 0.3s ease;">Inscription</a>
                <button id="lang-fr" title="Français" class="btn p-0 mx-2 lang-btn" onclick="changeLanguage('fr')" style="width: 40px; height: 40px; transition: transform 0.3s ease;">
                    <img src="<?php echo e(asset('images/france.jpg')); ?>" alt="Français" class="w-100 h-100 rounded-circle" style="object-fit: cover;">
                </button>
                <span class="text-white mx-2" style="font-size: 24px;">|</span>
                <button id="lang-ar" title="العربية" class="btn p-0 mx-2 lang-btn" onclick="changeLanguage('ar')" style="width: 40px; height: 40px; transition: transform 0.3s ease;">
                    <img src="<?php echo e(asset('images/maroc.jpg')); ?>" alt="Arabe" class="w-100 h-100 rounded-circle" style="object-fit: cover;">
                </button>
            </div>
        </div>
    </div>
</nav>

<style>
    .navbar {
        padding: 15px 0;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: background 0.3s ease;
    }

    .navbar-brand {
        font-size: 1.5rem;
        letter-spacing: 1px;
        transition: color 0.3s ease;
    }

    .navbar-brand:hover {
        color: #ffffff;
        text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    }

    .nav-link {
        font-weight: 500;
        padding: 10px 15px;
        border-radius: 6px;
        transition: all 0.3s ease;
    }

    .nav-link:hover, .nav-link.active {
        background: rgba(255, 255, 255, 0.15);
        color: #ffffff;
        transform: translateY(-2px);
    }

    .btn-outline-light {
        color: #ffffff;
        border-width: 2px;
    }

    .btn-outline-light:hover {
        background: rgba(255, 255, 255, 0.2);
        color: #ffffff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(46, 125, 50, 0.3);
    }

    .lang-btn {
        background: transparent;
        border: none;
        overflow: hidden;
    }

    .lang-btn:hover {
        transform: scale(1.1);
    }

    .lang-btn img {
        transition: opacity 0.3s ease;
    }

    .lang-btn:hover img {
        opacity: 0.8;
    }

    @media (max-width: 768px) {
        .navbar-collapse {
            background: rgba(46, 125, 50, 0.95);
            padding: 10px;
            border-radius: 8px;
            margin-top: 10px;
        }
        .nav-link {
            padding: 8px;
            text-align: center;
        }
        .d-flex {
            flex-direction: column;
            gap: 10px;
        }
        .btn-outline-light {
            width: 100%;
        }
    }
</style>
<?php /**PATH C:\Users\hp\Application-Marketplace\resources\views/Menu.blade.php ENDPATH**/ ?>