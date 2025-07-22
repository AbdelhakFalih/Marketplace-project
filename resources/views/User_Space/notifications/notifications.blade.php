<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Notifications</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<header>
    <h1>Marketplace Coopératives</h1>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Accueil</a></li>
            <li><a href="{{ route('profil') }}">Mon Profil</a></li>
            <li><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
        </ul>
    </nav>
</header>

<main class="form-page">
    <h2>Mes notifications</h2>

    <div class="notification-list">
        <div class="notification">
            <p><strong>📩 Email :</strong> Votre offre "Huile d’argan 1L" a reçu un nouvel intérêt.</p>
            <button class="btn">Marquer comme lu</button>
            <button class="btn-delete">Supprimer</button>
        </div>

        <div class="notification">
            <p><strong>📱 WhatsApp :</strong> Nouvelle demande de contact pour votre offre.</p>
            <button class="btn">Marquer comme lu</button>
            <button class="btn-delete">Supprimer</button>
        </div>

        <div class="notification">
            <p><strong>📨 SMS :</strong> Votre profil a été validé avec succès.</p>
            <button class="btn">Marquer comme lu</button>
            <button class="btn-delete">Supprimer</button>
        </div>
    </div>
</main>

<footer>
    <p>&copy; 2025 Marketplace Coopératives</p>
</footer>
</body>
</html>
