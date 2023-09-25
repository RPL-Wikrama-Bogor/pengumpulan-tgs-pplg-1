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
    <title>Menentukan Satuan Angka</title>
</head>
<body>
    <center>
    <h1>Menghitung Satuan <label>Angka</label></h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Bilangan</td>
                <td>:</td>
                <td><input type="number" name="angka"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Tentukan"></td>
            </tr>
        </table>
    </form>
    
    <?php
    
    if (isset($_POST['submit'])) {
        $bilangan = $_POST['angka'];

        $satuan = $bilangan % 10;
        $puluhan = ($bilangan / 10) % 10;
        $ratusan = ($bilangan / 100) % 100;

        echo "Satuan = $satuan <br>
              Puluhan = $puluhan <br>
              Ratusan = $ratusan";
    }
    
    ?>
    </center>
</body>