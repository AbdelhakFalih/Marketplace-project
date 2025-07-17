<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Système de points</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <h1>🎯 Système de Points</h1>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Accueil</a></li>
            <li><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
        </ul>
    </nav>
</header>

<main class="form-page">
    <h2>📊 Mes points</h2>
    <p><strong>Solde actuel :</strong> <span style="color: #2e7d32;">230 points</span></p>

    <h3>🪙 Historique des gains</h3>
    <ul class="points-list">
        <li>+50 pts : Première offre publiée</li>
        <li>+30 pts : Demande répondue avec succès</li>
        <li>+100 pts : Transaction validée</li>
        <li>+50 pts : Coopérative notée 5 étoiles</li>
    </ul>

    <h3>🎁 Comment utiliser mes points ?</h3>
    <ul class="points-list">
        <li>🎫 200 pts = mise en avant de votre offre pendant 1 semaine</li>
        <li>📣 300 pts = promotion sur la page d'accueil</li>
        <li>🚚 100 pts = réduction des frais logistiques</li>
    </ul>

    <p style="margin-top: 20px;">Les points sont attribués automatiquement selon vos activités sur la plateforme.</p>
</main>

<footer>
    <p>&copy; 2025 Marketplace Coopératives</p>
</footer>
</body>
</html>
