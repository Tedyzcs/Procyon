<?php include('includes/header.php'); ?>

<section class="hero">
    <div class="hero-overlay">
        <div class="container">
            <div class="hero-text-box">
                <h1>Selamat Datang di Procyon</h1>
                <p>Kami adalah penyedia layanan perbaikan komputer terpercaya yang hadir untuk memberikan solusi IT terintegrasi bagi Anda. Mulai dari layanan cetak, instalasi perangkat lunak, hingga penanganan teknis mendalam, kami berkomitmen menyelesaikan setiap kebutuhan teknologi Anda secara profesional.</p>
            </div>
        </div>
    </div>
</section>

<section class="layanan">
    <div class="container">
        <h2 class="section-title">Layanan Kami</h2>
        <div class="layanan-grid">
            <div class="layanan-item">
                <div class="icon-box"><span class="check-icon">☑</span></div>
                <p>Percetakan dan Fotokopi</p>
            </div>
            <div class="layanan-item">
                <div class="icon-box"><span class="check-icon">☑</span></div>
                <p>Perbaikan PC/Laptop/HP</p>
            </div>
            <div class="layanan-item">
                <div class="icon-box"><span class="check-icon">☑</span></div>
                <p>Instalasi Sistem Operasi & Aplikasi</p>
            </div>
            <div class="layanan-item">
                <div class="icon-box"><span class="check-icon">☑</span></div>
                <p>Ketik & Simpan Dokumen</p>
            </div>
            <div class="layanan-item">
                <div class="icon-box"><span class="check-icon">☑</span></div>
                <p>Pembelajaran Praktis</p>
            </div>
            <div class="layanan-item">
                <div class="icon-box"><span class="check-icon">☑</span></div>
                <p>Penyediaan Alat & Bahan</p>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Hubungi Kami Sekarang</h2>
        <p>Dapatkan layanan terbaik untuk semua kebutuhan IT Anda!</p>
        <a href="layanan.php" class="btn-mulai">MULAI SEKARANG</a>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <h2 class="section-title" style="color: #007bff; margin-bottom: 30px;">Testimonials</h2>
        
       <div class="testimonial-wrapper" id="testimonial-area">
    <button class="slide-arrow prev-btn" onclick="window.plusSlides(-1)" type="button">&#10094;</button>
    <div class="testimonial-viewport">
       <div class="testimonial-track" id="track">
    <div class="testimonial-slide">
        <h3 class="testi-user">Apa Kata Klien Kami?</h3>
        <p class="testi-text">Gila sih, pelayanannya cepat banget! Hasilnya juga memuaskan. Rekomended banget buat yang cari jasa IT di Procyon.</p>
    </div>
    <div class="testimonial-slide">
        <h3 class="testi-user">Sangat Profesional</h3>
        <p class="testi-text">Bener-bener ngebantu buat yang butuh solusi IT tapi gak mau ribet. Pelayanannya profesional tapi tetep asik diajak ngobrol. Bakal jadi langganan sih ini kalau ada apa-apa lagi!</p>
    </div>
    <div class="testimonial-slide">
        <h3 class="testi-user">Harga Terjangkau</h3>
        <p class="testi-text">Pelayanan ramah dan harganya sangat bersahabat dibanding tempat lain, Banyak diskon nya juga!</p>
    </div>
    <div class="testimonial-slide">
        <h3 class="testi-user">Materinya Gampang?</h3>
        <p class="testi-text">Belajar di sini asik banget, materinya gampang diserap dan simpel buat dipahami bahkan buat pemula. Mentornya sabar, jadi langsung bisa praktik tanpa bingung!</p>
    </div>
    <div class="testimonial-slide">
        <h3 class="testi-user">Bisa Di Antar!</h3>
        <p class="testi-text">Puas banget cetak di sini, hasilnya rapi dan warnanya tajam. Poin plusnya bisa diantar sampai lokasi, bener-bener ngebantu banget pas lagi sibuk!</p>
    </div>
        </div>
    </div>

    <button class="slide-arrow next-btn" onclick="window.plusSlides(1)" type="button">&#10095;</button>
</div>

        <div class="dots-container">
            <span class="step-line" onclick="currentSlide(0)"></span>
            <span class="step-line" onclick="currentSlide(1)"></span>
            <span class="step-line" onclick="currentSlide(2)"></span>
            <span class="step-line" onclick="currentSlide(3)"></span>
            <span class="step-line" onclick="currentSlide(4)"></span>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>