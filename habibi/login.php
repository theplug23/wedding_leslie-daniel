<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $email = $_POST['email'];
    $password = $_POST['pass'];

    // var_dump($_POST);
    // exit();
    if ($email === 'demo@gmail.com' && $password === '123456') {
        session_start();
        $_SESSION['email'] = $email;
        
        header('Location: dashboard.html');
        exit();
    } else {
        echo "<p style='color:green; text-align: center; margin: 20px auto; padding: 10px; background-color: #eafbea; border: 1px solid #4caf50; border-radius: 5px;'>Identifiants incorrects. Veuillez réessayer.</p>";

    }
} else {
    header('Location: login.html');
    exit();
}
?>