<?php include 'connexion2.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Se Connecter</title>
    <link rel="stylesheet" href="header.css" class="css">
    <link rel="stylesheet" href="singup_login.css" />
    <link rel="stylesheet" href="homepage.css" class="css" />
    <link rel="stylesheet" href="header.css" class="css" />
    <link rel="stylesheet" href="snowfall.css" />
    <link rel="stylesheet" href="style3.css" class="css" />
    <link rel="stylesheet" href="background.css" class="css" />
    <!-- <script src="snowfall.js"></script> -->
    <script src="header_signup.js" defer></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-straight/css/uicons-regular-straight.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-chubby/css/uicons-regular-chubby.css"
    />

    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.6.0/uicons-brands/css/uicons-brands.css" />
  </head>
  <body>
    <div class="background-container">
    <header>
    <?php include 'header_log.php'; ?>
    </header>

      <main>
        <section id="signup_users">
          <div class="background_log">
            <!-- <div class="sky">Let it snow</section> -->
            <div class="waveWrapper waveAnimation">
              <div class="waveWrapperInner bgTop">
                <div
                  class="wave waveTop"
                  style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"
                ></div>
              </div>
              <div class="waveWrapperInner bgMiddle">
                <div
                  class="wave waveMiddle"
                  style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"
                ></div>
              </div>
              <div class="waveWrapperInner bgBottom">
                <div
                  class="wave waveBottom"
                  style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"
                ></div>
              </div>
            </div>
            <!-- Snow canvas here -->
            <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1200">
              <img
                class="update_pic"
                src="images\login\8n9DPrz3JeetsnuOhO4O9-transformed.png"
                alt="ceci est une image"
              />
            </div>
            <div class="card_signup" data-aos="zoom-in-down" data-aos-duration="1000">
              <h2>AniConnect</h2>
              <h3>Se connecter</h3>
              <form action="" method="POST">
                <div class="form-group">
                  <input
                    type="email"
                    name="mailconnect"
                    class="input-field"
                    placeholder="Adresse e-mail"
                    value="<?php if (isset($mail)) {
                      echo $mail;
                            } ?>"
                    required
                  />
                </div>
                <div class="form-group">
                  <input
                    type="password"
                    name="mdpconnect"
                    class="input-field"
                    placeholder="Mot de passe"
                    required
                  />
                </div>
                <button type="submit" name="formconnexion" class="submit-button">Connexion</button>
                
              </form>
              <br/>
              <?php
        if (isset($erreur)) {
            echo '<font color="red">' . $erreur . "</font>";
        }
        ?>
              <h5>ou se connecter avec</h5>
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
              </div>
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
