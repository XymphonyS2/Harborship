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
</main>