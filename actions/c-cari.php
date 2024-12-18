<?php
require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rute_asal = $_POST['rute_asal'];
    $rute_tujuan = $_POST['rute_tujuan'];
    $kelas = $_POST['kelas'];
    $jenis = $_POST['jenis'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];

    $lansia = $_POST['lansia'];
    $dewasa = $_POST['dewasa'];
    $anak = $_POST['anak'];
    $bayi = $_POST['bayi'];

    // $query_masukkan_penumpang = query("INSERT INTO penumpang SET lansia='$lansia', dewasa='$dewasa', anak='$anak', bayi='$bayi' ");
    // if ($query_masukkan_penumpang !== false) {
    //     $query_cek_penumpang = query("SELECT id_penumpang FROM penumpang WHERE  lansia='$lansia', dewasa='$dewasa', anak='$anak', bayi='$bayi' ORDER BY id_penumpang DESC LIMIT 1");
    //     $data_penumpang = fetch($query_cek_penumpang);
    //     $id_penumpang = $data_penumpang['id_penumpang'];

        
    // }
}
