<?php

session_start();

include('./connectDB.php');

$conn = $pdo->open();


if (isset($_SESSION['email'])) {
    header('Location: dashboard.html');
    exit();
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];
    
    if ($email === '' || $password === '') {
        echo "<p style='color:red; text-align: center; margin: 20px auto; padding: 10px; background-color: #fbeaea; border: 1px solid #f44336; border-radius: 5px;'>Veuillez entrer vos identifiants.</p>";
        echo "<button style='display: block; margin: 20px auto; padding: 10px 20px; background-color: #f44336; color: white; border: none; border-radius: 5px; cursor: pointer;' onclick=\"window.location.href='./login.html';\">Ok, compris</button>";
    } else {
        
        $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM admin WHERE email_admin=:email AND mdp=:password");
        $stmt->execute(['email' => $email, 'password' => $password]);
        $row = $stmt->fetch();
        
        if ($row['numrows'] == 1) {
            $_SESSION['id'] = $row['id_admin'];
            $_SESSION['email'] = $row['email_admin'];
            
            header('Location: dashboard.php');
        }
        
    }
} else {
    echo "<p style='color:red; text-align: center; margin: 20px auto; padding: 10px; background-color: #fbeaea; border: 1px solid #f44336; border-radius: 5px;'>Veuillez entrer vos identifiants.</p>";
    echo "<button style='display: block; margin: 20px auto; padding: 10px 20px; background-color: #f44336; color: white; border: none; border-radius: 5px; cursor: pointer;' onclick=\"window.location.href='./login.html';\">Ok, compris</button>";
}


?>