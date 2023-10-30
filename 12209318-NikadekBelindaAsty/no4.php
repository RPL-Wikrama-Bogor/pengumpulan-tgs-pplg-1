<?php
$tunj;
$pjk;
$gaji_bersih;
$gaji_pokok;
$nama;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nomor 4</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama : </td>
                    <td></td>
                    <td><input type="string" name="nama"></td>
                </tr>
                <tr>
                    <td>gaji pokok : </td>
                    <td></td>
                    <td><input type="number" name="gaji"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="submit" value="submit"></td>
                </tr>
            </table><br>
        </form>
</body>
<?php
$nama = $_POST["nama"];
$gaji_pokok = $_POST["gaji"];
$tunj = (20 * $gaji_pokok) / 100; 
$pjk = (15 * ($gaji_pokok + $tunj)) / 100;
$gaji_bersih = $gaji_pokok + $tunj - $pjk;

echo "Nama : " . $nama;
echo "<br>";
echo "Tunjangan : " . $tunj;
echo "<br>"; 
echo "Pajak : " . $pjk;
echo "<br>";
echo "Gaji bersih : " . $gaji_bersih;


?>

</html>