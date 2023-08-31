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
  <h1>How many Hundreds, Dozens and Unit</h1>
  <form action="" method="post">
    <table>
      <tr>
        <td>Number : </td>
        <td><input type="number" name="number"></td>
      </tr>
      <tr>
        <td><button type="submit" name="submit">Submit</button></td>
      </tr>
    </table>
  </form>
  <p><?php
$number;
$units;
$dozens;
$hundreds;
if (isset($_POST['submit'])) {
  $number = $_POST['number'];
  $units = $number % 10;
  $dozens = ($number / 10) % 10;
  $hundreds = ($number / 100) % 100;
  echo "Hundreds : ".$hundreds."<br>";
  echo "Dozens   : ".$dozens."<br>";
  echo "Unit     : ".$units;
}
?></p>
</body>

</html>