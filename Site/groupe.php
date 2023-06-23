<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS for the page-->
    <link rel="stylesheet" href="./Style/style.css">
    <link rel="icon" href="./Image/PetitLogo-removebg.png" type="image/gif">
    <title>Groupe</title>
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
    <section class="main" id="Groupe">
        <h1>&bull; Qui sommes nous ?</h1>
        <p>
            Nous sommes 4 étudiants en première année de bachelor universitaire de technologie en Réseaux et Télécommunications à l'IUT de Blagnac. La SAE 24 est l'un de nos plus gros projets de cette première année.
        </p>
        <h1>&bull; Contexte de la SAE</h1>
        <p>
            La SAE24 a pour but de déployer le système d'information de cabinets paramédicaux dans la région Occitanie. IcpOcc, une entreprise spécialisée dans la fourniture complète de ces systèmes (de la conception à la maintenance), est chargée de cette mission. En plus de ses compétences techniques, IcpOcc se positionne en tant qu'expert et conseiller en matière de cybersécurité pour ces systèmes d'information, offrant également des formations spécialisées dans ce domaine. Le groupement de cabinets paramédicaux qui a fait appel à votre société souhaite une refonte totale de leur système d'information. Actuellement implanté sur deux sites en Haute-Garonne, ce groupement a pour ambition de s'étendre dans d'autres localités de la région Occitanie. Avec cette expansion future en vue, il est primordial de mettre en place un système d'information robuste, sécurisé et évolutif, capable de répondre aux besoins actuels et futurs de ces cabinets paramédicaux.
        </p>
        <h1>&bull; Cahier des charges</h1>
        <p>
            &bull; Aspect informatique, système et réseau intrasites : <br>

            Mettre en œuvre les bonnes pratiques d'hygiène informatique et de cybersécurité.
            Fournir à chaque membre du cabinet paramédical un ordinateur de bureau câblé, sous Windows 10, avec une identification par login et mot de passe.
            Installer les applications bureautiques, de navigation Web (navigateur) et de messagerie (Thunderbird) sur chaque ordinateur.
            Configurer un hyperviseur de type 1 (VMware ESXi) supportant deux machines virtuelles.
            La première machine virtuelle sera un contrôleur de domaine sous Windows Server 2019, assurant la centralisation des comptes utilisateurs et fournissant un espace disque dédié à chaque utilisateur. Ce serveur sera également responsable des services DHCP et DNS du cabinet, ainsi que de l'application de supervision réseau The Dude.
            La deuxième machine virtuelle sera un serveur GNU/Linux sous Ubuntu, destiné à héberger certaines applications métiers et plusieurs services tels que Web, MySQL, FTP, TFTP, Asterisk, SMTP et POP3.
            Héberger un site Web RWD (Responsive Web Design) en interne, comprenant une partie publique présentant le cabinet paramédical en français et en anglais, ainsi qu'une partie privée nécessitant une authentification pour accéder aux documents relatifs au projet, y compris les résultats de tests et les livrables. <br>
            
            &bull; Couverture Wi-Fi : <br>

            Assurer une couverture Wi-Fi dans le cabinet avec un seul point d'accès. <br>

            &bull; Aspect téléphonie intrasite : <br>

            Mettre en place un serveur Asterisk pour gérer les services de téléphonie ToIP.
            Implémenter les fonctionnalités téléphoniques telles que le transfert d'appel, l'interception d'appel, la mise en attente, l'enregistrement d'appel, les groupements d'appels, les boîtes vocales, la messagerie unifiée et les menus vocaux interactifs (IVR).
            Fournir à chaque membre du cabinet un téléphone numérique/analogique ou un softphone, en fonction de leurs préférences.
            Réserver le poste opérateur pour la secrétaire du cabinet, qui disposera également d'un téléphone mobile. <br>

            &bull; Aspect réseaux informatiques et téléphoniques intersites : <br>

            Permettre la communication entre les deux sites, réalisés par deux équipes distinctes dans les salles de TP E104/E105.
            Mettre en place des solutions réseau et téléphonie pour permettre la connectivité et l'échange d'informations entre les deux sites.
        </p>
        <h1>&bull; Gantt</h1>
        <h2>&bull; Gantt prévisionnel</h2>
        <img class="classe1" src="./Image/Gantt/Gantt-pré.png" alt="Gantt prévisionnel">
        <h2>&bull; Gantt réel</h2>
        <img class="classe1" src="./Image/Gantt/Gantt-final.png" alt="Gantt final">
        <h1>&bull; Répartition du travail</h1>
        <h2>&bull; Baptiste Alteirac</h2>
        <p>Lors de la SAE, j'ai été chargé de créer un site web complet comprenant une partie privée (comptes rendus du groupe) et une partie publique (site du cabinet médical). Le site devait être adaptatif (RWD) pour s'ajuster à différents écrans. J'ai commencé par élaborer un plan du site et organiser ses différentes sections. Pour la partie publique, j'ai choisi une conception d'une seule page avec des sections défilantes pour faciliter la navigation. En revanche, pour la partie privée, j'ai opté pour une approche plus classique avec une page PHP dédiée à chaque personne. J'ai également choisi une palette de couleurs vertes et blanches, en harmonie avec le domaine médical, et créé un logo à partir du nom du cabinet. Cependant, j'ai rencontré des difficultés lors de l'ajout d'une fonctionnalité de prise de rendez-vous via un formulaire. Malgré une configuration et une rédaction correctes des e-mails, je n'ai pas réussi à envoyer les messages depuis le serveur vers la boîte de réception de la secrétaire. De plus, l'absence d'hébergement du site a également causé des problèmes avec les validateurs, m'empêchant de créer des liens directs vers les pages de validation pré-remplies.</p>
        <h3>Télécharger mon rapport <a href="./Rapports/Compte-rendu-baptiste-alteirac.pdf" download>ici</a></h3>
        <h2>&bull; Hugo Calmels</h2>
        <p>Durant ce projet, je me suis occupé principalement de la téléphonie. J’ai installé le serveur asterisk puis installé les différents services. J’ai donc mis en place tous les téléphones : Softphone 3CX, Cisco SPA504G, Thomson ST2030, Cisco CP-7841 et ATA PAP2T + téléphone analogique. J’ai aussi implanté les services comme le transfert d’appel, la mise en attente, l’interception d’appel, l’enregistrement d’appel et le groupement d’appels. Pour finir, j’ai créé un IVR pour choisir quelle personne on veut appeler lorsque l'on téléphone au centre médical.</p>
        <h3>Télécharger mon rapport <a href="./Rapports/Compte-rendu-Hugo-Calmels.pdf" download>ici</a></h3>
        <h2>&bull; Benjamin Sarrat</h2>
        <p>Mon travail durant les séances de SAÉ24 a été la configuration des équipements réseau (switch, routeur, point d’accès WiFi) et le branchement des équipements pour assurer une connexion fonctionnelle et pouvoir communiquer avec le site voisin. Toute cette mise en place physique a d’abord été théorisée par un schéma draw.io et une simulation sous Packet Tracer pour s’assurer que le réseau était fiable et répondait au cahier des charges fixé par le document de présentation de la SAÉ24, notamment au niveau des services (DHCP, DNS, FTP, Web, Mail)</p>
        <h3>Télécharger mon rapport <a href="./Rapports/Compte-rendu-Benjamin-Sarrat.pdf" download>ici</a></h3>
        <h2>&bull; Gabin Lopez</h2>
        <p>Durant ce projet je me suis occupé du Windows Server pour mettre en place les services demandés comme le DHCP et le DNS. Pour le DHCP je me suis occupé de configurer les plages d’adresse IO pour tous les VLANs. Pour le DNS je me suis occupé du forwarder pour avoir accès à internet et de la zone inverse pour que les clients puissent accéder au DNS. Je me suis également occupé de créer les utilisateurs et les groupes. Puis enfin j’ai fait The Dude pour avoir toute la supervision de notre réseau.</p>
        <h3>Télécharger mon rapport <a href="./Rapports/Compte-rendu-Gabin-Lopez.pdf" download>ici</a></h3>
        <h2>&bull; Yassir Boulouiha</h2>
        <p>Dans le cadre de ce projet, je me suis donc occupé des services SMTP POP3 et FTP au niveau de la VM Linux, j’ai produit le diagramme de gantt prévisionnel, fait l’installation d’EsXi avec le clonage des VM’s dessus, fait la base de données pour le site web, et j’ai épaulé Baptiste sur toute la partie du site nécessitant du PHP.</p>
        <h3>Télécharger mon rapport <a href="./Rapports/Compte-Rendu-Boulouiha-Yassir.pdf" download>ici</a></h3>
        <h1>&bull; Problémes du groupe</h1>
        <p>Lorsque nous avons regroupé la partie téléphone et PC nous avons eu un problème de VLAN et d’adresse IP. Effectivement, lorsque nous avions pensé à la topologie de base, nous n’avions pas mis de VLAN et nous avions mis tous les équipements dans un seul réseau. À ce moment-là, nous nous sommes rendu compte qu’il allait falloir refaire la topologie entière. Nous avons donc changé toutes les adresses IP des serveurs, des PC et des téléphones. Il a donc fallu ajouter des pools DHCP pour les nouveaux réseaux. Il a aussi fallu faire du routage inter VLAN que nous n’avions pas fait jusque-là. De plus, il a fallu changer l’adresse du proxy (du serveur Asterisk) sur tous les téléphones. Après avoir effectué ces changements, le réseau téléphonique et le réseau des PC fonctionnaient ensemble parfaitement.<br>
            Le second problème que nous avons rencontré est que pour le téléchargement des VM sur la clé usb, car les personnes en charge du Windows Server n’étais pas présent à ce moment-là ce qui fait que la partie du groupe qui était présent on eu du mal à trouver les logins et mots de passe du compte qui a tous les droits. Car sans ces identifiants, on ne pouvait pas se connecter en "Administrator" et donc on n'avait pas les droits pour télécharger les VMs. Nous avons finalement réussi à trouver le login et le mot de passe et donc à télécharger les VMs.<p/>
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