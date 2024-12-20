<main class="container py-4" style=" min-width: 1200px; max-width: 1200px;">
    <div class="search-container" style="padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px;">
        <h4 class="mb-4">Edit Profile</h4>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan Nama Anda" value="<?= myData('nama_lengkap') ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select name="kelamin" class="form-select" required>
                    <option value="" hidden>Pilih Jenis Kelamin</option>
                    <option value="1" <?= myData('kelamin') == 1 ? 'selected' : '' ?>>Laki - Laki</option>
                    <option value="0" <?= myData('kelamin') == 0 ? 'selected' : '' ?>>Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" value="<?= myData('tanggal_lahir') ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nomer Induk Kependudukan</label>
                <input type="text" class="form-control" name="nik" placeholder="Masukkan NIK" value="<?= myData('nik') ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" name="nomer_telepon" placeholder="Masukkan Nomor Telepon" value="<?= myData('nomor_telepon') ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Kota Asal</label>
                <input type="text" class="form-control" name="kota_asal" placeholder="Masukkan Alamat Kota Asal" value="<?= myData('kota_asal') ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Masukkan Email" value="<?= myData('email') ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Masukkan Password anda" required>
                <div class="form-text">Minimal berisi 8 karakter, mengandung huruf kecil, huruf besar dan angka</div>
            </div>

            <div class="mb-3">
                <label class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" name="konfirmasi_password" placeholder="Konfirmasi Password Anda" required>
            </div>

            <button type="submit" class="btn btn-primary"> <a href="./cari.html"></a>Simpan Perubahan</a></button>
        </form>
    </div>

    <div class="table-container">
            <table class="table table-striped mb-0">
                <thead>
                    <tr>
                        <th scope="col" rowspan="1">No</th>
                        <th scope="col" rowspan="1">Asal</th>
                        <th scope="col" rowspan="1">Tujuan</th>
                        <th scope="col" rowspan="1">Kelas</th>
                        <th scope="col" rowspan="1">Jenis</th>
                        <th scope="col" rowspan="1">Jadwal</th>
                        <th scope="col" colspan="4" class="text-center">Jumlah Penumpang</th>
                        <th scope="col" rowspan="1">Jadwal</th>
                    </tr>
                    <tr>
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
                    <tr>
                        <td>1</td>
                        <td>Jakarta</td>
                        <td>Surabaya</td>
                        <td>Ekonomi</td>
                        <td>Bus</td>
                        <td>08:00</td>
                        <td>1</td>
                        <td>2</td>
                        <td>1</td>
                        <td>0</td>
                        <td><button class="btn btn-primary">Pilih</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bandung</td>
                        <td>Semarang</td>
                        <td>Eksekutif</td>
                        <td>Kereta</td>
                        <td>10:30</td>
                        <td>0</td>
                        <td>3</td>
                        <td>2</td>
                        <td>1</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>