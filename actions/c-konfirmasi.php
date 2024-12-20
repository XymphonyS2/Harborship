<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_tiket = intval($_POST['id_tiket']);
    $id_user = myData('id_user');
    $lansia = intval($_POST['lansia']);
    $dewasa = intval($_POST['dewasa']);
    $anak = intval($_POST['anak']);
    $bayi = intval($_POST['bayi']);

    $query_masukkan_penumpang = query("INSERT INTO penumpang SET lansia='$lansia', dewasa='$dewasa', anak='$anak', bayi='$bayi', id_tiket='$id_tiket', id_user='$id_user' ");
    if ($query_masukkan_penumpang !== false) {
        alert_harbor("success", "Pembelian Tiket Berhasil!", "");
        header("location: index.php");
    } else {
        alert_harbor("error", "Pembelian Tiket Gagal!", "");
    }
}
