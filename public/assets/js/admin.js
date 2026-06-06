document.addEventListener('DOMContentLoaded', function () {

    var sidebar  = document.querySelector('.admin-sidebar');
    var overlay  = document.querySelector('.admin-sidebar-overlay');
    var toggleBtn = document.querySelector('.admin-sidebar-toggle');

    function openSidebar() {
        if (sidebar)  sidebar.classList.add('open');
        if (overlay) overlay.classList.add('visible');
        document.body.style.overflow = 'hidden';
    }

    function closeSidebar() {
        if (sidebar)  sidebar.classList.remove('open');
        if (overlay) overlay.classList.remove('visible');
        document.body.style.overflow = '';
    }

    if (toggleBtn) {
        toggleBtn.addEventListener('click', function () {
            sidebar && sidebar.classList.contains('open') ? closeSidebar() : openSidebar();
        });
    }

    if (overlay) {
        overlay.addEventListener('click', closeSidebar);
    }

    // Close sidebar on resize back to desktop
    window.addEventListener('resize', function () {
        if (window.innerWidth > 768) closeSidebar();
    });

});
