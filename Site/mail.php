<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs soumises par le formulaire
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $date = $_POST["date"];
    $heure = $_POST["heure"];
    $medecin = $_POST["medecin"];
    $informations = $_POST["informations"];

    // Adresse e-mail de destination
    $destinataire = "baptiste.alteirac.iut@gmail.com";

    // Sujet de l'e-mail
    $sujet = "Nouveau rendez-vous";

    // Corps de l'e-mail
    $message = "Nom: $nom\n";
    $message .= "Email: $email\n";
    $message .= "Téléphone: $telephone\n";
    $message .= "Date souhaitée du rendez-vous: $date\n";
    $message .= "Heure souhaitée du rendez-vous: $heure\n";
    $message .= "Médecin choisi: $medecin\n";
    $message .= "Informations supplémentaires:\n$informations";

    // En-têtes de l'e-mail
    $headers = "From: $email";

    // Envoyer l'e-mail
    if (mail($destinataire, $sujet, $message, $headers)) {
        echo "Votre rendez-vous a été envoyé avec succès.
        <script>
            setTimeout(function() {
                window.location.href = './index.php';
            }, 5000); // 5000 millisecondes = 5 secondes
        </script>";
        
    } else {
        echo "Une erreur s'est produite lors de l'envoi du rendez-vous.
        <script>
            setTimeout(function() {
                window.location.href = './index.php';
            }, 5000); // 5000 millisecondes = 5 secondes
        </script>";
    }
}
?>
