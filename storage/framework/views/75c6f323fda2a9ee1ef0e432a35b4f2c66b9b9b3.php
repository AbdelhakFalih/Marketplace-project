<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title><?php echo e($user_data->name); ?></title>
    <style>
        .full-width-card {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
        }
        .card-img-left {
            max-height: 100%;
            object-fit: cover;
            border-radius: 0;
        }
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #0d6efd;
            color: white;
            text-align: center;
            padding: 15px;
        }
        .list-group-item {
            background-color: transparent;
            border: none;
            padding: 8px 0;
        }
        .password-warning {
            color: #dc3545;
            font-size: 0.9rem;
            margin-top: 5px;
        }
    </style>
</head>
<body>
<div class="full-width-card">
    <div class="card w-100" style="max-width: 1000px;">
        <div class="card-header">
            <h2>Profil de <?php echo e($user_data->name); ?></h2>
        </div>
        <div class="row g-0">
            <div class="col-md-6">
                <img src="<?php echo e(asset('images/user.png')); ?>" class="card-img-left img-fluid" alt="<?php echo e($user_data->name); ?>" style="width: 100%; height: auto; max-height: 500px;">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Nom :</strong> <?php echo e($user_data->name); ?></li>
                        <li class="list-group-item"><strong>Email :</strong> <?php echo e($user_data->email); ?></li>
                        <li class="list-group-item"><strong>Rôle :</strong> <?php echo e($user_data->role); ?></li>
                        <li class="list-group-item"><strong>Mot de passe :</strong> <?php echo e($user_data->password ?? 'Non disponible'); ?></li>
                        <li class="list-group-item"><strong>Date d'Inscription :</strong> <?php echo e($user_data->created_at); ?></li>
                        <li class="list-group-item"><strong>Dernière modification :</strong> <?php echo e($user_data->updated_at); ?></li>
                    </ul>
                    <div class="password-warning">
                        * Affichage du mot de passe à des fins de démonstration uniquement. Ne pas utiliser en production.
                    </div>
                    <div class="card-footer text-center mt-3">
                        <a href="#" class="btn btn-secondary" onclick="window.history.back(); return false;">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\hp\Application-Marketplace\resources\views/Detail.blade.php ENDPATH**/ ?>