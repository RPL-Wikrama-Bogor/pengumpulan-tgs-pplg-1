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
  <h1>Students Grade</h1>
  <form action="" method="post">
    <table>
      <tr>
        <td>Name : </td>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <td>DPK : </td>
        <td><input type="number" name="dpk"></td>
      </tr>
      <tr>
        <td>Math : </td>
        <td><input type="number" name="math"></td>
      </tr>
      <tr>
        <td>Religion : </td>
        <td><input type="number" name="religion"></td>
      </tr>
      <tr>
        <td><button type="submit" name="submit">Submit</button></td>
      </tr>
    </table>
  </form>
  <p><?php
$name;
$dpk;
$math;
$religion;
$average;
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $dpk = $_POST['dpk'];
  $math = $_POST['math'];
  $religion = $_POST['religion'];
  $average = ($dpk + $math + $religion) / 3;
  if($average > 100){
    echo "Name : ".$name."<br>"."Grade K";
  }
  elseif($average >= 80){
    echo "Name : ".$name."<br>"."Grade A";
  }
  elseif($average >= 75){
    echo "Name : ".$name."<br>"."Grade B";
  }
  elseif($average >= 65){
    echo "Name : ".$name."<br>"."Grade C";
  }
  elseif($average >= 45){
    echo "Name : ".$name."<br>"."Grade D";
  }
  elseif($average >= 0){
    echo "Name : ".$name."<br>"."Grade E";
  }
  else{
    echo "Name : ".$name."<br>"."Grade K";
  }
}
?></p>
</body>

</html>