document.addEventListener("DOMContentLoaded", function () {
    // First functionality: Highlight active link
    document.querySelectorAll(".nav li a").forEach(link => {
        if (link.href === window.location.href) {
            link.classList.add("active");
        }
    });

    // Second functionality: Toggle menu
    let menuToggle = document.getElementById("menu-toggle");
    let navMenu = document.getElementById("nav-menu");
    console.log(navMenu);

    menuToggle.addEventListener("click", function (e) {
        e.preventDefault();
        navMenu.classList.toggle("active");
    });
});
