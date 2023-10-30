<?php

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $kehadiran = $_POST["kehadiran"];
    $mtk = $_POST["mtk"];
    $indo = $_POST["indo"];
    $ingg = $_POST["ingg"];
    $dpk = $_POST["dpk"];
    $agama = $_POST["agama"];

    $rata = ($mtk + $indo + $ingg + $dpk + $agama) / 5; // Menghitung rata-rata nilai

    if ($rata >= 475 && $kehadiran >= 100) {
        $juara = "Juara Kelas";
    } else {
        $juara = "Bukan Juara";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indikator Suhu</title>
</head>

<body>
    <h1>Indikator Suhu</h1>
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
                <td><input type='text' name='kehadiran[]'></td>
            </tr>
            <tr>
                <td>Input Nilai MTK</td>
                <td>:</td>
                <td><input type='text' name='mtk[]'></td>
            </tr>
            <tr>
                <td>Input Nilai INDO</td>
                <td>:</td>
                <td><input type='text' name='indo[]'></td>
            </tr>
            <tr>
                <td>Input Nilai INGG</td>
                <td>:</td>
                <td><input type='text' name='ingg[]'></td>
            </tr>
            <tr>
                <td>Input Nilai DPK</td>
                <td>:</td>
                <td><input type='text' name='dpk[]'></td>
            </tr>
            <tr>
                <td>Input Nilai Agama</td>
                <td>:</td>
                <td><input type='text' name='agama'><br>
                ===================</td>
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

    <?php
    if (isset($_POST["submit"])) {
        echo "<h2>Hasil Perhitungan:</h2>";
        for ($i = 0; $i < $jumlah_siswa; $i++) {
            echo "<p>Siswa " . ($i + 1) . " ($nama[$i]): ";
            echo "Rata-rata nilai: $rata, Kehadiran: $kehadiran[$i], Status: $juara</p>";
        }
    }
    ?>

</body>

</html>
