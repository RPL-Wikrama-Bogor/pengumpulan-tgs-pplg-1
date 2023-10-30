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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nomor 7</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Total Gram : </td>
                    <td></td>
                    <td><input type="number" name="gram"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="submit" value="submit"></td>
                </tr>
            </table><br>
        </form>
<?php
if(isset($_POST['submit'])){
    $total_gram = $_POST["gram"];
    $harga_sebelum = 500 * $total_gram;
    $diskon = 5 + $harga_sebelum / 100;
    $harga_setelah = $harga_sebelum - $diskon;

    echo "Harga Sebelum : " . $harga_sebelum;
    echo "<br>";
    echo "Diskon : " . $diskon;
    echo "<br>"; 
    echo "Harga Setelah : " . $harga_setelah;
    echo "<br>";
    }
?>
</body>
</html>
