<?php

$tiket;
$kategori_tiket;
$vip;
$eksekutif;
$ekonomi;
$tiket_vip = 100000;
$tiket_eksekutif = 50000;
$tiket_ekonomi = 30000;
$keuntungan_vip;
$keuntungan_eksekutif;
$keuntungan_ekonomi;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari Nilai</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
    }

    h1 {
        text-align: center;
        margin-top: 150px;
    }

    form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
    }

    .hasil {
        margin-top: 10px;
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
    }

    table {
        width: 100%;
    }

    table td {
        padding: 5px;
    }

    input[type="number"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

<body>
    <h1>Mencari Nilai</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Input Vip</td>
                <td>:</td>
                <td><input type="number" name="vip" required></td>
            </tr>
            <tr>
                <td>Input Eksekutif</td>
                <td>:</td>
                <td><input type="number" name="eksekutif" required></td>
            </tr>
            <tr>
                <td>Input Ekonomi</td>
                <td>:</td>
                <td><input type="number" name="ekonomi" required></td>
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

if (isset($_POST["submit"])) {
    $vip = $_POST["vip"];
    $eksekutif = $_POST["eksekutif"];
    $ekonomi = $_POST["ekonomi"];

    if ($kategori_tiket = $vip) {
        if ($vip >= 35) {
            $keuntungan_vip = ($vip * $tiket_vip * 25) / 100;
        } elseif ($vip < 35 && $vip >= 20) {
            $keuntungan_vip = ($vip * $tiket_vip * 15) / 100;
        } elseif ($vip < 20) {
            $keuntungan_vip = ($vip * $tiket_vip * 5) / 100;
        } else {
            echo "Kondisi tidak terpenuhi";
        }
    }
    if ($kategori_tiket = $eksekutif) {
        if ($eksekutif >= 40) {
            $keuntungan_eksekutif = ($eksekutif * $tiket_eksekutif * 25) / 100;
        } elseif ($eksekutif >= 20 && $eksekutif < 40) {
            $keuntungan_eksekutif = ($eksekutif * $tiket_eksekutif * 15) / 100;
        } elseif ($eksekutif < 20) {
            $keuntungan_eksekutif = ($eksekutif * $tiket_eksekutif * 2) / 100;
        } else {
            echo "Kondisi tidak terpenuhi";
        }
    }
    if ($kategori_tiket = $ekonomi) {
        $keuntungan_ekonomi = ($ekonomi * $tiket_ekonomi * 25) / 100;
    }

    $keuntungan_keseluruhan = $keuntungan_vip + $keuntungan_eksekutif + $keuntungan_ekonomi;
    $total_tiket = $vip + $eksekutif + $ekonomi;

    echo "<br>";
    echo "<div class='hasil'>";
    echo "Keuntungan Vip: Rp." . $keuntungan_vip;
    echo "<br>";
    echo "Keuntungan Eksekutif: Rp." . $keuntungan_eksekutif;
    echo "<br>";
    echo "Keuntungan Ekonomi: Rp." . $keuntungan_ekonomi;
    echo "<br>";
    echo "Keuntungan Keseluruhan: Rp." . $keuntungan_keseluruhan;
    echo "<br>";
    echo "Total Tiket Vip: " . $vip;
    echo "<br>";
    echo "Total Tiket Eksekutif: " . $eksekutif;
    echo "<br>";
    echo "Total Tiket Ekonomi: " . $ekonomi;
    echo "</div>";

}

?>