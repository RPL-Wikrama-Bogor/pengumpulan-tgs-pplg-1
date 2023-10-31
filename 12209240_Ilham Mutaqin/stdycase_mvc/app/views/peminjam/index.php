<div class="container">
    <h3 class="mb-3">Daftar Peminjam</h3>
    <br>
        <a href="<?= BASE_URL; ?>/peminjam/tambah" class="btn btn-primary">Tambah Peminjam</a>
    <br>
    <?php
    // Inisialisasi variabel pencarian
    $nama_peminjam = "";
    $jenis_barang = "";

    // Memeriksa apakah form pencarian telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama_peminjam = $_POST["nama_peminjam"];
        $jenis_barang = $_POST["jenis_barang"];
        
        // Membuat query berdasarkan kriteria pencarian
        $query = "SELECT * FROM tb_peminjaman1 WHERE 1=1";
        
        if (!empty($nama_peminjam)) {
            $query .= " AND nama_peminjam LIKE '%$nama_peminjam%'";
        }
        
        if (!empty($jenis_barang)) {
            $query .= " AND jenis_barang = '$jenis_barang'";
        }
        
        // Menjalankan query
        $result = mysqli_query($koneksi, $query);
        
        // Menampilkan hasil pencarian
        while ($row = mysqli_fetch_assoc($result)) {
            // Tampilkan data sesuai kebutuhan Anda
            echo "Nama Peminjam: " . $row["nama_peminjam"] . "<br>";
            echo "Jenis Barang: " . $row["jenis_barang"] . "<br>";
            // ... tampilkan kolom lainnya ...
            echo "<br>";
        }
        
        // Bebaskan hasil query
        mysqli_free_result($result);
        
        // Tutup koneksi
        mysqli_close($koneksi);
    }
    ?>

    <!-- Form pencarian -->
    <form method="post" action="">
        <input type="text" name="nama_peminjam" value="<?php echo $nama_peminjam; ?>">
        <input type="text" name="jenis_barang" value="<?php echo $jenis_barang; ?>">
        <button type="submit">Cari</button>
        <button type="reset">Reset</button>
    </form>
    <br>
    <table class="table table-success table-striped table-bordered">
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
            <?php foreach ($data['peminjam'] as $row) :?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row['nama_peminjam']; ?></td>
                <td><?= $row['jenis_barang']; ?></td>
                <td><?= $row['no_barang']; ?></td>
                <td><?= $row['tgl_pinjam']; ?></td>
                <td><?= $row['tgl_kembali']; ?></td>
                <td>
                <?php
                    // Tanggal peminjaman dari database atau input form
                    $tanggal_peminjaman = "tgl_pinjam"; // Ganti dengan tanggal peminjaman yang sesuai
                    $tanggal_kembali = "tgl_kembali";    // Ganti dengan tanggal kembali yang sesuai

                    // Tanggal hari ini
                    $tgl_hari_ini = date("Y-m-d");

                    // Menghitung status
                    if ($tgl_hari_ini > $tanggal_kembali) {
                        $status = "Sudah Kembali";
                        $badge_color = "success"; // Warna hijau untuk sudah kembali
                    } else {
                        $status = "Belum Kembali";
                        $badge_color = "danger";  // Warna merah untuk belum kembali
                    }

                    // Menampilkan badge dengan warna sesuai status
                    echo '<span class="badge badge-' . $badge_color . '">' . $status . '</span>';
                ?>

                </td>
                <td>
                    <a href="<?= BASE_URL ?>/peminjam/edit/<?= $row['id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="<?= BASE_URL ?>/peminjam/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus Data?');">Hapus</a>
                </td>
            </tr>
            <?php $no++; endforeach; ?>
        </tbody>
    </table>
</div>