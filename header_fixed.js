window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    const heroSection = document.querySelector('.hero');
    const heroSectionBottom = heroSection.offsetTop + heroSection.offsetHeight;  // Fin de la section hero

    // Vérifie si le bas de la section "hero" est passé
    if (window.scrollY >= heroSectionBottom) {
      header.classList.add('fixed');
    } else {
      header.classList.remove('fixed');
    }
  });

