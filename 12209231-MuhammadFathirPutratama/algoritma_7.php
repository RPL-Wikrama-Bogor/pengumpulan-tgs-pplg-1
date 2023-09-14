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
    <title>Jual Beli Buah Jeruk</title>
</head>
    <body>
    <h1>Jual Beli Buah Jeruk</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Total Gram</td>
                <td>:</td>
                <td><input type="number" name="totgram"></td>
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
    $total_gram = $_POST['totgram'];

    $harga_sebelum = 500 * $total_gram;
    $diskon = 5 * $harga_sebelum / 100;
    $harga_setelah = $harga_sebelum - $diskon;

    echo "Harga Sebelum Diskon: " . $harga_sebelum ."<br>" .
     "Diskon: " . $diskon . "<br>" .
     "Harga Setelah Diskon: " . $harga_setelah . "<br>";
 }
?>
</html>