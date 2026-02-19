<footer class="footer" style="padding: 60px 0; background-color: #007bff; color: white;">
    <style>
        .footer-container-custom {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-grid-custom {
            display: grid;
            grid-template-columns: 1.5fr 2fr 1fr;
            gap: 40px;
        }

        .footer-logo-img {
            width: 100px; 
            height: 100px;
            border-radius: 15px;
        }
        .footer-title-main {
            font-size: 32px;
            font-weight: 800;
        }
        .footer-desc-text {
            font-size: 16px;
            max-width: 350px;
        }

        @media (max-width: 768px) {
            .footer-grid-custom {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                gap: 30px;
            }
            
            .footer-logo-img {
                width: 60px !important; 
                height: 60px !important;
                border-radius: 10px !important;
            }

            .footer-title-main {
                font-size: 22px !important;
            }

            .footer-desc-text {
                font-size: 13px !important;
                max-width: 250px;
            }

            .contact-list-custom {
                gap: 12px !important;
            }
        }
    </style>

    <div class="footer-container-custom">
        <div class="footer-grid-custom">
            
            <div class="footer-col">
                <div style="display: flex; align-items: center; gap: 15px;">
                    <img src="/Website-Procyon/images/Procyon.jpg" alt="Logo" class="footer-logo-img" style="border: 3px solid rgba(255,255,255,0.3); box-shadow: 0 5px 15px rgba(0,0,0,0.2); object-fit: cover;">
                    
                    <div style="display: flex; flex-direction: column; gap: 5px;">
                        <h2 class="footer-title-main" style="margin: 0; line-height: 1.1;">procyon.web.id</h2>
                        <p class="footer-desc-text" style="margin: 0; opacity: 0.9; line-height: 1.5;">
                            Solusi Teknologi Profesional untuk Segala Kebutuhan IT Anda.
                        </p>
                    </div>
                </div>
            </div>

            <div class="footer-col"> 
                <h3 style="margin-bottom: 20px; font-size: 18px; color: #ffc107;">Contact</h3>
                <div class="contact-list-custom" style="display: flex; flex-wrap: wrap; gap: 20px; align-items: center;">
                    <div style="display: flex; align-items: center; gap: 8px; width: 100%;">
                        <i class="fa fa-map-marker-alt" style="color: #ffc107;"></i>
                        <span style="font-size: 13px;">Jl. Raya Serang Cibarusah, Sindangmulya, Kec. Cibarusah, Kabupaten Bekasi, Jawa Barat 17340</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <i class="fab fa-whatsapp" style="color: #25d366;"></i>
                        <a href="https://wa.me/6285711405602" style="color: white; text-decoration: none; font-size: 13px;">+6285711405602 (Khansa)</a>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <i class="fab fa-whatsapp" style="color: #25d366;"></i>
                        <a href="https://wa.me/6285282234597" style="color: white; text-decoration: none; font-size: 13px;">+6285282234597 (Luthfi)</a>
                    </div>
                </div>
            </div>

            <div class="footer-col">
                <h3 style="margin-bottom: 20px; font-size: 18px;">Social Media</h3>
                <div style="display: flex; gap: 15px; font-size: 22px;">
                    <a href="#" style="color: white;"><i class="fab fa-facebook"></i></a>
                    <a href="https://instagram.com/procyon.community" target="_blank" style="color: white;"><i class="fab fa-instagram"></i></a>
                    <a href="#" style="color: white;"><i class="fab fa-x-twitter"></i></a>
                </div>
            </div>

        </div>
    </div>
</footer>

<script src="/Website-Procyon/js/script.js"></script>
</body>
</html>