<?php
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
            // Set session
            if ($query !== false) {
                $_SESSION['harborship'] = fetch($query);
                // Redirect ke halaman cari.html setelah login berhasil
                alert_harbor("success", "Login Berhasil!", "Selamat Datang, " . $_SESSION['harborship']['nama_lengkap']);
                header("location: login.php");
            }
        } else {
            echo "Password salah.";
        }
    } else {
        echo "Email tidak ditemukan.";
    }
}
