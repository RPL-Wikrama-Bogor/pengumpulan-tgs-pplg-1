<div class="container">
  <h3 class="mb-5">Daftar Peminjaman</h3>
  <div class="row row-cols-lg-auto g-3 align-items-center mb-3">
    <div class="col-auto">
      <a href="<?= BASE_URL ?>/peminjaman/tambah" class="btn btn-primary">Tambah Peminjaman</a>
    </div>
    <div class="col-auto ms-auto d-flex">
      <form action="<?= BASE_URL ?>/peminjaman/cari" method="post">
        <div class="input-group">
          <input type="text" class="form-control" name="keyword" placeholder="Cari nama atau barang..." autocomplete="off">
          <button type="submit" class="btn btn-outline-secondary">Cari</button>
        </div>
      </form>
      <a href="<?= BASE_URL ?>/peminjaman" class="btn btn-outline-danger ms-1" type="button" id="button-addon2">Reset</a>
    </div>
  </div>
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Peminjam</th>
        <th scope="col">Jenis Barang</th>
        <th scope="col">Nomor Barang</th>
        <th scope="col">Tanggal Pinjam</th>
        <th scope="col">Tanggal Kembali</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $i = 1;
        foreach($data['peminjaman'] as $row):
      ?>
      <tr>
        <td><?= $i ?></td>
        <td><?= $row['nama_peminjam'] ?></td>
        <td><?= $row['jenis_barang'] ?></td>
        <td><?= $row['no_barang'] ?></td>
        <td><?= $row['tgl_pinjam'] ?></td>
        <td><?= $row['tgl_kembali'] ?></td>
        <td>
          <?php
          $date = date('Y-m-d h:i:s', time());
          
          if($row['tgl_kembali'] < $date){
            echo "<span class='badge text-bg-success'>";
            echo "Sudah Kembali";
            echo "</span>";
          }else{
            echo "<span class='badge text-bg-danger'>";
            echo "Belum Kembali";
            echo "</span>";
          }
          
          ?>
        </td>
        <td>
          <a href="<?= BASE_URL ?>/peminjaman/edit/<?= $row['id'] ?>" class="btn btn-primary" <?= ($row['tgl_kembali'] < $date) ? 'hidden' : ''; ?>>Edit</a>
          <a href="<?= BASE_URL ?>/peminjaman/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?');">Hapus</a>
        </td>
      </tr>
      <?php
        $i++;
        endforeach;
      ?>
    </tbody>
  </table>
</div>