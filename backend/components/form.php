<div class="card mb-4">
  <div class="card-header">
    <h5 class="card-title mb-0">Form Pesanan</h5>
  </div>
  <div class="card-body">
    <form>
      <div class="row">
        <div class="col-md-12 mb-3">
          <label for="pelanggan" class="form-label">Nama Pelanggan</label>
          <input type="text" class="form-control" id="pelanggan" required>
        </div>
        <div class="col-md-12 mb-3">
          <label for="produk" class="form-label">Produk</label>
          <select class="form-select" id="produk" required>
            <option value="">Pilih Produk</option>
            <option value="Produk A">Produk A</option>
            <option value="Produk B">Produk B</option>
            <option value="Produk C">Produk C</option>
          </select>
        </div>
        <div class="col-md-12 mb-3">
          <label for="tanggal" class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="tanggal" required>
        </div>
        <div class="col-md-12 mb-3">
          <label for="status" class="form-label">Status</label>
          <select class="form-select" id="status" required>
            <option value="">Pilih Status</option>
            <option value="proses">Proses</option>
            <option value="selesai">Selesai</option>
            <option value="batal">Batal</option>
          </select>
        </div>
        <div class="col-md-12 mb-3">
          <label for="total" class="form-label">Total</label>
          <input type="number" class="form-control" id="total" placeholder="Rp" required>
        </div>
      </div>
      <div class="text-end">
        <button type="reset" class="btn btn-secondary me-2">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>