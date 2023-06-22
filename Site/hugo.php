<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS for the page-->
    <link rel="stylesheet" href="./Style/style.css">
    <link rel="icon" href="./Image/Logos/PetitLogo-removebg.png" type="image/gif">
    <title>Hugo</title>
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
        <h1>Hugo Calmels</h1>
        <h2>Chargé de la téléphonie</h2>
        <p>J’avais en charge la plus grande partie de la téléphonie. J’ai dû réfléchir à la topologie téléphonique et aux services que je devais installer. </p>
        <h3>Le plan d’adressage :</h3>
        <p>La plage d’adresse pour le réseau téléphonique faite grâce au DHCP et a comme plage de 192.168.5.1 à 192.168.5.20. <br>
            Le serveur asterisk à une adresse fixe qui est 192.168.10.2. <br>

            Pour le téléphone de la secrétaire, on utilisera le Softphone 3CX avec le numéro 100 et le Thomson ST2030 avec le numéro 101. <br>
            Pour le téléphone du médecin généraliste, on utilisera le ATA PAP2T et le téléphone analogique avec le numéro 102. <br>
            Pour le téléphone du dentiste, on utilisera le Cisco CP-7841 avec le numéro 103. <br>
            Pour les téléphones des kinés, on utilisera le Cisco SPA504G avec comme numéro 104 pour Benjamin, 105 pour Baptiste et 106 pour Yassir. <br>
        </p>
        <p>Voici la preuve de ce plan d’adressage : </p>
        <img class="classe2" src="./Image/Hugo/image_plan_adressage.jpg" alt="image_plan_adressage">
        <h3>Mise en fonctionnement des téléphones : </h3>
        <p>J’ai donc dû configurer tous les téléphones et le serveur asterisk pour pouvoir communiquer de base entre les téléphones. À ce moment là aucun service n’est encore implémenter. <br>
            Il a donc fallu que je configure tous les téléphones un par un. <br>

            Pour tester la communication entre les différents téléphones nous avons appeler du téléphone de Benjamin vers le téléphone de Gabin. Voici la capture Wireshark et le cli de cet appel : <br>
        </p>
        <img class="classe2" src="./Image/Hugo/wireshark_appel.jpg" alt="wireshark_appel">
        <img class="classe4" src="./Image/Hugo/cli_appel.jpg" alt="cli_appel">
        <p>Grâce à ces informations, nous pouvons conclure que l’appel fonctionne parfaitement. Nous pouvons donc passer à la configuration du premier service.</p>
        <h3>Transfert d’appel </h3>
        <p>Maintenant, que nous pouvons communiquer entre les différents téléphones, nous pouvons mettre en place le transfert      d’appel. <br>
            Il a donc fallu que je rajoute des lignes dans le fichier extension.conf. <br>

            Pour tester ce service nous avons effectué un appel entre Benjamin et Gabin puis Benjamin transfert l’appel vers Baptiste. Voici la capture Wireshark et le cli de ce transfert : <br>
        </p>
        <img class="classe4" src="./Image/Hugo/cli_transfert.jpg" alt="cli_transfert">
        <img class="classe2" src="./Image/Hugo/wireshark_transfert.jpg" alt="wireshark_transfert">
        <p>Grâce à ces informations, nous pouvons conclure que le transfert d’appel fonctionne parfaitement. Nous pouvons maintenant passer au service suivant.</p>
        <h3>Interception d’appel</h3>
        <p>Nous allons maintenant passer à la configuration de l’interception d’appel. Pour cela, il a fallu réfléchir à qui pouvait intercepter l’appel de qui. Voici les interceptions que nous avons mises en place : <br>

            Appel vers la secrétaire intercepté par Hugo <br>
            Appel vers la secrétaire intercepté par Gabin <br>
            Appel vers la secrétaire intercepté par Benjamin <br>
            Appel vers la secrétaire intercepté par Baptiste <br>
            Appel vers la secrétaire intercepté par Yassir <br>

            Pour la phase de test, nous avons appelé la secrétaire interceptée par Benjamin. Voici la capture Wireshark et le cli de cette interception : <br>
        </p>
        <img class="classe4" src="./Image/Hugo/cli_interception.jpg" alt="cli_interception">
        <img class="classe2" src="./Image/Hugo/wireshark_interception.jpg" alt="wireshark_interception">
        <p>Grâce à ces informations, nous pouvons conclure que l’interception d’appel fonctionne parfaitement. Nous pouvons donc passer au service suivant.</p>
        <h3>Groupement d’appel </h3>
        <p>Nous allons maintenant passer à la configuration du groupement d’appels. Pour cela, il a fallu imaginer quel groupement on pouvait faire et voici ce que nous avons réalisé : <br>

            Appel vers Hugo qui ne répond pas donc la secrétaire est appelée. <br>
            Appel vers Gabin qui ne répond pas donc la secrétaire est appelée. <br>
            Appel vers Benjamin qui ne répond pas donc la secrétaire est appelée. <br>
            Appel vers Baptiste qui ne répond pas donc la secrétaire est appelée. <br>
            Appel vers Yassir qui ne répond pas donc la secrétaire est appelée. <br>

            Voici un schéma de ce groupement d’appels : <br>
        </p>
        <img src="./Image/Hugo/groupement.jpg" alt="groupement">
        <p>Pour les phases de tests, nous avons effectué un appel vers Yassir qui ne répond pas donc la secrétaire est appelée. Voici la capture Wireshark et le cli de ce groupement d’appels : <br></p>
        <img class="classe2" src="./Image/Hugo/wireshark_groupement_appel.jpg" alt="wireshark_groupement">
        <img class="classe3" src="./Image/Hugo/cli_groupement_appel.jpg" alt="cli_groupement_appel">
        <p>Grâce à ces informations, nous pouvons conclure que le groupement d’appels fonctionne parfaitement. Nous pouvons donc passer au service suivant.</p>
        <h3>Boîte vocale</h3>
        <p>Nous pouvons maintenant configuré des boîtes vocales pour chaque téléphone donc chaque utilisateur de téléphone. Voici comment nous avons configurer les boîtes vocales : <br></p>
        <img class="classe2" src="./Image/Hugo/Boite_message.jpg" alt="Boite_message">
        <p>Grâce à ces informations, nous pouvons conclure que les boîtes vocales sont bien configurées. Nous pouvons donc passer au service suivant.</p>
        <h3>Appel inter-site </h3>
        <p>Nous allons maintenant effectuer la connexion inter-site du réseau téléphonique. Pour cela, nous avons d'abord interconnecté les sites pour ensuite le faire pour le réseau téléphonique. <br>

        Lorsque nous avons réalisé ce service, nous l’avons testé en appelant la secrétaire du deuxième site depuis notre secrétaire. Voici la capture Wireshark et le cli de cette interconnexion : <br>
        </p>
        <img class="classe3" src="./Image/Hugo/cli_interconnexion.jpg" alt="cli_interconnexion">
        <img class="classe2" src="./Image/Hugo/wireshark_interconnexion.jpg" alt="wireshark_interconnexion">
        <p>Grâce à ces informations, nous pouvons conclure que l’interconnexion est bien configurée. Nous pouvons donc passer au dernier service. <br></p>
        <h3>IVR</h3>
        <p>Pour finir ma partie de projet, j’ai effectué deux ivr pour pouvoir choisir quel personnel nous voulons appeler lorsque l’on téléphone au centre médical. Voici un shéma de ces IVR : </p>
        <img class="classe5" src="./Image/Hugo/IVR.jpg" alt="IVR">
        <h3>Problèmes rencontrés</h3>
        <p>J’ai rencontré un problème lors de l'installation du téléphone Cisco CP-7841, car je n’avais pas renommé le fichier que l’on doit renommer avec l’adresse mac du téléphone. J’ai mis 2h à trouver mon erreur, mais au moins, je ne referai pas cette erreur.<br>

        J’ai aussi rencontré un problème lorsque j’ai voulu faire parler asterisk. J’avais tout bien configuré, mais lorsque j’appelais le bon numéro alors rien ne se passait. J’ai donc commencé une session de débeugage qui a duré 2h. Au final, je me suis rendu compte qu’il fallait avoir accès à internet pour utiliser cette fonctionnalité. J’ai donc aidé mes camarades pour relier notre réseau privé à celui de la salle et à internet. Après avoir pu accéder à internet, cette fonctionnalité fonctionnait parfaitement.</p>
        <h3>Conclusion </h3>
        <p>Pour conclure j’ai vraiment apprécié faire ce travail de mise en place de réseaux et de service téléphonique. Malgré les quelques problèmes que j’ai rencontrés j’ai su trouver des solutions et avancer. J’ai fini mes tâches dans les temps données.</p>
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