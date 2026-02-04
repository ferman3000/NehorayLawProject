document.addEventListener("DOMContentLoaded", function () {
    console.log("Mobile Menu Script Loaded"); // Debug check

    const mobileBtn = document.querySelector(".mobile-menu");
    const navLinks = document.querySelector(".nav-links");

    if (!mobileBtn || !navLinks) {
        console.error("Mobile menu elements not found!");
        return;
    }

    mobileBtn.style.cursor = "pointer";

    mobileBtn.addEventListener("click", function (e) {
        e.preventDefault();
        console.log("Hamburger clicked");

        navLinks.classList.toggle("active");

        // Toggle Icon
        if (navLinks.classList.contains("active")) {
            mobileBtn.textContent = "✕";
        } else {
            mobileBtn.textContent = "☰";
        }
    });

    // Close menu when clicking outside
    document.addEventListener("click", function (event) {
        if (!navLinks.contains(event.target) && !mobileBtn.contains(event.target) && navLinks.classList.contains("active")) {
            navLinks.classList.remove("active");
            mobileBtn.textContent = "☰";
        }
    });
});
