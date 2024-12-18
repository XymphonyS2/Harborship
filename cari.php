<main class="container py-4" style=" min-width: 1200px; max-width: 1200px;">
  <div class="search-container" style="padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px;">
    <h4 class="mb-4">Cari Tiket Anda</h4>

    <form method="POST">
      <!-- First Row -->
      <div class="row mb-3">
        <div class="col-md-6 mb-3">
          <label class="form-label">Pelabuhan Asal</label>
          <select name="rute_asal" class="form-select" required>
            <option value="" hidden>Pilih Asal</option>
            <?php
            $query_rute_asal = query("SELECT * FROM rute");
            while ($data_rute_asal = fetch($query_rute_asal)) {
            ?>
              <option value="<?= $data_rute_asal['pelabuhan_asal'] ?>"><?= $data_rute_asal['pelabuhan_asal'] ?></option>
            <?php
            }
            ?>
          </select>
        </div>
        <div class="col-md-6 mb-3">
          <label class="form-label">Pelabuhan Tujuan</label>
          <select name="rute_tujuan" class="form-select" required>
            <option value="" hidden>Pilih Tujuan</option>
            <?php
            $query_rute_tujuan = query("SELECT * FROM rute");
            while ($data_rute_tujuan = fetch($query_rute_tujuan)) {
            ?>
              <option value="<?= $data_rute_tujuan['pelabuhan_tujuan'] ?>"><?= $data_rute_tujuan['pelabuhan_tujuan'] ?></option>
            <?php
            }
            ?>
          </select>
        </div>
      </div>

      <!-- Second Row -->
      <div class="row mb-3">
        <div class="col-md-6 mb-3">
          <label class="form-label">Kelas Layanan</label>
          <select class="form-select" name="kelas" required>
            <option value="" hidden>Pilih Layanan</option>
            <option value="express">Express</option>
            <option value="reguler">Reguler</option>
          </select>
        </div>
        <div class="col-md-6 mb-3">
          <label class="form-label">Jenis Pengguna Jasa</label>
          <select class="form-select" name="jenis" required>
            <option value="" hidden>Pilih Jenis Pengguna</option>
            <option value="kendaraan">Kendaraan</option>
            <option value="jalan_kaki">Jalan kaki</option>
          </select>
        </div>
      </div>

      <!-- Third Row -->
      <div class="row mb-3">
        <div class="col-md-6 mb-3">
          <label class="form-label">Jadwal Masuk Pelabuhan</label>
          <input type="date" class="form-control" name="tanggal">
        </div>
        <div class="col-md-6 mb-3">
          <label class="form-label">Pilih Jam</label>
          <input name="jam" type="time" class="form-control">
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md-3 mb-3">
          <label class="form-label">Jumlah Lansia</label>
          <input type="number" name="lansia" class="form-control" value="0" min="0">
        </div>
        <div class="col-md-3 mb-3">
          <label class="form-label">Jumlah Dewasa</label>
          <input type="number" name="dewasa" class="form-control" value="0" min="0">
        </div>
        <div class="col-md-3 mb-3">
          <label class="form-label">Jumlah Anak</label>
          <input type="number" name="anak" class="form-control" value="0" min="0">
        </div>
        <div class="col-md-3 mb-3">
          <label class="form-label">Jumlah Bayi</label>
          <input type="number" name="bayi" class="form-control" value="0" min="0">
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-12 d-flex justify-content-center">
          <button type="submit" class="btn btn-primary w-100 py-2 fw-bold" style="max-width: 400px;">CARI JADWAL</button>
        </div>
      </div>
    </form>
  </div>

  <div class="search-container" style="padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px;">
    <h4 class="mb-4">List Tiket</h4>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <!-- table -->
    <!-- no | asal | tujuan | kelas | jenis | jadwal | lansia | dewasa | anak | bayi |        -->
    <!--                                              |     jumlahasodaksdkn         |        -->

    
  </div>
</main>