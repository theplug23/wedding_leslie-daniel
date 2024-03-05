<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $attendance = isset($_POST['radio-group']) ? $_POST['radio-group'] : '';
    $guests = $_POST['guest'];
    $event = $_POST['what'];
    $meal_preference = $_POST['meal'];

    $to = "andytchouta@andytchouta.com"; // Remplacez cette adresse e-mail par votre propre adresse e-mail
    $subject = "RSVP pour un événement";
    $message = "Nom: $name\n";
    $message .= "Email: $email\n";
    $message .= "Participation: $attendance\n";
    $message .= "Nombre d'invités: $guests\n";
    $message .= "Événement: $event\n";
    $message .= "Préférence de repas: $meal_preference\n";

    $headers = "From: $email";

	// ini_set("SMTP", "localhost");
    // ini_set("smtp_port", "1025");

    if (mail($to, $subject, $message, $headers)) {
        echo "<p style='color:green;'>Merci, message envoyé</p>";
    } else {
        echo "<p style='color:red;'>Une erreur s'est produite lors de l'envoi du message. Veuillez réessayer.</p>";
    }
}
?>