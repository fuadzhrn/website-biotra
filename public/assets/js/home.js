document.addEventListener('DOMContentLoaded', function () {

    // Business Model Modal
    var bmBtn     = document.getElementById('businessModelBtn');
    var bmOverlay = document.getElementById('businessModelOverlay');
    var bmClose   = document.getElementById('businessModelClose');

    if (bmBtn && bmOverlay) {
        bmBtn.addEventListener('click', function () {
            bmOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        });

        function closeBmModal() {
            bmOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }

        bmClose.addEventListener('click', closeBmModal);

        bmOverlay.addEventListener('click', function (e) {
            if (e.target === bmOverlay) closeBmModal();
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && bmOverlay.classList.contains('active')) closeBmModal();
        });
    }

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