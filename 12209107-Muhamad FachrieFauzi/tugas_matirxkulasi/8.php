<?php
$bilangan;
$bilangan_satuan;
$bilangan_puluhan;
$bilangan_ratusan;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan</title>
</head>
<body>
<h1>Hitung Bilangan</h1>
    <form action="" method="post">
        <table>
        <tr>
                <td>Bilangan</td>
                <td>:</td>
                <td><input type="number" name="bg"></td>
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
    $bilangan = $_POST['bg'];

    $bilangan_satuan= $bilangan % 10;
    $bilangan_puluhan= ($bilangan / 10) % 10;
    $bilangan_ratusan= $bilangan / 100;

    echo "Bilangan satuan ". $bilangan_satuan. "<br>";
    echo "Bilangan Puluhan ". $bilangan_puluhan . "<br>";
    echo "Bilangan Satusan ". $bilangan_ratusan ; 

 }
?>
</body>
</html>