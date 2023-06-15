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
                <li><a class="" href="">Accueil</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <li><a class="" href="">cabinet</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <li><a class="" href="">Notre équipe</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <li><a class="" href="">(Prise de RDV)</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <li><a class="" href="">Ou nous trouver</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <a class="connexion_btn responsive" href="">Connexion</a>
            </ul>
            <a class="connexion_btn" href="">Connexion</a>
            <input type="checkbox" id="menu-toggle" class="menu-toggle">
            <label for="menu-toggle" class="menu-icon">&#9776;</label>
        </nav> 
    </header>
    <section id="">

    </section>
    <section id=""></section>
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
</body>
</html>