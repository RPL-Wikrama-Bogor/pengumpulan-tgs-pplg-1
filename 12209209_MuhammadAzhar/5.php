<?php

    $jam;
    $menit;
    $detik;
    $total;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mencari detik</title>
</head>
<body>
    <h1>mencari total detik</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Jam</td>
                <td>:</td>
                <td><input type="number" name="Jam" placeholder="Input jam"></td>
            </tr>
            <tr>
                <td>Menit</td>
                <td>:</td>
                <td><input type="number" name="Menit" placeholder="Input menit"></td>
            </tr>
            <tr>
                <td>Detik</td>
                <td>:</td>
                <td><input type="number" name="Detik" placeholder="Input detik"></td>
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
    $jam = $_POST['Jam'];
    $menit = $_POST['Menit'];
    $detik = $_POST['Detik'];
    
    $jam = $jam *3600;
    $menit = $menit *60;
    $total = $jam + $menit + $detik;
    echo "Total detik=". $total;
    

}

?>