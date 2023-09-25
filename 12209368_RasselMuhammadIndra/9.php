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
  <h1>Fahrenheit to Celcius</h1>
  <form action="" method="post">
    <table>
      <tr>
        <td>Fahrenheit : </td>
        <td><input type="number" name="fahrenheit"></td>
      </tr>
      <tr>
        <td><button type="submit" name="submit">Submit</button></td>
      </tr>
    </table>
  </form>
  <p><?php
$fahrenheit;
$celcius;
if (isset($_POST['submit'])) {
  $fahrenheit = $_POST['fahrenheit'];
  $celcius = ($fahrenheit - 32) * 5 / 9;
  if($celcius > 300){
    echo "The temperature is hot";
  }
  else if($celcius < 250){
    echo "The temperature is cold";
  }
  else{
    echo "The temperature is normal";
  }
}
?></p>
</body>

</html>