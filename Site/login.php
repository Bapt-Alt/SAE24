<?php
    session_start();
    require_once("./Config/config.php");
    
    try {
        $id_bd = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
    } catch (Exception $e) {
        die("DATABASE CONNECTION ERROR" . $e);
    }

    try {
        $result = mysqli_query($id_bd, "SELECT * FROM admin");
    } catch (Exception $e) {
        die("DATABASE RECOVERY ERROR <br>" . $e);
    }

    //Placement des login et mdp dans le tableau credentials
    for ($i=0; $i < mysqli_num_rows($result); $i++) { 
        $credentials[$i] = mysqli_fetch_array($result);
    }

    $login = $_POST['login'];
    $passwd = $_POST['passwd'];
    $known = false;

    for ($i=0; $i < count($credentials); $i++) { 
        if (password_verify($passwd, $credentials[$i][1]) && $login == $credentials[$i][0]) {
            $known = true;
            $_SESSION['admin'] = 'on';
            echo '
            <script>
                    window.location = "./groupe.php";
            </script>';
        }
    }
    if (!$known) {
        echo '<h1>Login ou passwd incorrect</h1>';
        echo '
        <script>
            setTimeout(function() {
                window.location = "./connexion.php";
            }, 1500);
        </script>';
    }
    mysqli_close($id_bd);
?>
