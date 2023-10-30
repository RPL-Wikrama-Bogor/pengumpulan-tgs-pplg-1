<?php

$bilangan;
$terbesar;
$terkecil;
$rata;
$total;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Bulat</title>
</head>

<body>
    <h1>Bilangan Bulat</h1>
    <form action="" method="post">
        <table>
            <?php
            $jumlah_bilangan = 20;
            for ($i = 1; $i <= $jumlah_bilangan; $i++) {
                echo "<tr>
                <td>Input Bilangan $i</td>
                <td>:</td>
                <td><input type='number' name='bilangan[]' required></td>
                </tr>";
            }
            ?>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>
</body>

<?php

if (isset($_POST["submit"])) {
    $bilangan = $_POST["bilangan"];

    $terbesar = max($bilangan);
    $terkecil = min($bilangan);
    $total = array_sum($bilangan);
    $rata = $total / $jumlah_bilangan;
    

    echo "Nilai Terbesar: " . $terbesar;
    echo "<br>";
    echo "Nilai Terkecil: " . $terkecil;
    echo "<br>";
    echo "Nilai Rata Rata: " . $rata;


}

?>