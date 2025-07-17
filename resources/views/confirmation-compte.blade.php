<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de Compte</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <h1>Marketplace Coopératives</h1>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Accueil</a></li>
            <li><a href="{{ route('login') }}">Se connecter</a></li>
        </ul>
    </nav>
</header>

<main class="form-page">
    <h2>Bienvenue !</h2>
    <p>Votre compte a été créé avec succès 🎉</p>

    <p>Veuillez vérifier votre adresse e-mail pour confirmer votre compte.</p>
    <p>Une fois confirmé, vous pourrez :</p>

    <ul style="text-align: left; margin-top: 20px;">
        <li>📌 Compléter votre profil</li>
        <li>📦 Publier vos offres et vos demandes</li>
        <li>🔔 Recevoir des notifications</li>
        <li>🤝 Participer aux transactions avec d'autres membres</li>
    </ul>

    <p style="margin-top: 30px;">Besoin d’aide ? <a href="{{ route('admin.contact.send') }}">Contactez l’administrateur</a></p>
</main>

<footer>
    <p>&copy; 2025 Marketplace Coopératives</p>
</footer>
</body>
</html>
