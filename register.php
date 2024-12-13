<?php
include 'koneksi.php'; // Menyertakan file koneksi database

// Mengecek jika method POST digunakan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Menyimpan input user ke dalam variabel
    $nama_lengkap = mysqli_real_escape_string($koneksi, $_POST['nama_lengkap']);
    $kelamin = mysqli_real_escape_string($koneksi, $_POST['kelamin']);
    $tanggal_lahir = mysqli_real_escape_string($koneksi, $_POST['tanggal_lahir']);
    $nik = mysqli_real_escape_string($koneksi, $_POST['nik']);
    $nomer_telepon = mysqli_real_escape_string($koneksi, $_POST['nomer_telepon']);
    $kota_asal = mysqli_real_escape_string($koneksi, $_POST['kota_asal']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($koneksi, $_POST['confirm_password']);

    // Cek apakah password dan konfirmasi password sama
    if ($password !== $confirm_password) {
        echo "Password dan konfirmasi password tidak cocok.";
    } else {
        // Enkripsi password
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // Membuat query untuk memasukkan data
        $sql = "INSERT INTO user (nama_lengkap, kelamin, tanggal_lahir, nik, nomer_telepon, kota_asal, email, password)
                VALUES ('$nama_lengkap', '$kelamin', '$tanggal_lahir', '$nik', '$nomer_telepon', '$kota_asal', '$email', '$password_hash')";

        // Menjalankan query
        if (mysqli_query($koneksi, $sql)) {
            echo "Pendaftaran berhasil!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
        }
    }
}
?>
