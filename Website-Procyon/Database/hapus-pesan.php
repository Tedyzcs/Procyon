<?php
include '../koneksi.php';

// Pastikan ada ID yang dikirim
if(isset($_GET['id'])) {
    // Ambil ID dan pastikan hanya berupa angka (integer) agar aman dari SQL Injection
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    
    // Hapus data berdasarkan ID
    $delete = mysqli_query($conn, "DELETE FROM formulir_kontak WHERE id='$id'");
    
    if($delete) {
        header("location: database-formulir.php?status=sukses");
        exit; // Tambahkan exit
    } else {
        header("location: database-formulir.php?status=gagal");
        exit; // Tambahkan exit
    }
} else {
    header("location: database-formulir.php");
    exit; // Tambahkan exit
}
?>