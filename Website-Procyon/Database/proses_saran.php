<?php
// Gunakan file koneksi yang sudah ada agar lebih rapi
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dan amankan dari karakter aneh
    $isi_saran = mysqli_real_escape_string($conn, $_POST['isi_saran']);
    
    // Kita tambahkan kolom tanggal agar admin tahu kapan saran dikirim (jika ada kolomnya di DB)
    // Jika di tabelmu tidak ada kolom 'tanggal', biarkan query tetap seperti yang lama
    $query = "INSERT INTO laporan_anonim (isi_saran) VALUES ('$isi_saran')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Terima kasih atas masukan anonim Anda!'); 
                window.location='/Website-Procyon/kontak.php';
              </script>";
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Jika orang iseng akses file ini langsung, lempar ke halaman kontak
    header("location: /Website-Procyon/kontak.php");
    exit;
}
?>