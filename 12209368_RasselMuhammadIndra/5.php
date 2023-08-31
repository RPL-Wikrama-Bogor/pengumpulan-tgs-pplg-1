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
  <h1>From Hour, Minute, Second to Total Second</h1>
  <form action="" method="post">
    <table>
      <tr>
        <td>Hour : </td>
        <td><input type="number" name="hour"></td>
      </tr>
      <tr>
        <td>Minute : </td>
        <td><input type="number" name="minute"></td>
      </tr>
      <tr>
        <td>Second : </td>
        <td><input type="number" name="second"></td>
      </tr>
      <tr>
        <td><button type="submit" name="submit">Submit</button></td>
      </tr>
    </table>
  </form>
  <p><?php
$h;
$m;
$s;
$total;
if (isset($_POST['submit'])) {
  $h = $_POST['hour'];
  $m = $_POST['minute'];
  $s = $_POST['second'];
  $total = ($h * 3600) + ($m * 60) + $s;
  echo $total." Second";
}
?></p>
</body>

</html>