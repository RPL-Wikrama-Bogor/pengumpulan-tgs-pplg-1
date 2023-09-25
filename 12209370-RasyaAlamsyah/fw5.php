<?php

$jam;
$menit;
$detik;
$td;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Jam ke menit</title>
</head>
<body>
<h1>Konversi jam ke detik</h1>
    <form action="" method="post">
        <table>
        <tr>
                <td>Jam</td>
                <td>:</td>
                <td><input type="number" name="jm"></td>
            </tr>
            <tr>
                <td>Menit</td>
                <td>:</td>
                <td><input type="number" name="mt"></td>
            </tr>
            <tr>
            <tr>
                <td>Detik</td>
                <td>:</td>
                <td><input type="number" name="dtk"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td> 
            </tr>
        </table>
    </form>
<?php
    if (isset($_POST['submit'])) {
        $jam = (int)$_POST['jm'];
        $menit = (int)$_POST['mt'];
        $detik = (int)$_POST['dtk'];
        
        $td = $jam * 3600 + $menit * 60 + $detik;

    echo "Konversi jam ke detik =". $td . " detik"; 
    }
?>


</body>
</html>