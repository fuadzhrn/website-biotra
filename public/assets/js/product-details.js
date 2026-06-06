document.addEventListener('DOMContentLoaded', function () {

    // Smooth scroll for "Lihat Gallery" buttons
    document.querySelectorAll('.unit-gallery-link').forEach(function (link) {
        link.addEventListener('click', function (e) {
            var target = link.getAttribute('href');
            if (target && target.startsWith('#')) {
                var el = document.querySelector(target);
                if (el) {
                    e.preventDefault();
                    el.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }
        });
    });

});
