<?php
    $satjam;
    $satmen;
    $jam;
    $menit;
    $detik;
    $total;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Waktu</title>
</head>
    <body>
    <h1>Konversi Waktu</h1>
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
                <td><input type="number" name="mnt"></td>
            </tr>
            <tr>
                <td>Detik</td>
                <td>:</td>
                <td><input type="number" name="dtk"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Cari" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
<?php
 if(isset($_POST['submit'])) {
    $satjam = $_POST['jm'];
    $satmen = $_POST['mnt'];
    $detik = $_POST['dtk'];

    $jam = $satjam * 3600;
    $menit = $satmen * 60;
    $total = $jam + $menit + $detik;

    echo $satjam. " jam " . $satmen . " menit " . $detik . " detik " . "tersebut jika dikonversi ke detik menjadi " . $total . " detik";
 }
?>
</html>