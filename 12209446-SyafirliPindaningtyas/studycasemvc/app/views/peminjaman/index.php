<div class="container">
    <h3 class="mb-3">Daftar Peminjaman</h3>
    <br>
    <br>
    <div class="row mb-3">
        <div class="col-lg-4">
            <a href="<?= BASE_URL; ?>/peminjaman/tambah " class="btn btn-primary">Tambah Peminjaman</a>
        </div>
        <div class="col-lg-6">
            <form action="<?= BASE_URL; ?>/peminjaman/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="" name="search" autocomplete="off">
                    <div class="input-group-apped">
                        <button class="btn btn-outline-success" type="submit" id="btncari">Cari </button>
                        <button class="btn btn-outline-danger" type="submit" id="btnreset">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br>
    
    <table class="table table-succes table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Peminjam</th>
                <th scope="col">Jenis Barang</th>
                <th scope="col">Nomor barang</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data['peminjaman'] as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['nama_peminjam']; ?></td>
                    <td><?= $row['jenis_barang']; ?></td>
                    <td><?= $row['no_barang']; ?></td>
                    <td><?= $row['tgl_pinjam']; ?></td>
                    <td><?= $row['tgl_kembali']; ?></td>
                    <td>
                        <?php
                        if (date('Y-m-d H:i:s', time() + (60 * 60 * 5)) > $row['tgl_kembali']) {
                            echo '<span class="badge text-bg-success">sudah kembali</span>';
                        ?>
                    </td>
                    <td>
                        <a href="<?= BASE_URL ?>/peminjaman/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                    </td>
                <?php
                        } elseif ($row['status'] == 'sudah kembali') {
                            echo '<span class="badge text-bg-success">sudah kembali</span>';
                ?>
                    </td>
                    <td>
                        <a href="<?= BASE_URL ?>/peminjaman/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                    </td>
                <?php
                        } else {
                            echo '<span class="badge text-bg-danger">belum kembali</span>'; ?>
                    <td>
                        <a href="<?= BASE_URL ?>/peminjaman/edit/<?= $row['id'] ?>" class="btn btn-primary">Edit</a>
                        <a href="<?= BASE_URL ?>/peminjaman/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                    </td>
                <?php } ?>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</div>