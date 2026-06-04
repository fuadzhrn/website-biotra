document.addEventListener('DOMContentLoaded', function () {
    console.log('BIOTRA contact page loaded');
});

document.addEventListener('DOMContentLoaded', function () {
    const consultationForm = document.getElementById('consultationForm');

    if (!consultationForm) {
        return;
    }

    consultationForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const name = document.getElementById('contactName').value.trim();
        const whatsapp = document.getElementById('contactWhatsapp').value.trim();
        const email = document.getElementById('contactEmail').value.trim();
        const need = document.getElementById('contactNeed').value.trim();
        const message = document.getElementById('contactMessage').value.trim();

        const adminPhoneNumber = '6281234567890';

        const whatsappMessage = `
Halo BIOTRA, saya ingin konsultasi.

Nama: ${name}
Nomor WhatsApp: ${whatsapp}
Email: ${email || '-'}
Kebutuhan Konsultasi: ${need}

Pesan:
${message}
        `.trim();

        const encodedMessage = encodeURIComponent(whatsappMessage);
        const whatsappUrl = `https://wa.me/${adminPhoneNumber}?text=${encodedMessage}`;

        window.open(whatsappUrl, '_blank');
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const consultationForm = document.getElementById('consultationForm');

    if (consultationForm) {
        consultationForm.addEventListener('submit', function (event) {
            event.preventDefault();

            const name = document.getElementById('contactName').value.trim();
            const whatsapp = document.getElementById('contactWhatsapp').value.trim();
            const email = document.getElementById('contactEmail').value.trim();
            const need = document.getElementById('contactNeed').value.trim();
            const message = document.getElementById('contactMessage').value.trim();

            const adminPhoneNumber = '6281234567890';

            const whatsappMessage = `
Halo BIOTRA, saya ingin konsultasi.

Nama: ${name}
Nomor WhatsApp: ${whatsapp}
Email: ${email || '-'}
Kebutuhan Konsultasi: ${need}

Pesan:
${message}
            `.trim();

            const encodedMessage = encodeURIComponent(whatsappMessage);
            const whatsappUrl = `https://wa.me/${adminPhoneNumber}?text=${encodedMessage}`;

            window.open(whatsappUrl, '_blank');
        });
    }

    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(function (item) {
        const question = item.querySelector('.faq-question');

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