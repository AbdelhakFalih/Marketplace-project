<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Gestion des publications</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<header>
    <h1>🛠️ Gestion de mes Offres et Demandes</h1>
    <nav>
        <ul>
            <li><a href="{{ route('dashboard') }}">📊 Tableau de bord</a></li>
            <li><a href="{{ route('profil') }}">👤 Profil</a></li>
            <li><a href="{{ route('home') }}">🏠 Accueil</a></li>
        </ul>
    </nav>
</header>

<main class="gestion-page">
    <h2>📦 Mes Offres</h2>
    <table>
        <thead>
        <tr>
            <th>Produit</th>
            <th>Prix</th>
            <th>État</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Huile d’olive bio</td>
            <td>100 MAD</td>
            <td>Publié</td>
            <td>
                <a href="#">✏️ Modifier</a> |
                <a href="#">🗑️ Supprimer</a>
            </td>
        </tr>
        <!-- Tu peux copier/coller ce bloc <tr> pour d'autres offres -->
        </tbody>
    </table>

    <h2>📥 Mes Demandes</h2>
    <table>
        <thead>
        <tr>
            <th>Service</th>
            <th>Date</th>
            <th>État</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Transport coopératif</td>
            <td>05/07/2025</td>
            <td>En attente</td>
            <td>
                <a href="#">✏️ Modifier</a> |
                <a href="#">🗑️ Supprimer</a>
            </td>
        </tr>
        </tbody>
    </table>
</main>

<footer>
    <p>&copy; 2025 Marketplace Coopératives – Tous droits réservés</p>
</footer>
</body>
</html>
