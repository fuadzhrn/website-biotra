document.addEventListener('DOMContentLoaded', function () {

    // ===========================
    // LIGHTBOX
    // ===========================

    var lb = document.createElement('div');
    lb.id  = 'ps-gallery-lightbox';
    lb.innerHTML = [
        '<button class="ps-lb-close" aria-label="Tutup"><i class="bi bi-x-lg"></i></button>',
        '<button class="ps-lb-prev"  aria-label="Sebelumnya"><i class="bi bi-chevron-left"></i></button>',
        '<div class="ps-lb-img-wrap"><img class="ps-lb-img" src="" alt=""></div>',
        '<button class="ps-lb-next"  aria-label="Selanjutnya"><i class="bi bi-chevron-right"></i></button>',
        '<div class="ps-lb-counter"></div>',
    ].join('');
    document.body.appendChild(lb);

    var lbImg     = lb.querySelector('.ps-lb-img');
    var lbCounter = lb.querySelector('.ps-lb-counter');
    var lbPrev    = lb.querySelector('.ps-lb-prev');
    var lbNext    = lb.querySelector('.ps-lb-next');
    var lbClose   = lb.querySelector('.ps-lb-close');

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
        var alt = images[currentIndex].alt;
        setTimeout(function () {
            lbImg.src = src;
            lbImg.alt = alt;
            lbImg.style.opacity = '1';
        }, 160);
        lbCounter.textContent = (currentIndex + 1) + ' / ' + images.length;
        lbPrev.classList.toggle('ps-lb-hidden', currentIndex === 0);
        lbNext.classList.toggle('ps-lb-hidden', currentIndex === images.length - 1);
    }

    document.querySelectorAll('.ps-gallery-trigger').forEach(function (img) {
        img.addEventListener('click', function () {
            var group    = this.dataset.group;
            var startIdx = parseInt(this.dataset.index, 10);
            var allImgs  = Array.from(
                document.querySelectorAll('.ps-gallery-trigger[data-group="' + group + '"]')
            ).map(function (el) {
                return { src: el.src, alt: el.alt };
            });
            openLightbox(allImgs, startIdx);
        });
    });

    lbClose.addEventListener('click', closeLightbox);

    lb.addEventListener('click', function (e) {
        if (e.target === lb || e.target === lb.querySelector('.ps-lb-img-wrap')) {
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
