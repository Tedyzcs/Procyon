<?php
include '../koneksi.php'; // Pastikan koneksi database benar
session_start();

// Proteksi admin (opsional tapi disarankan)
if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){
    exit("Akses Ditolak");
}

if(isset($_GET['id'])){
    $id = $_GET['id'];

    // Query hapus dari tabel laporan_anonim
    $query = mysqli_query($conn, "DELETE FROM laporan_anonim WHERE id = '$id'");

    if($query){
        echo "<script>alert('Data berhasil dihapus!'); window.location='database-formulir.php';</script>";
    } else {
        echo "Gagal menghapus: " . mysqli_error($conn);
    }
} else {
    echo "<script>window.location='database-formulir.php';</script>";
}
?>