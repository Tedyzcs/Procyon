<?php 
// Panggil header yang sudah kita perbaiki tadi (naik satu folder ke root)
include '../includes/header.php'; 

// Proteksi: Jika belum login, tidak bisa absen
if(!isset($_SESSION['username'])){
    echo "<script>alert('Silakan login terlebih dahulu!'); window.location='../login.php';</script>";
    exit;
}
?>

<div class="container" style="margin-top: 120px; max-width: 600px;">
    <div style="background: white; padding: 30px; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
        <h2 style="text-align: center; color: #007bff; margin-bottom: 25px;">Form Absensi Anggota</h2>
        
        <form action="proses-absen.php" method="POST">
            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; font-weight: bold;">Nama Lengkap :</label>
                <input type="text" value="<?php echo $_SESSION['nama_lengkap']; ?>" disabled 
                       style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; background: #f9f9f9;">
                
                <input type="hidden" name="nama_lengkap" value="<?php echo $_SESSION['nama_lengkap']; ?>">
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; font-weight: bold;">Keterangan :</label>
                <select name="keterangan" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;">
                    <option value="">-- Pilih Keterangan --</option>
                    <option value="Hadir">Hadir</option>
                    <option value="Izin">Izin</option>
                    <option value="Sakit">Sakit</option>
                </select>
            </div>

            <button type="submit" name="submit_absen" 
                    style="width: 100%; background: #007bff; color: white; border: none; padding: 15px; border-radius: 8px; font-weight: bold; cursor: pointer;">
                KIRIM ABSENSI
            </button>
        </form>
    </div>
</div>