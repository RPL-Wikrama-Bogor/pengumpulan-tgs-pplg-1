<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka&family=Poppins:ital,wght@0,400;1,300&display=swap');

        body{
            font-family:'Poppins', sans-serif;
            background-color: #FECD70;
        }

        /* .form{
            background-color:#FFFFFF;
            height:250px;
            width:300px;
            box-shadow: 0px 0px 10px 0px #FFFFFF;
            margin:70px auto;
            padding:20px;
            border-radius:5px;
        } */

        .judul{
            text-align:center;
        }

        .form{
            border:0px;
            height:250px;
            width:350px;
            background-color:#FFFFFF;
            border-radius:10px;
            margin: 70px auto;
            box-shadow:0px 0px 10px 0px #FFFFFF;
            padding:7px;
            max-width:75%;
        }

        input[type=number]{
            border:none;
            border-bottom: 2px solid grey;
            width:80px;

        }

        .form table{
            margin:20px auto;
        }

        input[type=submit]{
            border:none;
            background-color:#dd8111;
            padding:10px 15px;
            border-radius:3px;
            margin-top:10px;
            color:#FFFFFF;
        }

        .tampil{
            background-color:#dd8111;
            height:210px;
            width:300px;
            margin:auto;
            padding:20px;
            max-width:75%;
        }

        p{
            align-items:center;
            margin:5px;
            color:#FFFFFF;
            font-size:15px;
        }

        @media (min-width: 375px && min-height: 667px ){
            .form{
                border:0px;
                height:250px;
                width:100px;
                background-color:#FFFFFF;
                border-radius:10px;
                margin: 70px auto;
                box-shadow:0px 0px 10px 0px #FFFFFF;
                padding:5px;
            }
            p{
                font-size:10px;
            }
        }
    </style>
</head>
<body>
        <div class="form">
        <h2 class="judul">Penjualan Tiket</h2>
        <hr>
        <table>
            <form action="" method="post">
                <tr>
                    <td>Tiket VIP</td>
                    <td>:</td>
                    <td><input type="number" name="tiketVIP"></td>
                </tr>
                <tr>
                    <td>Tiket Eksekutif</td>
                    <td>:</td>
                    <td><input type="number" name="tiketEks"></td>
                </tr>
                <tr>
                    <td>Tiket Ekonomi</td>
                    <td>:</td>
                    <td><input type="number" name="tiketEko"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Hitung" name="submit" ></td>
                </tr>
            </form>
        </table>
        </div>

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
            ?>

                <div class="tampil">
                    <p><?= "Keuntungan tiket VIP : $keuntunganVIP<br>"; ?></p>
                    <p><?= "Keuntungan tiket Eksekutif : $keuntunganEks<br>"; ?></p>
                    <p><?= "Keuntungan tiket Ekonomi : $keuntunganEko<br>"; ?></p>
                    <p><?= "Keuntungan keseluruhan : $keuntungan_keseluruhan<br>"; ?></p>
                    <p><?= "Tiket terjual VIP : $tiketVIP<br>"; ?></p>
                    <p><?= "Tiket terjual Eksekutif : $tiketEks<br>"; ?></p>
                    <p><?= "Tiket terjual Ekonomi : $tiketEko<br>"; ?></p>
                    <p><?= "Total tiket terjual : $total_tiket<br>"; ?></p>
                </div>

        <?php } ?>
        
</body>



</html>