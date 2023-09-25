<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juara Kelas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FAACA8;
        }

        h2 {
            text-align: center;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        .form {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .form h3{
            text-align: center;
        }

        form{
            width: 50%;
            margin: 0 auto;
        }

        input[type="text"],
        input[type="number"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        
        .result {
            width: 80%;
            margin: 20px auto;
        }
        
        .result i {
            text-align: center;
        }

        .result h3 {
            text-align: center;
        }

        .hasil {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 37%;
            margin: 0 auto;
            color: red;
        }
        
        @media screen and (max-width: 768px) {
            .form {
                width: 100%;
            }

            form {
                padding: 10px;
            }
        }
        </style>
</head>
<body>
    <h2>PENCARIAN JUARA KELAS</h2>
    <?php
        echo "<div class='hasil'>";
        if (empty($juaraKelas)) {
            echo "<center><i>Tidak ada juara kelas yang memenuhi kriteria</i></center>";
        } else {
            arsort($juaraKelas);
            $juara = key($juaraKelas);
        
            echo "<center><h3>Juara Kelas</h3></center>";
            echo "<center>Nama: " . $_POST['nama'][$juara] . "<br></center>";
            echo "<center>Nilai Rata-rata: " . $juaraKelas[$juara] . "<br></center>";
        }
        echo "</div>";
        echo "<br>";
    ?>
    <div class="container">
        <form action="" method="post">
            <?php
            $mataPelajaran = array("MTK", "INDO", "INGG", "DPK", "Agama");
            $siswaCount = 15;
            
            for ($i = 1; $i <= $siswaCount; $i++) {
                echo "<div class='form'>";
                echo "<h3>Siswa ke-$i</h3>";
                echo "<center>Nama : <input type='text' name='nama[]' required><br></center>";
                
                foreach ($mataPelajaran as $mapel) {
                    echo "<center> $mapel: <input type='number' name='nilai[$i][$mapel]' required><br></center>";
                }
    
                echo "<center>Kehadiran(%) : <input type='number' name='kehadiran[$i]' required><br></center>";
                echo "<br>";
                echo "</div>";
                echo "<br>";
                echo "<br>";

            }
            ?>

            <input type="submit" name="submit" value="Cari Juara">
        </form>
    </div>

    <div class="result">
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

    }
    ?>
    </div>
</body>
</html>
``
