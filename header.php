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

        .zoom-overlay .arrow {
            color: white;
            font-size: 3rem;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            user-select: none;
            z-index: 10000;
            padding: 1rem;
        }
        .zoom-overlay .left {
            left: 1rem;
        }
        .zoom-overlay .right {
            right: 1rem;
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
    <a href="index.php#presentation">Présentation</a>
    <a href="index.php#parcours">Parcours</a>
    <a href="index.php#contact">Contact</a>
    <a href="index.php#projets">Projets</a>
    <a href="veille.php#veille">Veille</a>

</nav>
