<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS for the page-->
    <link rel="stylesheet" href="./Style/style.css">
    <link rel="icon" href="./Image/Logos/PetitLogo-removebg.png" type="image/gif">
    <title>Yassir</title>
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
        <h1>Yassir Boulouiha</h1>
        <h2>Chargé de POP3 et Thunderbird</h2>
        <h2>Tâches effectuées</h2>
        <p>Dans le cadre de ce projet je me suis donc occupé des services SMTP POP3 et FTP au niveau de la VM Linux, j’ai produit le diagramme de gantt prévisionnel,  fait l’installation d’EsXi avec le clonage des VM’s dessus, fait la base de données pour le site web, et j’ai épaulé baptiste sur toute la partie du site nécessitant du PHP.</p>
        <h2>SMTP et FTP</h2>
        <p>La tâche qui m’aura pris le plus de temps aura été la mise en place du serveur SMTP afin qu’il puisse fonctionner avec les boîtes vocales d’asterisk, c’est à dire que lorsqu' un numéro envoie un message à un autre poste téléphonique correspondant à un utilisateur, celui ci reçoit un message dans sa boite mail lui indiquant de consulter sa messagerie vocale, avec le dernier message envoyé en pièce jointe. <br>
        Au début j’ai voulu faire en sorte que les utilisateurs de L’Active Directory (Windows Server) soient synchronisés avec les utilisateurs du serveur de messagerie SMTP qui en l'occurrence sont des utilisateurs sur la Machine Linux, après avoir tenté  plusieures méthode, je me suis rendu compte que c’était un solution qui n’était  pas vraiment adaptée au besoin, je me suis donc rabattu sur un autre choix, qui était de créer les comptes de messagerie séparément avec les mêmes identifiants sur la machine Linux, (ce qui m’arrange également pour le ftp). <br>
        Pour mettre en place cette solution j’ai donc dû utiliser la commande useradd dans un premier temps afin d’ajouter tous les utilisateurs. Après cela le serveur POP3 marchait mais les mails n’apparaissaient pas pour les différents utilisateurs, c’est à dire que tout marchait sauf le fait de stocker les mails destinés à chaque utilisateur dans son répertoire respectif sur la machine Linux, j’ai passé pas mal de temps a comprendre mon erreur, et c’est notamment grâce à benjamin que l’on s’est rendu compte du problème, lorsque benjamin a refait le ftp (étant donné qu' on avait reinstallé une VM pour refaire le serveur de messagerie à 0), on s’est rendu compte que l’accès au ftp des utilisateurs ne marchait pas non plus, et après avoir essayé de se connecter en graphique sur la machine linux, cela affichait un écran noir, puis nous rammenait a la page de connexion aussitôt.<br>
        Le problème était donc que lorsque j’avais créé mes utilisateurs avec useradd, je ne les ai pas créé avec sudo ce qui ne me renvoyait aucune erreur sur le moment, mais qui donc impliquait que les utilisateurs créés n’avaient pas de répertoire dans le /home ce qui empechait de stocker les mails, et le bon fonctionnement du ftp, nous avons donc refait les utilisateurs cette fois-ci en sudo avec la commande adduser, qui produit à peu de choses près le même résultat, cela demande juste un peu plus de précisions sur l’utilisateur (numéro de téléphone, nom complet etc…). Puis après cela le service SMTP s’est mis à marcher, et l’on recevait bien les mails. En ce qui concerne le DNS nous avons ajouté un enregistrement A pour le sous domaine mail.icpocc.fr et également pour le sous domains ftp.icpocc.fr, tous les deux pointant vers l’adresse ip de leur service respectif.<br>
        Pour permettre à asterisk de fonctionner avec les utilisateurs que l’on a créé on a paramétré cela dans le fichier de configuration voicemail.conf : </p>
        <img class="classe2" src="./Image/Yassir/voicemail-conf (utilisateurs).PNG" alt="voicemail-conf (utilisateurs)">
        <p>Pour la traduction des mails envoyés j’ai également fait cela dans le fichier voicemail.conf : </p>
        <img class="classe2" src="./Image/Yassir/voicemail-conf(message mail).PNG" alt="voicemail-conf(message mail)">
        <p>En ce qui concerne le test du serveur SMTP et de la messagerie asterisk : </p>
        <img class="classe2" src="./Image/Yassir/mail-thunderbird_message_repondeur.PNG" alt="mail-thunderbird_message_repondeur">
        <p>Le test du ftp : </p>
        <img class="classe2" src="./Image/Yassir/ftp.PNG" alt="ftp">
        <h2>Esxi</h2>
        <p>Pour cette partie ma tâche à été de rendre les machines virtuelles (Windows Server, et Lubuntu) compatibles avec la version 5.1 de l’Esxi et de les cloner sur le serveur Esxi afin que l’on puisse les utiliser avec un client (VMware Vsphere) depuis n’importe quel pc sur le réseau.<br>
        Pour le changement de version et le clonage de la VM Lubuntu je n’ai pas vraiment eu de soucis en particulier, cependant j’ai rencontré un problème lors du changement de version de la VM Windows Server de façon à ce qu’elle soit compatible avec Esxi 5.1 et qu’elle puisse être clonée sur celui-ci. <br>
        J’ai du régler ce souci en ajoutant un nouveau disque SCII : </p>
        <img class="classe2" src="./Image/Yassir/Esxi_windows_disque_SCII.png" alt="Esxi_windows_disque_SCII">
        <p>Suite à cela j’ai supprimé l’ancien disque, puis le changement de version pour la compatibilité avec Esxi 5.1 a marché, et tout s’est déroulé correctement.</p>
        <h2>Base de données + PHP</h2>
        <p>J’ai également aidé Baptiste a faire toute la partie PHP du site, et j’ai fait la base de données pour le site web qui elle contient une table qui contient deux colonnes login et mdp permettant de fait l'authentification de l’utilisateur au niveau du site web.</p>
        <h2>Conclusion </h2>
        <p>En résumé, j'ai été responsable des services SMTP, POP3 et FTP sur la VM Linux, de l'installation d'Esxi et du clonage des VM. La mise en place du serveur SMTP pour les boîtes vocales d'Asterisk a été la tâche la plus chronophage. J'ai initialement tenté de synchroniser les utilisateurs de l'Active Directory avec le serveur de messagerie SMTP, mais j'ai opté pour la création de comptes de messagerie distincts sur la machine Linux. J'ai résolu des problèmes liés au stockage des mails et au bon fonctionnement du FTP en recréant les utilisateurs avec les privilèges sudo. J'ai également aidé à configurer le DNS pour les sous-domaines mail.icpocc.fr et ftp.icpocc.fr. Dans le cadre d'Esxi, j'ai rendu les machines virtuelles compatibles avec la version 5.1 et les ai clonées avec succès. Enfin, j'ai contribué à la partie PHP du site web et créé la base de données pour l'authentification des utilisateurs.</p>
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