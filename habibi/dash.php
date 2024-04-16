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
            echo "<td><button>Invitation</button></td>";
            echo "</tr>";
        }
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

    $conn = null;
?>