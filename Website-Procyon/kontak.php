<?php include('includes/header.php'); ?>

<section class="hero">
    <div class="hero-overlay">
        <div class="container">
            <div class="hero-text-box">
                <h1>Kontak Kami untuk Layanan Terbaik</h1>
                <p>Kami siap membantu Anda dengan layanan perbaikan komputer dan percetakan profesional yang cepat dan terpercaya. Hubungi kami untuk mendapatkan bantuan!</p>
            </div>
        </div>
    </div>
</section>

<section class="opening-hours">
    <div class="container">
        <div class="hours-flex">
            <div class="clock-icon">🕒</div>
            <div class="day-item"><span>SENIN</span> 09:00 - 17:00</div>
            <div class="day-item"><span>SELASA</span> 09:00 - 17:00</div>
            <div class="day-item"><span>RABU</span> 09:00 - 17:00</div>
            <div class="day-item"><span>KAMIS</span> 09:00 - 17:00</div>
            <div class="day-item"><span>JUMAT</span> 09:00 - 17:00</div>
            <div class="day-item"><span>SABTU</span> Tutup</div>
            <div class="day-item"><span>MINGGU</span> Tutup</div>
        </div>
    </div>
</section>

<section class="contact-form-section" style="padding: 40px 0; background-color: #fcfcfc; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;">
    <div class="container">
        
       <form action="Database/proses_saran.php" method="POST">
    <div style="max-width: 900px; margin: 0 auto; padding: 30px; border: 1px solid #e0e0e0; border-radius: 12px; background-color: #fff; box-shadow: 0 8px 20px rgba(0,0,0,0.05); font-family: sans-serif;">
        
        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
            <i class="fa fa-comment-dots" style="color: #007bff; font-size: 18px;"></i>
            <h4 style="margin: 0; font-size: 16px; color: #333; font-weight: 700;">Masukan / Saran & Laporan (Anonim)</h4>
        </div>
        
        <p style="font-size: 13px; color: #777; margin-bottom: 15px;">Bantu kami jadi lebih baik. Masukan Anda akan terkirim secara anonim (tanpa identitas).</p>
        
        <textarea name="isi_saran" required placeholder="Tulis masukan di sini..." 
            style="width: 100%; height: 90px; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-family: inherit; font-size: 14px; resize: none; outline: none; background: #fafafa;"></textarea>
        
        <div style="text-align: left; margin-top: 15px;">
            <button type="submit" name="submit_saran" style="background-color: #ffc107; color: #000; border: none; padding: 10px 30px; border-radius: 6px; font-size: 14px; font-weight: 600; cursor: pointer;">
                KIRIM MASUKAN
            </button>
        </div>
    </div>
</form>

        <div style="text-align: center; margin-bottom: 50px;">
            <h3 style="color: #007bff; font-size: 24px; margin-bottom: 20px; font-weight: 700;">Contact</h3>
            <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 30px; align-items: center;">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WA" style="width: 24px;">
                    <a href="https://wa.me/6285711405602" style="text-decoration: none; color: #333; font-size: 16px; font-weight: 600;">+62 857-1140-5602 (Khansa)</a>
                </div>
                <div style="display: flex; align-items: center; gap: 8px;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WA" style="width: 24px;">
                    <a href="https://wa.me/6285282234597" style="text-decoration: none; color: #333; font-size: 16px; font-weight: 600;">+62 852-8223-4597 (Luthfi)</a>
                </div>
            </div>
        </div>

        <form action="Database/proses-kontak.php" method="POST">
            <div style="max-width: 900px; margin: 0 auto; padding: 30px; border: 1px solid #e0e0e0; border-radius: 12px; background-color: #fff; box-shadow: 0 8px 20px rgba(0,0,0,0.05);">
                
                <h2 style="text-align: center; color: #007bff; font-weight: 700; margin-bottom: 25px; font-size: 22px;">Formulir Kontak untuk Pertanyaan Umum</h2>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 15px;">
                    <input type="text" name="company" placeholder="Company" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; background: #fafafa; outline: none; font-size: 14px;">
                    <input type="text" name="name" placeholder="Name" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; background: #fafafa; outline: none; font-size: 14px;">
                    <input type="text" name="phone" placeholder="Phone" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; background: #fafafa; outline: none; font-size: 14px;">
                    <input type="email" name="email" placeholder="Email" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; background: #fafafa; outline: none; font-size: 14px;">
                </div>
                
                <textarea name="message" placeholder="Message" rows="5" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; background: #fafafa; outline: none; margin-bottom: 15px; font-family: inherit; font-size: 14px; resize: none;"></textarea>
                
                <div style="text-align: left;">
                    <button type="submit" name="submit" style="background-color: #ffc107; color: #000; border: none; padding: 10px 30px; border-radius: 6px; font-size: 14px; font-weight: 600; cursor: pointer;">
                        KIRIM PESAN
                    </button>
                </div>
            </div>
        </form>

    </div>
</section>

<?php include('includes/footer.php'); ?>