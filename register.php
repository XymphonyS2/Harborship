<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_lengkap = $_POST['nama_lengkap'];
    $kelamin = $_POST['kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $nik = $_POST['nik'];
    $nomer_telepon = $_POST['nomer_telepon'];
    $kota_asal = $_POST['kota_asal'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validasi password
    if ($password !== $confirm_password) {
        die("Password dan Konfirmasi Password tidak cocok.");
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Simpan ke database
    $stmt = $conn->prepare("INSERT INTO users (nama_lengkap, kelamin, tanggal_lahir, nik, nomer_telepon, kota_asal, email, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $nama_lengkap, $kelamin, $tanggal_lahir, $nik, $nomer_telepon, $kota_asal, $email, $hashed_password);

    if ($stmt->execute()) {
        echo "Registrasi berhasil. <a href='login.html'>Login di sini</a>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
