<?php

$hh;
$mm;
$ss;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <table>
            <tr>
                <td>Input Jam</td>
                <td>:
                <td><input type="number" name="mm"></td>
                </td>
            </tr>
            <tr>
                <td>Input Menit</td>
                <td>:
                <td><input type="number" name="hh"></td>
                </td>
            </tr>
            <tr>
                <td>Input Detik</td>
                <td>:
                <td><input type="number" name="ss"></td>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="hitung" name="submit"></td>
            </tr>
        </table>
    </form>
</body>

<?php 

if (isset($_POST['submit'])){
    $mm = $_POST['mm'];
    $hh = $_POST['hh'];
    $ss = $_POST['hh'];

    $ss = $ss + 1;

    if($ss >= 60){
        $mm = $mm + 1;
        $ss = 00;

        if($mm >= 60){
            $hh = $hh + 1;
            $mm = 00;
            $ss = 00;

            if($hh >= 24){
                $hh= 00;
                $mm = 00;
                $ss = 00;
            }
        }
    } else {
        $ss = 0;
    }
}

?>

</html>