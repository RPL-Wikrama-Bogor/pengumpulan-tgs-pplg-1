<div class="container">
    <h3 class="mb-3">Edit Peminjam : <?= $data['peminjam']['nama_peminjam'] ?></h3>
    <form action="<?= BASE_URL; ?>/peminjam/updatePeminjam" method="post">
        <div class="class-body">
            <input type="hidden" name="id" value="<?= $data['peminjam']['id']; ?>">
            <div class="form-group mb-3">
                <label for="nama_peminjam">Nama Peminjam</label>
                <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" value="<?= $data['peminjam']['nama_peminjam'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="jenis_barang">Jenis Barang</label>
                <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" value="<?= $data['peminjam']['jenis_barang'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="no_barang">Nomor Barang</label>
                <input type="text" class="form-control" id="no_barang" name="no_barang" value="<?= $data['peminjam']['no_barang'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="tgl_pinjam">Tanggal Pinjam</label>
                <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="<?= $data['peminjam']['tgl_pinjam'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="tgl_kembali">Tanggal Kembali</label>
                <input type="text" class="form-control" id="tgl_kembali" name="tgl_kembali" value="<?= $data['peminjam']['tgl_kembali'] ?>">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>