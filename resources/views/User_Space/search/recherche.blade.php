<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Recherche de produits/services</title>
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
    <h2>Recherche de produits ou services</h2>

    <form action="#" method="get" class="form-login">
        <label for="motcle">Mot-clé</label>
        <input type="text" id="motcle" name="motcle" placeholder="Ex: huile d'argan" />

        <label for="categorie">Catégorie</label>
        <select id="categorie" name="categorie">
            <option value="">-- Toutes --</option>
            <option value="produit">Produit</option>
            <option value="service">Service</option>
        </select>

        <label for="localite">Localité</label>
        <input type="text" id="localite" name="localite" placeholder="Ex: Casablanca" />

        <button type="submit" class="btn">Rechercher</button>
    </form>

    <section style="margin-top: 40px;">
        <h3>Résultats de la recherche :</h3>
        <ul style="list-style: none; padding-left: 0;">
            <li>
                <strong>Huile d'argan 1L</strong><br>
                Prix : 100 MAD<br>
                Localité : Agadir<br>
                <a href="{{ route('offre.detail') }}">Voir les détails</a>
            </li>
            <hr>
            <li>
                <strong>Service de transport régional</strong><br>
                Catégorie : Service<br>
                Localité : Marrakech<br>
                <a href="{{ route('offre.detail') }}">Voir les détails</a>
            </li>
        </ul>
    </section>
</main>

<footer>
    <p>&copy; 2025 Marketplace Coopératives</p>
</footer>
</body>
</html>
