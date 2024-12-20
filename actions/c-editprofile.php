<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_lengkap = $_POST['nama_lengkap'];
    $kelamin = $_POST['kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $nik = $_POST['nik'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $kota_asal = $_POST['kota_asal'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $konfirmasi_password = $_POST['konfirmasi_password'];

    // Validasi password
    if ($password !== $konfirmasi_password) {
        die("Password dan Konfirmasi Password tidak cocok.");
    }

    // Hash password
    $hashed_password = password_hash($konfirmasi_password, PASSWORD_DEFAULT);

    // Check if NIK already exists
    $checkNikQuery = query("SELECT COUNT(*) as row FROM user WHERE nik = '$nik'");
    $nikCount = fetch($checkNikQuery);

    if ($nikCount['row'] > 0) {
        alert_harbor("success", "Registrasi Gagal!", "NIK Sudah Terdaftar");
    }

    // Insert into database
    $query = query("INSERT INTO user (nama_lengkap, kelamin, tanggal_lahir, nik, nomor_telepon, kota_asal, email, password) VALUES ('$nama_lengkap', '$kelamin', '$tanggal_lahir', '$nik', '$nomor_telepon', '$kota_asal', '$email', '$hashed_password')");

    if ($query !== false) {
        $_SESSION['sweet_harbor_login']['trigger'] = "success";
        $_SESSION['sweet_harbor_login']['title'] = "Register Berhasil";
        $_SESSION['sweet_harbor_login']['text'] = "";
        header("Location: login.php");
    } else {
        alert_harbor("success", "Registrasi Gagal!", "");
    }
}
