<?php
session_start();
include '../koneksi.php';

if (isset($_POST['submit_absen'])) {
    // Ambil data dari form
    $nama = mysqli_real_escape_string($conn, $_POST['nama_lengkap']);
    $keterangan = mysqli_real_escape_string($conn, $_POST['keterangan']);

    // Query simpan ke tabel absensi
    $query = "INSERT INTO absensi (nama_lengkap, keterangan) VALUES ('$nama', '$keterangan')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Absen berhasil tersimpan!');
                window.location='/Website-Procyon/index.php'; 
              </script>";
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    header("location: absen.php");
    exit;
}
?>