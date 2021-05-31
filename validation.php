<?php
session_start();

$_SESSION['firstname'] = $_POST['firstname'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Validation</title>
</head>
<body>
    <?php require_once './templates/header.php' ?>
    <h1>Validation du formulaire</h1>
    
</body>
</html>
