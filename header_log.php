<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css" class="css" />
    <script src="menu_hamburger.js" defer></script>
    <!-- <script src="header_signup.js" defer></script> -->

    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-straight/css/uicons-regular-straight.css"
    />
</head>
<body>
<header class="fixed">
    <a href="index.php">
        <img src="logo.png" alt="ceci est un logo" class="logo_responsive" />
    </a>

 <!-- Menu hamburger pour mobile -->
 <div class="hamburger-menu" id="hamburgerMenu">
        <i class="fi fi-rr-menu-burger"></i> <!-- Icône hamburger -->
    </div>

 <!-- Menu burger avec les liens -->
 <div class="burger-menu" id="burgerMenu">
        <ul>
            <li><a href="forum.php">Forum</a></li>
            <li><a href="#">Animes</a></li>
            <li><a href="#">Mangas</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Parcourir</a></li>
        </ul>
    </div>


    <!-- Nouveau logo responsive à droite -->
    <a href="index.php" class="logo-mobile-container">
        <img src="images\Logo\RjDcsTJJTEa6BfDEFXqyHQ-removebg-preview.png" alt="Logo mobile" class="logo-mobile">
    </a>

    <div class="nav-icons-container">
        <nav>
            <ul>
                <li><a href="forum.php">Forum</a></li>
                <li><a href="#">Animes</a></li>
                <li><a href="#">Mangas</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Pages</a></li>
            </ul>
        </nav>
        <div class="icons">
            <i class="fi fi-rs-bell"></i>

            <!-- Icône profil utilisateur -->
            <div class="user-icon">
                <?php if (isset($_SESSION['id'])): ?>
                    <!-- Affichage du rond de profil si l'utilisateur est connecté -->
                    <div class="profil_picture">
                        <!-- On peut ajouter une image de profil ici si disponible -->
                        <?php 
                        $pseudoInitials = strtoupper(substr($_SESSION['pseudo'], 0, 2));  // Prend les 2 premières lettres du pseudo
                        echo $pseudoInitials;  // Affiche les initiales dans le rond
                        ?>
                    </div>
                    <div class="user-menu">
                        <a href="profil.php?id=<?= $_SESSION['id']; ?>">Mon Profil</a>
                        <a href="deconnexion2.php">Se Déconnecter</a>
                    </div>
                <?php else: ?>
                    <!-- Affichage du menu de connexion si l'utilisateur n'est pas connecté -->
                    <i class="fi fi-rr-user"></i>
                    <div class="user-menu">
                        <a href="signup.php">S'inscrire</a>
                        <a href="login.php">Se connecter</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>

    
</body>
</html>