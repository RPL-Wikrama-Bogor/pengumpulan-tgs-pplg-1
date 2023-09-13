<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung jumlah siswa</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #A2C579;
        }
        header h1{
            margin: 0 auto;
            text-align: center;
            color: #fff;
            text-shadow: black 5px 1px 12px;
        }
        .container {
            max-width: 350px;
            margin: 0 auto;
            padding: 2rem;
        }

        form {
            border: 5px solid #016A70;
            background-color: #FFFFDD;
            padding: 1rem;
            border-radius: 8px;
        }

        label {
            display: inline-block;
            width: 150px;
            font-weight: bold;
        }

        input[type="number"] {
            width: 120px;
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
            background-color: #016A70;
        }

        .result {
            margin-top: 1rem;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header>
        <h1>Penentuan Siswa Yang Juara</h1>
    </header>
    <div class="container">
        <form method="post" action="">
            <?php
            for ($i = 1; $i <= 15; $i++) {
                echo "<h3>Siswa ke-$i</h3>";
                echo "<label> Nama Siswa:</label> <input type='text' name='nama[]' required><br>";
                echo "<label> Matematika:</label> <input type='number' name='mtk[]' required><br>";
                echo "<label> Bahasa Indonesia:</label> <input type='number' name='indo[]' required><br>";
                echo "<label> Bahasa Inggris:</label> <input type='number' name='ingg[]' required><br>";
                echo "<label> DPK:</label> <input type='number' name='dpk[]' required><br>";
                echo "<label> Agama:</label> <input type='number' name='agama[]' required><br>";
                echo "<label> Kehadiran:</label> <input type='number' name='kehadiran[]' required><br><br>";
            }
            ?>
            <input type="submit" value="Submit">
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
                        $juara[] = "Siswa ke -" . ($i + 1) . " Dengan nama: " . $nama[$i];
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