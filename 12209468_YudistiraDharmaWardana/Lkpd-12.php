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
    <link rel="stylesheet" href="L_11.css">
</head>

<body>
    
    
<div class="card">
  <h1 style="text-align: center;">Lkpd Algoritma 11</h1>
  <form method="post">

    <input type="text" placeholder="Input Jam " style="text-align: center;" name="jm">
    <input type="text" placeholder="Input Menit " style="text-align: center;" name="mnt">
    <input type="text" placeholder="Input Detik" style="text-align: center;" name="dtk">
        
    <button name="submit" method="post" style="background-color: red;   ">Kirim</button>

  </form>
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