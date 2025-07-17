<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Profil – Marketplace Coopératives</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<header>
    <h1>Marketplace Coopératives</h1>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Accueil</a></li>
            <li><a href="{{ route('logout') }}">Déconnexion</a></li>
        </ul>
    </nav>
</header>

<main class="form-page">
    <h2>Mon profil</h2>
    <form action="#" method="post" class="form-login">
        <label for="fullname">Nom complet</label>
        <input type="text" id="fullname" name="fullname" value="Exemple Nom" />

        <label for="email">Adresse Email</label>
        <input type="email" id="email" name="email" value="exemple@mail.com" />

        <label for="adresse">Adresse</label>
        <input type="text" id="adresse" name="adresse" value="Casablanca, Maroc" />

        <button type="submit" class="btn">Modifier</button>
    </form>
</main>

<footer>
    <p>&copy; 2025 Marketplace Coopératives</p>
</footer>
</body>
</html>
