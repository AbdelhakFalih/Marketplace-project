<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visualisation des Intérêts</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
  <h1>Mes Offres - Intérêt des utilisateurs</h1>
  <nav>
    <ul>
      <li><a href="{{ route('home') }}">Accueil</a></li>
      <li><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
    </ul>
  </nav>
</header>

<main class="form-page">
  <h2>Résumé des Intérêts</h2>

  <table class="interet-table">
    <thead>
    <tr>
      <th>Produit</th>
      <th>Nombre d'intérêts</th>
      <th>Date de publication</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>Huile d’argan bio</td>
      <td>15</td>
      <td>20/06/2025</td>
    </tr>
    <tr>
      <td>Miel pur du Moyen Atlas</td>
      <td>9</td>
      <td>22/06/2025</td>
    </tr>
    <tr>
      <td>Tapis berbère traditionnel</td>
      <td>4</td>
      <td>25/06/2025</td>
    </tr>
    </tbody>
  </table>
</main>

<footer>
  <p>&copy; 2025 Marketplace Coopératives</p>
</footer>
</body>
</html>
