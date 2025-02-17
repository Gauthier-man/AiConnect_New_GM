document.addEventListener("DOMContentLoaded", () => {
    const userIcon = document.querySelector(".user-icon i");
    const userMenu = document.querySelector(".user-menu");

    userIcon.addEventListener("click", (event) => {
        event.stopPropagation(); // Empêche de fermer immédiatement après le clic
        userMenu.classList.toggle("active");
    });

    document.addEventListener("click", (event) => {
        if (!userMenu.contains(event.target) && !userIcon.contains(event.target)) {
            userMenu.classList.remove("active");
        }
    });
});
