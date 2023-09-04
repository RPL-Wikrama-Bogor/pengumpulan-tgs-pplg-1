<?php

    $jam;
    $menit;
    $detik;
    $sd;
    $waktu;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mengubah ke bentuk waktu</title>
</head>
<body>
    <h1>mengubah detik</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Waktu</td>
                <td>:</td>
                <td><input type="int" name="Waktu" placeholder="Input waktu"></td>
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
    $waktu = $_POST['Waktu'];
    if ($waktu >= 3600){
        $jam = $waktu / 3600;
        $sd = $waktu % 3600;
        $menit = $sd / 60;
        $detik = $sd % 60;
    echo "JAM =". $jam;
    echo "<br>";
    echo "Menit =". $menit;
    echo "<br>";
    echo "Detik =". $detik;
    echo "<br>";
    }

    elseif ($waktu >= 60){
        $jam = 0;
        $menit = $waktu / 60;
        $detik = $waktu % 60;
    echo "JAM =". $jam;
    echo "<br>";
    echo "Menit =". $menit;
    echo "<br>";
    echo "Detik =". $detik;
    echo "<br>";
    }

    else {
        $jam = 0;
        $menit = 0;
        $detik = $waktu;
    echo "JAM =". $jam;
    echo "<br>";
    echo "Menit =". $menit;
    echo "<br>";
    echo "Detik =". $detik;
    echo "<br>";
    }
    

}

?>