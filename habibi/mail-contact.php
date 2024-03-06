<?php
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cc = 'infinityparty237@gmail.com,travauxtheplug@gmail.com'; // Copie du mail
    $bcc = 'yehielyanou@gmail.com'; // Copie cachee du mail 
    $attendance = isset($_POST['radio-group']) ? $_POST['radio-group'] : '';
    $guests = $_POST['guest'];
    $event = $_POST['what'];
    $meal_preference = $_POST['meal'];

    $to = "andytchouta@gmail.com"; // Remplacez cette adresse e-mail par votre propre adresse e-mail
    $subject = "RSVP pour un événement";
    $message = "Nom: $name<br/>";
    $message .= "Email: $email<br/>";
    $message .= "Participation: $attendance<br/>";
    $message .= "Nombre d'invités: $guests<br/>";
    $message .= "Événement: $event<br/>";
    $message .= "Préférence de repas: $meal_preference<br/>";

    $headers = array(
        'From' => ''.$email.'',
        'Cc' => ''.$cc.'',
        'Bcc' => ''.$bcc.'',
        'Content-type' => 'text/html; charset=utf-8',
        'MIME-version' => '1.0',
        'Reply-To' => ''.$email.''
    );

	// ini_set("SMTP", "localhost");
    // ini_set("smtp_port", "1025");
    $true = mail($to, $subject, $message, $headers);
    if ($true) {
        echo "<p style='color:green;'>Merci  message envoyé</p>";
    } else {
        echo "<p style='color:red;'>Une erreur s'est produite lors de l'envoi du message. Veuillez réessayer.</p>";
    }
}
?>