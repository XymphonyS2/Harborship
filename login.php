<?php
include 'koneksi.php'; // Sertakan file koneksi database

// Mengecek apakah form telah di-submit dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    // Membuat query untuk mencari user dengan email yang sesuai
    $query = "SELECT id_user, password FROM user WHERE email = '$email'";
    $result = mysqli_query($koneksi, $query);

    // Mengecek apakah hasil query ada
    if (mysqli_num_rows($result) > 0) {
        // User ditemukan, verifikasi password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // Jika password benar, redirect ke homepage
            header("Location: ./homepage.html"); // Sesuaikan dengan nama file atau path yang tepat
            exit(); // Penting untuk menghentikan eksekusi script lebih lanjut
        } else {
            echo "Password salah!";

