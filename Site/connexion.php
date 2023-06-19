<?php 
    session_start();
    if (isset($_SESSION['admin']) && $_SESSION['admin'] === 'on') {
        echo '
        <script>
                window.location = "./groupe.php";
        </script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS for the page-->
    <link rel="stylesheet" href="./Style/style.css">
    <link rel="icon" href="./Image/PetitLogo-removebg.png" type="image/gif">
    <title>Connexion</title>
</head>
<body>
<section class="Connexion">
    <div>
        <h1 class="TitleAccount">Log In</h1>
        <form name="LogIn" action="./login.php" method="post">
            <label for="login">Your login :</label>
            <input type="text" id="login" name="login" required>
            <label for="passwd">Your password:</label>
            <input type="password" id="password" name="passwd" required>
            <input type="submit" value="Submit">
        </form>
    </div>
    </section>
</body>
</html>