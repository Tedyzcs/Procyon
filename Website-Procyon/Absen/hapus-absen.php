<?php
session_start();
include '../koneksi.php';

// Cek apakah yang akses adalah admin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("location: ../index.php");
    exit;
}

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    
    // Query hapus data
    $delete = mysqli_query($conn, "DELETE FROM absensi WHERE id='$id'");
    
    if ($delete) {
        // Balik ke halaman database-absen dengan status sukses
        header("location: database-absen.php?status=terhapus");
        exit;
    } else {
        header("location: database-absen.php?status=gagal");
        exit;
    }
} else {
    header("location: database-absen.php");
    exit;
}
?>