<?php
    // Start the session
    session_start();
    // Include the configuration file
    require_once("./Config/config.php");
    
    try {
        // Establish a database connection
        $id_bd = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
    } catch (Exception $e) {
        die("DATABASE CONNECTION ERROR" . $e);
    }

    try {
        // Retrieve data from the 'admin' table
        $result = mysqli_query($id_bd, "SELECT * FROM admin");
    } catch (Exception $e) {
        die("DATABASE RECOVERY ERROR <br>" . $e);
    }

    // Fetch all credentials from the result
    for ($i=0; $i < mysqli_num_rows($result); $i++) { 
        $credentials[$i] = mysqli_fetch_array($result);
    }

    // Get the login and password from the form
    $login = $_POST['login'];
    $passwd = $_POST['passwd'];
    $known = false;

    // Check if the provided credentials match any in the database
    for ($i=0; $i < count($credentials); $i++) { 
        if (password_verify($passwd, $credentials[$i][1]) && $login == $credentials[$i][0]) {
            $known = true;
            // Set session variable to indicate successful login
            $_SESSION['admin'] = 'on';
            // Redirect to the "groupe.php" page
            echo '
            <script>
                window.location = "./groupe.php";
            </script>';
        }
    }

    // If the credentials are not found, display an error message and redirect to the login page
    if (!$known) {
        echo '<h1>Login or password incorrect</h1>';
        echo '
        <script>
            setTimeout(function() {
                window.location = "./connexion.php";
            }, 1500);
        </script>';
    }

    // Close the database connection
    mysqli_close($id_bd);
?>
