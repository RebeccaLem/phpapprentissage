<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Identification</title>
</head>

<body>
<?php require_once './templates/header.php' ?>
<form action="./controller/connexionc.php" method="post">
Votre login : <input type="text" name="login">
<br />
Votre mot de passe : <input type="password" name="pwd"><br />
<input type="submit" value="Connexion">
</form>

</body>
</html>
