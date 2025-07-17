<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Publier une offre</title>
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
  <h2>Publier une offre de produit</h2>
  <form action="#" method="post" enctype="multipart/form-data" class="form-login">

    <label for="nom">Nom du produit</label>
    <input type="text" id="nom" name="nom" required />

    <label for="fiche">Fiche technique</label>
    <textarea id="fiche" name="fiche" rows="4" placeholder="Décrivez les caractéristiques du produit..." required></textarea>

    <label for="flyer">Flyer (image ou PDF)</label>
    <input type="file" id="flyer" name="flyer" accept=".jpg,.jpeg,.png,.pdf" required />

    <label for="prix">Prix (en MAD)</label>
    <input type="number" id="prix" name="prix" min="0" required />

    <label for="livraison">Options de livraison</label>
    <select id="livraison" name="livraison" required>
      <option value="">-- Sélectionner --</option>
      <option value="domicile">Livraison à domicile</option>
      <option value="mag1">Magasin Casablanca</option>
      <option value="mag2">Magasin Rabat</option>
      <option value="local">Local de la coopérative</option>
    </select>

    <button type="submit" class="btn">Publier l'offre</button>
  </form>
</main>

<footer>
  <p>&copy; 2025 Marketplace Coopératives</p>
</footer>
</body>
</html>
