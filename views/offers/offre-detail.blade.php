<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Détail de l'offre</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<header>
  <h1>Marketplace Coopératives</h1>
  <nav>
    <ul>
      <li><a href="{{ route('home') }}">Accueil</a></li>
      <li><a href="{{ route('recherche') }}">Retour à la recherche</a></li>
      <li><a href="{{ route('profil') }}">Mon Profil</a></li>
    </ul>
  </nav>
</header>

<main class="form-page">
  <h2>Détails de l'offre</h2>

  <section style="text-align: left;">
    <h3>Produit : Huile d'argan pure 1L</h3>
    <p><strong>Coopérative :</strong> Coopérative Amazigh</p>
    <p><strong>Localité :</strong> Agadir</p>
    <p><strong>Prix :</strong> 120 MAD</p>
    <p><strong>Conditions de livraison :</strong> À domicile ou retrait en magasin (Agadir)</p>
    <p><strong>Description :</strong> Huile d’argan biologique extraite à froid, 100% pure et naturelle, idéale pour la cuisine et les soins cosmétiques.</p>
    <p><strong>Fiche technique :</strong> <a href="#">Télécharger PDF</a></p>
    <p><strong>Flyer :</strong> <a href="#">Voir le flyer</a></p>
  </section>

  <form action="#" method="post" style="margin-top: 30px;">
    <label>
      <input type="checkbox" name="interet" required>
      Je suis intéressé par ce produit
    </label><br><br>
    <button type="submit" class="btn">Manifester mon intérêt</button>
  </form>
</main>

<footer>
  <p>&copy; 2025 Marketplace Coopératives</p>
</footer>
</body>
</html>
