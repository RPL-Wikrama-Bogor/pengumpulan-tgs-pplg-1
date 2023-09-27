<?php
<<<<<<< HEAD

=======
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
$bilangan=0;
$satuan=0;
$puluhan=0;
$ratusan=0;
<<<<<<< HEAD

=======
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<<<<<<< HEAD
  <h3>Program untuk Mencari Bilangan Satuan, Puluhan, dan Ratusan dari Bilangan Bulat</h3>
  <form action="" method="post">
    <table>
      <tr>
        <td>Bilangan Bulat</td>
        <td><input type="number" name="bilangan"></td>
      </tr>
      <tr>
        <td></td>
        <td><button type="submit" name="submit">Hitung</button></td>
      </tr>
    </table>
=======
  <h3>satuan puluhan satuan</h3>
  <form action="" method="post">
        <td>Bulat</td>
        <td><input type="number" name="bilangan"></td>
        <td><button type="submit" name="submit">Hitung</button></td>
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
  </form>
</body>
<?php

if(isset($_POST['submit'])){
  $bilangan = $_POST['bilangan'];

  $satuan = $bilangan%10;
  $puluhan = ($bilangan/10)%10;
  $ratusan = floor($bilangan/100);

  echo "$satuan Satuan, $puluhan Puluhan, $ratusan Ratusan";
}

?>
</html>