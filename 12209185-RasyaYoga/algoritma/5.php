<?php 

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
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengkonversi jam-menit-detik</title>
</head>
<body>
    <h1>Mengkonversi jam-menit-detik</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Input Jam</td>
                <td>:</td>
                <td><input type="number" name="jam"></td>
            </tr>
            <tr>
                <td>Input Menit</td>
                <td>:</td>
                <td><input type="number" name="menit"></td>
            </tr>
            <tr>
                <td>Input Detik</td>
                <td>:</td>
                <td><input type="number" name="detik"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>
</body>

<?php 

if(isset($_POST["submit"])) {
    $jam = $_POST["jam"];
    $menit = $_POST["menit"];
    $detik = $_POST["detik"];

    $totalDetik = ($jam * 3600) + ($menit * 60) + $detik;
    echo "Total detik = $totalDetik";
}

?>
    
</body>
</html>