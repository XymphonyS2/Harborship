-- Buat database
CREATE DATABASE harbroship;

-- Gunakan database
USE harbroship;

-- Tabel untuk pengguna
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_lengkap VARCHAR(100) NOT NULL,
    kelamin ENUM('Laki-laki', 'Perempuan') NOT NULL,
    tanggal_lahir DATE NOT NULL,
    nik VARCHAR(16) UNIQUE NOT NULL,
    nomer_telepon VARCHAR(15) UNIQUE NOT NULL,
    kota_asal VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
