<?php
    $hh;
    $mm;
    $ss;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan data waktu setelah ditambahkan 1 detik</title>
</head>
<body>
    <h1>Menampilkan data waktu setelah ditambahkan 1 detik</h1>
    <h2>Masukan Angka</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>Jam</td>
                <td>  :  </td>
                <td><input type="number" name="hh"></td>
            </tr>
            <tr>
                <td>Menit</td>
                <td> : </td>
                <td><input type="number" name="mm"></td>
            </tr>
            <tr>
                <td>Detik</td>
                <td> : </td>
                <td><input type="number" name="ss"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Hasil"></td>
            </tr>
        </table>
    </form>
    
    <?php
    if (isset($_POST['submit'])) {
        $hh = $_POST["hh"];
        $mm = $_POST["mm"];
        $ss = $_POST["ss"];

        $ss= $ss + 1;
        if($ss >= 60){
            $mm= $mm + 1;
            $ss= 00;
        }if($mm >= 60 ){
            $hh= $hh + 1;
            $mm=00;
            $ss=00;
        }if($hh >= 24){
            $hh=00;
            $mm=00;
            $ss=00;
        }
        echo "$hh jam $mm menit $ss detik ";
    }
    ?>
</body>
</html>