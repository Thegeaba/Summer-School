<?php
    session_start();
    unset($_SESSION['user']);
    unset($_SESSION['logat']);
    session_destroy();
    header('Location: autentificare.php');
    exit;
?>