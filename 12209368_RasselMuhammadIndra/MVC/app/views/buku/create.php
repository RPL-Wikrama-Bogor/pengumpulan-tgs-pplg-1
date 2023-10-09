<div class="container">
  <h3 class="mb-3">Tambah Buku</h3>
  <form action="<?= BASE_URL?>/buku/simpanBuku" method="post">
    <div class="class-body">
      <div class="form-group mb-3">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" id="judul" name="judul">
      </div>
      <div class="form-group mb-3">
        <label for="penulis">Penulis</label>
        <input type="text" class="form-control" id="penulis" name="penulis">
      </div>
      <div class="form-group mb-3">
        <label for="peminjam">Peminjam</label>
        <input type="text" class="form-control" id="peminjam" name="peminjam">
      </div>
      <div class="form-group mb-3">
        <label for="tgl_pinjam">Tanggal Pinjam</label>
        <input type="datetime-local" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
      </div>
    </div>
    <div class="card-footer">
      <button class="btn btn-primary" type="submit" name="submit">Submit</button>
    </div>
  </form>
</div>