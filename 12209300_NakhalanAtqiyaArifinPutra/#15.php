<?php

$i= [
    [, , ],
    [, , ],
    [, , ],

];
$terbesar;
$terkecil;
$rata_rata;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
</head>
<body>
<h2>Nilai</h2>

<form method="post" action="#">
    <table>
        <tr>
            <td>Masukan Data</td>
            <td>  :  </td>
            <td><input type="number" name="dta"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="kirim"></td>
        </tr>
    </table>
</form>


<?php
        if (isset($_POST['submit'])) {
            $i = $_POST ['dta'];
          
            echo $i;


        }
        ?>
</body>
</html>