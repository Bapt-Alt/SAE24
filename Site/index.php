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
                <li><a class="swipe" href="#Equipe">Notre équipe</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <li><a class="swipe" href="">(Prise de RDV)</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <li><a class="swipe" href="#Trouver">Ou nous trouver</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <a class="connexion_btn responsive" href="./connexion.php">Connexion</a>
            </ul>
            <a class="connexion_btn" href="./connexion.php">Connexion</a>
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
                <p><span>&bull;</span> Nos experts en médecine mettent tout en oeuvre <br> pour vous fournir les meilleurs soins dans les meilleurs delais. </p>
                <p><span>&bull;</span> Nous sommes équipé d'équipement à la pointe de la technologie <br> nous permettant d'éxercer une médecine présice et efficace.</p>
            </li>
        </ul>
    </section>
    <section id="Slogan">
        <h1>"Benevolus Hominibus, Genium Bonitate Yuvat"</h1>
        <h2>"La bienveillance envers les hommes nourrit l'esprit par la bonté"</h2>
    </section>
    <section id="Equipe">
        <ul class="column">
            <li>
                <ul class="line">
                    <li>
                        <ul class="column portrait">
                            <li><img src="./Image/docteur.png" alt=""></li>
                            <li><h1>Madeline Cline</h1></li>
                            <li><p>Secrétaire</p></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="column portrait">
                            <li><img src="./Image/docteur.png" alt=""></li>
                            <li><h1>Hugo Calmels</h1></li>
                            <li><p>Généraliste</p></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="column portrait">
                            <li><img src="./Image/docteur.png" alt=""></li>
                            <li><h1>Gabin Lopez</h1></li>
                            <li><p>Dentiste</p></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <ul class="line">
                    <li>
                        <ul class="column portrait">
                            <li><img src="./Image/docteur.png" alt=""></li>
                            <li><h1>Yassir Boulouiha</h1></li>
                            <li><p>kinésithérapeute</p></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="column portrait">
                            <li><img src="./Image/docteur.png" alt=""></li>
                            <li><h1>Alteirac Baptiste</h1></li>
                            <li><p>kinésithérapeute</p></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="column portrait">
                            <li><img src="./Image/docteur.png" alt=""></li>
                            <li><h1>Benjamin Sarrat</h1></li>
                            <li><p>kinésithérapeute</p></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <section id="Trouver">
        <ul>
            <li>
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.94511813648!2d1.3720083763416693!3d43.649310171102194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aea567f203159f%3A0xeff70715d0352e33!2sIUT%20Blagnac!5e0!3m2!1sfr!2sfr!4v1686929738952!5m2!1sfr!2sfr" width="600" height="400" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </li>
            <li>
                <h1> <span>Où</span> nous trouver ?</h1>
                <p>Notre cabinet est situé au <a href="https://goo.gl/maps/h3ckPyDo4uXa4Z9K9" target="_blank">1 place George Brassens</a>.</p>
                <p>Il est accessible en voiture via notre parking, <br>
                    mais également via les transports en commun avec les lignes <br><a href="https://www.tisseo.fr/home" target="_blank">T1</a> et <a href="https://www.tisseo.fr/home" target="_blank">70</a>.</p>
            </li>
        </ul>
    </section>
    <section id="Avis">
        <ul class="column">
            <li>
                <ul class="column cadre">
                    <li>
                        <p class="texte"><span>&quot;</span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam officia fuga corrupti, vero accusantium consectetur facilis commodi ex error temporibus omnis, nemo doloribus repellat quos enim quibusdam porro modi exercitationem.<span>&quot;</span></p>
                    </li>
                    <li class="separateur">--------------------------------</li>
                    <li>
                        <ul class="line">
                            <li><img src="./Image/docteur.png" alt="Photo avis 1"></li>
                            <li><p class="etoile"><span>&#11089; &#11089; &#11089; &#11089; &#10025;</span></p></li>
                        </ul>
                    </li>
                 </ul>
            </li>   
            <li>
                <p>&#10687; &bull; &bull; &bull; &bull;</p>
            </li>
        </ul>
    </section>
    <footer>
        <ul class="line">
            <li>
                <ul class="un column">
                    <li><img class="logo" src="./Image/LogoNoir-removebg.png" alt="Logo"></li>
                    <li><h2>"Benevolus Hominibus, Genium Bonitate Yuvat"</h2></li>
                </ul>
            </li>
            <li>
                <ul class="deux column">
                    <li><h1>NavBar</h1></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a class="swipe" href="#Accueil">Accueil</a></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a class="swipe" href="#Cabinet">Cabinet</a></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a class="swipe" href="#Equipe">Notre équipe</a></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a class="swipe" href="">(Prise de RDV)</a></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a class="swipe" href="#Trouver">Ou nous trouver</a></li>
                </ul>
            </li>
            <li>
                <ul class="trois column">
                    <li><a href=""><h1>&copy; Tous droits réversés</h1></a></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a href="https://www.linkedin.com/in/baptiste-alteirac" target="_blank">Alteirac</a></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a href="https://www.linkedin.com/in/yassir-boulouiha-gnaoui-9b226027b/" target="_blank">Boulouiha</a></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a href="https://www.linkedin.com/in/hugo-calmels-50a51727b" target="_blank">Calmels</a></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a href="https://www.linkedin.com/in/gabin-lopez-168bb525b" target="_blank">Lopez</a></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a href="https://www.linkedin.com/in/benjamin-sarrat-990888269" target="_blank">Sarrat</a></li>
                </ul>
            </li>
            <li>
                <ul class="quatre column">
                    <li><h1>Validateurs</h1></li>
                    <li><a href=""><img src="./Image/HTML5.png" alt="Validateurs HTML"></a></li>
                    <li><a href=""><img src="./Image/CSS3.png" alt="Validateurs CSS"></a></li>
                </ul>
            </li>
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