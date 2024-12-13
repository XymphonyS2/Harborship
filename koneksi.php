<?php
$host = "localhost"; // ganti dengan host jika berbeda
$username = "root"; // ganti dengan username database Anda
$password = ""; // ganti dengan password database Anda jika ada
$database = "harbroship"; // nama database

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
