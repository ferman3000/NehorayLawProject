document.addEventListener("DOMContentLoaded", function () {
    console.log("Mobile Menu Script Loaded"); // Debug check

    const mobileBtn = document.querySelector(".mobile-menu");
    const navLinks = document.querySelector(".nav-links");

    if (!mobileBtn || !navLinks) {
        console.error("Mobile menu elements not found!");
        return;
    }

    mobileBtn.style.cursor = "pointer";

    function actualizarEstado(abierto) {
        mobileBtn.textContent = abierto ? "✕" : "☰";
        mobileBtn.setAttribute("aria-expanded", abierto ? "true" : "false");
        mobileBtn.setAttribute("aria-label", abierto ? "Close menu" : "Open menu");
    }

    mobileBtn.addEventListener("click", function (e) {
        e.preventDefault();
        navLinks.classList.toggle("active");
        actualizarEstado(navLinks.classList.contains("active"));
    });

    // Cerrar con Escape (estándar de menús accesibles)
    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape" && navLinks.classList.contains("active")) {
            navLinks.classList.remove("active");
            actualizarEstado(false);
            mobileBtn.focus();
        }
    });

    // Close menu when clicking outside
    document.addEventListener("click", function (event) {
        if (!navLinks.contains(event.target) && !mobileBtn.contains(event.target) && navLinks.classList.contains("active")) {
            navLinks.classList.remove("active");
            actualizarEstado(false);
        }
    });
});
