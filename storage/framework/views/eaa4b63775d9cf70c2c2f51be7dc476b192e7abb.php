<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Connexion – Marketplace Coopératives</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/app.css" />

</head>
<body>
<header>
    <?php echo $__env->make('Menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</header>

<main class="form-page">
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
        <a href="register.html">Pas de compte ? Inscrivez-vous</a><br />
        <a href="#">Mot de passe oublié ?</a>
    </p>
</main>

<footer>
    <p>&copy; 2025 Marketplace Coopératives</p>
</footer>
<script src="js/app.js"></script>
</body>
</html>
<?php /**PATH C:\Users\hp\Application-Marketplace\resources\views/login.blade.php ENDPATH**/ ?>