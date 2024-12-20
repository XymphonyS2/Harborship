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
        header("location: konfirmasi.php?l='$lansia'&d='$dewasa'&a='$anak'&b='$bayi'");
    }
    // $query_masukkan_penumpang = query("INSERT INTO penumpang SET lansia='$lansia', dewasa='$dewasa', anak='$anak', bayi='$bayi', id_tiket='$id_tiket' ");
    // if ($query_masukkan_penumpang !== false) {
    //     alert_harbor("success", "Pembelian Tiket Berhasil!", "");
    // } else {
    //     alert_harbor("error", "Pembelian Tiket Gagal!", "");
    // }
}
