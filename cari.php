<main class="container py-4" style=" min-width: 1200px; max-width: 1200px;">
  <div class="search-container" style="padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px;">
    <h4 class="mb-4">Cari Tiket Anda</h4>

    <form method="POST">
      <!-- First Row -->
      <div class="row mb-3">
        <div class="col-md-6 mb-3">
          <label class="form-label">Pelabuhan Asal</label>
          <select class="form-select">
            <option>Pilih Asal</option>
          </select>
        </div>
        <div class="col-md-6 mb-3">
          <label class="form-label">Pelabuhan Tujuan</label>
          <select class="form-select">
            <option>Pilih Tujuan</option>
          </select>
        </div>
      </div>

      <!-- Second Row -->
      <div class="row mb-3">
        <div class="col-md-6 mb-3">
          <label class="form-label">Kelas Layanan</label>
          <select class="form-select">
            <option>Pilih Layanan</option>
          </select>
        </div>
        <div class="col-md-6 mb-3">
          <label class="form-label">Jenis Pengguna Jasa</label>
          <select class="form-select">
            <option>Pilih Jenis Pengguna</option>
          </select>
        </div>
      </div>

      <!-- Third Row -->
      <div class="row mb-3">
        <div class="col-md-6 mb-3">
          <label class="form-label">Jadwal Masuk Pelabuhan</label>
          <input type="text" class="form-control" placeholder="dd/mm/yyyy">
        </div>
        <div class="col-md-6 mb-3">
          <label class="form-label">Pilih Jam</label>
          <input type="text" class="form-control" placeholder="--:--">
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md-3 mb-3">
          <label class="form-label">Jumlah Lansia</label>
          <input type="number" class="form-control" value="0" min="0">
        </div>
        <div class="col-md-3 mb-3">
          <label class="form-label">Jumlah Dewasa</label>
          <input type="number" class="form-control" value="0" min="0">
        </div>
        <div class="col-md-3 mb-3">
          <label class="form-label">Jumlah Anak</label>
          <input type="number" class="form-control" value="0" min="0">
        </div>
        <div class="col-md-3 mb-3">
          <label class="form-label">Jumlah Bayi</label>
          <input type="number" class="form-control" value="0" min="0">
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-12 d-flex justify-content-center">
          <button type="submit" class="btn btn-primary w-100 py-2 fw-bold" style="max-width: 400px;">CARI JADWAL</button>
        </div>
      </div>
    </form>
  </div>
</main>