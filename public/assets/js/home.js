document.addEventListener('DOMContentLoaded', function () {
    const navbarToggle = document.getElementById('navbarToggle');
    const navbarMenu = document.getElementById('navbarMenu');

    if (!navbarToggle || !navbarMenu) {
        return;
    }

    navbarToggle.addEventListener('click', function () {
        navbarToggle.classList.toggle('active');
        navbarMenu.classList.toggle('active');
    });

    const navLinks = navbarMenu.querySelectorAll('.nav-link');

    navLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            navbarToggle.classList.remove('active');
            navbarMenu.classList.remove('active');
        });
    });
});