<?php

session_start();

include('./connectDB.php');

$conn = $pdo->open();

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email']; 
    $attendance = isset($_POST['radio']) ? $_POST['radio'] : '';
    
    $stmt = $conn->prepare("SELECT * FROM invite WHERE email_invite=:email");
    $stmt->execute(['email' => $email]);
    
    
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<p style='color:red; text-align: center; margin: 20px auto; padding: 10px; background-color: #fbeaea; border: 1px solid #f44336; border-radius: 5px;'>Vous avez déjà confirmé votre présence, veuillez attendre votre invitation.</p>";
        echo "<button style='display: block; margin: 20px auto; padding: 10px 20px; background-color: red; color: white; border: none; border-radius: 5px; cursor: pointer;' onclick=\"window.location.href='./index.php';\">Retourner au site</button>";
    } else {
        $requete = $conn->prepare("INSERT INTO invite (nom_invite, email_invite, status_invite) VALUES (:nom, :email, :status)");
        $requete->execute(['nom' => $name, 'email' => $email, 'status' => 'pending']);
        
    
        $to = "andytchouta@gmail.com"; // Remplacez cette adresse e-mail par votre propre adresse e-mail
        $subject = "RSVP pour mariage de Leslie & Daniel";
        $message = "Nom: $name<br/>";
        $message .= "Email: $email<br/>";
        $message .= "Participation: $attendance<br/>";
        //$message .= "Nombre d'invités: $guests<br/>";
        // $message .= "Événement: $event<br/>";
        // $message .= "Préférence de repas: $meal_preference<br/>";
    
        $headers = array(
            'From' => $email,
            'Content-type' => 'text/html; charset=utf-8',
            'MIME-version' => '1.0',
            'Reply-To' => ''.$email.''
        );
    
        $true = mail($to, $subject, $message, $headers);
        
        if ($true) {
            echo "<p style='color:green; text-align: center; margin: 20px auto; padding: 10px; background-color: #eafbea; border: 1px solid #4caf50; border-radius: 5px;'>Merci, le message a été envoyé.</p>";
            echo "<button style='display: block; margin: 20px auto; padding: 10px 20px; background-color: #4caf50; color: white; border: none; border-radius: 5px; cursor: pointer;' onclick=\"window.location.href='./index.php';\">Retourner au site</button>";
        } else {
            echo "<p style='color:red; text-align: center; margin: 20px auto; padding: 10px; background-color: #fbeaea; border: 1px solid #f44336; border-radius: 5px;'>Une erreur s'est produite lors de l'envoi du message. Veuillez réessayer.</p>";
        }
    }

} else {
    if (isset($_SESSION['id'])) {
        header('Location: dashboard.php');
    } else {
        header('Location: login.html');
    }
}


?>
