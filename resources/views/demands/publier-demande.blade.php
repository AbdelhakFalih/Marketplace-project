<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Publier une demande</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<header>
  <h1>Marketplace Coopératives</h1>
  <nav>
    <ul>
      <li><a href="{{ route('home') }}">Accueil</a></li>
      <li><a href="{{ route('profil') }}">Mon Profil</a></li>
      <li><a href="{{ route('logout') }}">Déconnexion</a></li>
    </ul>
  </nav>
</header>

<main class="form-page">
  <h2>Soumettre une demande</h2>
  <form action="#" method="post" class="form-login">

    <label for="type">Type de demande</label>
    <select id="type" name="type" required>
      <option value="">-- Choisir --</option>
      <option value="produit">Produit</option>
      <option value="service">Service</option>
    </select>

    <label for="titre">Titre de la demande</label>
    <input type="text" id="titre" name="titre" required />

    <label for="description">Description détaillée</label>
    <textarea id="description" name="description" rows="4" placeholder="Décrivez ce que vous cherchez..." required></textarea>

    <label for="ville">Ville / Région</label>
    <input type="text" id="ville" name="ville" required />

    <label for="delai">Délai souhaité (ex. 2 semaines)</label>
    <input type="text" id="delai" name="delai" />

    <button type="submit" class="btn">Publier la demande</button>
  </form>
</main>

<footer>
  <p>&copy; 2025 Marketplace Coopératives</p>
</footer>
</body>
</html>
