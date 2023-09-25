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