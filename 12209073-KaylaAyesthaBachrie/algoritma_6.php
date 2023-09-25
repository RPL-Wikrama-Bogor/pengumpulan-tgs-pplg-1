<?php 
$jam;
$menit;
$detik;
// = "" ( untuk mendefinisikan bahwa variable ini tipe datana=ya string)
$hasil = "";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi waktu</title>
</head>
<body>
    <h1>Mengkonverensi Waktu</h1>
    <form action="" method="post">
        <div style="display: flex;">
            <label for="waktu">Masukan Waktu awal (detik) : </label>
            <input type="number" id="waktu" name="waktu">
        </div>
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
    <br>
</body>
</html>

<?php
    if(isset($_POST['submit'])) {
        $waktu = $_POST['waktu'];
        //decision
        //
        //floor : membulatkan kebawah, ceil : membulatkan ke atas, round : membulatkan keatas dan ke bawah
    if ($waktu >= 3600) {
        $jam = floor($waktu / 3600);
        $waktu -= ($jam * 3600);
        $hasil .= $jam . " jam ";
    }
    if ($waktu >= 60) {
        $menit = floor( $waktu / 60 );
        $waktu -= ($menit * 60);
        $hasil .= $menit . " menit ";
    } 
        $detik = $waktu;
        $hasil .= $detik . " detik";
        echo $hasil;
    } 
?>