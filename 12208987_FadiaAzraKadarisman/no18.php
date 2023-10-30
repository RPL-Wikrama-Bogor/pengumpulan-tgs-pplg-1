<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juara Kelas</title>
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background: hsla(228, 17%, 53%, 1);
    background: linear-gradient(90deg, hsla(228, 17%, 53%, 1) 0%, hsla(229, 28%, 88%, 1) 100%);
    background: -moz-linear-gradient(90deg, hsla(228, 17%, 53%, 1) 0%, hsla(229, 28%, 88%, 1) 100%);
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 600px;
    margin: 0 auto;
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h3 {
    margin-top: 20px;
}

input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    display: block;
    width: 500px;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin: 0 auto;
}

input[type="submit"]:hover {
    background-color: #0056b3;
    width: 500px;
}

@media screen and (max-width: 768px) {
    .container {
        padding: 10px;
    }

    input[type="number"] {
        padding: 8px;
    }
}
</style>
</head>
<body>
    <div class="container">
    <form method="post" action="">
        <?php
        for ($i = 1; $i <= 15; $i++) {
            echo "<h3>Data Siswa ke-$i</h3>";
            echo "Nilai MTK: <input type='number' name='nilaiMTK[]' required><br>";
            echo "Nilai INDO: <input type='number' name='nilaiIndo[]' required><br>";
            echo "Nilai INGG: <input type='number' name='nilaiIngg[]' required><br>";
            echo "Nilai DPK: <input type='number' name='nilaiDpk[]' required><br>";
            echo "Nilai Agama: <input type='number' name='nilaiAgama[]' required><br>";
            echo "Kehadiran (%): <input type='number' name='kehadiran[]' required><br><br>";
        }
        ?>
        <input type="submit" value="Cari Juara Kelas">
    </form>
    </div>
</body>
</html>

        <?php
          if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nilaiMTK = $_POST['nilaiMTK'];
            $nilaiIndo = $_POST['nilaiIndo'];
            $nilaiIngg = $_POST['nilaiIngg'];
            $nilaiDpk = $_POST['nilaiDpk'];
            $nilaiAgama = $_POST['nilaiAgama'];
            $kehadiran = $_POST['kehadiran'];
        
            $juara = [];
            for ($i = 0; $i < count($nilaiMTK); $i++) {
                $totalNilai = $nilaiMTK[$i] + $nilaiIndo[$i] + $nilaiIngg[$i] + $nilaiDpk[$i] + $nilaiAgama[$i];
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