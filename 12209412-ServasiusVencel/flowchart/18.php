<!DOCTYPE html>
<html>
<head>
    <title>Pencarian Juara Kelas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card">

    <h1>Lkpd Algoritma 18</h1>
    <form method="post" action="">      
        <table>
            <label for=""><b>Nama  Siswa </b></label>
        <input type="text" name="nama" placeholder="nilai  Siswa " required>
        <br>

        <label for=""><b>Nilai  mtk  </b></label>
        <input type="number" name="mtk"  placeholder="Nilai Mtk" required>
        <br>
        <label for=""><b>Nilai  indo </b></label>
        <input type="number" name="indo"  placeholder="Nilai Indo" required>
        <br>
        <label for=""><b>Nilai  inggris </b></label>
        <input type="number" name="ingg"  placeholder="Nilai Inggris" required>
        <br>
        <label for=""><b>Nama  dpk </b></label>
        <input type="number" name="dpk"  placeholder="NIlai Dpk" required>
        <br>
        <label for=""><b>Nilai  agama </b></label>
        <input type="number" name="agama"  placeholder="Niali Pabp" required>
        <br>
        <label for=""><b>Kehadiran  </b></label>
        <input type="number" name="kehadiran"  placeholder="Kehadiaran (Dalam Persen)" required>
        <br>

        <button type="submit" name="submit" value="Cari Juara">Submit</button>
        </table>
    </form>
</div>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $mtk = intval($_POST['mtk']);
        $indo = intval($_POST['indo']);
        $ingg = intval($_POST['ingg']);
        $dpk = intval($_POST['dpk']);
        $agama = intval($_POST['agama']);
        $kehadiran = intval($_POST['kehadiran']);

        $total_nilai = $mtk + $indo + $ingg + $dpk + $agama;
        $nilai_rata_rata = $total_nilai / 5;

        if ($nilai_rata_rata >= 95 && $kehadiran == 100) {
            echo "<p>Selamat kepada $nama, Anda adalah juara kelas!</p>";
        } else {
            echo "<p>Maaf, $nama belum memenuhi syarat menjadi juara kelas.</p>";
        }
    }
    ?>
</body>
</html>
