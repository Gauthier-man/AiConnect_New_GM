

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AniConnect</title>
    <link rel="icon" type="image/png" href="logo.png" />
    <link rel="stylesheet" href="homepage.css" class="css" />
    <link rel="stylesheet" href="header.css" class="css" />
    <script src="swiper.js" defer></script>
    <script src="header_fixed.js" defer></script>
    <script src="header_signup.js" defer></script>
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-straight/css/uicons-regular-straight.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-straight/css/uicons-regular-straight.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-straight/css/uicons-regular-straight.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Abel&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  </head>
  <body>
    <header>
    <?php include 'header_log.php'; ?>
    </header>

    <main>
      <section class="hero">
        <h1>AniConnect</h1>
        <p>Bienvenue parmi les passionnés d’animés et mangas !</p>
      </section>
      <!--À PROPOS-->
      <section class="about">
        <div class="lawliet_bloc">
          <img src="about_pic\lawliet.png" alt="" />
        </div>
        <div class="about_content">
          <h1>À PROPOS</h1>
          <p>
            Bienvenue dans notre espace dédié aux passionnés d’animés et de mangas. <br />
            Ici, les fans se retrouvent pour échanger, débattre et partager leurs découvertes.
          </p>
          <button>VOIR PLUS</button>
        </div>
      </section>
      <section class="anime_season">
        <h2 class="title">Anime de la saison</h2>

        <!-- Carrousel Swiper -->
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a href="anime_season\orb_on_the_movements_of_the_earth.php">
              <img src="card_anime/filters_quality(95).png" alt="Anime 1" />
            </a>
            </div>
            
            <div class="swiper-slide">
              <a href="anime_season\solo_leveling.php">  
              <img src="card_anime/filters_quality(95)solo.png" alt="Anime 2" />
            </a>
            </div>
          
            <div class="swiper-slide">
              <a href="anime_season\sakamoto.php">  
              <img
                src="card_anime/MV5BM2MwZDRmYWItNGIzZC00ZWExLWEwNWYtNmM1ZmU3OTA3NmY4XkEyXkFqcGc@._V1_FMjpg_UX1000_.png"
                alt="Anime 3"
              />
              </a>
            </div>
            <div class="swiper-slide">
              <img src="card_anime\shi-guang-dai-li-ren.png" alt="Anime 4" />
            </div>
            <div class="swiper-slide">
              <img src="card_anime\Dr_Stone_Anime.png" alt="Anime 5" />
            </div>
          </div>

          <!-- Boutons de navigation -->
          <i class="swiper-button-prev"></i>
          <i class="swiper-button-next"></i>
        </div>
      </section>
      <section class="forum_access">
        <div class="forum_access_content">
          <h1>FORUM</h1>
          <p>Rejoins la discussion et partage ta passion avec la communauté !</p>
          <a href="forum.php">
          <button>Accéder au forum</button>
        </a>
        </div>
      </section>
    
    </main>
    <footer></footer>
  </body>
</html>
