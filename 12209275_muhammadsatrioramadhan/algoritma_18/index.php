<!DOCTYPE html>
<html>

<head>
    <title>Pencarian Juara Kelas</title>
</head>

<body>
    <h1>Pencarian Juara Kelas</h1>

    <form action="proses.php" method="post">
        <?php
        for ($i = 1; $i <= 15; $i++) {
            echo "<h3>Siswa $i</h3>";
            echo "<label for='nama_siswa_$i'>Nama Siswa:</label>";
            echo "<input type='text' name='nama_siswa_$i' id='nama_siswa_$i' required><br>";
            echo "<label for='nilai_mtk_$i'>Nilai Matematika:</label>";
            echo "<input type='number' name='nilai_mtk_$i' id='nilai_mtk_$i' required><br>";
            echo "<label for='nilai_indo_$i'>Nilai Bahasa Indonesia:</label>";
            echo "<input type='number' name='nilai_indo_$i' id='nilai_indo_$i' required><br>";
            echo "<label for='nilai_ingg_$i'>Nilai Bahasa Inggris:</label>";
            echo "<input type='number' name='nilai_ingg_$i' id='nilai_ingg_$i' required><br>";
            echo "<label for='nilai_dpk_$i'>Nilai Pendidikan Kewarganegaraan:</label>";
            echo "<input type='number' name='nilai_dpk_$i' id='nilai_dpk_$i' required><br>";
            echo "<label for='nilai_agama_$i'>Nilai Agama:</label>";
            echo "<input type='number' name='nilai_agama_$i' id='nilai_agama_$i' required><br>";
            echo "<label for='kehadiran_$i'>Kehadiran:</label>";
            echo "<input type='number' name='kehadiran_$i' id='kehadiran_$i' required><br>";
        }
        ?>
        <input type="submit" value="Cari Juara Kelas">
    </form>
</body>

</html>