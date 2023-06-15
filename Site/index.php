<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS for the page-->
    <link rel="stylesheet" href="./Style/style.css">
    <link rel="icon" href="./Image/PetitLogo-removebg.png" type="image/gif">
    <title>Home</title>
</head>
<body>
    <header class="scroll-shadow">
        <nav>
            <img class="logo" src="./Image/LogoVert.png" alt="Logo">
            <ul>
                <li><a class="swipe" href="#Accueil">Accueil</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <li><a class="swipe" href="#Cabinet">Cabinet</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <li><a class="swipe" href="">Notre équipe</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <li><a class="swipe" href="">(Prise de RDV)</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <li><a class="swipe" href="">Ou nous trouver</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <a class="connexion_btn responsive" href="">Connexion</a>
            </ul>
            <a class="connexion_btn" href="">Connexion</a>
            <input type="checkbox" id="menu-toggle" class="menu-toggle">
            <label for="menu-toggle" class="menu-icon">&#9776;</label>
        </nav> 
    </header>
    <section id="Accueil">
        <ul>
            <li>
                <h1><span>Meilleurs</span> soins, <br>
                    <span>Meilleurs</span> docteurs</h1>
                <h2>Votre bien être et votre santé sont notre priorité</h2>
            </li>
            <li><img src="./Image/accueil-removebg.png" alt="Un docteur qui soigne un patient"></li>
        </ul>
    </section>
    <section id="Cabinet">
        <ul>
            <li><img src="./Image/cabinet-removebg.png" alt="Un cabinet"></li>
            <li>
                <h1>Notre <span>Cabinet</span>,</h1>
                <p><span>&bull;</span> Nos experts en médecine mettent tout en oeuvre pour vous fournir les meilleurs soins dans les meilleurs delais. </p>
                <p><span>&bull;</span> Nous sommes équipé d'équipement à la pointe de la technologie nous permettant d'éxercer une médecine présice et efficace.</p>
            </li>
        </ul>
    </section>
    <section id=""></section>
    <section id=""></section>
    <section id=""></section>
    <footer>
        <ul>
            <li><a class="" href="">Mention légale</a></li>
        </ul>
    </footer>
    <script>
        window.addEventListener('scroll', function() {
            var scrollPosition = window.scrollY;
            var element = document.querySelector('.scroll-shadow');
            
            if (scrollPosition > 0) {
                element.style.boxShadow = '0 2px 5px rgba(0, 0, 0, 0.2)';
            } else {
                element.style.boxShadow = '0 2px 5px rgba(0, 0, 0, 0)';
            }
        });
    </script>
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const navUl = document.querySelector('nav ul');

        menuToggle.addEventListener('click', function() {
        if (window.innerWidth <= 1200) {
            if (navUl.classList.contains('active')) {
            navUl.classList.remove('active');
            } else {
            navUl.classList.add('active');
            }
        }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        // Écouteur d'événement pour tous les liens de navigation
        var navLinks = document.querySelectorAll('a.swipe');
        navLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault(); // Empêche le comportement de lien par défaut
            
            // Récupère l'ID de la section cible depuis l'attribut href du lien
            var targetId = link.getAttribute('href');
            
            // Trouve la section cible dans le DOM
            var targetSection = document.querySelector(targetId);
            
            // Vérifie si la section cible existe et défile jusqu'à elle en douceur
            if (targetSection) {
            var targetOffsetTop = targetSection.offsetTop;
            window.scrollTo({
                top: targetOffsetTop,
                behavior: 'smooth'
            });
            }
        });
        });
  });
    </script>
</body>
</html>