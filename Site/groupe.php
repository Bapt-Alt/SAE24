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
<header class="scroll-shadow">
        <nav>
            <img class="logo" src="./Image/LogoVert.png" alt="Logo">
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
                                window.location = "./groupe.php";
                        </script>';
                    }
                ?>
            <input type="checkbox" id="menu-toggle" class="menu-toggle">
            <label for="menu-toggle" class="menu-icon">&#9776;</label>
        </nav> 
    </header>
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
                    <li><a href=""><img src="./Image/HTML5.png" alt="Validateurs HTML"></a></li>
                    <li><a href=""><img src="./Image/CSS3.png" alt="Validateurs CSS"></a></li>
                </ul>
            </li>
        </ul>
    </footer>
    <script src="./script.js"></script>
</body>
</html>