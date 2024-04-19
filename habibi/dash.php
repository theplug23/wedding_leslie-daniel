<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wedding_leslie_daniel";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM invite");
    $stmt->execute();

    $invites = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($invites as $invite) {
        echo "<tr>";
        echo "<td>" . $invite['num_invite'] . "</td>";
        echo "<td>" . $invite['nom_invite'] . "</td>";
        echo "<td>" . $invite['email_invite'] . "</td>";
        echo "<td></td>"; 
        echo "<td>";
        echo "<form method='post'>";
        echo "<input type='hidden' name='email' value='" . $invite['email_invite'] . "'>";
        echo "<button type='submit' name='send_invitation'>Invitation</button>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";

        if (isset($_POST['send_invitation']) && isset($_POST['email']) && $_POST['email'] == $invite['email_invite']) {
            $to = $invite['email_invite'];
            $subject = "Invitation à notre mariage";
            $message = "<html><body>";
            $message .= "<h1>Monsieur/Madame,</h1><br/>
            <p>Vous êtes convié à prendre part à notre cérémonie de mariage.</p><br/>
            <p>Nous espérons vous compter parmi les présents ce jour !</p>";
            $message .= "</body></html>";

            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
            $headers .= "From: heplug-group <theplug@gmail.com>" . "\r\n";

            if (mail($to, $subject, $message, $headers)) {
                echo "L'invitation a été envoyée avec succès à $to.";
            } else {
                echo "Une erreur s'est produite lors de l'envoi de l'invitation à $to.";
            }
        }
    }

} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

$conn = null;
?>