<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Cari pengguna berdasarkan email
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        // Verifikasi password
        if (password_verify($password, $hashed_password)) {
            // Set session atau cookie jika diperlukan
            session_start();
            $_SESSION['user_id'] = $id; // Menyimpan id pengguna dalam session
            $_SESSION['email'] = $email; // Menyimpan email dalam session

            // Redirect ke halaman cari.html setelah login berhasil
            header("Location: cari.html");
            exit(); // Menghentikan script lebih lanjut setelah redirect
        } else {
            echo "Password salah.";
        }
    } else {
        echo "Email tidak ditemukan.";
    }

    $stmt->close();
    $conn->close();
}
?>
