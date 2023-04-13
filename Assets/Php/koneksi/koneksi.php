<?php
// Informasi untuk koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "perpustakaan";

// Membuat koneksi ke database
$conn = mysqli_connect($host, $user, $password, $database);

// Memeriksa apakah koneksi berhasil atau tidak
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// echo "Koneksi berhasil";
?>