<?php 

$total_gram;
$harga_sebelum;
$diskon;
$harga_setelah;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Harga</title>
</head>
<body>
    <h1>Menghitung Uang yang Harus Dibayarkan</h1>
    <table>
        <form action="" method="post">
            <tr>
                <td>Total Gram</td>
                <td>:</td>
                <td><input type="number" name="total_gram"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Hitung" name="submit"></td>
            </tr>
        </form>
    </table>
</body>

<?php 

    if(isset($_POST['submit'])) {
        $total_gram = $_POST['total_gram'];

        $harga_sebelum = 500 * $total_gram;
        $diskon = 5 * $harga_sebelum / 100;
        $harga_setelah = $harga_sebelum - $diskon;

        echo "Harga Sebelum : $harga_sebelum <br>";
        echo "Diskon : $diskon <br>";
        echo "Harga Setelah : $harga_setelah <br>";
        
    }

?>

</html>