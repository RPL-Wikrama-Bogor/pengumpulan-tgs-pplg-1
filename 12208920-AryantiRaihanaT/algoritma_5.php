<?php 

$j;
$m; 
$d;
$td;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Jam Menit Detik</title>
</head>
<body>
    <h1>Konversi Jam Menit Detik</h1>
    <table>
        <form action="" method="post">
            <tr>
                <td>Jam</td>
                <td>:</td>
                <td><input type="number" name="jam"></td>
            </tr>
            <tr>
                <td>Menit</td>
                <td>:</td>
                <td><input type="number" name="menit"></td>
            </tr>
            <tr>
                <td>Detik</td>
                <td>:</td>
                <td><input type="number" name="detik"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Konversi" name="submit"></td>
            </tr>
        </form>
    </table>
</body>

<?php 

    if(isset($_POST['submit'])){
        $j = $_POST['jam'];
        $m = $_POST['menit'];
        $d = $_POST['detik'];


        $td = ($j * 3600) + ($m * 60) + $d;

        echo "Total detik : $td";
    }

?>

</html>