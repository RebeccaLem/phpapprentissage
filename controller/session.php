<?php
    session_start();
    $_SESSION['id'] = $_POST['pauledu45'];
    $_SESSION['mdp'] = $_POST['jesis487hdi'];
    $_SESSION['isconnexion'] = true;
?>

header('Location: index.php');