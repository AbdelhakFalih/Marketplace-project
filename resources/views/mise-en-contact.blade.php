<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mise en contact</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
  <h1>Transaction validée</h1>
  <nav>
    <ul>
      <li><a href="{{ route('home') }}">Accueil</a></li>
      <li><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
    </ul>
  </nav>
</header>

<main class="form-page">
  <h2>🎯 Mise en contact réussie</h2>

  <div class="contact-box">
    <h3>🧑‍🌾 Offreur (Coopérative)</h3>
    <p><strong>Nom :</strong> Coopérative Al Amal</p>
    <p><strong>Produit :</strong> Huile d'argan bio</p>
    <p><strong>Email :</strong> amal@coop.ma</p>
    <p><strong>Téléphone :</strong> +212 6 12 34 56 78</p>
  </div>

  <div class="contact-box">
    <h3>🛍️ Demandeur (Commerçant)</h3>
    <p><strong>Nom :</strong> Épicerie Bio Casablanca</p>
    <p><strong>Demande :</strong> 10L d'huile d'argan</p>
    <p><strong>Email :</strong> bio@epicerie.ma</p>
    <p><strong>Téléphone :</strong> +212 6 98 76 54 32</p>
  </div>

  <p style="margin-top: 20px;">✅ Vous pouvez maintenant finaliser la transaction.
    Un e-mail de confirmation a été envoyé aux deux parties.</p>
</main>

<footer>
  <p>&copy; 2025 Marketplace Coopératives</p>
</footer>
</body>
</html>
