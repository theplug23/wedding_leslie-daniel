<?php

session_start();
    
include('./connectDB.php');

$conn = $pdo->open();

if ($_SESSION['id']) {
    $stmt = $conn->prepare("SELECT * FROM invite");
    $stmt->execute();
    
    $invites = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    header('Location: login.html');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/dash.css">
    <title>Dashboard</title>
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <style>
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .data-table th, .data-table td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .data-table th {
            background-color: #f2f2f2;
            text-align: left;
        }

        .data-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .data-table tr:nth-child(odd) {
            background-color: #ffffff;
        }

        .data-table td button {
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Style pour mettre en surbrillance le bouton quand survolé */
        .data-table td button:hover {
            background-color: #0056b3;
        }

        /* Responsive CSS */
        @media screen and (max-width: 768px) {
            .data-table th, .data-table td {
                padding: 5px;
                font-size: 12px;
            }
        }

        @media screen and (max-width: 576px) {
            .data-table th, .data-table td {
                padding: 3px;
                font-size: 10px;
            }

            input[type="email"],
            input[type="submit"] {
                width: 100%;
                margin-bottom: 10px;
            }

            .dashboard {
                padding: 10px;
            }

            .hearder button {
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>
    <div id="invitesTable" class="dashboard">
        <div class="hearder">
            <a href="logout.php">
                <button>Déconnexion</button>
            </a>
            <h1>Tableau de bord </h1>
        </div>
        <table class="data-table">
            <thead>
                <tr>
                    <th>Num</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Statut</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($invites) == 0): ?>
                    <tr>
                        <td>Il n'y a aucune demande d'invitation pour l'instant</td>
                    </tr>
                <?php elseif (count($invites) > 0): ?>
                    <?php foreach($invites as $invite): ?>
                    <tr>
                        <td><?= $invite['num_invite'] ?></td>
                        <td><?= $invite['nom_invite'] ?></td>
                        <td><?= $invite['email_invite'] ?></td>
                        <td style="color: <?= $invite['status_invite'] == 'pending' ? 'red' : 'green' ?>"><?= $invite['status_invite'] ?></td>
                        <td style="color: <?= $invite['status_invite'] == 'success' ? 'green' : '' ?>">
                            <?php if ($invite['status_invite'] == 'pending'): ?>
                            <form method='post' action="send_invitation.php">
                                <input type='hidden' name='email' value='<?= $invite['email_invite'] ?>'>
                                <button type='submit' name='send_invitation'>Envoyer l'invitation</button>
                            </form>
                            <?php elseif ($invite['status_invite'] == 'success'): ?>
                            Invitation déjà envoyée
                            <?php endif ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif ?>
            </tbody>
        </table>
        <div class="row" style="margin-top: 20px">
            <a href="index.php">Revenir sur le site principal</a>
        </div>
    </div>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./assets/js/dashboard.js"> </script>
    <script>
       $(document).ready(function() {
            function loadTableData() {
                $.ajax({
                    url: 'dash.php',
                    type: 'GET',
                    success: function(data) {
                        $('#invitesTable tbody').html(data);
                    },
                    error: function(xhr, status, error) {
                        $('#invitesTable tbody').html('<tr><td colspan="4">Erreur : Impossible de récupérer les données.</td></tr>');
                    }
                });
            }

            loadTableData(); 

         
            $('#invitesTable').on('submit', 'form', function(event) {
                event.preventDefault();

                var form = $(this);
                var formData = form.serialize();

                $.ajax({
                    url: form.attr('action'),
                    type: form.attr('method'),
                    data: formData,
                    success: function(response) {
                        $('#invitesTable tbody').html(response); // Mettre à jour le tableau avec la réponse
                    },
                    error: function(xhr, status, error) {
                        console.log("Erreur : Impossible d'envoyer l'invitation.");
                    }
                });
            });
        });

        function logout() {
            $.ajax({
                url: 'logout.php',
                type: 'POST',
                success: function(response) {
                    window.location.href = "./login.html";
                },
                error: function(xhr, status, error) {
                    console.error("Error during logout:", error);
                }
            });
        }
    </script>-->
</body>
</html>