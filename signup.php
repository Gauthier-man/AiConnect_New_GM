<?php include 'inscription2.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>S'inscrire</title>
  <link rel="stylesheet" href="homepage.css" class="css">
  <link rel="stylesheet" href="header.css" class="css">
  <link rel="stylesheet" href="singup_login.css" />
  <link rel="stylesheet" href="style3.css" class="css" />
  <link rel="stylesheet" href="packanimation.css" class="css" />
  <script src="script_pack.js" defer></script>
  <script src="header_signup.js" defer></script>
  
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css" />
  <link
    rel="stylesheet"
    href="https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-straight/css/uicons-regular-straight.css" />
  <link
    rel="stylesheet"
    href="https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css" />
  <link
    rel="stylesheet"
    href="https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css" />
  <link
    rel="stylesheet"
    href="https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css" />
  <link
    rel="stylesheet"
    href="https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-chubby/css/uicons-regular-chubby.css" />

  <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.6.0/uicons-brands/css/uicons-brands.css" />
</head>

<body>
  <div class="background-container">
    <header class="fixed">
      <a href="index.php">
        <img src="logo.png" alt="ceci est un logo" />
      </a>
      <div class="nav-icons-container">
        <nav>
          <ul>
            <li><a href="forum.html">Forum</a></li>
            <li><a href="#">Parcourir</a></li>
            <li><a href="#">Pages</a></li>
          </ul>
        </nav>
        <div class="icons">
          <i class="fi fi-rs-bell"></i>

          <!-- Icône utilisateur avec menu déroulant -->
          <div class="user-icon">
            <i class="fi fi-rr-user"></i>
            <div class="user-menu">
              <a href="signup.php">S'inscrire</a>
              <a href="login.php">Se connecter</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main>
      <section id="signup_users">
        <div class="background_log">
          <canvas id="canv"></canvas>
          <div class="sky">
            <div class="clouds">
              <div class="c1 one"></div>
              <div class="c1 two"></div>
              <div class="c1 three"></div>
              <div class="c1 four"></div>
              <div class="c2 one"></div>
              <div class="c2 two"></div>
              <div class="c2 three"></div>
              <div class="c2 four"></div>
            </div>
          </div>
          
          <!-- Le contenu existant de la carte -->
          <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1200">
            <img src="images\signup\Sukuna_sah.png" alt="ceci est une image" />
          </div>

          <div class="card_signup" data-aos="zoom-in-down" data-aos-duration="1000">
            <!-- <h2>AniConnect</h2> -->
            <h3>Inscription</h3>
            <form action="" method="POST">
              <div class="form-group">
                <input type="text" placeholder="Pseudo" id="pseudo" name="pseudo" class="input-field" value="<?php if (isset($pseudo)) {
                                                                                                            echo $pseudo;
                                                                                                        } ?>"  required  />
                <input type="mail" placeholder="Adresse e-mail" id="mail" name="mail" class="input-field" value="<?php if (isset($mail)) {
                                                                                                            echo $mail;
                                                                                                        } ?>" required />
                <input type="mail" placeholder="Confirmez votre mail" id="mail2" name="mail2" class="input-field" value="<?php if (isset($mail2)) {
                                                                                                            echo $mail2;
                                                                                                        } ?>"  required />
                <input type="password" placeholder="Mot de passe" id="mdp" name="mdp" class="input-field"  required />
                <input
                 placeholder="Confirmez votre mot de passe"
                  type="password"
                  id="mdp2"
                  name="mdp2"
                  class="input-field"    
                  required />
              </div>
              <!-- <div class="form-group"></div> -->
              <!-- <div class="profile_picture_view">
                <label for="photo_profil">Photo de profil:</label>
                <div class="users_file">
                  <input type="file" id="file" name="file" placeholder="Photo de profil" required />
                </div>
              </div> -->
              <button type="submit" name="forminscription" class="submit-button">Créer un compte</button> 
              <!-- <input type="submit" name="forminscription" class="submit-button">Créer un compte</input> -->
            </form>
           
            <?php
            if (isset($erreur)) {
                echo '<font color="red">' . $erreur . "</font>";
            }
            ?>
            <!-- INSCRIPTION AVEC AUTRES -->


            <!-- <h5>ou s'inscrire avec</h5>
            <div class="case_content">
              <div class="short_case">
                <i class="fi fi-brands-google"></i>
              </div>
              <div class="short_case">
                <i class="fi fi-brands-discord"></i>
              </div>
              <div class="short_case">
                <i class="fi fi-brands-twitter-alt"></i>
              </div>
            </div> -->



            <!-- <p>
                En créant un compte, vous acceptez
                <span>les Conditions de service </span>et la <span>Politique de confidentialité </span>d'AniConnect.
              </p> -->
          </div>
        </div>
      </section>
    </main>
  </div>
  <footer>
    <div class="footer_block">
      <div class="block_logo">
        <img src="images\Logo\v4BU2f3hRFmcItcrMaD2Xw-removebg-preview 1.png" alt="logo AniConnect" />
        <p>© 2024 AniConnect, Inc. All rights reserved.</p>
      </div>
      <div>
        <h5>Liens</h5>
        <ul>
          <a href="#">
            <li>Mentions légales</li>
          </a>
          <a href="#">
            <li>Politique de confidentialité</li>
          </a>
          <a href="#">
            <li>Conditions d'utilisation</li>
          </a>
          <a href="#">
            <li>Nous contacter</li>
          </a>
        </ul>
      </div>
      <div>
        <h5>Ressources</h5>
        <ul>
          <a href="#">
            <li>Forum</li>
          </a>
          <a href="#">
            <li>Blog</li>
          </a>
          <a href="#">
            <li>Galerie</li>
          </a>
          <a href="#">
            <li>FAQ</li>
          </a>
        </ul>
      </div>
      <div>
        <h5>Rejoignez-nous</h5>
        <ul>
          <a href="#">
            <li>Instagram</li>
          </a>
          <a href="#">
            <li>Twitter</li>
          </a>
          <a href="#">
            <li>Discord</li>
          </a>
          <a href="#">
            <li>Newsletter</li>
          </a>
        </ul>
      </div>
    </div>
  </footer>
  <script>
    AOS.init();
  </script>
</body>

</html>