<?php
    $waktu;
    $jam;
    $menit;
    $detik;
    $hasil;
    $hasil2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Waktu ++</title>
</head>
<body>
    <h1>Konversi Waktu ++</h1>
    <form action="" method="post">
    <table>
            <tr>
                <td>Waktu</td>
                <td>:</td>
                <td><input type="number" name="wkt"></td>
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
    if(isset($_POST['submit'])){
        $waktu = $_POST['wkt'];

        if($waktu > 3600){
            $hasil = $waktu % 3600;
            $jam = ($waktu - $hasil) / 3600;
        }
        
        if($waktu > 60){
            $hasil2 = $hasil % 60;
            $menit = ($hasil - $hasil2) /60;
        }
        $detik = $hasil2;
        echo "Waktu = " . $jam . " jam " . $menit . " menit " . $detik . " detik ";
    }
    ?>
</html>