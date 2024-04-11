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
    } else if ($email === '' || $password === ''){
        echo "<p style='color:red; text-align: center; margin: 20px auto; padding: 10px; background-color: #fbeaea; border: 1px solid #f44336; border-radius: 5px;'>Remplir tous les champs, puis réessayer.</p>";
        echo "<button style='display: block; margin: 20px auto; padding: 10px 20px; background-color: #f44336; color: white; border: none; border-radius: 5px; cursor: pointer;' onclick=\"window.location.href='./login.html';\">Ok, compris</button>";
    }
    else{
        echo "<p style='color:red; text-align: center; margin: 20px auto; padding: 10px; background-color: #fbeaea; border: 1px solid #f44336; border-radius: 5px;'>Identifiants incorrects. Veuillez réessayer.</p>";
        echo "<button style='display: block; margin: 20px auto; padding: 10px 20px; background-color: #f44336; color: white; border: none; border-radius: 5px; cursor: pointer;' onclick=\"window.location.href='./login.html';\">Ok, compris</button>";

    }
} else {
    header('Location: login.html');
    exit();
}
?>