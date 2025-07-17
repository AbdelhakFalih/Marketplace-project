<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Mes Transactions</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<header>
    <h1>Marketplace Coopératives</h1>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Accueil</a></li>
            <li><a href="{{ route('profil') }}">Mon Profil</a></li>
            <li><a href="{{ route('notifications.index') }}">Notifications</a></li>
        </ul>
    </nav>
</header>

<main class="form-page">
    <h2>Mes Transactions</h2>

    <table class="transactions-table">
        <thead>
        <tr>
            <th>Date</th>
            <th>Produit</th>
            <th>Montant</th>
            <th>Frais</th>
            <th>Statut</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>02/07/2025</td>
            <td>Huile d'olive bio 5L</td>
            <td>200 MAD</td>
            <td>10 MAD</td>
            <td><span class="status completed">Complétée</span></td>
        </tr>
        <tr>
            <td>28/06/2025</td>
            <td>Miel pur 500g</td>
            <td>70 MAD</td>
            <td>5 MAD</td>
            <td><span class="status pending">En cours</span></td>
        </tr>
        <tr>
            <td>20/06/2025</td>
            <td>Argile naturelle</td>
            <td>50 MAD</td>
            <td>0 MAD</td>
            <td><span class="status cancelled">Annulée</span></td>
        </tr>
        </tbody>
    </table>
</main>

<footer>
    <p>&copy; 2025 Marketplace Coopératives</p>
</footer>
</body>
</html>
