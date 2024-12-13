<?php
$host = 'localhost'; // Host database
$username = 'root'; // Username database
$password = 'harborship'; // Password database (kosongkan jika menggunakan XAMPP)
$database = 'nama_database'; // Ganti dengan nama database yang kamu gunakan

// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $username, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
