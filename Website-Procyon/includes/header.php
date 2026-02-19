<?php 
if (session_status() === PHP_SESSION_NONE) { session_start(); } 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procyon - Perbaikan Komputer & Percetakan</title>
    <link rel="stylesheet" href="/Website-Procyon/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        .dropdown { position: relative; }
        .dropdown-menu {
            visibility: hidden; opacity: 0; position: absolute;
            top: 100%; right: 0; background-color: #007bff;
            min-width: 200px; box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            list-style: none; padding: 0 !important; margin: 0 !important;
            transition: 0.3s; z-index: 10001;
        }
        @media (min-width: 769px) {
            .dropdown:hover .dropdown-menu { visibility: visible !important; opacity: 1 !important; display: block !important; }
        }
        .dropdown-menu li { width: 100%; margin: 0 !important; border-bottom: 1px solid rgba(255,255,255,0.1); }
        .dropdown-menu li a { padding: 12px 20px !important; color: white !important; display: block !important; text-align: left; }

        @media (max-width: 768px) {
            .nav-menu.active {
                transform: translateY(0) !important;
                right: 0 !important;
                visibility: visible !important;
                display: flex !important;
                height: auto !important;
                max-height: 80vh !important;
                border-radius: 0 0 20px 20px;
                padding-bottom: 30px;
            }
            .dropdown-menu {
                position: static !important;
                display: none !important;
                visibility: visible !important;
                opacity: 1 !important;
                background-color: rgba(0,0,0,0.2) !important;
                box-shadow: none !important;
                width: 100% !important;
            }
            .dropdown-menu.mobile-open { display: block !important; }
            .nav-menu > li { width: 100%; margin: 0 !important; }
            .nav-menu a { border-bottom: 1px solid rgba(255,255,255,0.1); width: 100%; display: block; }
        }
    </style>
</head>
<body>

<nav class="navbar">
    <div class="container header-content">
        <a href="/Website-Procyon/index.php" class="logo">procyon.web.id</a>
        
        <div class="mobile-controls">
            <a href="https://wa.me/6285711405602" class="phone-icon"><i class="fa fa-phone"></i></a>
            <div class="menu-toggle" id="btn-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>

        <ul class="nav-menu" id="menu-list">
            <li><a href="/Website-Procyon/index.php">Home</a></li>
            <li><a href="/Website-Procyon/tentang-kami.php">Tentang Kami</a></li>
            <li><a href="/Website-Procyon/layanan.php">Layanan</a></li>
            <li><a href="/Website-Procyon/kontak.php">Kontak</a></li>

            <?php if(isset($_SESSION['username'])): ?>
                <li class="dropdown">
                    <a href="javascript:void(0)" id="dropdown-btn">Lainnya <i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-menu" id="dropdown-content">
                        <li><a href="/Website-Procyon/Absen/absen.php">Absen</a></li>
                        <li><a href="/Website-Procyon/rumus-hitung.php">Rumus Perhitungan Print</a></li>
                        <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
                            <li><a href="/Website-Procyon/Database/database-formulir.php" style="color: #ffc107 !important;">Database Formulir</a></li>
                            <li><a href="/Website-Procyon/Absen/database-absen.php" style="color: #ffc107 !important;">Database Absensi</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
                <li><a href="/Website-Procyon/logout.php" class="btn-logout">Logout</a></li>
            <?php else: ?>
                <li><a href="/Website-Procyon/login.php" class="btn-login">Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

<script>
    const btnToggle = document.getElementById('btn-toggle');
    const menuList = document.getElementById('menu-list');
    btnToggle.onclick = function() {
        menuList.classList.toggle('active');
        this.classList.toggle('is-active');
    };

    const dropdownBtn = document.getElementById('dropdown-btn');
    const dropdownContent = document.getElementById('dropdown-content');
    dropdownBtn.onclick = function(e) {
        if (window.innerWidth <= 768) {
            e.preventDefault();
            dropdownContent.classList.toggle('mobile-open');
        }
    };

    document.addEventListener('click', function(event) {
        const isClickInside = menuList.contains(event.target) || btnToggle.contains(event.target);
        if (!isClickInside && menuList.classList.contains('active')) {
            menuList.classList.remove('active');
            btnToggle.classList.remove('is-active');
        }
    });
</script>
</body>
</html>