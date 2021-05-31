

<header>
    <nav id="navbar">
        <ul>
            <li class=""><a href="index.php">Accueil</a></li>
            <li class=""><a href="inscription.php">Inscription</a></li>
            <li class=""><a href="users.php">Utilisateurs</a></li>
            

            <?php if(isset($_SESSION['isConnected'])):?>
                <li class=""><a href="users.php">Ton profil</a></li>
                <li class=""><a href="users.php">Ta page</a></li>
            <li class=""><a href="./controller/deconnexion.php">deconnexion</a></li>
            

           <?php else: ?> 
            <li class=""><a href="connexion.php">Connexion</a></li>
           <?php endif ?>

        </ul>
    </nav>
</header>
