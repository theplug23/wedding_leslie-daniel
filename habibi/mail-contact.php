<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=wedding_leslie_daniel", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : ".$e->getMessage();
}


if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email']; 
    // Copie cachee du mail
    $attendance = isset($_POST['radio-group']) ? $_POST['radio-group'] : '';
    $guests = $_POST['guest'];
    $event = $_POST['what'];
    $meal_preference = $_POST['meal'];

    $requete = $bdd->prepare("INSERT INTO invite VALUES (0, :name, :email)");
    $requete->execute(
        array(
            "name" => $name,
            "email" => $email
        )
    );
    

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
        'Content-type' => 'text/html; charset=utf-8',
        'MIME-version' => '1.0',
        'Reply-To' => ''.$email.''
    );

    $true = mail($to, $subject, $message, $headers);
    if ($true) {
        echo "<p style='color:green; text-align: center; margin: 20px auto; padding: 10px; background-color: #eafbea; border: 1px solid #4caf50; border-radius: 5px;'>Merci, le message a été envoyé.</p>";
        echo "<button style='display: block; margin: 20px auto; padding: 10px 20px; background-color: #4caf50; color: white; border: none; border-radius: 5px; cursor: pointer;' onclick=\"window.location.href='./index.html';\">Retourner au site</button>";
    } else {
        echo "<p style='color:red; text-align: center; margin: 20px auto; padding: 10px; background-color: #fbeaea; border: 1px solid #f44336; border-radius: 5px;'>Une erreur s'est produite lors de l'envoi du message. Veuillez réessayer.</p>";
    }
}
?>