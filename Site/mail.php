<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $date = $_POST["date"];
    $heure = $_POST["heure"];
    $medecin = $_POST["medecin"];
    $informations = $_POST["informations"];

    $destinataire = "baptiste.alteirac.iut@gmail.com"; // Test email address

    $sujet = "New Appointment";

    // Compose the message
    $message = "Nom: $nom\n";
    $message .= "Email: $email\n";
    $message .= "Téléphone: $telephone\n";
    $message .= "Date souhaitée du rendez-vous: $date\n";
    $message .= "Heure souhaitée du rendez-vous: $heure\n";
    $message .= "Médecin choisi: $medecin\n";
    $message .= "Informations supplémentaires:\n$informations";

    $headers = "From: $email";

    // Send the email
    if (mail($destinataire, $sujet, $message, $headers)) {
        echo "Votre rendez-vous a été envoyé avec succès.
        <script>
            setTimeout(function() {
                window.location.href = './index.php';
            }, 5000); // 5000 milliseconds = 5 seconds
        </script>";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du rendez-vous.
        <script>
            setTimeout(function() {
                window.location.href = './index.php';
            }, 5000); // 5000 milliseconds = 5 seconds
        </script>";
    }
}
?>
