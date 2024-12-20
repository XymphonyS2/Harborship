<?php
require './actions/koneksi.php';
require './actions/c-pembayaran.php';

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
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Pemesanan</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
    <style>
        .bank-option {
            padding: 15px;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
        }

        .bank-logo {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }

        .payment-section {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .payment-header {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #dee2e6;
        }

        .total-payment {
            background-color: #1a237e;
            color: white;
            padding-top: 10px;
            padding-bottom: 20px;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .pay-button {
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px;
            width: 100%;
            margin-top: 10px;
        }

        .payment-method-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .chevron {
            transition: transform 0.3s ease;
        }

        .chevron.expanded {
            transform: rotate(180deg);
        }
    </style>
</head>

<body class="bg-light">
    <div class="container mb-5 pb-5">
        <div class="payment-section mt-4">
            <h5 class="mb-4">Informasi Pemesanan</h5>

            <div class="payment-header">
                <span>Nomor Transaksi</span>
                <span>W000<?= $tiket ?></span>
            </div>

            <div class="payment-header">
                <span>Nominal Transaksi</span>
                <span>Rp <?= number_format($total_semua, 0, ",", ".") ?></span>
            </div>

            <div class="mt-3">
                <div class="d-flex justify-content-between align-items-center" style="cursor: pointer;" onclick="toggleInfo()">
                    <!-- <span>Informasi Tambahan</span> -->
                    <!-- <i class="chevron">▼</i> -->
                </div>
            </div>
        </div>

        <div class="payment-section">
            <h5 class="mb-4">Pilih Metode Pembayaran</h5>


            <div class="payment-method-header" onclick="toggleVirtualAccount()">
                <span>Virtual Akun Bank (Transfer)</span>
                <i class="chevron">▼</i>
            </div>

            <div id="virtualAccountOptions" style="display: none;">
                <div class="bank-option">
                    <div class="d-flex align-items-center">
                        <!-- <img src="/api/placeholder/24/24" alt="BCA" class="bank-logo"> -->
                        <span>BCA</span>
                    </div>
                    <input type="radio" name="bank" value="bca">
                </div>

                <div class="bank-option">
                    <div class="d-flex align-items-center">
                        <!-- <img src="/api/placeholder/24/24" alt="Bank Sumsel Babel" class="bank-logo"> -->
                        <span>BRI</span>
                    </div>
                    <input type="radio" name="bank" value="bri">
                </div>

                <div class="bank-option">
                    <div class="d-flex align-items-center">
                        <!-- <img src="/api/placeholder/24/24" alt="Permata" class="bank-logo"> -->
                        <span>BNI</span>
                    </div>
                    <input type="radio" name="bank" value="bni">
                </div>

                <div class="bank-option">
                    <div class="d-flex align-items-center">
                        <!-- <img src="/api/placeholder/24/24" alt="Muamalat" class="bank-logo"> -->
                        <span>Mandiri</span>
                    </div>
                    <input type="radio" name="bank" value="mandiri">
                </div>
            </div>
        </div>
    </div>

    <div class="total-payment">
        <div class="container">
            <div class=" align-items-center">
                <button onclick="window.location.href='struk.php?l=<?= $jumlah[1][0] ?>&d=<?= $jumlah[1][1] ?>&a=<?= $jumlah[1][2] ?>&b=<?= $jumlah[1][3] ?>&t=<?= $tiket ?>';" class="pay-button">BAYAR</button>
            </div>
        </div>
    </div>

    <script>
        function toggleInfo() {
            // Add implementation for toggling additional information
        }

        function toggleModernChannel() {
            const chevron = event.currentTarget.querySelector('.chevron');
            chevron.classList.toggle('expanded');
        }

        function toggleVirtualAccount() {
            const options = document.getElementById('virtualAccountOptions');
            const chevron = event.currentTarget.querySelector('.chevron');

            if (options.style.display === 'none') {
                options.style.display = 'block';
                chevron.classList.add('expanded');
            } else {
                options.style.display = 'none';
                chevron.classList.remove('expanded');
            }
        }

        document.querySelectorAll('.bank-option').forEach(option => {
            option.addEventListener('click', function() {
                // Uncheck all radio buttons
                document.querySelectorAll('input[name="bank"]').forEach(radio => {
                    radio.checked = false;
                });

                // Check the clicked option's radio button
                const radio = this.querySelector('input[type="radio"]');
                radio.checked = true;
            });
        });
    </script>
</body>

</html>