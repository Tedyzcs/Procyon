<?php 
include '../includes/header.php'; 
include '../koneksi.php';

// Proteksi: Hanya Admin yang boleh masuk
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    echo "<script>alert('Akses Ditolak! Khusus Admin.'); window.location='../index.php';</script>";
    exit;
}
?>

<div class="container" style="margin-top: 100px; margin-bottom: 50px;">
    <h2 style="text-align: center; color: #007bff; margin-bottom: 30px;">Rekap Absensi Anggota</h2>

    <div style="background: white; padding: 20px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; font-family: sans-serif;">
            <thead>
                <tr style="background-color: #007bff; color: white; text-align: left;">
                    <th style="padding: 15px;">No</th>
                    <th style="padding: 15px;">Nama Lengkap</th>
                    <th style="padding: 15px;">Keterangan</th>
                    <th style="padding: 15px;">Waktu Absen</th>
                    <th style="padding: 15px;">Aksi</th> 
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $query = mysqli_query($conn, "SELECT * FROM absensi ORDER BY waktu_absen DESC");
                
                // Variabel bantuan untuk mendeteksi perubahan tanggal
                $tanggal_sebelumnya = "";

                while ($row = mysqli_fetch_assoc($query)) {
                    // Ambil bagian tanggal saja (Tahun-Bulan-Hari)
                    $tanggal_sekarang = date('Y-m-d', strtotime($row['waktu_absen']));

                    // JIKA tanggal baris ini berbeda dengan baris sebelumnya, tampilkan pembatas
                    if ($tanggal_sekarang != $tanggal_sebelumnya) {
                        echo '<tr style="background-color: #f8f9fa;">
                                <td colspan="5" style="padding: 15px; text-align: center; font-weight: bold; color: #555; border-top: 2px solid #dee2e6; border-bottom: 2px solid #dee2e6;">
                                    <i class="fa fa-calendar-alt"></i> --- PERTEMUAN TANGGAL: ' . date('d F Y', strtotime($row['waktu_absen'])) . ' ---
                                </td>
                              </tr>';
                        $tanggal_sebelumnya = $tanggal_sekarang;
                    }

                    $color = ($row['keterangan'] == 'Hadir') ? "#28a745" : (($row['keterangan'] == 'Izin') ? "#ffc107" : "#dc3545");
                ?>
                <tr style="border-bottom: 1px solid #eee;">
                    <td style="padding: 12px;"><?php echo $no++; ?></td>
                    <td style="padding: 12px; font-weight: 600;"><?php echo $row['nama_lengkap']; ?></td>
                    <td style="padding: 12px;">
                        <span style="background: <?php echo $color; ?>; color: white; padding: 4px 10px; border-radius: 20px; font-size: 12px;">
                            <?php echo $row['keterangan']; ?>
                        </span>
                    </td>
                    <td style="padding: 12px; color: #666;"><?php echo date('H:i', strtotime($row['waktu_absen'])); ?> WIB</td>
                    
                    <td style="padding: 12px;">
                        <a href="hapus-absen.php?id=<?php echo $row['id']; ?>" 
                           onclick="return confirm('Yakin ingin menghapus data absen ini?')" 
                           style="color: #dc3545; text-decoration: none; font-size: 18px;">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
