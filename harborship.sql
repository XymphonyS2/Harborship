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

-- Tabel untuk Pelabuhan Asal
CREATE TABLE origin_ports (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_pelabuhan VARCHAR(100) NOT NULL,
    kota VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabel untuk Pelabuhan Tujuan
CREATE TABLE destination_ports (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_pelabuhan VARCHAR(100) NOT NULL,
    kota VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabel untuk Kelas Layanan
CREATE TABLE service_classes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_kelas VARCHAR(100) NOT NULL,
    deskripsi TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabel untuk Jenis Pengguna
CREATE TABLE user_types (
    id INT AUTO_INCREMENT PRIMARY KEY,
    jenis_pengguna VARCHAR(50) NOT NULL,
    deskripsi TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabel untuk Pencarian Tiket (Ticket Search)
CREATE TABLE ticket_search (
    id INT AUTO_INCREMENT PRIMARY KEY,
    origin_port_id INT NOT NULL,  -- Asal pelabuhan
    destination_port_id INT NOT NULL,  -- Tujuan pelabuhan
    service_class_id INT NOT NULL,  -- Kelas layanan
    user_type_id INT NOT NULL,  -- Jenis pengguna
    checkin_date DATE NOT NULL,  -- Jadwal Masuk Pelabuhan
    checkin_time TIME NOT NULL,  -- Jam Masuk Pelabuhan
    jumlah_lansia INT DEFAULT 0,  -- Jumlah Lansia
    jumlah_dewasa INT DEFAULT 0,  -- Jumlah Dewasa
    jumlah_anak INT DEFAULT 0,  -- Jumlah Anak
    jumlah_bayi INT DEFAULT 0,  -- Jumlah Bayi
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (origin_port_id) REFERENCES origin_ports(id),
    FOREIGN KEY (destination_port_id) REFERENCES destination_ports(id),
    FOREIGN KEY (service_class_id) REFERENCES service_classes(id),
    FOREIGN KEY (user_type_id) REFERENCES user_types(id)
);

-- Menyisipkan contoh data untuk Pelabuhan Asal
INSERT INTO origin_ports (nama_pelabuhan, kota) VALUES
('Pelabuhan A', 'Kota A'),
('Pelabuhan B', 'Kota B'),
('Pelabuhan C', 'Kota C');

-- Menyisipkan contoh data untuk Pelabuhan Tujuan
INSERT INTO destination_ports (nama_pelabuhan, kota) VALUES
('Pelabuhan A', 'Kota A'),
('Pelabuhan B', 'Kota B'),
('Pelabuhan C', 'Kota C');

-- Menyisipkan contoh data untuk Kelas Layanan
INSERT INTO service_classes (nama_kelas, deskripsi) VALUES
('Ekonomi', 'Layanan kelas ekonomi'),
('Bisnis', 'Layanan kelas bisnis'),
('VIP', 'Layanan kelas VIP');

-- Menyisipkan contoh data untuk Jenis Pengguna
INSERT INTO user_types (jenis_pengguna, deskripsi) VALUES
('Individu', 'Pengguna pribadi'),
('Perusahaan', 'Pengguna perusahaan');
