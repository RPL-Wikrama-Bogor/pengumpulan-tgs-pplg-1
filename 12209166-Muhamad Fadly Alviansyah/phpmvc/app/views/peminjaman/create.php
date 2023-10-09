<div class="container">
  <h3 class="mb-3">Tambah Peminjaman</h3>
  <form action="<?= BASE_URL ?>/peminjaman/simpanPeminjaman" method="post">
    <div class="class-body">
      <div class="form-group mb-3">
        <label for="nama_peminjam">Nama Peminjam</label>
        <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" required>
      </div>
      <div class="form-group mb-3">
        <label for="jenis_barang">Jenis Barang</label>
        <select class="form-select" name="jenis_barang" id="jenis_barang" required>
          <option value="" hidden>Pilih</option>
          <option value="laptop">Laptop</option>
          <option value="hp">HP</option>
          <option value="adaptor lan">Adaptor LAN</option>
        </select>
      </div>
      <div class="form-group mb-3">
        <label for="no_barang">Nomor Barang</label>
        <input type="number" class="form-control" id="no_barang" name="no_barang" required>
      </div>
      <div class="form-group mb-3">
        <label for="tgl_pinjam">Tanggal Peminjaman</label>
        <input type="datetime-local" class="form-control" id="tgl_pinjam" name="tgl_pinjam" required>
      </div>
      <input type="datetime-local" hidden class="form-control" id="tgl_kembali" name="tgl_kembali">
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>