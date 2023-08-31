<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grade Siswa</title>
</head>
<body>
  <form method="POST" action="#">
    <tr>
      <label for="NilaiPABP">Nilai PABP</label>
      <input type="text" name="pabp" id="pabp">
    </tr>
    <tr>
      <label for="NIlaiMTK">Nilai MTK</label>
      <input type="text" name="mtk" id="mtk">
    </tr>
    <tr>
      <label for="NilaiDPK">Nilai DPK</label>
      <input type="text" name="dpk" id="dpk">
    </tr>
    <input type="submit" value="Submit" name="submit">
  </form>

  <?php

  if (isset($_POST['submit'])) {
    $pabp = $_POST['pabp'];
    $mtk = $_POST['mtk'];
    $dpk = $_POST['dpk'];
    $rata;
    $rata = ($pabp + $mtk + $dpk) / 3;

    if($rata <= 100 && $rata >= 80){
      echo "<h1>Grade A</h1>";
    }
    elseif($rata <= 80 && $rata >= 75){
      echo "<h1>Grade B</h1>";
    }
    elseif($rata <= 75 && $rata >= 65){
      echo "<h1>Grade C</h1>";
    }
    elseif($rata <= 65 && $rata >= 45){
      echo "<h1>Grade D</h1>";
    }
    elseif($rata <= 45 && $rata >= 0){
      echo "<h1>Grade E</h1>";
    }
    else{
      echo "<h1>Angka tiadk memenuhi persyaratan</h1>";
    }
  }
  ?>
</body>
</html>