<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validation du Profil</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
  <h1>Marketplace Coopératives</h1>
  <nav>
    <ul>
      <li><a href="{{ route('home') }}">Accueil</a></li>
      <li><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
    </ul>
  </nav>
</header>

<main class="form-page">
  <h2>🎉 Profil validé avec succès</h2>
  <p>Votre profil a été vérifié et validé par notre équipe.</p>

  <p>Vous pouvez maintenant :</p>
  <ul style="text-align: left; margin-top: 20px;">
    <li>➕ Publier vos <strong>offres de produits</strong></li>
    <li>🔍 Rechercher ou répondre à des <strong>demandes</strong></li>
    <li>💬 Être mis en contact avec d'autres coopératives ou commerçants</li>
  </ul>

  <div style="margin-top: 30px;">
    <a href="{{ route('publier.offre') }}" class="btn">Publier une offre</a>
    <a href="{{ route('publier.demande') }}" class="btn" style="margin-left: 10px;">Publier une demande</a>
  </div>
</main>

<footer>
  <p>&copy; 2025 Marketplace Coopératives</p>
</footer>
</body>
</html>
