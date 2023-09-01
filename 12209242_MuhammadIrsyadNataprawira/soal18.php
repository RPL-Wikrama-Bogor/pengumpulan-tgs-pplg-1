<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="">
        <?php
        for ($i = 1; $i <= 15; $i++) {
            echo "<h3>Data Siswa ke-$i</h3>";
            echo "Nilai MTK: <input type='number' name='mtk[]' required><br>";
            echo "Nilai INDO: <input type='number' name='indo[]' required><br>";
            echo "Nilai INGG: <input type='number' name='ingg[]' required><br>";
            echo "Nilai DPK: <input type='number' name='dpk[]' required><br>";
            echo "Nilai Agama: <input type='number' name='agama[]' required><br>";
            echo "Kehadiran (%): <input type='number' name='kehadiran[]' required><br><br>";
        }
        ?>
        <input type="submit" value="Cari Juara Kelas">
    </form>
</body>
</html>

        <?php
          if ($_SERVER["REQUEST_METHOD"] === "POST") {
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
                echo "Siswa yang menjadi juara kelas:<br>";
                foreach ($juara as $siswa) {
                    echo "$siswa<br>";
                }
            } else {
                echo "Tidak ada siswa yang memenuhi syarat juara kelas.";
            }
        }
            ?>