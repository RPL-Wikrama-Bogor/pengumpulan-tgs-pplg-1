<?php
<<<<<<< HEAD

=======
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
$j=0;
$menit=0;
$d=0;
$total=0;
$m=0;
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
  <h3>Program untuk Konversi Total Detik ke Jam-Menit-Detik</h3>
  <form action="" method="post">
    <table>
      <tr>
        <td>Total Detik</td>
        <td><input type="number" name="waktu"></td>
      </tr>
      <tr>
        <td></td>
        <td><button type="submit" name="submit">Hitung</button></td>
      </tr>
    </table>
=======
  <h3>detik->jam</h3>
  <form action="" method="post">
        <input type="number" name="waktu">

        <td><button type="submit" name="submit">Hitung</button></td>

>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
  </form>
</body>
<?php
          
          if(isset($_POST['submit'])){
            $total = $_POST['waktu'];
<<<<<<< HEAD

=======
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
            if($total>=60){
              $d = $total%60;
              $m = ($total-$d)/60;
              if($m>=60){
                $j = ($m - $m % 60)/60;
                $menit = $m % 60;
                echo "$j Jam $menit Menit $d Detik";
              }else{
                echo "$j Jam $m Menit $d Detik";
              }
            }else{
              echo "$j Jam $m Menit $total Detik";
            }
          }
<<<<<<< HEAD
          
=======
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
          ?>
</html>