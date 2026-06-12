document.addEventListener('DOMContentLoaded', function () {

    // Smooth scroll untuk tombol "Lihat Gallery"
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

    // ===========================
    // LIGHTBOX
    // ===========================

    var lb = document.createElement('div');
    lb.id  = 'gallery-lightbox';
    lb.innerHTML = [
        '<button class="lightbox-close" aria-label="Tutup"><i class="bi bi-x-lg"></i></button>',
        '<button class="lightbox-prev"  aria-label="Sebelumnya"><i class="bi bi-chevron-left"></i></button>',
        '<div class="lightbox-img-wrap"><img class="lightbox-img" src="" alt=""></div>',
        '<button class="lightbox-next"  aria-label="Selanjutnya"><i class="bi bi-chevron-right"></i></button>',
        '<div class="lightbox-counter"></div>',
    ].join('');
    document.body.appendChild(lb);

    var lbImg     = lb.querySelector('.lightbox-img');
    var lbCounter = lb.querySelector('.lightbox-counter');
    var lbPrev    = lb.querySelector('.lightbox-prev');
    var lbNext    = lb.querySelector('.lightbox-next');
    var lbClose   = lb.querySelector('.lightbox-close');

    var images       = [];
    var currentIndex = 0;

    function openLightbox(imgs, index) {
        images       = imgs;
        currentIndex = index;
        render();
        lb.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        lb.classList.remove('active');
        document.body.style.overflow = '';
    }

    function goTo(index) {
        currentIndex = index;
        render();
    }

    function render() {
        lbImg.style.opacity = '0';
        var src = images[currentIndex].src;
        var alt = images[currentIndex].alt || '';
        setTimeout(function () {
            lbImg.src = src;
            lbImg.alt = alt;
            lbImg.style.opacity = '1';
        }, 160);
        lbCounter.textContent = (currentIndex + 1) + ' / ' + images.length;
        lbPrev.classList.toggle('lb-hidden', currentIndex === 0);
        lbNext.classList.toggle('lb-hidden', currentIndex === images.length - 1);
    }

    function imagesFromFeatured(featuredEl) {
        try {
            var urls = JSON.parse(featuredEl.dataset.images || '[]');
            return urls.map(function (src) { return { src: src, alt: '' }; });
        } catch (e) {
            return [];
        }
    }

    // ===========================
    // FEATURED IMAGE — klik → lightbox
    // ===========================

    document.querySelectorAll('.unit-gallery-featured').forEach(function (featured) {
        featured.addEventListener('click', function (e) {
            if (e.target.closest('.gallery-view-all-btn')) return;
            var imgs = imagesFromFeatured(this);
            if (!imgs.length) return;
            var idx = parseInt(this.querySelector('.featured-main-img').dataset.currentIndex || '0', 10);
            openLightbox(imgs, idx);
        });
    });

    // ===========================
    // "LIHAT SEMUA" BUTTON → lightbox index 0
    // ===========================

    document.querySelectorAll('.gallery-view-all-btn').forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.stopPropagation();
            var slug     = this.dataset.slug;
            var featured = document.querySelector('.unit-gallery-featured[data-slug="' + slug + '"]');
            if (!featured) return;
            var imgs = imagesFromFeatured(featured);
            if (!imgs.length) return;
            openLightbox(imgs, 0);
        });
    });

    // ===========================
    // STRIP THUMBNAIL — klik → ganti featured
    // ===========================

    document.querySelectorAll('.strip-item').forEach(function (item) {
        item.addEventListener('click', function () {
            var slug = this.dataset.slug;
            var src  = this.dataset.src;
            var idx  = parseInt(this.dataset.index, 10);

            var featuredImg = document.getElementById('featured-' + slug);
            if (featuredImg) {
                featuredImg.src = src;
                featuredImg.dataset.currentIndex = idx;
            }

            document.querySelectorAll('.strip-item[data-slug="' + slug + '"]').forEach(function (el) {
                el.classList.remove('active');
            });
            this.classList.add('active');

            this.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
        });
    });

    // ===========================
    // LIGHTBOX CONTROLS
    // ===========================

    lbClose.addEventListener('click', closeLightbox);

    lb.addEventListener('click', function (e) {
        if (e.target === lb || e.target === lb.querySelector('.lightbox-img-wrap')) {
            closeLightbox();
        }
    });

    lbPrev.addEventListener('click', function () {
        if (currentIndex > 0) goTo(currentIndex - 1);
    });

    lbNext.addEventListener('click', function () {
        if (currentIndex < images.length - 1) goTo(currentIndex + 1);
    });

    document.addEventListener('keydown', function (e) {
        if (!lb.classList.contains('active')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowLeft'  && currentIndex > 0)               goTo(currentIndex - 1);
        if (e.key === 'ArrowRight' && currentIndex < images.length - 1) goTo(currentIndex + 1);
    });

    var touchStartX = 0;
    lb.addEventListener('touchstart', function (e) {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });
    lb.addEventListener('touchend', function (e) {
        var diff = touchStartX - e.changedTouches[0].screenX;
        if (Math.abs(diff) < 40) return;
        if (diff > 0 && currentIndex < images.length - 1) goTo(currentIndex + 1);
        if (diff < 0 && currentIndex > 0)                 goTo(currentIndex - 1);
    }, { passive: true });

});
