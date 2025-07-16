<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title><?php if(isset($action) && $action == 'register'): ?> Inscription <?php else: ?> Connexion <?php endif; ?> – Marketplace Coopératives</title>
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/login.css" />
</head>
<body>
<header>
    <?php echo $__env->make('Menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</header>

<main class="form-page">
    <?php if(isset($action) && $action == 'register'): ?>
        <h2>Inscription</h2>
        <?php echo csrf_field(); ?>
        <form action="/sinscrire" method="post" class="form-login">
            <label for="name">Nom complet</label>
            <input type="text" id="name" name="name" required />

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required />

            <label for="confirm_password">Confirmer le mot de passe</label>
            <input type="password" id="confirm_password" name="confirm_password" required />

            <label for="role">Rôle</label>
            <select id="role" name="role" required>
                <option value="" disabled selected>Choisissez votre rôle</option>
                <option value="cooperative">Coopérative</option>
                <option value="merchant">Commerçant</option>
            </select>

            <button type="submit" class="btn">S'inscrire</button>
        </form>
        <p class="form-footer">
            <a href="<?php echo e(url('/login')); ?>">Déjà un compte ? Connectez-vous</a>
        </p>
    <?php else: ?>
        <h2>Connexion</h2>
        <form action="/se_connecter" method="post" class="form-login">
            <?php echo csrf_field(); ?>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required />

            <button type="submit" class="btn">Se connecter</button>
        </form>
        <p class="form-footer">
            <a href="<?php echo e(url('/register')); ?>">Pas de compte ? Inscrivez-vous</a><br />
            <a href="#">Mot de passe oublié ?</a>
        </p>
    <?php endif; ?>
</main>

<footer>
    <p>&copy; 2025 Marketplace Coopératives</p>
</footer>

<!-- Modal for Login -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Connexion Requise</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Veuillez vous connecter pour accéder au contenu.</p>
                <a href="/login" class="btn btn-primary">Se connecter</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var loginFailed = <?php echo json_encode(isset($loginFailed) && $loginFailed, 15, 512) ?>; // Check if loginFailed is set and true
        if (loginFailed) {
            var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
            loginModal.show();
        }
    });
</script>
</body>
</html>
<?php /**PATH C:\Users\hp\Application-Marketplace\resources\views/Auth.blade.php ENDPATH**/ ?>
