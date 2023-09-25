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
    <title>Mengkonversi Jam ke Detik</title>
</head>
<body>
    <h1>Konversi Jam Ke detik</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>jam</td>
                <td>:</td>
                <td><input type="number" name="jm"></td>
            </tr>
            <tr>
                <td>Menit</td>
                <td>:</td>
                <td><input type="number" name="mt"></td>              
            </tr>
            <tr>
                <td>detik</td>
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

    if(isset($_POST['submit'])){
        $jam = $_POST['jm'];
        $menit = $_POST['mt'];
        $detik = $_POST['dtk'];

        $td=$jam * 3600 + $menit * 60 + $detik;

        echo "Konverasi Jam Ke Detik =".$td."detik";
    }

    ?>
</body>
</html>