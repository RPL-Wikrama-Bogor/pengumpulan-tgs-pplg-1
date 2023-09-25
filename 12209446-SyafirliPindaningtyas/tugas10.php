<?php
$pabp;
$mtk;
$dpk;
$rata_rata;


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grade Siswa</title>
</head>

<body>
  <h2>Menentukan grade rata-rata</h2>
  <form method="POST" action="">
    <table>
      <tr>
        <td>Nilai PABP</td>
        <td>=</td>
        <td><input type="text" name="pabp" id="pabp"></td>
      </tr>
      <tr>
        <td>Nilai MTK</td>
        <td>=</td>
        <td><input type="text" name="mtk" id="mtk"></td>
      </tr>
      <tr>
        <td>Nilai DPK</td>
        <td>=</td>
        <td><input type="text" name="dpk" id="dpk"></td>
      </tr>
      <td><input type="submit" value="Submit" name="submit"></td>
    </table>
  </form>

  <?php

  if (isset($_POST['submit'])) {
    $pabp = $_POST['pabp'];
    $mtk = $_POST['mtk'];
    $dpk = $_POST['dpk'];
    $rata_rata;
    $rata_rata = ($pabp + $mtk + $dpk) / 3;

    if ($rata_rata <= 100 && $rata_rata >= 80) {
      echo "<h1>Grade A</h1>";
    } elseif ($rata_rata <= 80 && $rata_rata >= 75) {
      echo "<h1>Grade B</h1>";
    } elseif ($rata_rata <= 75 && $rata_rata >= 65) {
      echo "<h1>Grade C</h1>";
    } elseif ($rata_rata <= 65 && $rata_rata >= 45) {
      echo "<h1>Grade D</h1>";
    } elseif ($rata_rata <= 45 && $rata_rata >= 0) {
      echo "<h1>Grade E</h1>";
    } else {
      echo "<h1>Nilai tidak memenuhi (F)</h1>";
    }
  }
  ?>
</body>

</html>