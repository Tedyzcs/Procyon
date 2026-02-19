<?php
session_start(); // WAJIB ADA DI PALING ATAS

// Panggil header dan koneksi dengan path yang benar
include '../includes/header.php';
include '../koneksi.php';

// Proteksi Admin
if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){
    echo "<script>alert('Akses Ditolak! Silakan login terlebih dahulu.'); window.location='../login.php';</script>";
    exit;
}
?>

<div class="main-content" style="margin-top: 100px; padding: 20px; font-family: 'Inter', sans-serif;">
    <div style="max-width: 1300px; margin: 0 auto;">
        
        <div style="background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); overflow: hidden; border: 1px solid #eee; margin-bottom: 50px;">
            <div style="padding: 20px; border-bottom: 1px solid #eee; display: flex; justify-content: space-between; align-items: center; background: #fdfdfd;">
                <h3 style="margin: 0; color: #000; font-weight: 700;">Formulir Data Pesan</h3>
                <span style="background: #007bff; color: white; padding: 5px 15px; border-radius: 20px; font-size: 12px; font-weight: bold;">
                    Total: <?php echo mysqli_num_rows(mysqli_query($conn, "SELECT id FROM formulir_kontak")); ?> Pesan
                </span>
            </div>

            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="text-align: left; background: #f8f9fa;">
                            <th style="padding: 15px; border-bottom: 2px solid #eee; text-align: center; width: 50px; color: #000;">No.</th>
                            <th style="padding: 15px; border-bottom: 2px solid #eee; color: #000;">Tanggal & Waktu</th>
                            <th style="padding: 15px; border-bottom: 2px solid #eee; color: #000;">Perusahaan & Nama</th>
                            <th style="padding: 15px; border-bottom: 2px solid #eee; color: #000;">Kontak</th>
                            <th style="padding: 15px; border-bottom: 2px solid #eee; width: 30%; color: #000;">Pesan</th>
                            <th style="padding: 15px; border-bottom: 2px solid #eee; text-align: center; color: #000;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $query = mysqli_query($conn, "SELECT * FROM formulir_kontak ORDER BY id DESC");
                        if(mysqli_num_rows($query) > 0) {
                            while($row = mysqli_fetch_array($query)){
                                $tanggal = date('d M Y | H:i', strtotime($row['created_at']));
                        ?>
                        <tr style="border-bottom: 1px solid #eee; transition: 0.3s;" onmouseover="this.style.backgroundColor='#f9fbff'" onmouseout="this.style.backgroundColor='transparent'">
                            <td style="padding: 15px; text-align: center; font-weight: bold; color: #000;"><?php echo $no++; ?>.</td>
                            <td style="padding: 15px; font-size: 13px; color: #000;">
                                <div style="background: #eee; padding: 5px 10px; border-radius: 5px; display: inline-block; font-weight: 600;">
                                    <i class="fa fa-calendar-alt" style="margin-right: 5px; color: #555;"></i><?php echo $tanggal; ?>
                                </div>
                            </td>
                            <td style="padding: 15px;">
                                <div style="font-weight: 700; color: #000; font-size: 15px;"><?php echo $row['company']; ?></div>
                                <div style="font-size: 13px; color: #444;"><?php echo $row['name']; ?></div>
                            </td>
                            <td style="padding: 15px; font-size: 13px;">
                                <div style="margin-bottom: 3px; color: #000;"><i class="fa fa-phone text-success"></i> <?php echo $row['phone']; ?></div>
                                <div style="color: #007bff; font-weight: 600;"><i class="fa fa-envelope"></i> <?php echo $row['email']; ?></div>
                            </td>
                            <td style="padding: 15px; font-size: 14px; color: #000; line-height: 1.6;">
                                <div style="background: #ffffff; padding: 12px; border-radius: 8px; border: 1px solid #ddd; color: #000;">
                                    <?php echo nl2br($row['message']); ?>
                                </div>
                            </td>
                            <td style="padding: 15px; text-align: center;">
                                <a href="hapus-pesan.php?id=<?php echo $row['id']; ?>" 
                                   style="color: #dc3545; font-size: 18px; transition: 0.2s; display: inline-block;" 
                                   onclick="return confirm('Hapus pesan dari <?php echo $row['name']; ?>?')">
                                    <i class="fa fa-trash-can"></i>
                                </a>
                            </td>
                        </tr>
                        <?php } } else { echo "<tr><td colspan='6' style='padding: 60px; text-align: center;'>Belum ada data pesan.</td></tr>"; } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div style="background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); overflow: hidden; border: 1px solid #eee;">
            <div style="padding: 20px; border-bottom: 1px solid #eee; display: flex; justify-content: space-between; align-items: center; background: #fdfdfd;">
                <h3 style="margin: 0; color: #000; font-weight: 700;">Masukan & Laporan Anonim</h3>
                <span style="background: #dc3545; color: white; padding: 5px 15px; border-radius: 20px; font-size: 12px; font-weight: bold;">
                    Total: <?php echo mysqli_num_rows(mysqli_query($conn, "SELECT id FROM laporan_anonim")); ?> Laporan
                </span>
            </div>

            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="text-align: left; background: #fff5f5;">
                            <th style="padding: 15px; border-bottom: 2px solid #ffdada; text-align: center; width: 50px; color: #000;">No.</th>
                            <th style="padding: 15px; border-bottom: 2px solid #ffdada; color: #000;">Tanggal & Waktu</th>
                            <th style="padding: 15px; border-bottom: 2px solid #ffdada; color: #000;">Isi Masukan / Laporan</th>
                            <th style="padding: 15px; border-bottom: 2px solid #ffdada; text-align: center; color: #000;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no_anon = 1;
                        $query_anon = mysqli_query($conn, "SELECT * FROM laporan_anonim ORDER BY id DESC");
                        if(mysqli_num_rows($query_anon) > 0) {
                            while($row_anon = mysqli_fetch_array($query_anon)){
                                $tgl_anon = date('d M Y | H:i', strtotime($row_anon['tanggal']));
                        ?>
                        <tr style="border-bottom: 1px solid #eee; transition: 0.3s;" onmouseover="this.style.backgroundColor='#fff9f9'" onmouseout="this.style.backgroundColor='transparent'">
                            <td style="padding: 15px; text-align: center; font-weight: bold; color: #000;"><?php echo $no_anon++; ?>.</td>
                            <td style="padding: 15px; font-size: 13px; color: #000; width: 200px;">
                                <div style="background: #ffeaea; color: #c00; padding: 5px 10px; border-radius: 5px; display: inline-block; font-weight: 600;">
                                    <i class="fa fa-clock" style="margin-right: 5px;"></i><?php echo $tgl_anon; ?>
                                </div>
                            </td>
                            <td style="padding: 15px; font-size: 14px; color: #000; line-height: 1.6;">
                                <div style="background: #fdfdfd; padding: 15px; border-radius: 8px; border: 1px dashed #dc3545; color: #333;">
                                    <i class="fa fa-quote-left" style="color: #dc3545; margin-right: 10px; opacity: 0.5;"></i>
                                    <?php echo nl2br($row_anon['isi_saran']); ?>
                                </div>
                            </td>
                            <td style="padding: 15px; text-align: center; width: 100px;">
                                <a href="hapus-saran.php?id=<?php echo $row_anon['id']; ?>" 
                                   style="color: #dc3545; font-size: 18px;" 
                                   onclick="return confirm('Hapus laporan anonim ini?')">
                                    <i class="fa fa-trash-can"></i>
                                </a>
                            </td>
                        </tr>
                        <?php } } else { echo "<tr><td colspan='4' style='padding: 60px; text-align: center; font-weight: bold;'>Belum ada saran anonim masuk.</td></tr>"; } ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</div>

</body>
</html>