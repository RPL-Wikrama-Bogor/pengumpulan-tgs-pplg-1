<?php

$hh_jm;
$mm_mnt;
$ss_dtk;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

.box{
    background-color: green;
    text-align: center;
}
#content{
    text-align: center;
}


</style>


<body>
    
    
    
<div class="box" name = "box" id="box">
    <h1>Lkpd Algoritma 3 </h1>
    <div class="box-content">
        <form action="" method="post">
            <div class="box">
                <input type="text" placeholder="Input Jam " style="text-align: center;" name="jm"> 
            </div>
            <div class="box">
                <input type="text" placeholder="Input Menit " style="text-align: center;" name="mnt">
            </div>
            <div class="box">
                <input type="text" placeholder="Input Detik" style="text-align: center;" name="dtk">
            </div>
            <button name="submit" method="post" style="background-color: red;   ">Kirim</button>
        </form>
    </div>
</div>

</body>
</html>

<?php

if(isset($_POST['submit'])){

    $hh_jm = $_POST['jm'];
    $mm_mnt = $_POST['mnt'];
    $ss_dtk = $_POST['dtk'];

    $ss_dtk = $ss_dtk + 1;
    
    if($ss_dtk >= 60){  
        $mm_mnt = $mm_mnt + 1;
        $ss_dtk = 00;

        if($mm_mnt >= 60){
            $hh_jm = $hh_jm + 1;
            $mm_mnt = 00;
            $ss_dtk = 00;
        }
        if($hh_jm >= 24){
            $hh_jm = 00;
            $mm_mnt= 00;
            $ss_dtk= 00;
        }
    }
    echo" $hh_jm : $mm_mnt : $ss_dtk";
}