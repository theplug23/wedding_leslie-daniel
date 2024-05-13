<?php
    session_start();

    if ($_SESSION['id']) {
        session_destroy();
        header('Location: login.html');
    } else {
        header('Location: login.html');
    }
    
?>
