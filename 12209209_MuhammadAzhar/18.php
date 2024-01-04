
<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari juara kelas</title>
</head>

<body>
    <h1>Mencari juara kelas</h1>
    <form action="" method="post">
        <table>
            <?php
            $jumlah_siswa = 2;
            for ($i = 1; $i <= $jumlah_siswa; $i++) {
                echo "<tr>
                <td>Input Nama Siswa Ke $i</td>
                <td>:</td>
                <td><input type='text' name='nama[]'></td>
            </tr>
            <tr>
                <td>Input Kehadiran</td>
                <td>:</td>
                <td><input type='number' name='kehadiran[]'></td>
            </tr>
            <tr>
                <td>Input Nilai MTK</td>
                <td>:</td>
                <td><input type='number' name='mtk[]'></td>
            </tr>
            <tr>
                <td>Input Nilai INDO</td>
                <td>:</td>
                <td><input type='number' name='indo[]'></td>
            </tr>
            <tr>
                <td>Input Nilai Ing</td>
                <td>:</td>
                <td><input type='number' name='ing[]'></td>
            </tr>
            <tr>
                <td>Input Nilai DPK</td>
                <td>:</td>
                <td><input type='number' name='dpk[]'></td>
            </tr>
            <tr>
                <td>Input Nilai Agama</td>
                <td>:</td>
                <td><input type='number' name='agama[]'></td>
            </tr>
            <tr>
               <td> =================== <td>
            </tr>
                ";
            }

            ?>
            <br>

            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Hitung" name="submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php
if (isset($_POST["submit"])) {
    $jumlah_siswa = count($_POST["nama"]);

    for ($i = 0; $i < $jumlah_siswa; $i++) {
        $nama = $_POST["nama"][$i];
        $kehadiran = $_POST["kehadiran"][$i];
        $mtk = $_POST["mtk"][$i];
        $indo = $_POST["indo"][$i];
        $ing = $_POST["ing"][$i];
        $dpk = $_POST["dpk"][$i];
        $agama = $_POST["agama"][$i];
        
        $rata = ($mtk + $indo + $ing + $dpk + $agama) / 5;
        
        if ($rata >= 90 && $kehadiran >= 100) {
            $juara = "Juara Kelas";
            echo "<h2>Hasil Perhitungan untuk Siswa " . ($i + 1) . ":</h2>";
            echo "<p>Siswa $nama: ";
            echo "Rata-rata nilai: $rata, Kehadiran: $kehadiran, Status: $juara</p>";
        } else {
            $juara = "Bukan Juara";
            echo "<h2>Hasil Perhitungan untuk Siswa " . ($i + 1) . ":</h2>";
            echo "<p>Siswa $nama: ";
            echo "Rata-rata nilai: $rata, Kehadiran: $kehadiran, Status: $juara</p>";
        }
        
        }
    }
    ?>