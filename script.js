document.addEventListener("DOMContentLoaded", (event) => {
    document.querySelectorAll(".nav li a").forEach(link => {
        if (link.href === window.location.href) {
            link.classList.add("active");
        }
    });
});

