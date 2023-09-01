<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="style.css">
=======
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        form {
            border: 1px solid #ccc;
            padding: 1rem;
            border-radius: 8px;
        }

        label {
            display: inline-block;
            width: 150px;
            font-weight: bold;
        }

        input[type="number"] {
            width: 60px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #333;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        .result {
            margin-top: 1rem;
            font-weight: bold;
        }
    </style>
>>>>>>> 9620018e587dad1ea1337b29fca1e4fb285122da
</head>
<body>
<<<<<<< HEAD
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
=======
    <header>
        <h1>Mencari Juara Kelas</h1>
    </header>
    <div class="container">
        <form method="post" action="">
            <?php
            for ($i = 1; $i <= 3; $i++) {
                echo "<h3>Data Siswa ke-$i</h3>";
                echo "<label>Nama siswa:</label> <input type='text' name='nama[]' required><br>";
                echo "<label>Nilai MTK:</label> <input type='number' name='mtk[]' required><br>";
                echo "<label>Nilai INDO:</label> <input type='number' name='indo[]' required><br>";
                echo "<label>Nilai INGG:</label> <input type='number' name='ingg[]' required><br>";
                echo "<label>Nilai DPK:</label> <input type='number' name='dpk[]' required><br>";
                echo "<label>Nilai Agama:</label> <input type='number' name='agama[]' required><br>";
                echo "<label>Kehadiran (%):</label> <input type='number' name='kehadiran[]' required><br><br>";
            }
            ?>
            <input type="submit" value="Cari Juara!">
        </form>
        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $nama = $_POST["nama"];
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
                        $juara[] = "Siswa ke-" . ($i + 1) . " Dengan nama: " . $nama[$i];
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
        </div>
    </div>
</body>

</html>
>>>>>>> 9620018e587dad1ea1337b29fca1e4fb285122da
