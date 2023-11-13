<div class="container">
  <h3 class="mb-3">Edit Buku : <?= $data['buku']['judul'] ?></h3>
  <form action="<?= BASE_URL; ?>/buku/updateBuku" method="post">
    <div class="class-body">
      <input type="hidden" name="id" value="<?= $data['buku']['id']; ?>">
      <div class="form-group mb-3">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" id="judul" name="judul" value="<?= $data['buku']['judul'] ?>">
      </div>
      <div class="form-group mb-3">
        <label for="penulis">Penulis</label>
        <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $data['buku']['penulis'] ?>">
      </div>
      <div class="form-group mb-3">
        <label for="peminjam">Peminjam</label>
        <input type="text" class="form-control" id="peminjam" name="peminjam" value="<?= $data['buku']['peminjam'] ?>">
      </div>
      <div class="form-group mb-3">
        <label for="tgl_pinjam">Tanggal Pinjam</label>
        <input type="datetime-local" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="<?= $data['buku']['tgl_pinjam'] ?>">
      </div>
      <div class="form-group mb-3">
        <label for="tgl_selesai">Tanggal Selesai</label>
        <input type="datetime-local" class="form-control" id="tgl_selesai" name="tgl_selesai" value="<?= $data['buku']['tgl_selesai'] ?>">
      </div>
    </div>
    <div class="card-footer">
      <button class="btn btn-primary" type="submit">Submit</button>
    </div>
  </form>
</div>