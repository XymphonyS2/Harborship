<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Cari pengguna berdasarkan email
    $query = query("SELECT id_user, password FROM user WHERE email = '$email'");
    $data = fetch($query);
    $hashed_password = $data['password']; // Ambil password hash

    if (rows($query) != 0) {
        // Verifikasi password
        if (password_verify($password, $hashed_password)) {
            $query = query("SELECT * FROM user WHERE email = '$email'");
            $_SESSION['harborship'] = fetch($query);
            // Set session
            if (!empty($_SESSION['harborship'])) {
                // Redirect ke halaman cari.html setelah login berhasil
                header("Location: cari.php");
            } else {
                echo 'abcd';
            }
        } else {
            echo "Password salah.";
        }
    } else {
        echo "Email tidak ditemukan.";
    }
}