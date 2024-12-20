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
        header("location: index.php?page=profile");
    }
}
