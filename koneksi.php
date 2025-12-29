<?php
$servername = "localhost"; // Ganti jika server database Anda berbeda
$username = "root";        // Ganti dengan username database Anda
$password = "my-secret-pw";            // Ganti dengan password database Anda
$dbname = "db_CDC"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
// echo "Koneksi berhasil"; // Hapus atau jadikan komentar baris ini untuk produksi
?>