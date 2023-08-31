<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Open Sans", sans-serif;
    scroll-behavior: smooth;
  }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Time</h1>
  <form action="" method="post">
    <table>
      <tr>
        <td>Hour : </td>
        <td><input type="number" name="hh"></td>
      </tr>
      <tr>
        <td>Minute : </td>
        <td><input type="number" name="mm"></td>
      </tr>
      <tr>
        <td>Second : </td>
        <td><input type="number" name="ss"></td>
      </tr>
      <tr>
        <td><button type="submit" name="submit">Submit</button></td>
      </tr>
    </table>
  </form>
  <p><?php
$hh;
$mm;
$ss;
if (isset($_POST['submit'])) {
  $hh = $_POST['hh'];
  $mm = $_POST['mm'];
  $ss = $_POST['ss'];
  $ss = $ss + 1;
  if($ss >= 60){
    $mm = $mm + 1;
    $ss = 00;
  }
  else{
    $ss = $ss;
  }
  if($mm >= 60){
    $hh = $hh + 1;
    $mm = 00;
    $ss = 00;
  }
  else{
    $mm = $mm;
  }
  if($hh >= 24){
    $hh = 00;
    $mm = 00;
    $ss = 00;
  }
  else{
    $hh = $hh;
  }
  echo $hh.":".$mm.":".$ss;
}
?></p>
</body>

</html>