// ==========================================
// 1. LOGIKA GLOBAL & FAQ
// ==========================================
// Fungsi ini diletakkan di luar agar bisa dipanggil oleh onclick di HTML jika ada
window.toggleFAQ = function(element) {
    const parent = element.parentElement;
    parent.classList.toggle('active');
    document.querySelectorAll('.faq-item').forEach(item => {
        if (item !== parent) item.classList.remove('active');
    });
};

document.addEventListener('DOMContentLoaded', function() {
    
    // --- A. LOGIKA FAQ (Otomatis untuk class .faq-question) ---
    const faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach(q => {
        q.addEventListener('click', function() {
            window.toggleFAQ(this);
        });
    });

    // --- B. LOGIKA TESTIMONIAL SLIDER (INFINITE) ---
    let slideIndex = 0;
    let slideInterval;
    const track = document.getElementById('track');
    const slides = document.querySelectorAll('.testimonial-slide');
    const dots = document.querySelectorAll('.step-line');
    const totalSlides = slides.length;

    function showSlides(n) {
        if (!track || totalSlides === 0) return;
        
        // Memastikan slideIndex tidak keluar dari batas jumlah slide
        if (n >= totalSlides) {
            slideIndex = 0; // Jika sudah di akhir, balik ke pertama
        } else if (n < 0) {
            slideIndex = totalSlides - 1; // Jika di awal klik back, ke terakhir
        } else {
            slideIndex = n;
        }

        track.style.transition = "transform 0.6s ease-in-out";
        track.style.transform = `translateX(-${slideIndex * 100}%)`;

        // Update indikator dots sesuai slide yang aktif
        updateDots(slideIndex);
    }

    function updateDots(idx) {
        if (dots.length > 0) {
            for (let i = 0; i < dots.length; i++) {
                dots[i].classList.remove('active');
            }
            if (dots[idx]) dots[idx].classList.add('active');
        }
    }

    // Expose navigasi ke HTML (untuk onclick di button panah)
    window.plusSlides = function(n) {
        stopAutoSlide();
        showSlides(slideIndex + n);
        startAutoSlide();
    };

    window.currentSlide = function(n) {
        stopAutoSlide();
        showSlides(n);
        startAutoSlide();
    };

    function startAutoSlide() {
        stopAutoSlide();
        slideInterval = setInterval(() => {
            showSlides(slideIndex + 1);
        }, 5000);
    }

    function stopAutoSlide() {
        clearInterval(slideInterval);
    }


    // Jalankan slider awal
    if(track) {
        showSlides(0);
        startAutoSlide();
    }

    // --- C. LOGIKA NAV MOBILE ---
    const menuToggle = document.getElementById('mobile-menu');
    const navMenu = document.getElementById('nav-list');
    
    if (menuToggle) {
        menuToggle.onclick = function() {
            this.classList.toggle('is-active');
            if(navMenu) navMenu.classList.toggle('active');
        };
    }

    // Tutup menu jika link diklik
    document.addEventListener('click', function(e) {
        if (e.target.closest('#nav-list a')) {
            if(navMenu) navMenu.classList.remove('active');
            if(menuToggle) menuToggle.classList.remove('is-active');
        }
    });
});