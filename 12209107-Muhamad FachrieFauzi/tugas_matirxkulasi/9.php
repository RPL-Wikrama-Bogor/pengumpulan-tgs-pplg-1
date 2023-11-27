<?php

$suhu_fahrenheit=0;
$suhu_celcius=0;

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
        <td>Input Suhu dalam Fahrenheit</td>
        <td><input type="number" name="fahrenheit"></td>
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
  $suhu_fahrenheit = $_POST['fahrenheit'];
  $suhu_celcius=$suhu_fahrenheit/33.8;

  if($suhu_celcius>300){
    echo "Suhu panas";
  }elseif($suhu_celcius<250){
    echo "Suhu dingin";
  }else{
    echo "Suhu Normal";
  }
}

?>
</html>