<div class="container">
    <h3 class="mb-3">Edit Peminjaman : </h3>
    <form action="<?= BASE_URL; ?>/barang/updateBarang" method="post">
        <div class="class-body">
            <input type="hidden" name="id" value="<?= $data['barang']['id']; ?>">
            <div class="form-group mb-3">
                <label for="judul">Nama Peminjam</label>
                <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" value="<?= $data['barang']['nama_peminjam']; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="penulis">Jenis Barang</label>
                <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" value="<?= $data['barang']['jenis_barang']; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="no_barang">Nomor Barang</label>
                <input type="number" class="form-control" id="no_barang" name="no_barang" value="<?= $data['barang']['no_barang']; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="tgl_pinjam">Tanggal Pinjam</label>
                <input type="datetime-local" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="<?= $data['barang']['tgl_pinjam']; ?>">
            </div>
            <label for="tgl_kembali">Tanggal Kembali</label>
            <input type="datetime-local" class="form-control" id="tgl_kembali" name="tgl_kembali" value="<?= $data['barang']['tgl_kembali']; ?>">

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>