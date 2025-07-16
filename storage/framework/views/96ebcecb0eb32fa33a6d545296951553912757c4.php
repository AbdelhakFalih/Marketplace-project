<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 text-center">
        <div class="alert alert-danger">
            <h1 class="display-4">Oops!</h1>
            <p class="lead"><?php echo e($msg); ?></p>
        </div>
        <a href="<?php echo e(url('/')); ?>" class="btn btn-primary mt-3">Retour à l'accueil</a>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\hp\Application-Marketplace\resources\views/Errors_Page.blade.php ENDPATH**/ ?>