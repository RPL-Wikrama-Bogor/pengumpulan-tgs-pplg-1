<?php

    $tunj;
    $pjk;
    $gb;
    $gp;
    $nama;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mencari gaji</title>
</head>
<body>
    <h1>mencari gaji</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="string" name="Nama"></td>
            </tr>
            <tr>
                <td>Gaji pokok</td>
                <td>:</td>
                <td><input type="number" name="Gaji_pk"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>


<?php

if (isset($_POST['submit'])) {
    $nama = $_POST['Nama'];
    $gpk = $_POST['Gaji_pk'];

    $tunj = (20 * $gpk)/100;
    $pjk = (15 *($gpk+$tunj))/100;
    $gb = $gpk + $tunj - $pjk;

    echo $nama;
    echo "<br>";
    echo "Besar tunjangan:". $tunj;
    echo "<br>";
    echo "Besar pajak:". $pjk;
    echo "<br>";
    echo "Gaji bersih:". $gb;

}

?>