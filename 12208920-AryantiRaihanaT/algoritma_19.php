<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket</title>
</head>
<body>
    <h1></h1>
    <table>
        <form action="" method="post">
            <tr>
                <td>Tiket VIP</td>
                <td><input type="number" name="tiketVIP"></td>
            </tr>
            <tr>
                <td>Tiket Eksekutif</td>
                <td><input type="number" name="tiketEks"></td>
            </tr>
            <tr>
                <td>Tiket Ekonomi</td>
                <td><input type="number" name="tiketEko"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Hitung" name="submit" ></td>
            </tr>
        </form>
    </table>
</body>

<?php 

    if(isset($_POST['submit'])){
        $tiketVIP = $_POST['tiketVIP'];
        $tiketEks = $_POST['tiketEks'];
        $tiketEko = $_POST['tiketEko'];

        $hargaVIP = 200000;
        $hargaEks = 150000;
        $hargaEko = 100000;

        if($tiketVIP > 50 || $tiketVIP < 0){
            $keuntunganVIP = die('error');
        }else if($tiketVIP >= 35 ){
            $keuntunganVIP = $tiketVIP * $hargaVIP * 0.25;
        }else if($tiketVIP >= 20 && $tiketVIP < 35){
            $keuntunganVIP = $tiketVIP * $hargaVIP * 0.15;
        }else if($tiketVIP < 20) {
            $keuntunganVIP = $tiketVIP * $hargaVIP * 0.05;
        }

        if($tiketEks > 50 || $tiketEks < 0){
            $keuntunganEks = die('error');
        }else if($tiketEks >= 40 ){
            $keuntunganEks = $tiketEks * $hargaEks * 0.2;
        }else if($tiketEks >= 20 && $tiketEks < 40){
            $keuntunganEks = $tiketEks * $hargaEks * 0.1;
        }else if($tiketEks < 20) {
            $keuntunganEks = $tiketEks * $hargaEks * 0.02;
        }

        if($tiketEko > 50 || $tiketEko < 0 ){
            $keuntunganEko = die('error');
        }else{
            $keuntunganEko = $tiketEko * $hargaEko * 0.07;
        }

        $keuntungan_keseluruhan = $keuntunganVIP + $keuntunganEks + $keuntunganEko;
        $total_tiket = $tiketVIP + $tiketEks + $tiketEko;

        echo "Keuntungan tiket VIP : $keuntunganVIP <br>";
        echo "Keuntungan tiket Eksekutif : $keuntunganEks <br>";
        echo "Keuntungan tiket Ekonomi : $keuntunganEko <br>";
        echo "Keuntungan keseluruhan  : $keuntungan_keseluruhan <br>";
        echo "Tiket terjual VIP : $tiketVIP <br>";
        echo "Tiket terjual Eksekutif : $tiketEks <br>";
        echo "Tiket terjual Ekonomi : $tiketEko <br>";
        echo "Total tiket terjual : $total_tiket";

    }

?>

</html>