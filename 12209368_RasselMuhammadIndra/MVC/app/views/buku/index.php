<div class="container">
  <h3 class="ab-3">Daftar Buku</h3>
  <br>
  <a href="<?= BASE_URL; ?>/buku/tambah" class="btn btn-primary">Tambah Buku</a>
  <br><br>
  <form action="<?= BASE_URL ?>/buku/search" method="post">
    <label for="judul">Cari Buku</label>
    <input type="text" class="form-control" id="name" name="name">
    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
  </form>
  <br>
  <table class="table table-success table-striped table-bordered">
    <thead>
      <tr>
        <td scope="col">#</td>
        <td scope="col">Judul</td>
        <td scope="col">Penulis</td>
        <td scope="col">Peminjam</td>
        <td scope="col">Tanggal Pinjam</td>
        <td scope="col">Tanggal Selesai</td>
        <td scope="col">Status</td>
        <td scope="col">Action</td>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; ?>
      <?php foreach ($data['buku'] as $row) : ?>
        <tr>
          <td><?= $no; ?></td>
          <td><?= $row['judul']; ?></td>
          <td><?= $row['penulis']; ?></td>
          <td><?= $row['peminjam']; ?></td>
          <td><?= $row['tgl_pinjam']; ?></td>
          <td><?php if ($row['tgl_selesai'] == '0000-00-00 00:00:00') {
                $tglKembali = new DateTime($row['tgl_pinjam']);
                $tglKembali->modify('+2 days');
                echo $tglKembali->format('Y-m-d H:i:s');
              } else {
                echo $row['tgl_selesai'];
              } ?>
          </td>
          <td> <?php if ($row['tgl_selesai'] == '0000-00-00 00:00:00') {
                  echo "<div class='badge badge-error badge bg-danger font-bold'>Belum Kembali</div>";
                } else {
                  echo "<div class='badge badge-succes font-bold bg-success' id='sudahkembali'>Sudah Kembali</div>";
                }
                ?>
          </td>
          <td>
            <a href="<?= BASE_URL ?>/buku/edit/<?= $row['id'] ?>" class="btn btn-primary">Edit</a>
            <a href="<?= BASE_URL ?>/buku/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus Data?');">Hapus</a>
          </td>
        </tr>
      <?php $no++;
      endforeach; ?>
    </tbody>
  </table>
</div>