<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="18_action.php">
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
=======
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
    background-color: grey;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
}

.form input[type='submit']:hover {
    background-color: green;
}
</style>
</head>
<body>
  <div class="base">
    <div class="form">
      <form method="post" action="">
        <?php
        for ($i = 1; $i <= 2; $i++) {
          echo "<h2>Data Siswa ke-$i</h2>";
          echo "<h3>Nilai MTK: </h3><input type='number' name='mtk[]' required max=100><br>";
          echo "<h3>Nilai INDO: </h3><input type='number' name='indo[]' required max=100><br>";
          echo "<h3>Nilai INGG: </h3><input type='number' name='ingg[]' required max=100><br>";
          echo "<h3>Nilai DPK: </h3><input type='number' name='dpk[]' required max=100><br>";
          echo "<h3>Nilai Agama: </h3><input type='number' name='agama[]' required max=100><br>";
          echo "<h3>Kehadiran (%): </h3><input type='number' name='kehadiran[]' required max=100><br><br>";
        }
        ?>
        <input type="submit" value="Cari Juara Kelas">
      </form>
<?php
      if ($_SERVER["REQUEST_METHOD"] == "POST"){
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
