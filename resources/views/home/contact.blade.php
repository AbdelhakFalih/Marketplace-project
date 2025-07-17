<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Administrateur</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

@section('content')
<header>
  <h1>Marketplace Coopératives</h1>
  <nav>
    <ul>
      <li><a href="index.html">Accueil</a></li>
      <li><a href="profil.html">Profil</a></li>
      <li><a href="notifications.html">Notifications</a></li>
    </ul>
  </nav>
</header>

<main class="form-page">
    <div class="container">
        <h2 class="text-center mb-4">Contacter l’Administrateur</h2>
        <form method="POST" action="{{ route('admin.contact.send') }}" class="mx-auto" style="max-width:500px;">
            @csrf
            <div class="mb-3">
                <label for="sujet" class="form-label">Sujet</label>
                <input type="text" id="sujet" name="sujet" class="form-control" placeholder="Ex: Problème d'accès au profil" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea id="message" name="message" rows="5" class="form-control" placeholder="Décrivez votre problème ou question ici..." required></textarea>
            </div>
            <button type="submit" class="btn btn-success w-100">Envoyer</button>
        </form>
        <div class="form-footer text-center mt-4">
            <p>Ou contactez-nous directement :</p>
            <p>📧 Email : admin@coopmaroc.ma</p>
            <p>📞 Téléphone : +212 6 12 34 56 78</p>
        </div>
    </div>
</main>
@endsection

<footer>
  <p>&copy; 2025 Marketplace Coopératives</p>
</footer>
</body>
</html>
