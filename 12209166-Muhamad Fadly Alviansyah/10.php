<?php

$nilai_pabp;
$nilai_mtk;
$nilai_dpk;
$rata_rata;

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
    <table>
      <tr>
        <td>Input nilai PABP</td>
        <td><input type="number" name="pabp"></td>
      </tr>
      <tr>
        <td>Input nilai MTK</td>
        <td><input type="number" name="mtk"></td>
      </tr>
      <tr>
        <td>Input nilai DPK</td>
        <td><input type="number" name="dpk"></td>
      </tr>
      <tr>
        <td></td>
        <td><button type="submit" name="submit">Hitung</button></td>
      </tr>
    </table>
  </form>
</body>
<?php

if(isset($_POST['submit'])){
  $nilai_pabp = $_POST['pabp'];
  $nilai_mtk = $_POST['mtk'];
  $nilai_dpk = $_POST['dpk'];

  $rata_rata = ($nilai_dpk + $nilai_mtk + $nilai_pabp)/3;

  if($rata_rata <=100 && $rata_rata>=80){
    echo "Grade A";
  }elseif($rata_rata <80 && $rata_rata >=75){
    echo "Grade B";
  }elseif($rata_rata <75 && $rata_rata >= 65){
    echo "Grade C";
  }elseif($rata_rata <65 && $rata_rata >=45){
    echo "Grade D";
  }elseif($rata_rata <45 && $rata_rata >= 0){
    echo "Grade E";
  }else{
    echo "Angka tidak memenuhi persyaratan";
  }
}

?>
</html>