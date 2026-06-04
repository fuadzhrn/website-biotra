document.addEventListener('DOMContentLoaded', function () {
    console.log('BIOTRA about page loaded');
});

document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.about-slide');

    if (!slides.length) {
        return;
    }

    let currentSlide = 0;
    const slideDuration = 3500;

    setInterval(function () {
        slides[currentSlide].classList.remove('active');

        currentSlide = (currentSlide + 1) % slides.length;

        slides[currentSlide].classList.add('active');
    }, slideDuration);
});