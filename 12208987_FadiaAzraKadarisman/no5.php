<?php
    $jam;
    $menit;
    $detik;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Jam, Menit, Detik Ke Detik</title>
</head>
<body>
    <h1>Konversi Jam, Menit, Detik Ke Detik</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Input jam</td>
                <td>:</td>
                <td><input type="number" name="jam"></td>
            </tr>
            <tr>
                <td>Input menit</td>
                <td>:</td>
                <td><input type="number" name="menit"></td>
            </tr>
            <tr>
                <td>Input detik</td>
                <td>:</td>
                <td><input type="number" name="detik"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="konversi"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php 
    if(isset($_POST['submit'])){
        $jam = $_POST['jam'];
        $menit = $_POST['menit'];
        $detik = $_POST['detik'];

        $jam =  $jam * 3600;
        $menit = $menit * 60;
        $td = $jam + $menit + $detik;

    echo "Hasil konversinya adalah menjadi " . $td ." detik";
    }
?>