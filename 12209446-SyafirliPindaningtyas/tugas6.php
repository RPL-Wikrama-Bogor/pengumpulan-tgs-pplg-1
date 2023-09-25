<?php
$waktu;
$jam;
$menit;
$detik;
$hasil = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detik Waktu</title>
</head>

<body>
    <h3> Mengkonversi total detik ke bentuk jam-menit-detik</h3>
    <form method="POST" action="">
        <table>
            <tr>
                <label for="waktu">Waktu </label>
                <input type="number" value="waktu" name="waktu">
            </tr>
            <tr>
                <input type="submit" value="Hitung" name="submit">
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $waktu = $_POST['waktu'];
        $jam;
        $menit;
        $detik;
        $hasil = "";

        //floor yaitu membulatkan nilai pecahan ke nilai bulatan terkecil.
        if ($waktu >= 3600) {
            $jam = floor($waktu / 3600);
            $waktu -= ($jam * 3600);
            $hasil .= $jam . " jam ";
        }
        if ($waktu >= 60) {
            $menit = floor($waktu / 60);
            $waktu -= ($menit * 60);
            $hasil .= $menit . " menit ";
        }

        $detik = $waktu;
        $hasil .= $detik . " detik";
        echo $hasil;
    }

    ?>
</body>

</html>