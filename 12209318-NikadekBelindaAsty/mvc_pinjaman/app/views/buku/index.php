
<div class="container">
    <h3 class="mb-3 mt-4 fs-2">Daftar Pinjaman</h3>
    <br>
    <div class="d-flex justify-content-between align-items-center">
        <a href="<?= BASE_URL; ?>/buku/tambah" class="btn btn-primary ">Tambah Pinjaman</a>
        <form action="<?= BASE_URL; ?>/buku/cari" method="post" class="d-flex justify-content-end" role="search">
            <input class="form-control me-2" type="text" name="search" placeholder="Search" aria-label="Search" style="width: 200px;"  autocomplete="off">
            <button class="btn btn-outline-secondary" type="submit" id="btncari" style="width: 50px; margin-right: 10px;">Cari</button>
            <button class="btn btn-outline-danger" type="submit" id="btnreset" style="width: 65px;">Reset</button>
        </form>
    </div>    
    <br>
    <table class="table table-light table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>  
                <th scope="col">Nama Peminjam</th>   
                <th scope="col">Jenis barang</th>   
                <th scope="col">Nomor barang</th>   
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Kembali</th> 
                <th scope="col">Status</th>   
                <th scope="col">Action</th>    
            <tr> 
        </thead>
        <tbody> 
            <?php $no=1; ?>
            <?php foreach($data['buku'] as $row) :?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row['nama_peminjam'];?></td>
                <td><?= $row['jenis_barang'];?></td>
                <td><?= $row['no_barang'];?></td>
                <td><?= $row['tgl_pinjam'];?></td>
                <td><?= $row['tgl_kembali'];?></td>
                <!-- <td>
                <?php
                    $tgl_sekarang = date('Y-m-d H:i:s');
                    if ($tgl_sekarang > $row['tgl_kembali']){
                        echo '<span class="badge text-bg-success">Sudah Kembali</span>'; ?>
                    </td>
                    <td>
                    <a href="<?= BASE_URL ?>/buku/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                    </td>
                    <?php  
                    }
                    elseif ($row['tgl_kembali'] == 'sudah kembali') {
                        echo '<span class="badge text-bg-success">sudah kembali</span>'; 
                    ?>              
                    </td> 
                    <td>
                    <a href="<?= BASE_URL ?>/buku/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                    </td>
                    <?php
                    }else {
                        echo '<span class="badge text-bg-danger">belum kembali</span>'; ?>
                    <td>
                    <a href="<?= BASE_URL ?>/buku/edit/<?= $row['id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="<?= BASE_URL ?>/buku/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                    </td>
                <?php } ?>
                </td> -->

                <td>
                <?php
                    $tgl_sekarang = date('Y-m-d H:i:s');
                    if ($tgl_sekarang > $row['tgl_kembali']){
                        echo '<span class="badge text-bg-success">Sudah Kembali</span>'; ?>
                    </td>
                    <td>
                    <a href="<?= BASE_URL ?>/buku/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                    </td>
                    <?php  
                    }else {
                        echo '<span class="badge text-bg-danger">Belum Kembali</span>'; ?>
                    <td>
                    <a href="<?= BASE_URL ?>/buku/edit/<?= $row['id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="<?= BASE_URL ?>/buku/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                    </td>
                <?php } ?>
                </td>
            </tr>  
            <?php $no++; endforeach; ?>
        </tbody>
    </table> 
</div>                  