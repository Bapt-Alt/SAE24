<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS for the page-->
    <link rel="stylesheet" href="./Style/style.css">
    <link rel="icon" href="./Image/Logos/PetitLogo-removebg.png" type="image/gif">
    <title>Gabin</title>
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
        <h1>Gabin Lopez</h1>
        <h2>Chargé de Windows Serveur</h2>
        <h3>DHCP:</h3>
        <p>Pour configurer le DHCP il fallait d’abord l’ajouter pour cela il fallait aller dans manage puis dans add roles and features.</p>
        <img class="classe5" src="./Image/Gabin/Pour_rajouter_ des_roles.png" alt="Pour_rajouter_ des_roles">
        <p>Ensuite on avait cette fenêtre qui s'affiché et on a sélectionné les rôles dont on avait besoin un à un. Pour bien configurer chaque rôle.</p>
        <img class="classe5" src="./Image/Gabin/Ajouter_les_roles.png" alt="Ajouter_les_roles">
        <p>Une fois que le DHCP s'était installé il fallait taper dans le menu démarrer dhcp cliqué dessus:</p>
        <img class="classe5" src="./Image/Gabin/DHCP_menu_démarrer.png" alt="DHCP_menu_démarrer">
        <p>Après avoir cliqué dessus on avait cette fenêtre qui apparaissait une fois cette fenêtre il fallait faire un clique droit sur IPV4 puis cliquer sur new scope.</p>
        <img class="classe5" src="./Image/Gabin/DHCP_new_scope.png" alt="DHCP_new_scope">
        <p>Après avoir cliqué sur new scope il fallait donner un nom qu’on voulait</p>
        <img class="classe5" src="./Image/Gabin/DHCP_new_scope_pour donner_un_nom.png" alt="DHCP_new_scope_pour donner_un_nom">
        <p>Une fois le nom entré de la scope il fallait configurer la plage d’adresse IP donc de quand on voulait que ça commence à distribuer des adresses à la dernière adresse IP. Le masque de sous-réseau est 255.255.255.0.</p>
        <img class="classe5" src="./Image/Gabin/Choisir_la_plage_d_adresse.png" alt="Choisir_la_plage_d_adresse.">
        <p>Après avoir configuré la plage d’adresse IP il fallait mettre la gateway pour que tout les ping fonctionne entre tous les vlans.</p>
        <img class="classe5" src="./Image/Gabin/Rajouter_l_adresse_de_passerelle.png" alt="Rajouter_l_adresse_de_passerelle">
        <p>On a 5 scope différente car on a 5 vlan donc 1 scope par vlan </p>
        <img class="classe5" src="./Image/Gabin/dhcp_pour_tout_les_vlans.png" alt="dhcp_pour_tout_les_vlans">
        <p>Pour vérifier que le DHCP fonctionne bien on à fait un ipconfig sur un pc kiné qui est dans le vlan 3 donc qui doit avoir une adresse IP en 192.168.30.. Donc on peut voir que le DHCP marche bien car il à attribué une bonne adresse IP.</p>
        <img class="classe5" src="./Image/Gabin/attribution_dhcp_kiné.PNG" alt="attribution_dhcp_kiné">
        <h3>DNS:</h3>
        <p>Il faut faire comme pour le DHCP c’est à dire aller dans add roles and features</p>
        <img class="classe5" src="./Image/Gabin/Pour_rajouter_ des_roles.png" alt="Pour_rajouter_ des_roles">
        <p>Puis sélectionner DNS:</p>
        <img class="classe5" src="./Image/Gabin/Ajouter_les_roles.png" alt="Ajouter_les_roles">
        <p>Après avoir installé DNS tapez dans la barre du menu démarrer DNS cliquez dessus.</p>
        <img class="classe5" src="./Image/Gabin/DNS.png" alt="DNS">
        <img class="classe5" src="./Image/Gabin/Config_DNS.png" alt="Config_DNS">
        <p>Pour avoir cette fenêtre il fallait faire un clique droit sur WINSERV-SAE24 puis ça ouvrait cette fenêtre puis aller dans forwarders et là il fallait aller dans edit.</p>
        <img class="classe5" src="./Image/Gabin/forwarder_conf.png" alt="forwarder_conf">
        <p>Quand on clique sur edit on avait cette fenêtre et la il fallait ajouter l’ip qu’on voulait.</p>
        <img class="classe5" src="./Image/Gabin/Rajouter_dns.png" alt="Rajouter_dns">
        <p>Ensuite pour faire un test du dns pour savoir si il marcher j’ai rajouter une reverse zone en faisant un clique droit sur reverse zone et la cliquer sur new zone.</p>
        <img class="classe5" src="./Image/Gabin/Reverse_zone.png" alt="Reverse_zone">
        <p>Après avoir cliqué sur new zone on a cette fenêtre qui s’ouvre.</p>
        <img class="classe5" src="./Image/Gabin/New_zone_dns.png" alt="New_zone_dns">
        <p>Il fallait cliquer sur next la il fallait choisir le type de zone qu’on voulais pour ma part j’ai utiliser primary zone.</p>
        <img class="classe5" src="./Image/Gabin/Choisir_le-type_de_zone.png" alt="Choisir_le-type_de_zone">
        <p>Ensuite cliquer sur next pour ça j’ai laissé par défaut.</p>
        <img class="classe5" src="./Image/Gabin/DNS_scope.png" alt="DNS_scope">
        <p>Ensuite il fallait choisir soit ipv6 soit ipv4 j’ai choisi ipv4.</p>
        <img class="classe5" src="./Image/Gabin/Reverse_IPV4.png" alt="Reverse_IPV4">
        <p>Après avoir sélectionné IPV4 il fallait rentrer l’adresse IP du serveur.</p>
        <img class="classe5" src="./Image/Gabin/DNS_adresse_serv.png" alt="DNS_adresse_serv">
        <p>Puis après cet étape sélectionner le deuxième choix car ça va permettre de faire les mise à jour sécurisé et non sécurisé et cela permet aussi pour les mise a jour quel soit accessible à tous les clients.</p>
        <img class="classe5" src="./Image/Gabin/Dynamic.png" alt="Dynamic">
        <p>Enfin cliquez sur finish et après ça la configuration du dns est prête.</p>
        <img class="classe5" src="./Image/Gabin/FIN_dns.png" alt="FIN_dns">
        <h3>Création USER et GROUP:</h3>
        <p>Pour pouvoir créer des utilisateurs ou des groupes il faut aller dans Active directory Users and computers qu’on à grâce à l’ajout du rôle Active Directory Domain Services.</p>
        <img class="classe5" src="./Image/Gabin/Ajouter_les_roles.png" alt="Ajouter_les_roles">
        <p>Pour créer des utilisateurs ou des groupes il faut faire un clique droit dans les Users on a une petite fenêtre avec plein de choses nous on va devoir aller dans new puis on peut voir qu’on peut ajouter des groupes, des utilisateurs et plein d'autres choses.</p>
        <img class="classe5" src="./Image/Gabin/Création_utilisateur_et_groupe.png" alt="Création_utilisateur_et_groupe">
        <p>Pour créer un utilisateur cliquer sur User ça nous affiche cette fenêtre qu’on va remplir avec les information de l’utilisateur donc avec son nom qui l’aura sur son ordinateur.</p>
        <img class="classe5" src="./Image/Gabin/Create_user.png" alt="Create_user">
        <p>Après avoir donné les informations de l'utilisateur, on va pouvoir lui donner un mot de passe et choisir s' il veut le changer à sa première connexion ou si le mot de passe n'expire jamais.</p>
        <img class="classe5" src="./Image/Gabin/User_mdp.png" alt="User_mdp">
        <p>Après avoir mis son mot de passe le compte utilisateur est créé</p>
        <img class="classe5" src="./Image/Gabin/Finish_User.png" alt="Finish_User">
        <p>Pour créer les groupes il faut faire la même démarche que pour créer les utilisateurs sauf qu' au lieu de sélectionner user on sélectionne groupe. En sélectionnant group on a cette fenêtre qui s’affiche. Une fois cette fenêtre ouverte on donne un nom qu’on veut au groupe. Après avoir mis le nom du groupe cliqué sur ok est le groupe est créé.</p>
        <img class="classe5" src="./Image/Gabin/Groupe.png" alt="Groupe">
        <p>Enfin pour ajouter un utilisateur à un groupe faire un clique droit sur l'utilisateur créer puis cliquer sur add to a group.</p>
        <img class="classe5" src="./Image/Gabin/Ajouter_User_à_Group.png" alt="Ajouter_User_à_Group">
        <p>Après avoir cliqué sur add to a group on a cette fenêtre qui s’affiche et la dans enter the object names to select mettre le nom du groupe un fois avoir entré le nom du groupe cliqué sur ok est l'utilisateur sera bien dans le groupe.</p>
        <img class="classe5" src="./Image/Gabin/Ajout-group.png" alt="Ajout-group">
        <h3>Espace disque: </h3>
        <p>Pour faire un espace disque pour les utilisateurs j’ai dû créer deux nouveaux dossiers profils et UsersCdD. Après avoir créé ces deux dossiers j’ai dû les partager à tous les utilisateurs. Puis ensuite en faisant un clique droit sur un utilisateur faire properties on a cette fenêtre qui s’affiche et la il fallait mettre le chemin du dossier profiles avec le nom d’utilisateur puis ensuite sélectionner connect choisir une lettre et mettre le chemin du dossier UsersCdD et mettre le nom d’utilisateur.</p>
        <img class="classe5" src="./Image/Gabin/path_profil_disk.png" alt="path_profil_disk">
        <p>Après avoir fait ça il fallait faire un clique droit sur le disque on à ce menu qui s’affiche cliquer sur properties.</p>
        <img class="classe5" src="./Image/Gabin/Disque.png" alt="Disque">
        <p>Après avoir cliquer sur properties on a  cette fenêtre aller dans quota et dans quota sélectionner enable quota management, deny disk space to users exceeding quota limit j’ai choisi de limiter les disques de 5 GB et quand ça arrive 1 GB avant d’être plein ça prévient l’utilisateur.</p>
        <img class="classe5" src="./Image/Gabin/Quota.png" alt="Quota">
        <p>Pour vérifier que les utilisateurs ont bien un disque de 5 GB chacun je suis allé sur un utilisateur pour vérifier. La on peut voir qu' il a bien un espace de disque dédiée</p>
        <img class="classe5" src="./Image/Gabin/vérif_disque.PNG" alt="vérif_disque">
        <h3>The dude:</h3>
        <p>Pour the dude j’ai installer l’application sur le serveur ensuite il fallait le configurer avec le réseau du serveur c’est à dire 192.168.10.0 et vu qu’on a 5 vlans on a 5 réseaux différents donc il fallait le faire pour chaque réseaux pour avoir toute les machines.</p>
        <img class="classe5" src="./Image/Gabin/the_dude.PNG" alt="the_dude">
        <h2>Problèmes rencontrés</h2>
        <p>J’ai rencontré des problèmes pour faire l’espace de disque dédiée pour attribuer un espace de disque aux utilisateurs. Après j’ai eu des problèmes au niveau du forwarder. Ensuite j’ai eu un problème avec the dude car j’arrivais pas a ajouter tout les réseaux donc j’ai cherché et j’ai vu qu’il fallait aller en haut dans découvrir et mettre le réseau qu’on voulais découvrir.</p>
        <h2>Conclusion </h2>
        <p>J’ai réussi à faire tout ce qui était demander en tant réel même si sur certain point il y a des services qui m’on prit plus de temps que d’autre mais c’est un projet qui m’a beaucoup appris sur certaines choses comme la gestion des disques dédiées pour les utilisateurs et the dude pour avoir tout les réseaux et c'était un projet très intéressant.</p>
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