<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS for the page-->
    <link rel="stylesheet" href="./Style/style.css">
    <link rel="icon" href="./Image/Logos/PetitLogo-removebg.png" type="image/gif">
    <title>Baptiste</title>
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
                <li><a href="./index.php">Accueil</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <li><a href="./groupe.php">Groupe</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <li><a href="./baptiste.php">Baptiste</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <li><a href="./benjamin.php">Benjamin</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <li><a href="./hugo.php">Hugo</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <li><a href="./gabin.php">Gabin</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <li><a href="./yassir.php">Yassir</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <!-- Check if user is logged in as admin -->
                <?php 
                    session_start();
                    if (isset($_SESSION['admin']) && $_SESSION['admin'] === 'on') {
                        echo'<a class="connexion_btn responsive" href="./logout.php">LogOut</a>
                            </ul>
                            <a class="connexion_btn" href="./logout.php">LogOut</a>';
                    }
                    else {
                        echo '
                        <script>
                                window.location = "./index.php";
                        </script>';
                    }
                ?>
            <input type="checkbox" id="menu-toggle" class="menu-toggle">
            <label for="menu-toggle" class="menu-icon">&#9776;</label>
        </nav> 
    </header>
    <!-- Main content section -->
    <section class="main">
        <h1>Baptiste Alteirac</h1>
        <h2>Chargé de la création du site web</h2>
        <p>
        Lors de cette SAE 24 j'ai été missionné de réaliser de A à Z notre site web. Le site web doit posséder une partie privée (compte rendu du groupe) et une partie publique (site du cabinet médical). De plus, notre site doit être RWD ce qui signifie qu'il est en capacité de s'adapter en fonction de la taille de l'écran sur lequel il est visionné.
        </p>
        <h3>Plan du site</h3>
        <p>Dans un premier temps j'ai réalisé un plan du site pour être sûr de bien respecter le cahier des charges et pouvoir savoir ce que j'avais à mettre dans les navbar.</p>
        <img class="classe2" src="./Image/Baptiste/Plan-du-site.png" alt="Plan-du-site">
        <p>Ensuite j'ai réfléchi à la manière dont j'allais organiser les différentes parties de mon site. Pour la partie Public j'ai décidé de faire une seule page et de mettre les différentes parties les une en dessous des autres et que l'on puisse y accéder aux différentes parties via un effet de défilement.</p>
        <p>Pour la partie privé j'ai obté pour une solution plus classique et de faire une page php par personne.</p>
        <h3>Structure du site</h3>
        <img class="classe1" src="./Image/Baptiste/structure-du-site.png" alt="structure-du-site">
        <p>Une fois cela fait j'ai cherché une palette de couleur. Sachant que le site est pour un cabinet médical j'ai décidé d'utiliser du vert et du blanc</p>
        <img class="classe1" src="./Image/Baptiste/Palette.png" alt="palette">
        <p>J'ai ensuite créé un logo à partir du nom du cabinet. Le nom du cabinet est l'ensemble de nos initiales et comme slogan j'ai rédigé une phrase en latin dont chaque mot commence par l'une de nos initiales.</p>
        <img class="classe2" src="./Image/Logos/LogoVert-removebg.png" alt="LogoVert-removebg">
        <h3>Les différentes parties de la page publique</h3>
        <p>J'ai désigné les différentes parties d'une telle manière qu'elles correspondent à ce qu'on pourrait sur un site d'un cabinet médical. De plus, je souhaiterais que le design soit moderne et épuré qui sont deux qualités essentielles pour un cabinet médical. Le site web doit être à la hauteur des services proposés par le cabinet.</p>
        <h3>RWD</h3>
        <p>Le site devant être capable de s'adapter aux différentes résolutions j'ai dû réaliser le site d'une certaine manière pour qu'il reste lisible sur mobile ou tablette. Pour cela j'ai deux style de navbar, une qui est alignée horizontalement pour les ordinateurs et une navbar alignée verticalement pour les plus petites résolutions.</p>
        <h2>Problèmes rencontrés</h2>
        <p>Le problème que j'ai rencontré est que je souhaitais ajouter une option de prise de rendez vous sur le site. 
            La méthode que je souhaitais utiliser est de créer un formulaire qui une fois rempli par le client il serait envoyé par mail sur l'adresse mail de la secrétaire pour simplifier la prise de RDV. 
            Pour la réalisation du formulaire je n'ai pas rencontré de problème ni sur le php qui me permettait de bien rédiger le mail afin qu'il soit lisible. 
            En revanche, c'est sur l'envoie du mail en lui-même ou je n'ai pas réussi. Je souhaitais utiliser la fonction php mail() pour envoyer un mail depuis le serveur jusqu'à la boite mail de la secrétaire. 
            Malheureusement malgré quelques heures de recherche et d'essaie je n'ai pas reussi a envoyé via un compte gmail sur le serveur des mails a la secretaire. J'ai réussi à me connecter a mon compte gmail sur le serveur mais pour une raison que j'ignore les mails de quittent jamais le serveur. 
            J'ai pourtant vérifié plusieurs fois la configuration du serveur, j'ai même vérifié les fichiers logs réservés aux mails, et aussi les trames envoyées par le serveur sur wireshark pour essayer de trouver la source du problème mais sans succès. 
            J'ai donc mis la partie du formulaire en commentaire.
        </p>
        <p>J'ai également eu des problèmes au niveau des validateurs car vu que le site n'est pas hébergé on ne peux pas faire de lien direct vers la page de validation avec le lien du site pré-rempli.</p>
    </section>
    <!-- Website footer -->
    <footer>
        <ul class="line">   
            <li>
                <ul class="un column">
                    <li><img class="logo" src="./Image/Logos/LogoNoir-removebg.png" alt="Logo"></li>
                    <li><h2>"Benevolus Hominibus, Genium Bonitate Yuvat"</h2></li>
                </ul>
            </li>
            <li>
                <ul class="deux column">
                    <li><h1>NavBar</h1></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a href="./baptiste.php">Baptiste</a></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a href="./benjamin.php">Benjamin</a></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a href="./hugo.php">Hugo</a></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a href="./gabin.php">Gabin</a></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a href="./yassir.php">Yassir</a></li>
                </ul>
            </li>
            <li>
                <ul class="trois column">
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
                <ul class="quatre column">
                    <li><h1>Validateurs</h1></li>
                    <li><a href="https://validator.w3.org/nu/#textarea"><img src="./Image/Logos/HTML5.png" alt="Validateurs HTML"></a></li>
                    <li><a href="https://jigsaw.w3.org/css-validator/validator"><img src="./Image/Logos/CSS3.png" alt="Validateurs CSS"></a></li>
                </ul>
            </li>
        </ul>
    </footer>
    <script src="./script.js"></script>
</body>
</html>