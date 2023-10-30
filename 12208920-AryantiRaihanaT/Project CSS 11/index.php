<?php 

$no_pegawai;
$no_golongan;
$tanggal;
$bulan;
$tahun;
$no_urutan;
$tanggal_lahir;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kode Pegawai</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka&family=Poppins:ital,wght@0,400;1,300&display=swap');

        *{
            margin:auto;
        }
        body{
            font-family: 'Poppins', sans-serif;
            background-color:#0C134F;
            max-width:100%;
            
        }
        .text1{
            font-size:25px;
            text-align:center;
        }
        
        .form{
            border:0px;
            height:250px;
            width:350px;
            background-color:#FFFFFF;
            border-radius:10px;
            margin: 100px auto;
            box-shadow:0px 0px 10px 0px #FFFFFF;
        }

        .form table{
            margin:40px auto;
        }

        input[type=number] {
            border:none;
            border-bottom:2px solid black;
            height:30px;
            
        }

        input[type=submit]{
            padding:12px 28px;
            border:none;
            border-radius:3px;
            background-color:#61677A;
            margin-top:10px;
            display:inline-block;
            color: #FFFFFF;
        }
        input[type=submit]:hover{
            background-color:#8CABFF;
        }

        .tampil{
            color:#FFFFFF;
            background-color: rgba(250, 250, 250, 0.2);
            width:380px;
            height:180px;
            margin:auto;
        }
        p{
            text-align:center;
            padding-top:28px;
        }

        .view{
            width:380px;
            height:5px;
            background-color: rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body>
    <div class="form">
    <h1 class="text1">Kode Pegawai</h1>
    <hr>
        <table>
            <form action="" method="post">
                <tr>
                    <td>No. Pegawai</td>
                </tr>
                <tr>
                    <td><input type="number" name="no_pegawai"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Cari" name="submit"></td>
                </tr>
            </form>
        </table>
        </div>
        <div class="view">
            <p></p>
        </div>


    <?php 
        if(isset($_POST['submit'])) {
            $no_pegawai = $_POST['no_pegawai'];
            $length = strlen($no_pegawai);
    

            if($length < 11){ ?>
            <div class="tampil">
                <p><?= "no pegawai tidak sesuai"; ?></p>
            </div>
      <?php }else{
                $no_golongan = substr($no_pegawai, 0 , 1);
                $tanggal = substr($no_pegawai, 1, 2);
                $bulan = substr($no_pegawai, 3, 2);
                $tahun = substr($no_pegawai, 5, 4);
                $no_urutan = substr($no_pegawai, 9, 2);
                
                if($no_golongan <= 4){
                    $no_golongan = $no_golongan; 
                }else{ ?>
                    <div class="tampil">
                        <p><?php $no_golongan = die('error'); ?></p>
                    </div>
              <?php } ?>
                
                <?php
                if($bulan == "01"){
                    $bulan = "Januari";
                }else if($bulan == "02"){
                    $bulan = "Februari";
                }else if($bulan == "03"){
                    $bulan = "Maret";
                }else if($bulan == "04"){
                    $bulan = "April";
                }else if($bulan == "05"){
                    $bulan = "Mei";
                }else if($bulan == "06"){
                    $bulan = "Juni";
                }else if($bulan == "07"){
                    $bulan = "Juli";
                }else if($bulan == "08"){
                    $bulan = "Agustus";
                }else if($bulan == "09"){
                    $bulan = "September";
                }else if($bulan == "10"){
                    $bulan = "Oktober";
                }else if($bulan == "11"){
                    $bulan = "November";
                }else if($bulan == 12){
                    $bulan = "Desember";
                }else{ ?>
                    <div class="tampil">
                        <p><?php $bulan = die('error'); ?></p>
                    </div>
               <?php } ?>
                
                <?php $tanggal_lahir = $tanggal . " " . $bulan .  " " . $tahun; ?>
        
        <div class="tampil">
                <p><?= "No Golongan : $no_golongan <br>"; ?></p>
                <p><?= "Tanggal Lahir : $tanggal_lahir <br>"; ?></p>
                <p><?= "No Urutan : $no_urutan <br>"; ?></p>
        </div>

        <?php } ?>

            
    <?php } ?>
</body>

</html>