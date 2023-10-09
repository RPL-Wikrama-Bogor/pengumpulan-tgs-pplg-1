<div class="container">
    <div class="mb-3">
        <br>
        <h1>Daftar Peminjaman</h1>
        <br>
        <a href="<?= BASE_URL; ?>/buku/tambah" class="btn btn-primary">Tambah Peminjaman</a>
        <form method="post" style="float: right;" action="<?= BASE_URL;?>/buku/search">
            <div class="input-group">
                <input class="form-control"
                type="text" name="search" id="search" />
                <button class="btn btn-outline-secondary btn-sm " type="submit">Search</button>
                <button class="btn btn-outline-danger btn-sm "><a class="text-danger" style="text-decoration: none;" href="index.php">Reset</a></button>
            </div>
        </form>
        <br>
        <br>
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
                
                <?php $no=1; ?>
                <?php foreach($data['buku'] as $row) :?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $row['nama_peminjam']; ?></td>
                        <td><?= $row['jenis_barang']; ?></td>
                        <td><?= $row['no_barang']; ?></td>
                        <td><?= $row['tgl_pinjam']; ?></td>
                        <td><?= $row['tgl_kembali']; ?></td>
                        <td>
                            <!-- status -->
                            <button class="btn text-light btn-sm 
                                <?php

                                    if($row['tgl_pinjam'] <= $row['tgl_kembali']){
                                        echo ' bg-danger';
                                    }else{
                                        echo ' bg-success';
                                    };

                                ?>">
                                <?php
                                    if($row['tgl_pinjam'] <= $row['tgl_kembali']){
                                        echo "Belum Dikembalikan";
                                    }else{
                                        echo "Sudah Dikembalikan";
                                    };
                                ?>
                            </button> 
                        </td>
                        <td>
                            <!-- action -->
                            <a href="<?= BASE_URL ?>/buku/edit/<?= $row['id'] ?>" class="btn-sm btn btn-primary">Edit</a>
                            <a href="<?= BASE_URL ?>/buku/hapus/<?= $row['id'] ?>" class="btn-sm btn btn-danger" onclick="return confirm('Delete entry?');">Erase</a>
                        </td>
                    </tr>
                <?php $no++; endforeach; ?>
            </tbody>
        </table>
    </div>
</div>