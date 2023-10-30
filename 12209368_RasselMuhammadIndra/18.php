<!DOCTYPE html>
<<<<<<< HEAD
<html>
<head>
    <title>Pencarian Juara Kelas</title>
</head>
<body>
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
</body>
</html>
``
=======
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
            min-height: 100vh;
            background: linear-gradient(45deg, gray, white);
        }

        h2 {
            width: 100%;
            height: 60px;
            justify-content: center;
            padding: 20px;
            display: flex;
            position: relative;
            clear: left;
        }

        .base {
            width: 100%;
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            position: relative;
        }

        .form {
            width: 65%;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .form h3 {
            margin-top: 10px;
        }

        .form input[type='text'],
        .form input[type='number'] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        .form input[type='submit'] {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .form input[type='submit']:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="base">
        <div class="form">
            <form method="post" action="">
                <?php
                for ($i = 1; $i <= 15; $i++) {
                    echo "<h2>Data Siswa ke-$i</h2>";
                    echo "<h3>Nilai MTK: </h3><input type='number' name='mtk[]' required max='100'<br>";
                    echo "<h3>Nilai INDO: </h3><input type='number' name='indo[]' required max='100'><br>";
                    echo "<h3>Nilai INGG: </h3><input type='number' name='ingg[]' required max='100'><br>";
                    echo "<h3>Nilai DPK: </h3><input type='number' name='dpk[]' required max='100'><br>";
                    echo "<h3>Nilai Agama: </h3><input type='number' name='agama[]' required max='100'><br>";
                    echo "<h3>Kehadiran (%): </h3><input type='number' name='kehadiran[]' required max='100'><br><br>";
                }
                ?>
                <input type="submit" value="Cari Juara Kelas">
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $mtk = $_POST['mtk'];
                $indo = $_POST['indo'];
                $ingg = $_POST['ingg'];
                $dpk = $_POST['dpk'];
                $agama = $_POST['agama'];
                $kehadiran = $_POST['kehadiran'];

                $juara = [];
                for ($i = 0; $i < count($mtk); $i++) {
                    $totalNilai = $mtk[$i] + $indo[$i] + $ingg[$i] + $dpk[$i] + $agama[$i];
                    $rataRata = $totalNilai / 5;

                    if ($rataRata >= 95 && $kehadiran[$i] >= 100) {
                        $juara[] = "Siswa ke-" . ($i + 1);
                    }
                }

                if (count($juara) > 0) {
                    echo "<h2>Siswa yang menjadi juara kelas: </h2><br>";
                    foreach ($juara as $siswa) {
                        echo "<h2>$siswa</h2><br>";
                    }
                } else {
                    echo "Tidak ada siswa yang memenuhi syarat juara kelas.";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
