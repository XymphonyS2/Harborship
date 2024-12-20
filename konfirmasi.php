<?php
require './actions/koneksi.php';

$tiket = isset($_GET['t']) ? intval($_GET['t']) : 0;
$jumlah[1][0] = isset($_GET['l']) ? intval($_GET['l']) : 0;
$jumlah[1][1] = isset($_GET['d']) ? intval($_GET['d']) : 0;
$jumlah[1][2] = isset($_GET['a']) ? intval($_GET['a']) : 0;
$jumlah[1][3] = isset($_GET['b']) ? intval($_GET['b']) : 0;

$jumlah[0][0] = "Lansia";
$jumlah[0][1] = "Dewasa";
$jumlah[0][2] = "Anak";
$jumlah[0][3] = "Bayi";

$query_harga_penumpang = query("SELECT * FROM harga_penumpang");

$no = 0;
while ($data_harga_penumpang = fetch($query_harga_penumpang)) {
    $jumlah[2][$no++] = $data_harga_penumpang['harga_penumpang'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .order-box {
            border: 1px solid #dee2e6;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .total-price {
            border-top: 1px solid #dee2e6;
            padding-top: 10px;
            margin-top: 10px;
        }

        .text-orange {
            color: #000000;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-7">
                <div class="order-box">
                    <h5 class="mb-4">Rincian Harga</h5>

                    <?php
                    $total_semua = 0;
                    for ($i = 0; $i < 4; $i++) {
                        if ($jumlah[1][$i] != 0) {
                            $total = $jumlah[2][$i] * $jumlah[1][$i];
                            $total_semua += $total;
                    ?>
                            <div class="price-row">
                                <div>
                                    <span><?= $jumlah[0][$i] ?> (<?= $jumlah[1][$i] ?> x Rp<?= number_format($jumlah[2][$i], 0, ",", ".") ?>)</span>
                                </div>
                                <div>
                                    <span>Rp<?= number_format($total, 0, ",", ".") ?></span>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>

                    <div class="price-row total-price">
                        <div>
                            <strong>Total Pembayaran</strong>
                        </div>
                        <div>
                            <strong class="text-orange">Rp<?= number_format($total_semua, 0, ",", ".") ?></strong>
                        </div>
                    </div>
                </div>

                <div class="order-box">
                    <ol class="small">
                        <li class="mb-2">Transaksi booking akan dibatalkan secara otomatis apabila Anda tidak menyelesaikan pembayaran pada periode waktu yang telah ditentukan.</li>
                        <li class="mb-2">Setelah pembayaran berhasil, Dokumen E-Tiket dapat diunduh melalui E-Mail atau Menu "Pesanan Saya" di Web Reservation atau Mobile Application Port;</li>
                        <li class="mb-2">Dokumen E-Tiket wajib dibuktikan saat melakukan proses Masuk Pelabuhan (Check In);</li>
                        <li class="mb-2">Anda sudah dapat Masuk Pelabuhan (Check In) 2 (dua) jam sebelum Jadwal Masuk Pelabuhan yang Anda pilih;</li>
                        <li class="mb-2">Tiket akan hangus (expired) apabila Anda belum Masuk Pelabuhan (Check In) hingga melewati batas waktu Jadwal Masuk Pelabuhan yang Anda pilih.</li>
                    </ol>
                </div>

                <div class="container">
                    <h5>Kebijakan Pelabuhan</h5>
                    <ul class="policy-list" style="margin-bottom: -5px;">
                        <li class="mb-2">Kendaraan <strong>Over Dimension</strong> dan <strong>Over Loading (ODOL)</strong> tidak diperkenankan memasuki area pelabuhan;</li>
                        <li class="mb-2">Anda sudah dapat <strong>Masuk Pelabuhan (Check In)</strong> mulai dari 2 (dua) jam sebelum Jadwal Masuk Pelabuhan yang Anda pilih;</li>
                        <li class="mb-2">Tiket akan hangus (<strong>expired</strong>) apabila Anda belum Masuk Pelabuhan (Check In) hingga melewati batas waktu Jadwal Masuk Pelabuhan yang Anda pilih;</li>
                        <li class="mb-2">Nama Penumpang harus sesuai dengan Kartu Identitas (KTP/SIM/Passport/DII);</li>
                        <li class="mb-2">Jumlah Penumpang dan Nomor Polisi Kendaraan harus sesuai dengan Jumlah Penumpang dan Nomor Polisi Kendaraan yang akan <strong>menyeberang</strong>;</li>
                        <li class="mb-2">Jadwal dan nama kapal keberangkatan dapat berubah sewaktu-waktu mengikuti kondisi cuaca dan operasional pelabuhan tanpa pemberitahuan terlebih dahulu.</li>
                    </ul>
                </div>
                <a class="btn btn-primary w-100 mt-3" href="./index.php" style="margin-bottom: 5px;">CARI JADWAL LAIN</a>
                    <a class="btn btn-primary w-100 mt-3" href="./pembayaran.php?l=<?= $jumlah[1][0] ?>&d=<?= $jumlah[1][1] ?>&a=<?= $jumlah[1][2] ?>&b=<?= $jumlah[1][3] ?>&t=<?= $tiket ?>" style="margin-bottom: 25px;">LANJUTKAN PEMBAYARAN</a>
            </div>

            <!-- Right Column -->
            <div class="col-md-5">
                <div class="order-box">
                    <?php
                    $query_tiket = query("SELECT * FROM tiket INNER JOIN rute ON tiket.id_rute=rute.id_rute WHERE id_tiket='$tiket'");
                    $data_tiket = fetch($query_tiket);
                    ?>

                    <h5>RINCIAN TIKET</h5>
                    <p><?= $data_tiket['pelabuhan_asal'] ?> → <?= $data_tiket['pelabuhan_tujuan'] ?></p>

                    <h6>Jadwal Masuk Pelabuhan</h6>
                    <p><?= $data_tiket['tanggal'] ?><br><?= $data_tiket['jam'] ?></p>

                    <h6>Layanan</h6>
                    <p><?= $data_tiket['kelas'] ?></p>

                    <h6>Jenis Penumpang Jasa</h6>
                    <p><?= $data_tiket['jenis_jasa'] ?></p>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>