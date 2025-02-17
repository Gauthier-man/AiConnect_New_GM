var swiper = new Swiper('.swiper-container', {
    slidesPerView: 3, // Nombre de slides visibles en même temps
    spaceBetween: 20, // Espacement entre les slides
    loop: true, // Active le mode boucle
    centeredSlides: true, // Centre les slides
    lazy: true, // Charge les images uniquement quand nécessaire
    preloadImages: false, // Désactive le préchargement automatique
    watchSlidesProgress: true,
    watchSlidesVisibility: true,
    updateOnImagesReady: true, // 🔥 Ajoute cette ligne pour forcer l'affichage des slides
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

