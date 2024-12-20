<?php
if (!isset($_POST['cari']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_tiket = $_POST['id_tiket'];

    $lansia = $_POST['lansia'];
    $dewasa = $_POST['dewasa'];
    $anak = $_POST['anak'];
    $bayi = $_POST['bayi'];

    $query_masukkan_penumpang = query("INSERT INTO penumpang SET lansia='$lansia', dewasa='$dewasa', anak='$anak', bayi='$bayi', id_tiket='$id_tiket' ");
    if ($query_masukkan_penumpang !== false) {
        alert_harbor("success", "Pembelian Tiket Berhasil!", "");
    } else {
        alert_harbor("error", "Pembelian Tiket Gagal!", "");
    }
}
