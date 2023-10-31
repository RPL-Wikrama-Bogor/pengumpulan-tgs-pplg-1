<?php
$j;
$m;
$d;
$total_d;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Total Detik ke Jam-Menit-Detik</title>
</head>
<body>
    <h1>Total Detik ke Jam-Menit-Detik</h1>
    <form action="" method="post">   
    <table>
            <tr>
                <td>Input total detik</td>
                <td>:</td>
                <td><input type="number" name="dt"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>

</body>
</html>
<?php
 if(isset($_POST['submit'])){
    $total_d = $_POST['dt'];

    $j = floor($total_d / 3600);
    $m = floor(($total_d - ($j * 3600 )) / 60) ;
    $d = $total_d - ($j * 3600) - ($m * 60) ;
    echo $j. " jam ".  $m ." menit ". $d . " detik ";
 }