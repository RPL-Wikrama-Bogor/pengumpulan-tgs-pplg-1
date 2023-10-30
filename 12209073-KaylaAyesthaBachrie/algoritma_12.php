<?php
$hh = 0;
$mm = 0;
$ss = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Waktu</title>
    <style>
        .tabel{
             background-color: #CEDEBD ;
            width: 15%;
            float: left;
            padding-top: 20px;
            padding-left: 20px;
            padding-bottom: 20px;
            font-size: 20px;
            margin: 20%;
            margin-left: 40%;
        }
        button{
            background-color:#F3FDE8 ;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <div class="tabel">
    <label for="jam">Masukan hh :</label>
    <br>
    <input type="number" name="jam" id="jam">
    <br>
    <label for="menit">Masukan mm :</label>
    <br>
    <input type="number" name="menit" id="menit">
    <br>
    <label for="detik">Masukan ss :</label>
    <br>    
    <input type="number" name="detik" id="detik">

<button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])) {
    $hh = $_POST['jam'];
    $mm = $_POST['menit'];
    $ss = $_POST['detik'];

    $ss = $ss + 1;

    if($ss >= 60 ){
        $mm - $mm + 1;
        $ss = 00;
    } else if($mm >= 60){
    $hh = $hh +1;
    $mm = 0;
    $ss = 0;
    } else if($hh >= 24){
        $hh = 0;
        $mm = 0;
        $ss = 0;
    }
    echo " Waktu :" . $hh . " Jam " . $mm . " Menit " . $ss . " Detik " . "<br>";
} 