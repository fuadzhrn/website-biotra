document.addEventListener('DOMContentLoaded', function () {

    // Form Konsultasi → WhatsApp
    const consultationForm = document.getElementById('consultationForm');

    if (consultationForm) {
        consultationForm.addEventListener('submit', function (event) {
            event.preventDefault();

            const name     = document.getElementById('contactName').value.trim();
            const whatsapp = document.getElementById('contactWhatsapp').value.trim();
            const email    = document.getElementById('contactEmail').value.trim();
            const message  = document.getElementById('contactMessage').value.trim();

            const adminPhoneNumber = consultationForm.dataset.whatsappTarget || '6281234567890';

            const whatsappMessage = `Halo BIOTRA, saya ingin konsultasi.

Nama: ${name}
Nomor WhatsApp: ${whatsapp}
Email: ${email || '-'}

Pesan:
${message}`.trim();

            const encodedMessage = encodeURIComponent(whatsappMessage);
            const whatsappUrl    = `https://wa.me/${adminPhoneNumber}?text=${encodedMessage}`;

            window.open(whatsappUrl, '_blank');
        });
    }

    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(function (item) {
        const question = item.querySelector('.faq-question');
        if (!question) return;

        question.addEventListener('click', function () {
            faqItems.forEach(function (otherItem) {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });

            item.classList.toggle('active');
        });
    });

});
