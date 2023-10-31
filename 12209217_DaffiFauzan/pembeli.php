<style>
    label{
        color: #4477CE;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timbangan Buah</title>
</head>
<body>
    <center>
    <h1>Menghitung Timbangan <label>Buah</label></h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Total Gram</td>
                <td>:</td>
                <td><input type="number" name="tl_gram"></td>
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
        $total_gram = $_POST['tl_gram'];

        $harga_sebelum = 500 * $total_gram;
        $diskon = 5 * $harga_sebelum / 100;
        $harga_setelah = $harga_sebelum - $diskon;

        echo "Harga Sebelum = $harga_sebelum <br>
              Diskon 5% = $diskon <br>
              Harga Setelah = $harga_setelah";
    }
    
    ?>
    </center>
</body>