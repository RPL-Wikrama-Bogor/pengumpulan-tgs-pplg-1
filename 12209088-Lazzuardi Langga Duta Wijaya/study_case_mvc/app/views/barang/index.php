<div class="container">
    <h3 class="mb-3">Daftar Barang</h3>
    <br>
    <a href="<?= BASE_URL; ?>/barang/tambah" class="btn btn-primary">Tambah Peminjaman</a>
    <br>
    <br>
    <div class="row justify-content-end">
        <div class="col-4">
            <form action="<?= BASE_URL; ?>/barang/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari..." name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary bg-white text-primary " type="submit" id="tombolCari">Cari</button>
                        <button class="btn btn-secondary bg-white text-danger" type="submit" id="tombolReset">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <table class="table table-succes table-striped table-bordered pt-5 text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Peminjam</th>
                <th scope="col">Jenis barang</th>
                <th scope="col">Nomor Barang</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data['barang'] as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['nama_peminjam']; ?></td>
                    <td><?= $row['jenis_barang']; ?></td>
                    <td><?= $row['no_barang']; ?></td>
                    <td><?= $row['tgl_pinjam']; ?></td>
                    <td><?php if ($row['tgl_kembali'] == '0000-00-00 00:00:00') {
                            $tglKembali = new DateTime($row['tgl_pinjam']);
                            $tglKembali->modify('+2 days');
                            echo $tglKembali->format('Y-m-d H:i:s');
                        } else {
                            echo $row['tgl_kembali'];
                        } ?>
                    </td>
                    <td> <?php if ($row['tgl_kembali'] == '0000-00-00 00:00:00') {
                                echo "<div class='badge badge-error badge bg-danger font-bold'>Belum Kembali</div>";
                            } else {
                                echo "<div class='badge badge-succes font-bold bg-success' id='sudahkembali'>Sudah Kembali</div>";
                            }
                            ?></td>
                    <td>
                        <?php if ($row['tgl_kembali'] == '0000-00-00 00:00:00') : ?>
                            <a href="<?= BASE_URL . '/barang/edit/' . $row['id'] ?>" class="btn btn-info bg-primary text-white">Edit</a>
                        <?php endif  ?>
                        <a href="<?= BASE_URL . '/barang/hapus/' . $row['id'] ?>" class="btn btn-error bg-danger text-white" onclick="return confirm('Yakin Hapus Data?')">Hapus</a>
                    </td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</div>