<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Préférences de notifications</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <h1>🔔 Préférences de Notification</h1>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Accueil</a></li>
            <li><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
        </ul>
    </nav>
</header>

<main class="form-page">
    <h2>📬 Choisissez vos canaux de notification</h2>
    <form class="form-login">
        <label>
            <input type="checkbox" name="email" checked>
            📧 Recevoir par e-mail
        </label>

        <label>
            <input type="checkbox" name="sms">
            📱 Recevoir par SMS
        </label>

        <label>
            <input type="checkbox" name="whatsapp">
            💬 Recevoir par WhatsApp
        </label>

        <button type="submit">💾 Enregistrer mes préférences</button>
    </form>
</main>

<footer>
    <p>&copy; 2025 Marketplace Coopératives</p>
</footer>
</body>
</html>
