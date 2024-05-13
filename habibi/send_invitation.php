<?php

session_start();

include('./connectDB.php');

$conn = $pdo->open();

if (isset($_POST['send_invitation'])) {
    $to_email = $_POST['email'];
    
    $headers = array(
        'From' => 'LeslieDaniel@gmail.com',
        'Content-type' => 'text/html; charset=utf-8',
        'MIME-version' => '1.0',
        'Reply-To' => 'andytchouta@gmail.com'
    );
    
    $message_body = "
        <p style='font-size: 16px; margin-bottom: 7px;'>Bonjour $to_email !</p>
        <p style='font-size: 16px; margin-bottom: 7px;'>Vous êtes chaleureusement invité à notre mariage.</p>
        <p style='font-size: 16px; margin-bottom: 7px;'>Veuillez confirmer votre présence en repondant à ce mail s'il vous plait !.</p>
    ";

    $result = mail($to_email, 'Invitation mariage de Leslie & Daniel', $message_body, $headers);
    
    if ($result) {
        $stmt = $conn->prepare("UPDATE invite SET status_invite=:status WHERE email_invite=:email");
        $stmt->execute(['status' => 'success', 'email' => $to_email]);
    
        header('Location: dashboard.php');
    }
    else
        echo "<p style='color:red; text-align: center; margin: 20px auto; padding: 10px; background-color: #fbeaea; border: 1px solid #f44336; border-radius: 5px;'>Une erreur s'est produite lors de l'envoi du message. Veuillez réessayer.</p>"; 
    
} else {
    if (isset($_SESSION['id'])) {
        header('Location: dashboard.php');
    } else {
        header('Location: login.html');
    }
}

?>