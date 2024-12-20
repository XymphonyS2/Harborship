<?php
require './actions/koneksi.php';
require './actions/c-konfirmasi.php';

$lansia = isset($_GET['l']) ? $_GET['l'] : 0;
$dewasa = isset($_GET['d']) ? $_GET['d'] : 0;
$anak = isset($_GET['a']) ? $_GET['a'] : 0;
$bayi = isset($_GET['b']) ? $_GET['b'] : 0;
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
                    
                    <div class="price-row">
                        <div>
                            <span>Dewasa (1 x Rp22.700)  <?= $lansia ?></span>
                        </div>
                        <div>
                            <span>Rp22.700</span>
                        </div>
                    </div>

                    <div class="price-row total-price">
                        <div>
                            <strong>Total Pembayaran</strong>
                        </div>
                        <div>
                            <strong class="text-orange">Rp22.700</strong>
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
                <button class="btn btn-primary w-100 mt-3" style="margin-bottom: 5px;">CARI JADWAL LAIN</button>

                <button class="btn btn-primary w-100 mt-3" style="margin-bottom: 25px;">LANJUTKAN PEMBAYARAN</button>
            </div>

            <!-- Right Column -->
            <div class="col-md-5">
                <div class="order-box">
                    <div class="d-flex justify-content-between mb-3">
                        <span>ORDER ID</span>
                        <span class="text-orange">W00243480102158</span>
                    </div>

                    <h5>KEBERANGKATAN</h5>
                    <p>Bakauheni → Merak</p>

                    <h6>Jadwal Masuk Pelabuhan</h6>
                    <p>Juni 06, 13 December 2024<br>20:00 - 21:00</p>

                    <h6>Layanan</h6>
                    <p>Regular</p>

                    <h6>Jenis Penumpang Jasa</h6>
                    <p>Pejalan Kaki</p>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>