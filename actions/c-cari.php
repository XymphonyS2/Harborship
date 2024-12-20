<?php
if (!isset($_POST['cari']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_tiket = $_POST['id_tiket'];

    $lansia = intval($_POST['lansia']);
    $dewasa = intval($_POST['dewasa']);
    $anak = intval($_POST['anak']);
    $bayi = intval($_POST['bayi']);

    if ($lansia <= 0 && $dewasa <= 0 && $anak <= 0 && $bayi <= 0) {
        alert_harbor("error", "Pemilihan Gagal!", "Mohon Masukkan Berapa Penumpang!");
    } else {
        header("location: konfirmasi.php?l=$lansia&d=$dewasa&a=$anak&b=$bayi&t=$id_tiket");
    }
}
