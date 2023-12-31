<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS for the page-->
    <link rel="stylesheet" href="./Style/style.css">
    <link rel="icon" href="./Image/Logos/PetitLogo-removebg.png" type="image/gif">
    <title>BHGBY-fr</title>
</head>
<body>
    <!-- Hide the 'js-message' element when the DOM is fully loaded -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('js-message').style.display = 'none';
        });
        </script>

        <div id="js-message" style="display: block;">
            <h1> Veuillez activer JavaScript pour permettre au site de fonctionner correctement. </h1>
        </div>
    <!-- Website header -->
    <header class="scroll-shadow">
        <nav>
            <img class="logo" src="./Image/Logos/LogoVert.png" alt="Logo">
            <ul>
                <!-- Navigation links -->
                <li><a class="swipe" href="#Accueil">Accueil</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <li><a class="swipe" href="#Cabinet">Cabinet</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <li><a class="swipe" href="#Equipe">Notre équipe</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <li><a class="swipe" href="#Trouver">Où nous trouver</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <!-- <li><a class="swipe" href="#RDV">Appointments</a></li> -->
                <li class="responsive bull"><p>&bull;</p></li>
                <!-- Check if user is logged in as admin -->
                <?php 
                    session_start();
                    if (isset($_SESSION['admin']) && $_SESSION['admin'] === 'on') {
                        echo'<li><a class="connexion_btn responsive" href="./connexion.php">Connecté</a></li>
                            </ul>
                            <a class="connexion_btn" href="./connexion.php">Connecté</a>';
                    }
                    else {
                        echo'<li><a class="connexion_btn responsive" href="./connexion.php">Connexion</a></li>
                            </ul>
                            <a class="connexion_btn" href="./connexion.php">Connexion</a>';
                    }
                ?>
            <input type="checkbox" id="menu-toggle" class="menu-toggle">
            <label for="menu-toggle" class="menu-icon">&#9776;</label>
        </nav> 
    </header>
    <!-- Langues section -->
    <section id="Langues">
        <ul>
            <li>
                <label>
                    <input type="radio" name="langue" value="fr" onclick="toggleCheckbox(this)" checked>
                    <img src="./Image/Logos/icons8france-removebg.png" alt="drapeau francais" class="selected">
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="langue" value="en" onclick="toggleCheckbox(this)">
                    <img src="./Image/Logos/icons8usa-removebg.png" alt="drapeau usa">
                </label>
            </li>
        </ul>
    </section>
    <!-- Accuiel section -->
    <section id="Accueil">
        <ul>
            <li>
                <h1><span>Meilleurs</span> soins, <br>
                    <span>Meilleurs</span> docteurs</h1>
                <h2>Votre bien être et votre santé sont notre priorité</h2>
            </li>
            <li><img src="./Image/Index/accueil-removebg.png" alt="Un docteur qui soigne un patient"></li>
        </ul>
    </section>
    <!-- Cabinet section -->
    <section id="Cabinet">
        <ul>
            <li><img src="./Image/Index/cabinet-removebg.png" alt="Un cabinet"></li>
            <li>
                <h1>Notre <span>Cabinet</span>,</h1>
                <p><span>&bull;</span> Nos experts en médecine mettent tout en oeuvre <br> pour vous fournir les meilleurs soins dans les meilleurs delais. </p>
                <p><span>&bull;</span> Nous sommes équipé d'équipement à la pointe de la technologie <br> nous permettant d'éxercer une médecine présice et efficace.</p>
            </li>
        </ul>
    </section>
    <!-- Slogan section -->
    <section id="Slogan">
        <h1>"Benevolus Hominibus, Genium Bonitate Yuvat"</h1>
        <h2>"La bienveillance envers les hommes nourrit l'esprit par la bonté"</h2>
    </section>
    <!-- Equipe section -->
    <section id="Equipe">
        <ul class="column">
            <li>
                <ul class="line">
                    <li>
                        <ul class="column portrait">
                            <li><img src="./Image/Docteurs/secretaire.jpeg" alt="@MadelineCline"></li>
                            <li><h1>Madelyn Cline</h1></li>
                            <li><p>Secrétaire</p></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="column portrait">
                            <li><img src="./Image/Docteurs/H-generaliste.png" alt=""></li>
                            <li><h1>Hugo Calmels</h1></li>
                            <li><p>Généraliste</p></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="column portrait">
                            <li><img src="./Image/Docteurs/G-dentiste.png" alt=""></li>
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
                            <li><img src="./Image/Docteurs/Y-kine.png" alt=""></li>
                            <li><h1>Yassir Boulouiha</h1></li>
                            <li><p>Kinésithérapeute</p></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="column portrait">
                            <li><img src="./Image/Docteurs/B-kine.png" alt=""></li>
                            <li><h1>Alteirac Baptiste</h1></li>
                            <li><p>Kinésithérapeute</p></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="column portrait">
                            <li><img src="./Image/Docteurs/Benj-kine.png" alt=""></li>
                            <li><h1>Benjamin Sarrat</h1></li>
                            <li><p>Kinésithérapeute</p></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- Trouver section -->
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
    <!-- Avis section -->
    <section id="Avis">
        <ul class="column" data-id="1">
            <li>
                <ul class="column cadre">
                    <li>
                        <p class="texte"><span>&quot;</span>Je suis vraiment ravi de ma visite dans ce cabinet médical. Le personnel était extrêmement accueillant et professionnel. Le médecin a pris le temps de m'écouter attentivement et de répondre à toutes mes questions. J'ai été impressionné par leur approche empathique et leur expertise médicale. Je me sens en confiance et entre de bonnes mains ici. Je recommande vivement ce cabinet à tous ceux qui recherchent des soins médicaux de qualité.<span>&quot;</span></p>
                    </li>
                    <li class="separateur">--------------------------------</li>
                    <li>
                        <ul class="line">
                            <li><img src="./Image/Clients/client2.png" alt="Photo avis 1"></li>
                            <li><p>Carla Rosón Caleruega</p></li>
                            <li><p class="etoile"><span>&#11089; &#11089; &#11089; &#11089; &#10025;</span></p></li>
                        </ul>
                    </li>
                 </ul>
            </li>   
            <li>
                <p>&#10687; &bull; &bull;</p>
            </li>
        </ul>
        <ul class="column" data-id="2">
            <li>
                <ul class="column cadre">
                    <li>
                        <p class="texte"><span>&quot;</span>Je suis très satisfait de mon expérience dans ce cabinet médical. J'ai pu obtenir un rendez-vous rapidement et le processus d'enregistrement était efficace. Le personnel était amical et compétent. Le médecin a été très attentif à mes symptômes et m'a proposé un plan de traitement clair et détaillé. Je me suis senti écouté et respecté tout au long de la consultation. Je suis reconnaissant d'avoir trouvé un cabinet médical aussi professionnel et attentionné.<span>&quot;</span></p>
                    </li>
                    <li class="separateur">--------------------------------</li>
                    <li>
                        <ul class="line">
                            <li><img src="./Image/Clients/client3.png" alt="Photo avis 1"></li>
                            <li><p>Yassir Boulouiha</p></li>
                            <li><p class="etoile"><span>&#11089; &#11089; &#11089; &#11089; &#11089;</span></p></li>
                        </ul>
                    </li>
                 </ul>
            </li>   
            <li>
                <p>&bull; &#10687; &bull;</p>
            </li>
        </ul>
        <ul class="column" data-id="3">
            <li>
                <ul class="column cadre">
                    <li>
                        <p class="texte"><span>&quot;</span>Je suis agréablement surpris par la qualité des soins que j'ai reçus dans ce cabinet médical. L'équipe était chaleureuse et bien organisée, ce qui a rendu ma visite fluide et agréable. Le médecin a fait preuve d'une grande expertise et a pris le temps de m'expliquer en détail mon diagnostic et les options de traitement disponibles. J'ai été impressionné par leur approche holistique de la santé, en cherchant à comprendre les causes profondes de mes symptômes plutôt que de simplement traiter les symptômes eux-mêmes. Je suis extrêmement satisfait de ma visite et je recommande vivement ce cabinet médical.<span>&quot;</span></p>
                    </li>
                    <li class="separateur">--------------------------------</li>
                    <li>
                        <ul class="line">
                            <li><img src="./Image/Clients/client1.png" alt="Photo avis 1"></li>
                            <li><p>Ilias Alami chentoufi</p></li>
                            <li><p class="etoile"><span>&#11089; &#11089; &#11089; &#11089; &#11089;</span></p></li>
                        </ul>
                    </li>
                 </ul>
            </li>   
            <li>
                <p>&bull; &bull; &#10687;</p>
            </li>
        </ul>
    </section>
    <!-- The form under construction doesn't work see Baptiste Alteirac's report for more info 
    <section id="RDV">
        <ul>
            <li>
                <h2>Formulaire de Prise de Rendez-vous</h2>
            </li>
            <li>
                <form action="mail.php" method="post">
                    <label for="nom">Nom complet :</label>
                    <input type="text" id="nom" name="nom" required><br><br>

                    <label for="email">Adresse e-mail :</label>
                    <input type="email" id="email" name="email" required><br><br>

                    <label for="telephone">Numéro de téléphone :</label>
                    <input type="tel" id="telephone" name="telephone" required><br><br>

                    <label for="date">Date souhaitée du rendez-vous :</label>
                    <input type="date" id="date" name="date" required><br><br>

                    <label for="heure">Heure souhaitée du rendez-vous :</label>
                    <input type="time" id="heure" name="heure" required><br><br>

                    <label for="medecin">Choisissez le médecin :</label>
                    <select id="medecin" name="medecin" required>
                        <option value="">Sélectionnez une médecin</option>
                        <option value="Hugo Calmels (Généraliste)">Hugo Calmels (Généraliste)</option>
                        <option value="Gabin Lopez (Dentiste)">Gabin Lopez (Dentiste)</option>
                        <option value="Baptiste Alteirac (Kiné)">Baptiste Alteirac (Kinésithérapeute)</option>
                        <option value="Benjamin Sarrat (Kiné)">Benjamin Sarrat (Kinésithérapeute)</option>
                        <option value="Yassir Boulouiha (Kiné)">Yassir Boulouiha (Kinésithérapeute)</option>
                    </select><br><br>

                    <label for="informations">Informations supplémentaires :</label><br>
                    <textarea id="informations" name="informations" rows="4" cols="50"></textarea><br><br>

                    <input type="submit" value="Envoyer">
                </form>
            </li>
        </ul>
    </section>
    -->
    <!-- Website footer -->
    <footer>
        <ul class="line">
            <li>
                <ul class="column">
                    <li><img class="logo" src="./Image/Logos/LogoNoir-removebg.png" alt="Logo"></li>
                    <li><h2>"Benevolus Hominibus, Genium Bonitate Yuvat"</h2></li>
                </ul>
            </li>
            <li>
                <ul class="column">
                    <li><h1>NavBar</h1></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a class="swipe" href="#Accueil">Accueil</a></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a class="swipe" href="#Cabinet">Cabinet</a></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a class="swipe" href="#Equipe">Notre équipe</a></li>
                    <!--<li class="bull"><p>&bull;</p></li> -->
                    <!-- <li><a class="swipe" href="#RDV">Appointments</a></li> -->
                    <li class="bull"><p>&bull;</p></li>
                    <li><a class="swipe" href="#Trouver">Où nous trouver</a></li>
                </ul>
            </li>
            <li>
                <ul class="column">
                    <li><a href="./mentions-legales.php"><h1>&copy; Tous droits réversés</h1></a></li>
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
                <ul class="column">
                    <li><h1>Validateurs</h1></li>
                    <li><a class="validateurs" href="https://validator.w3.org/nu/#textarea"><img src="./Image/Logos/HTML5.png" alt="Validateurs HTML"></a></li>
                    <li><a class="validateurs" href="https://jigsaw.w3.org/css-validator/validator"><img src="./Image/Logos/CSS3.png" alt="Validateurs CSS"></a></li>
                </ul>
            </li>
        </ul>
    </footer>
    <!-- Import the JavaScript -->
    <script src="./script.js"></script>
</body>
</html>