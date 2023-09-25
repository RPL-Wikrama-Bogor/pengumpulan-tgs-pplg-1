<<<<<<< HEAD:12209472-RatuZahra/10.php
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
    <title>Soal 10 </title>
</head>
<body>
    <h2>Menentukan Grade dari Nilai Akhir</h2>

    <form method="post" action="#">
        <table>
            <tr>
                <td>Nilai PABP</td>
                <td>  :  </td>
                <td><input type="number" name="pabp"></td>
            </tr>
            <tr>
                <td>Nilai MTK</td>
                <td>  :  </td>
                <td><input type="number" name="mtk"></td>
            </tr>
            <tr>
                <td>Nilai DPK</td>
                <td>  :  </td>
                <td><input type="number" name="dpk"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Hasil"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $pabp = $_POST["pabp"];
        $mtk = $_POST["mtk"];
        $dpk = $_POST["dpk"];

        $rata_rata = ($pabp + $mtk + $dpk) / 3;
        echo $rata_rata;
        echo "<br>";

        if ($rata_rata <= 100 && $rata_rata >=80) {
            echo "Grade = A";
            echo "<br>";
            echo "Dengan Nilai Rata Rata = $rata_rata";
        }
        elseif ($rata_rata <80 && $rata_rata >= 75) {
            echo "Grade = B";
            echo "<br>";
            echo "Dengan Nilai Rata-Rata = $rata_rata";
        }
        elseif ($rata_rata <75 && $rata_rata >= 65) {
            echo "Grade = C";
            echo "<br>";
            echo "Dengan Nilai Rata-Rata = $rata_rata";
        }
        elseif ($rata_rata <65 && $rata_rata >= 45) {
            echo "Grade = D";
            echo "<br>";
            echo "Dengan Nilai Rata-Rata = $rata_rata";
        }
        elseif ($rata_rata <45 && $rata_rata >= 0) {
            echo "Grade = E";
            echo "<br>";
            echo "Dengan Nilai Rata-Rata = $rata_rata";
        }
        else {
            echo "Angka tidak memenuhi persyaratan";
        }
    }
    ?>
    
=======
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
>>>>>>> 6c3ebe7cfdd59ac7f31c63444159ebefe282bd6b:12209003_FarshaDwiRyansyah/LKPD/10.php
</body>
</html>