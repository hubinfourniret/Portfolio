<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hubin Fourniret - Développeur Fullstack</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(to bottom, #e6e6fa, #d3d3f3);
      color: #1e1e2f;
      line-height: 1.6;
    }

    header {
      background: linear-gradient(135deg, #4b0082, #6a0dad);
      color: white;
      padding: 3rem 1rem;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    header h1 {
      font-size: 2.5rem;
      font-weight: 800;
      margin-bottom: 0.5rem;
    }

    header p {
      font-size: 1.2rem;
      opacity: 0.9;
    }

    nav {
      background-color: #fff;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
      display: flex;
      justify-content: center;
      gap: 2rem;
      padding: 1rem 0;
    }

    nav a {
      text-decoration: none;
      color: #4b0082;
      font-weight: 600;
    }

    .section {
      max-width: 1000px;
      margin: 3rem auto;
      padding: 0 1.5rem;
    }

    .card {
      background-color: #fff;
      border-radius: 1rem;
      padding: 2rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      margin-bottom: 2rem;
    }

    .card h2 {
      color: #4b0082;
      margin-bottom: 1rem;
      font-size: 1.5rem;
    }

    .card ul {
      list-style: none;
      padding-left: 0;
    }

    .card ul li::before {
      content: '▹';
      color: #6a0dad;
      margin-right: 0.5rem;
    }

    footer {
      background-color: #1e1e2f;
      color: #ccc;
      text-align: center;
      padding: 2rem 1rem;
      margin-top: 4rem;
    }

    a {
      color: #4b0082;
    }

    .contact a {
      display: inline-block;
      margin: 0.2rem 0;
    }

    img {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
        object-fit: cover;
        display: block;
        margin: 1rem auto;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .zoomable {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
        cursor: zoom-in;
        transition: transform 0.3s ease;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .zoom-overlay {
        display: none;
        position: fixed;
        top: 0; left: 0;
        width: 100vw; height: 100vh;
        background: rgba(0, 0, 0, 0.8);
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .zoom-overlay img {
        max-width: 90%;
        max-height: 90%;
        border-radius: 12px;
        cursor: zoom-out;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.6);
    }

    @media (max-width: 600px) {
      header h1 {
        font-size: 2rem;
      }
    }

  </style>
</head>
<script>
    function openZoom(img) {
        const zoomOverlay = document.getElementById("zoomOverlay");
        const zoomedImage = document.getElementById("zoomedImage");
        zoomedImage.src = img.src;
        zoomOverlay.style.display = "flex";
    }

    function closeZoom() {
        document.getElementById("zoomOverlay").style.display = "none";
    }
</script>
<body>
  <header>
    <h1>Hubin Fourniret</h1>
    <p>Développeur Fullstack - Étudiant BTS SIO SLAM</p>
  </header>

  <nav>
    <a href="#presentation">Présentation</a>
    <a href="#parcours">Parcours</a>
    <a href="#projets">Projets</a>
    <a href="#contact">Contact</a>
  </nav>

  <section class="section" id="presentation">
    <div class="card">
      <h2>Présentation</h2>
      <p>Passionné par le développement web et les technologies modernes, je suis actuellement étudiant en BTS SIO SLAM au lycée Sainte-Ursule de Caen. Curieux, motivé et rigoureux, je cherche à intégrer un environnement stimulant pour progresser en tant que développeur fullstack.</p>
    </div>
  </section>

  <section class="section" id="parcours">
    <div class="card">
      <h2>Parcours scolaire</h2>
      <ul>
        <li><strong>2023 - 2025 :</strong> BTS SIO SLAM - Lycée Sainte-Ursule (Caen)</li>
        <li><strong>2020 - 2023 :</strong> Bac Pro SN option RISC - Lycée Charles Tellier</li>
      </ul>
    </div>

    <div class="card">
      <h2>Stages et expériences</h2>
      <ul>
        <li>Grinto – Développement SaaS (12/2025)</li>
        <li>Ligue de Normandie – Site PHP (05/2024)</li>
        <li>Charal – Maintenance informatique</li>
        <li>Fast Point – Développement Python</li>
        <li>Micro Matic – Technicien informatique</li>
        <li>Génération Normandie – Support matériel</li>
      </ul>
    </div>
  </section>

  <section class="section">
    <div class="card">
      <h2>Projet professionnel</h2>
      <p>Je souhaite intégrer une Licence professionnelle orientée développement web et cloud, en alternance. Mon objectif est de devenir développeur fullstack en travaillant sur des solutions SaaS modernes.</p>
    </div>
  </section>

  <section class="section" id="contact">
    <div class="card">
      <h2>Contact</h2>
      <ul>
        <li>Email : <a href="mailto:hubin.fourniret@gmail.com">hubin.fourniret@gmail.com</a></li>
        <li>Téléphone : <a href="tel:+33633617341">06 33 61 73 41</a></li>
        <li>Localisation : Caen (14000)</li>
        <li><a href="#">Mon profil CodersRank</a></li>
        <li><a href="#">Mon GitHub</a></li>
        <li><a href="#">Mon GitLab</a></li>
      </ul>
    </div>
  </section>

  <section class="section" id="projets">
      <div class="card">
          <h2>Application Kamban</h2>
          <p><strong>Contexte :</strong> Projet de groupe réalisé en formation</p>
          <p><strong>Objectif :</strong> Créer une application Kamban</p>
          <p><strong>Tâches :</strong></p>
          <ul>
              <li>Créer une application qui permet de répartir des tâches sur un projets</li>
          </ul>
          <p><strong>Technologies :</strong> Kotlin, Spring Boot, React.js, Ant Design, Git</p>
          <p><strong>Compétences mobilisées :</strong> MVC, développement en équipe, déploiement, documentation</p>
          <img src="img/app_bancaire.png" alt="Capture application bancaire">
          <p><a href=https://github.com/hubinfourniret/cb-php.git>Lien vers le repositories GitHub</a></p>
      </div>
  </section>

  <section class="section">
      <div class="card">
          <h2>Stage chez Grinto</h2>
          <p><strong>Contexte :</strong> Stage de 7 semaines en entreprise</p>
          <p><strong>Objectif :</strong> Contribuer à une application SaaS et création de script de scrapping</p>
          <p><strong>Tâches :</strong></p>
          <ul>
              <li>Scraping Python et intégration API</li>
              <li>Migration de base MySQL vers PostgreSQL</li>
              <li>Fonctionnalités en Node.js (back) et React (front)</li>
          </ul>
          <p><strong>Technologies :</strong> Python, PostgreSQL, Node.js, React</p>
          <p><strong>Compétences mobilisées :</strong> développement fullstack, migration BDD, autonomie</p>
          <img src="Public/Grinto.png" alt="Projet" class="zoomable" onclick="openZoom(this)">

          <div class="zoom-overlay" id="zoomOverlay" onclick="closeZoom()">
              <img id="zoomedImage" src="" alt="">
          </div>
          <p><a href=https://github.com/grinto-dev/scraping_datadunk.git>Lien vers le repositories GitHub de scrapping</a></p>
          <p><a href=https://github.com/grinto-dev/datadunk-api.git>Lien vers le repositories GitHub de DataDunk</a></p>
      </div>
  </section>

  <section class="section">
      <div class="card">
          <h2>Application Todolist</h2>
          <p><strong>Contexte :</strong> Projet de groupe réalisé lors d'une formation.</p>
          <p><strong>Objectif :</strong> Créer une application de gestion de tâches avec une interface utilisateur web.</p>
          <p><strong>Tâches :</strong></p>
          <ul>
              <li>Développement Back-end en Java avec Spring Boot (modèle MVC)</li>
              <li>Base de données MySQL : création et gestion</li>
              <li>Développement Front-end avec Mustache, HTML et CSS</li>
              <li>Gestion de version et du travail collaboratif avec GitLab</li>
              <li>Tests d’intégration et validation du service</li>
          </ul>
          <p><strong>Technologies :</strong> Java, Spring Boot, Mustache, HTML, CSS, MySQL, GitLab</p>
          <p><strong>Compétences mobilisées :</strong> Travail en mode projet (analyse, planification), Programmation orientée objet (POO), Utilisation du modèle MVC, Tests et validation d'applications.</p>
          <img src="img/todolist.png" alt="Capture de l'application Todolist">
          <p><a href="https://gitlab.com/caensup9475439/2-sio-slam/2024/todos/project-y-todolist.git">Lien vers le repository GitLab</a></p>
      </div>
  </section>

  <section class="section">
      <div class="card">
          <h2>Application bancaire</h2>
          <p><strong>Contexte :</strong> Projet de groupe réalisé en formation</p>
          <p><strong>Objectif :</strong> Créer une application bancaire</p>
          <p><strong>Tâches :</strong></p>
          <ul>
              <li></li>
              <li>Gestion des comptes, virements, historique</li>
              <li>Tests unitaires avec JUnit</li>
          </ul>
          <p><strong>Technologies :</strong> PHP, Symfony, MySQL</p>
          <p><strong>Compétences mobilisées :</strong> développement web, POO, architecture MVC</p>
          <img src="img/app_bancaire.png" alt="Capture projet bancaire">
          <p><a href="#">(Lien non disponible)</a></p>
      </div>
  </section>

  <section class="section">
      <div class="card">
          <h2>Application d'Albums Photos</h2>
          <p><strong>Contexte :</strong> Projet de groupe réalisé en formation</p>
          <p><strong>Objectif :</strong> Créer une application d'albums photos</p>
          <p><strong>Tâches :</strong></p>
          <ul>
              <li>Gestion des albums et des photos</li>
              <li>Pouvoir updload des photos</li>
          </ul>
          <p><strong>Technologies :</strong> PHP, HTML, CSS, MySQL</p>
          <p><strong>Compétences mobilisées :</strong> développement web, POO</p>
          <img src="img/app_bancaire.png" alt="Capture projet bancaire">
          <p><a href="#">(Lien non disponible)</a></p>
      </div>
  </section>

  <section class="section">
      <div class="card">
      </div>
  </section>



  <footer>
    &copy; 2025 Hubin Fourniret - Portfolio personnel
  </footer>
</body>
</html>