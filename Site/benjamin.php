<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS for the page-->
    <link rel="stylesheet" href="./Style/style.css">
    <link rel="icon" href="./Image/Logos/PetitLogo-removebg.png" type="image/gif">
    <title>Benjamin</title>
</head>
<body>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('js-message').style.display = 'none';
        });
    </script>

    <div id="js-message" style="display: block;">
        <h1> Veuillez activer JavaScript pour permettre au site de fonctionner correctement. </h1>
    </div>
<header class="scroll-shadow">
        <nav>
            <img class="logo" src="./Image/Logos/LogoVert.png" alt="Logo">
            <ul>
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
    <section class="main">
        <h1>Benjamin Sarrat</h1>
        <h2>Chargé du réseaux</h2>
        <h3>Schéma de la topologie</h3>
        <img class="classe5" src="./Image/Benjamin/1)Schéma de la topologie/1.Topologie_SAE24.png" alt="Topologie_SAE24">
        <p> Le schéma ci-dessus reprend celui montré dans la présentation de la SAÉ pour coller le plus possible avec ce qui est attendu dans la réalité. Ainsi, on retrouve les différentes pièces du cabinet paramédical, séparées à la fois physiquement mais aussi virtuellement car les réseaux sont divisés en plusieurs VLANs selon l’utilisation. Les téléphones, eux, sont dans le même VLAN (Voix) quelle que soit la pièce où ils se trouvent. </p>
        <h3>Simulation Packet Tracer</h3>
        <img class="classe5" src="./Image/Benjamin/2)Simulation Packet Tracer/1.Simulation_globale.png" alt="Simulation_globale">
        <p>La capture ci-dessu représente la topologie globale vu précédemment simulée sous Cisco Packet Tracer</p><br><p>La capture suivante détaille la configuration du switch et du routeur que nous verrons plus en détail dans les prochaines parties (configuration switch et routeur) :</p>
        <img class="classe5" src="./Image/Benjamin/2)Simulation Packet Tracer/2.configSwitch.png" alt="configSwitch">
        <p>Enfin, les prochaines captures détaillent les services simulés sous Packet Tracer tirés du cahier des charges (DHCP, DNS, Web, FTP, Mail) :</p>
        <img class="classe5" src="./Image/Benjamin/2)Simulation Packet Tracer/3.configRouteur.png" alt="configRouteur">
        <img class="classe5" src="./Image/Benjamin/2)Simulation Packet Tracer/4.HTTPS.png" alt="HTTPS">
        <img class="classe5" src="./Image/Benjamin/2)Simulation Packet Tracer/5.poolDHCP.png" alt="poolDHCP">
        <img class="classe5" src="./Image/Benjamin/2)Simulation Packet Tracer/6.DNS.png" alt="DNS">
        <img class="classe5" src="./Image/Benjamin/2)Simulation Packet Tracer/7.mail.png" alt="mail">
        <img class="classe5" src="./Image/Benjamin/2)Simulation Packet Tracer/8.FTP.png" alt="FTP">
        <h3>Configuration Switch</h3>
        <p>La configuration du switch a été assez rapide, il suffisait de rajouter des vlan nommés selon leur utilisation afin de séparer les usages et les domaines de broadcast. Ainsi, les 6 VLANs créés sont : <br><br>

            VLAN 5 192.168.5.0/24 Voix<br><br>
            VLAN 10 192.168.10.0/24 Serveur<br><br>
            VLAN 20 192.168.20.0/24 Dentiste<br><br>
            VLAN 30 192.168.30.0/24 Kiné<br><br>
            VLAN 40 192.168.40.0/24 Généraliste<br><br>
            VLAN 50 192.168.50.0/24 Secrétariat<br><br>

            Les captures suivantes montrent la configuration du switch réel : 
        </p>
        <img class="classe5" src="./Image/Benjamin/3)Configuration Switch/1.ShowVlanBrief.PNG" alt="ShowVlanBrief">
        <img class="classe5" src="./Image/Benjamin/3)Configuration Switch/2.ShowRunningConfig(trunk).PNG" alt="ShowRunningConfig">
        <p>On retrouve bien 3 interfaces dans le VLAN 5 qui correspondent aux deux switch Netgear interconnectant les téléphones et au point d’accès WiFi qui permet à la secrétaire d’utiliser son téléphone mobile.</p>
        <h3>Configuration Routeur</h3>
        <p>Les capture suivantes montrent la configuration du routeur, précisément ses sous-interfaces qui permettent le routage inter-VLANs dans le réseau : </p>
        <img class="classe5" src="./Image/Benjamin/4)Configuration Routeur/1.ShowRunningConfig(subinterfaces).PNG" alt="ShowRunningConfig(subinterfaces)">
        <p>Chaque sous-interface possède une adresse IP cohérente avec le VLAN qui lui est associé par encapsulation, en plus d’un “ip helper” qui lui permet, en tant que passerelle, de rediriger les broadcast DHCP vers le serveur DHCP à l’adresse 192.168.10.1. Aussi, notons la présence d’un “ip nat inside” qui signifie que les adresses sont internes au réseau et ce sont elles qui seront translatées en l’adresse de sortie de l’interface de la capture suivante :</p>
        <img class="classe5" src="./Image/Benjamin/4)Configuration Routeur/2.ShowRunningConfig(nat outside).PNG" alt="ShowRunningConfig(nat outside)">
        <h3>Point d’accès WiFi</h3>
        <p>Concernant le PA WiFi, une fois la commande “boot” entrée, une adresse DHCP était attribuée automatiquement ce qui permet la configuration par interface graphique de l’équipement :</p>
        <img class="classe5" src="./Image/Benjamin/5)Point d’accès WiFi/1.ap_boot.png" alt="ap_boot.png">
        <img class="classe5" src="./Image/Benjamin/5)Point d’accès WiFi/2.ShowIpInterfaceBrief(int gi0).PNG" alt="ShowIpInterfaceBrief(int gi0)">
        <p>Une fois connecté à la page d’administration, on peut créer un point d’accès, ici j’ai choisi de faire un point d’accès en 2.4GHz car la portée est meilleure qu’en 5GHz et le débit sera suffisant pour son utilisation (téléphonie mobile et navigation web) :</p>
        <img class="classe5" src="./Image/Benjamin/5)Point d’accès WiFi/3.network_configuration_2.4GHz.png" alt="network_configuration_2.4GHz">
        <p>Il reste alors à activer la bande de fréquence 2.4GHz puis à lancer la diffusion du SSID pour pouvoir s’y connecter :</p>
        <img class="classe5" src="./Image/Benjamin/5)Point d’accès WiFi/4.network_interface_2.4GHz.png" alt="network_interface_2.4GHz">
        <img class="classe5" src="./Image/Benjamin/5)Point d’accès WiFi/5.Guest_Mode_SSID_Diffusion.png" alt="Guest_Mode_SSID_Diffusion">
        <p>Nous avons maintenant un point d’accès WiFi fonctionnel sur le VLAN 5, les appareils connectés y obtiendront alors une adresse IP de type 192.168.5.x. Le point d’accès est protégé par le protocole WPA2 fonctionnant avec une clé AES pour garantir la sécurité du réseau.</p>
        <h2>Problèmes rencontrés</h2>
        <p>Je n’ai pas rencontré de problèmes particuliers lors de la mise en place de ce réseau car nous avons beaucoup travaillé sur ce genre de configuration, et de plus tout était déjà bien planifié grâce au schéma de la topologie et à la simulation Packet Tracer.
        La seule chose sur laquelle j’ai rencontré un problème est le NAT, c’était la première fois que je faisais de la translation d’adresse sur un routeur et en voulant me renseigner dans la documentation Cisco je suis tombé sur des commandes désuètes qui m’ont plus desservi que le contraire. Malgré ça, en discutant avec des camarades d’autres groupes j’ai fini par trouver comment paramétrer le NAT afin d’accéder à Internet depuis notre réseau.</p>
        <h2>Conclusion</h2>
        <p>La création de ce réseau pour la petite entreprise qu’est un cabinet paramédical s’est déroulée sans réel accroc et m’a permis de mieux maîtriser le fonctionnement d’une architecture réseau à petite échelle</p>



    </section>
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