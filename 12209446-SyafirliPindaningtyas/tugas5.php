<?php
$jam;
$menit;
$detik;
$total;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inputan Waktu</title>
</head>

<body>
  <h2>mengkonversi jam-menit-detik ke total detik</h2>
  <form method="POST" action="">
    <table>
      <tr>
        <td>Jam</td>
        <td>=</td>
        <td><input type="number" name="jam" id="jam"></td>
      </tr>
      <tr>
        <td>Menit</td>
        <td>=</td>
        <td><input type="number" name="menit" id="menit"></td>
      </tr>
      <tr>
        <td>Detik</td>
        <td>=</td>
        <td><input type="number" name="detik" id="detik"></td>
      </tr>
      <td><input type="submit" value="Submit" name="submit"></td>
    </table>
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $jam = $_POST['jam'];
    $menit = $_POST['menit'];
    $detik = $_POST['detik'];
    $jam = ($jam * 3600);
    $menit = ($menit * 60);
    $total = $jam + $menit + $detik;
    //output
    echo "Maka total detik adalah $total detik<br>";
  }
  ?>

</body>

</html>