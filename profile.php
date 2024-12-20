<main class="container py-4" style=" min-width: 1200px; max-width: 1200px;">
    <div class="search-container" style="padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px;">
        <h4 class="mb-4">Tiket yang anda punya</h4>

        <div class="table-container">
            <table class="table table-striped mb-0">
                <thead>
                    <tr>
                        <th scope="col" rowspan="1">No</th>
                        <th scope="col" rowspan="1">ID</th>
                        <th scope="col" rowspan="1">Asal</th>
                        <th scope="col" rowspan="1">Tujuan</th>
                        <th scope="col" rowspan="1">Kelas</th>
                        <th scope="col" rowspan="1">Jenis</th>
                        <th scope="col" rowspan="1">Jadwal</th>
                        <th scope="col" colspan="4" class="text-center">Jumlah Penumpang</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th scope="col">Lansia</th>
                        <th scope="col">Dewasa</th>
                        <th scope="col">Anak</th>
                        <th scope="col">Bayi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $query = query("SELECT * FROM penumpang INNER JOIN tiket ON penumpang.id_tiket=tiket.id_tiket INNER JOIN rute ON tiket.id_rute=rute.id_rute WHERE id_user='" . mydata('id_user') . "'");
                    while ($data = fetch($query)) {
                    ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td>W000<?= $data['id_tiket'] . $no++ ?></td>
                            <td><?= $data['pelabuhan_asal'] ?></td>
                            <td><?= $data['pelabuhan_tujuan'] ?></td>
                            <td><?= $data['kelas'] ?></td>
                            <td><?= $data['jenis_jasa'] ?></td>
                            <td><?= $data['tanggal'] ?> <?= $data['jam'] ?></td>
                            <td><?= $data['lansia'] ?></td>
                            <td><?= $data['dewasa'] ?></td>
                            <td><?= $data['anak'] ?></td>
                            <td><?= $data['bayi'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


</main>