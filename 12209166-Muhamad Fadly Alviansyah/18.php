<<<<<<< HEAD
<?php

$kehadiran[] = 0;
$mtk[] = 0;
$indo[] = 0;
$ing[] = 0;
$dpk[] = 0;
$agama[] = 0;
$nama[] = "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
      <?php
        for ($i = 1; $i <= 15; $i++) {
          echo '<h4>Siswa ' . $i . '</h4>';
          echo 'Persentase Kehadiran: <input type="number" name="kehadiran_' . $i . '" required><br>';
          echo 'Nilai Matematika: <input type="number" name="mtk_' . $i . '" required><br>';
          echo 'Nilai Bahasa Indonesia: <input type="number" name="indo_' . $i . '" required><br>';
          echo 'Nilai Bahasa Inggris: <input type="number" name="ingg_' . $i . '" required><br>';
          echo 'Nilai DPK: <input type="number" name="dpk_' . $i . '" required><br>';
          echo 'Nilai Agama: <input type="number" name="agama_' . $i . '" required><br>';
          echo '<hr>';
        }
      ?>
      <button type="submit" name="submit">Submit</button>
  </form>
</body>
<?php

if(isset($_POST['submit'])){
  for ($i = 1; $i <= 15; $i++) {
    $kehadiran = $_POST['kehadiran_' . $i];
    $mtk = $_POST['mtk_' . $i];
    $indo = $_POST['indo_' . $i];
    $ingg = $_POST['ingg_' . $i];
    $dpk = $_POST['dpk_' . $i];
    $agama = $_POST['agama_' . $i];

    $total_nilai = $mtk + $indo + $ingg + $dpk + $agama;

    if ($total_nilai >= 475 && $kehadiran == 100) {
      echo 'Siswa ' . $i . ' Juara Kelas<br>';
    }
  }
}

?>
</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/18.css?v2">
</head>
<body>
  <div class="container">
    <div class="card">

      <h2>Muhamad Fadly Alviansyah</h2>

      <form action="" method="post">
        <?php for($i = 1; $i <= 3; $i++): ?>
        <label for="nama">Input nama siswa ke-<?= $i ?></label>
        <input type="text" id="nama" name="nama[]" required>
        <label for="mtk">Input nilai matematika siswa ke-<?= $i ?></label>
        <input type="number" id="mtk" name="mtk[]" required>
        <label for="indo">Input nilai bahasa indonesia siswa ke-<?= $i ?></label>
        <input type="number" id="indo" name="indo[]" required>
        <label for="ingg">Input nilai bahasa inggris siswa ke-<?= $i ?></label>
        <input type="number" id="ingg" name="ingg[]" required>
        <label for="dpk">Input nilai DPK siswa ke-<?= $i ?></label>
        <input type="number" id="dpk" name="dpk[]" required>
        <label for="agama">Input nilai agama siswa ke-<?= $i ?></label>
        <input type="number" id="agama" name="agama[]" required>
        <label for="kehadiran">Input persentase kehadiran siswa ke-<?= $i ?></label>
        <input type="number" id="kehadiran" name="kehadiran[]" required>
        <br><hr><br>
        <?php endfor; ?>
        <button type="submit" name="submit">Submit</button>
      </form>

      <?php
        if(isset($_POST['submit'])){
          $mtk = $_POST['mtk'];
          $indo = $_POST['indo'];
          $ingg = $_POST['ingg'];
          $dpk = $_POST['dpk'];
          $agama = $_POST['agama'];
          $kehadiran = $_POST['kehadiran'];
          $nama = $_POST['nama'];

          $juara = [];
          for($i = 0; $i < count($mtk); $i++) {
            $totalNilai = $mtk[$i] + $indo[$i] + $ingg[$i] + $dpk[$i] + $agama[$i];

            if ($totalNilai >= 475 && $kehadiran[$i] >= 100) {
              $juara[] = $i+1;
            }
          }

          if(count($juara) > 0) {
            echo "Siswa yang menjadi juara kelas:<br>";
            foreach ($juara as $siswa) {
              echo "Siswa ke-$siswa<br>";
            }
          }else{
            echo "Tidak ada siswa yang menjadi juara kelas";
          }
        }
      ?>

    </div>
  </div>
    
    
</body>
</html>
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
