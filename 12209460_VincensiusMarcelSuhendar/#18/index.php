<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Be+Vietnam+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Epilogue">
    <title>Pencarian Juara Kelas</title>
</head>
<body>
    <div class="box">
        <h2>Pencarian Juara Kelas</h2>
        <form action="" method="post">
            <?php
            $mataPelajaran = array("MTK", "INDO", "INGG", "DPK", "Agama");
            $siswaCount = 15;
            
            for ($i = 1; $i <= $siswaCount; $i++) {
                echo "<h3>Siswa ke-$i</h3>";
                echo "Nama: <input type='text' name='nama[]' required><br>";
    
                foreach ($mataPelajaran as $mapel) {
                    echo "$mapel: <input type='number' name='nilai[$i][$mapel]' required><br>";
                }
    
                echo "Kehadiran (persentase): <input type='number' name='kehadiran[$i]' required><br>";
                echo "<br>";
            }
            ?>
            <input type="submit" name="submit" value="Cari Juara">
        </form>
    <?php
    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];
        $kehadiran = $_POST['kehadiran'];

        $totalSiswa = count($nilai);
        $juaraKelas = array();
        
        foreach ($nilai as $siswa => $mapelNilai) {
            $nilaiTotal = array_sum($mapelNilai);
            $nilaiRataRata = $nilaiTotal / count($mapelNilai);
            
            if ($nilaiTotal >= 475 && $kehadiran[$siswa] == 100) {
                $juaraKelas[$siswa] = $nilaiRataRata;
            }
        }

        if (empty($juaraKelas)) {
            echo "<h3>Tidak ada juara kelas yang memenuhi kriteria</h3>";
        } else {
            arsort($juaraKelas);
            $juara = key($juaraKelas);

            echo "<h3>Juara Kelas</h3>";
            echo "Nama: " . $_POST['nama'][$juara] . "<br>";
            echo "Nilai Rata-rata: " . $juaraKelas[$juara] . "<br>";
        }
    }
    ?>
    </div>

</body>
</html>
``
