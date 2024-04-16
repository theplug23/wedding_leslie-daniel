<?php
    // Informations de connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wedding_leslie_daniel";

    try {
        // Connexion à la base de données avec PDO
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

        // Configuration des attributs de PDO
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // Pour éviter l'émulation des requêtes préparées

    } catch(PDOException $e) {
        // En cas d'échec de la connexion, affichage de l'erreur
        die("La connexion à la base de données a échoué : " . $e->getMessage());
    }
?>