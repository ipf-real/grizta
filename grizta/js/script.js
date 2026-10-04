if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
}

if (window.location.hash) {
    history.replaceState(null, '', window.location.pathname + window.location.search);
}

window.scrollTo(0, 0);

const menuToggle = document.getElementById('menuToggle');
const navLinks = document.getElementById('navLinks');

if (menuToggle && navLinks) {
    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('open');
    });

    navLinks.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('open');
        });
    });
}

const sections = document.querySelectorAll('section[id]');
const navItems = document.querySelectorAll('.nav-links a');

function highlightActiveSection() {
    const scrollPos = window.scrollY + 120;

    sections.forEach((section) => {
        const top = section.offsetTop;
        const bottom = top + section.offsetHeight;
        const id = section.getAttribute('id');

        if (scrollPos >= top && scrollPos < bottom) {
            navItems.forEach((link) => {
                link.classList.toggle('active', link.getAttribute('href') === `#${id}`);
            });
        }
    });
}

window.addEventListener('scroll', highlightActiveSection);

const contactForm = document.getElementById('contactForm');
const formStatus = document.getElementById('formStatus');

if (contactForm) {
    contactForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        const submitBtn = contactForm.querySelector('button[type="submit"]');
        submitBtn.disabled = true;
        formStatus.textContent = 'Mengirim...';

        try {
            const formData = new FormData(contactForm);

            const response = await fetch(contactForm.action, {
                method: 'POST',
                body: formData,
            });

            const result = await response.json();

            if (result.success) {
                formStatus.textContent = result.message || 'Pesan terkirim, terima kasih!';
                contactForm.reset();
            } else {
                formStatus.textContent = result.message || 'Gagal mengirim, coba lagi ya.';
            }
        } catch (err) {
            formStatus.textContent = 'Terjadi kesalahan koneksi. Coba lagi nanti.';
        } finally {
            submitBtn.disabled = false;
        }
    });
}

document.querySelectorAll('[data-open-modal]').forEach((btn) => {
    btn.addEventListener('click', () => {
        const modalId = btn.getAttribute('data-open-modal');
        document.getElementById(modalId).classList.add('open');
    });
});

document.querySelectorAll('.modal-overlay').forEach((overlay) => {
    overlay.querySelector('[data-close-modal]').addEventListener('click', () => {
        overlay.classList.remove('open');
    });

    overlay.addEventListener('click', (e) => {
        if (e.target === overlay) {
            overlay.classList.remove('open');
        }
    });
});

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        document.querySelectorAll('.modal-overlay.open').forEach((overlay) => {
            overlay.classList.remove('open');
        });
    }
});

const spinBadge = document.querySelector('.spin-badge');
const homeSection = document.getElementById('home');

if (spinBadge && homeSection) {
    function toggleSpinBadge() {
        const homeHeight = homeSection.offsetHeight;

        if (window.scrollY > homeHeight - 600) {
            spinBadge.classList.add('hidden');
        } else {
            spinBadge.classList.remove('hidden');
        }
    }

    toggleSpinBadge();
    window.addEventListener('scroll', toggleSpinBadge);
}