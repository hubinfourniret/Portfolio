<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Hubin Fourniret</title>
    <link rel="stylesheet" href="style.css">
</head>
<button id="backToTop" class="back-to-top">↑ Haut</button>
<script>
    const btn = document.getElementById("backToTop");

    window.onscroll = () => {
        btn.style.display = window.scrollY > 300 ? "block" : "none";
    };

    btn.onclick = () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };
</script>
<body>
<header>
    <h1>Portfolio - Hubin Fourniret</h1>
    <p>BTS SIO SLAM - Lycée Sainte-Ursule (Caen)</p>
</header>

<nav>
    <a href="index.php">Accueil</a>
    <a href="preuves.php">Réalisations</a>
    <a href="veille.php">Veille</a>
</nav>

