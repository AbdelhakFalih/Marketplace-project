<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title><?php if(isset($action) && $action == 'register'): ?> <?php echo e(__('registerTitle')); ?> <?php else: ?> <?php echo e(__('loginTitle')); ?> <?php endif; ?> – <?php echo e(__('header')); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
<header>
    <?php echo $__env->make('Components', ['compo' => 'Menu principale'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</header>

<main class="form-page">
    <div class="form-wrapper">
        <?php if(isset($action) && $action == 'register'): ?>
            <h2 data-i18n="registerTitle">Inscription</h2>
            <form action="/sinscrire" method="post" class="form-login">
                <?php echo csrf_field(); ?>
                <?php if($errors->any()): ?>
                    <div class="error">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($error); ?><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
                <label for="name" data-i18n="fullName">Nom complet</label>
                <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" required />

                <label for="email" data-i18n="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" required />

                <label for="password" data-i18n="password">Mot de passe</label>
                <input type="password" id="password" name="password" required />

                <label for="confirm_password" data-i18n="confirmPassword">Confirmer le mot de passe</label>
                <input type="password" id="confirm_password" name="confirm_password" required />

                <label for="role" data-i18n="role">Rôle</label>
                <select id="role" name="role" required>
                    <option value="" disabled <?php echo e(old('role') ? '' : 'selected'); ?> data-i18n="selectRole">Choisissez votre rôle</option>
                    <option value="cooperative" <?php echo e(old('role') == 'cooperative' ? 'selected' : ''); ?> data-i18n="cooperative">Coopérative</option>
                    <option value="commerçant" <?php echo e(old('role') == 'commerçant' ? 'selected' : ''); ?> data-i18n="merchant">Commerçant</option>
                </select>

                <button type="submit" class="btn btn-success" data-i18n="signUp">S'inscrire</button>
            </form>
            <p class="form-footer">
                <a href="<?php echo e(url('/login')); ?>" data-i18n="alreadyAccount">Déjà un compte ? Connectez-vous</a>
            </p>
        <?php else: ?>
            <h2 data-i18n="loginTitle">Connexion</h2>
            <form action="/se_connecter" method="post" class="form-login">
                <?php echo csrf_field(); ?>
                <label for="email" data-i18n="email">Email</label>
                    <input type="email" id="email" name="email"  required />
                    <label for="password" data-i18n="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required />
                    <button type="submit" class="btn btn-success" data-i18n="login">Se connecter</button>
            </form>
            <p class="form-footer">
                <a href="<?php echo e(url('/register')); ?>" data-i18n="noAccount">Pas de compte ? Inscrivez-vous</a><br />
                <a href="#" data-i18n="forgotPassword">Mot de passe oublié ?</a>
            </p>
        <?php endif; ?>
    </div>
</main>

<?php echo $__env->make('Components', ['compo' => 'Footer'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel" data-i18n="loginRequiredModal">Connexion Requise</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p data-i18n="loginPrompt">Veuillez vous connecter pour accéder au contenu.</p>
                <a href="/login" class="btn btn-success" data-i18n="login">Se connecter</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\hp\Application-Marketplace\resources\views/Auth.blade.php ENDPATH**/ ?>