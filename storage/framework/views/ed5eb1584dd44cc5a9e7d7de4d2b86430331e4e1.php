<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <title><?php if(isset($role)): ?> <?php echo e(ucfirst($role)); ?> <?php echo e(__('userDashboard')); ?> <?php else: ?> <?php echo e(__('adminDashboard')); ?> <?php endif; ?></title>
</head>
<body>
<header>
    <?php echo $__env->make('Components', ['compo' => 'Menu User-space'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</header>

<div class="header">
    <h1 data-i18n="welcome">Bienvenue sur votre <?php if($role === 'admin'): ?> <?php echo e(__('adminDashboard')); ?> <?php else: ?> <?php echo e(__('userDashboard')); ?> <?php echo e(ucfirst($role)); ?> <?php endif; ?></h1>
</div>

<?php if($role == 'admin'): ?>
    <div class="dashboard">
        <?php echo $__env->make('Components', ['compo' => 'sidebar admin'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="dashboard-content">
            <div class="container">
                <h2 class="section-title" data-i18n="accountManagement">Gestion des Comptes</h2>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-3">
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col">
                            <div class="card h-100">
                                <img src="<?php echo e(asset('images/user.png')); ?>" class="card-img-top" alt="<?php echo e($user->name); ?>" style="height: 150px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo e($user->name); ?></h5>
                                    <p class="card-text" data-i18n="roleLabel">Rôle : <?php echo e($user->role); ?></p>
                                    <a href="/Detail?id=<?php echo e($user->id); ?>" class="btn btn-primary" data-i18n="viewDetails">Voir Détails</a>
                                    <a href="/Delete?id=<?php echo e($user->id); ?>" class="btn btn-danger" data-i18n="delete">Supprimer</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="container mt-5">
                <h2 class="section-title" data-i18n="offerManagement">Gestion des Offres</h2>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-3">
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?php echo e(asset('images/panier.png')); ?>" class="card-img-top" alt="Offre 1" style="height: 150px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">Offre 1</h5>
                                <p class="card-text">Description de l'offre 1</p>
                                <a href="#" class="btn btn-primary" data-i18n="viewDetails">Voir Détails</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php elseif($role == 'cooperative' || $role == 'commerçant'): ?>
    <div class="dashboard">
        <?php echo $__env->make('Components', ['compo' => 'sidebar'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="dashboard-content">
            <section class="dashboard">
                <h2 data-i18n="activitySummary">Résumé de votre activité</h2>
                <div class="stats-grid">
                    <div class="stat-card">
                        <h3 data-i18n="publishedOffers">Offres publiées</h3>
                        <p>5</p>
                    </div>
                    <div class="stat-card">
                        <h3 data-i18n="sentRequests">Demandes envoyées</h3>
                        <p>3</p>
                    </div>
                    <div class="stat-card">
                        <h3 data-i18n="notifications">Notifications</h3>
                        <p>7</p>
                    </div>
                    <div class="stat-card">
                        <h3 data-i18n="earnedPoints">Points gagnés</h3>
                        <p>120</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php else: ?>
    <div class="container mt-5 text-center">
        <?php echo $__env->make('Components', ['compo' => 'Errors_Page'], ['msg' => __('loginRequired')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php endif; ?>

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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var loginFailed = <?php echo json_encode(isset($loginFailed) && $loginFailed, 15, 512) ?>;
        if (loginFailed) {
            var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
            loginModal.show();
        }
    });
</script>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\hp\Application-Marketplace\resources\views/User_Space.blade.php ENDPATH**/ ?>