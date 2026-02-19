<?php
include '../koneksi.php';

if (isset($_POST['submit'])) {
    $company = mysqli_real_escape_string($conn, $_POST['company']);
    $name    = mysqli_real_escape_string($conn, $_POST['name']);
    $phone   = mysqli_real_escape_string($conn, $_POST['phone']);
    $email   = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $query = "INSERT INTO formulir_kontak (company, name, phone, email, message) 
              VALUES ('$company', '$name', '$phone', '$email', '$message')";
    
    $simpan = mysqli_query($conn, $query);

    if ($simpan) {
        echo "<script>
                alert('Pesan berhasil terkirim!');
                window.location='/Website-Procyon/kontak.php';
              </script>";
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    header("location: /Website-Procyon/kontak.php");
    exit;
}
?>