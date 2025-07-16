<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Inscription – Marketplace Coopératives</title>
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/login.css" />
</head>
<body>
<header>
    <?php echo $__env->make('Menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</header>

<main class="form-page">
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

        <label for="role">Mot de passe</label>
        <select id="role" name="role" required>
            <option value="" disabled selected>Choisissez votre rôle</option>
            <option value="cooperative">Coopérative</option>
            <option value="merchant">Commerçant</option>
        </select>

        <button type="submit" class="btn">S'inscrire</button>
    </form>
    <p class="form-footer">
        <a href="login.html">Déjà un compte ? Connectez-vous</a>
    </p>
</main>

<footer>
    <p>&copy; 2025 Marketplace Coopératives</p>
</footer>
</body>
</html>
<?php /**PATH C:\Users\hp\Application-Marketplace\resources\views/register.blade.php ENDPATH**/ ?>