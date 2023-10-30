<?php
<<<<<<< HEAD

$hh=0;
$mm=0;
$ss=0;

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
        <td>Input Jam</td>
        <td><input type="number" name="jam"></td>
      </tr>
      <tr>
        <td>Input Menit</td>
        <td><input type="number" name="menit"></td>
      </tr>
      <tr>
        <td>Input Detik</td>
        <td><input type="number" name="detik"></td>
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
  $hh = $_POST['jam'];
  $mm = $_POST['menit'];
  $ss = $_POST['detik'];

  $ss = $ss+1;

  if($ss>=60){
    $mm = $mm+1;
    $ss = 00;
    if($mm>=60){
      $hh = $hh+1;
      $mm = 00;
      $ss = 00;
      if($hh>=24){
        $hh = 00;
        $mm = 00;
        $ss = 00;
      }
    }
  }
  echo "$hh : $mm : $ss";
}

?>
</html>
=======
$hh;
$mm;
$ss;


?>



<!DOCTYPE html>
<html>
<head>
    <title>Menambah 1 Detik pada Waktu</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="card">
    <h2>Menambah 1 Detik pada Waktu</h2>

    <form method="post">
        <table>
        
        <label for="jam">Jam:</label>
        <input type="number" name="jam" required>
        <label for="menit">Menit:</label>
        <input type="number" name="menit" required>
        <label for="detik">Detik:</label>
        <input type="number" name="detik" required>
        <input type="submit" name="submit" value="Tambah 1 Detik">
        </tr>
     </table>
    </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $hh = $_POST['jam'];
        $mm = $_POST['menit'];
        $ss = $_POST['detik'];

        $ss += 1;
        if ($ss >= 60) {
            $mm += 1;
            $ss = $ss - 60;
            if ($mm >= 60) {
                $ss += 1;
                $mm = $mm - 60;
                if ($hh >= 24) {
                    $hh = $hh - 24;
                }
            }
        }

        echo "<style> Waktu setelah ditambah 1 detik:</style> " . sprintf("%02d:%02d:%02d", $hh, $mm, $ss);
    }
    ?>
</body>
</html>
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
