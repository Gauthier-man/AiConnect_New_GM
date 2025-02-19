const hamburgerMenu = document.getElementById("hamburgerMenu");
const burgerMenu = document.getElementById("burgerMenu");

// Toggle le menu au clic sur l'icône burger
hamburgerMenu.addEventListener("click", function (event) {
    burgerMenu.classList.toggle("active");
    hamburgerMenu.style.display = "none"; // Cache l'icône burger quand le menu s'ouvre
    event.stopPropagation();
});

// Fermer le menu si l'utilisateur clique en dehors
document.addEventListener("click", function (event) {
    if (burgerMenu.classList.contains("active") && !burgerMenu.contains(event.target)) {
        burgerMenu.classList.remove("active");
        hamburgerMenu.style.display = "block"; // Réaffiche l'icône burger
    }
});

// ✅ Cacher le menu burger automatiquement en version desktop
window.addEventListener("resize", function () {
    if (window.innerWidth > 768) { // Si on passe en mode desktop
        burgerMenu.classList.remove("active"); // Cache le menu
        hamburgerMenu.style.display = "none"; // Cache l'icône burger
    } else {
        hamburgerMenu.style.display = "block"; // Réaffiche l'icône burger en mobile
    }
});
