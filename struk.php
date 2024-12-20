<?php
require './actions/koneksi.php';
require './actions/c-struk.php';

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

$total_semua = 0;
for ($i = 0; $i < 4; $i++) {
    if ($jumlah[1][$i] != 0) {
        $total = $jumlah[2][$i] * $jumlah[1][$i];
        $total_semua += $total;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Detail</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
    <style>
        .tahansimpan {
            text-align: center;
            padding: 20px 0;
            margin: 15px 0;
            cursor: pointer;
            position: relative;
        }

        .tahansimpan p {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
            color: #333;
        }

        .tahansimpan:hover {
            background-color: #f8f9fa;
        }

        .copy-tooltip {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            display: none;
            z-index: 1000;
        }

        /* Animation for tooltip */
        @keyframes fadeInOut {
            0% {
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        .show-tooltip {
            display: block;
            animation: fadeInOut 2s ease-in-out forwards;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Informasi Pemesanan
                    </div>
                    <?php
                    $query = query("SELECT * FROM tiket INNER JOIN rute ON tiket.id_rute=rute.id_rute WHERE id_tiket='$tiket'");
                    $data_tiket = fetch($query);
                    ?>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nomor Transaksi: <span class="float-right">W000<?= $data_tiket['id_tiket'] ?></span></li>
                        <li class="list-group-item">Pelabuhan Asal: <span class="float-right"><?= $data_tiket['pelabuhan_asal'] ?></span></li>
                        <li class="list-group-item">Pelabuhan Tujuan: <span class="float-right"><?= $data_tiket['pelabuhan_tujuan'] ?></span></li>
                        <li class="list-group-item">Nominal Transaksi: <span class="float-right">Rp <?= number_format($total_semua, 0, ",", ".") ?></span></li>
                        <li class="list-group-item">Biaya Layanan: <span class="float-right">Rp 5.000</span></li>
                        <li class="list-group-item">
                            <p>Kode Virtual Akun berlaku sampai <span class="float-right"><?= $data_tiket['tanggal'] . " " . $data_tiket['jam'] ?></span></p>
                            <!-- <p>Kode Virtual Akun: <span class="float-right">20216002737274402</span></p> -->
                            <p>Kode Virtual Akun: </p>
                            <div class="container">
                                <div class="tahansimpan" onclick="alert_last(); copyToClipboard();">
                                    <p><?= rand() ?></p>
                                </div>
                            </div>

                            <div class="copy-tooltip" id="copyTooltip">
                                Kode sudah disalin
                            </div>
                            <!-- <div class="tahansimpan">
                            <p>20216002737274402</p>
                        </div> -->
                            <p class="text-muted small">Mohon lakukan pembayaran dengan Kode Virtual diatas sebelum masa berakhir nomor tersebut.</p>
                            <form method="POST">
                                <input type="hidden" name="id_tiket" value="<?= $tiket ?>">
                                <input type="hidden" name="lansia" value="<?= $jumlah[1][0] ?>">
                                <input type="hidden" name="dewasa" value="<?= $jumlah[1][1] ?>">
                                <input type="hidden" name="anak" value="<?= $jumlah[1][2] ?>">
                                <input type="hidden" name="bayi" value="<?= $jumlah[1][3] ?>">
                                <button type="submit" style="float: right; border: none; background-color: white; text-decoration: underline; color: blue;">Kembali</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>
        function copyToClipboard() {
            // Get the text content
            const text = document.querySelector('.tahansimpan p').textContent;

            // Create a temporary textarea element
            const textarea = document.createElement('textarea');
            textarea.value = text;
            document.body.appendChild(textarea);

            // Select and copy the text
            textarea.select();
            document.execCommand('copy');

            // Remove the temporary textarea
            document.body.removeChild(textarea);

            // Show the tooltip
            const tooltip = document.getElementById('copyTooltip');
            tooltip.classList.add('show-tooltip');

            // Remove the tooltip after animation
            setTimeout(() => {
                tooltip.classList.remove('show-tooltip');
            }, 2000);
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <script>
        function alert_last() {
            swal({
                type: "success",
                title: "Pembayaran Berhasil!",
                text: "Silahkan tutup halaman ini untuk kembali ke halaman utama",
                confirmButtonText: "Okay"
            });
        }
    </script>
</body>

</html>