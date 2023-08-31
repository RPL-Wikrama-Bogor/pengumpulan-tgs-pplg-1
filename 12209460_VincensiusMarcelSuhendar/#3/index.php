<!--

$highest = 0; 

foreach ($data as $idx) { 
    if ($idx > $highest) $highest = $idx; 
} 
$highest++;
print($highest);

-->

<?php

  $b1;
  $b2;
  $b3;

?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Be+Vietnam+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Epilogue">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Flowchart #3</title>
  </head>
<body>
    <form action="" method="post">
      <table>
        <tr>
          <td>
          <input type="number" name="bil_1">
          </td>
        </tr>
        <tr>
          <td>
          <input type="number" name="bil_2">
          </td>
        </tr>
        <tr>
        <input type="number" name="bil_3">
        </tr>
        <tr>
        <input type="submit" value="Cari" name="submit">
        </tr>
        </table>
    </form>
</body>

<?php

if (isset($_POST['submit'])) {
  $b1 = $_POST['bil_1'];
  $b2 = $_POST['bil_2'];
  $b3 = $_POST['bil_3'];
}

if ($b1 > $b2 && $b1 > $b3){
  echo $b1;
}
elseif ($b2 > $b1 && $b2 > $b3){
  echo $b2;
}
elseif ($b3 > $b1 && $b3 > $b2){
  echo $b3;
}

else {
  echo "sama besar";
}

?>

</html>