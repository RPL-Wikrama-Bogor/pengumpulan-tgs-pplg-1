<?php
$jam;
$detik;
$menit;
$total
$sisa1;    
$sisa2;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Input detik</label>
        <input type="text" name="total" id="">

        <br>

        <input type="submit" value="cari" name="submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $total = $_POST['total'];

        if($total >= 3600){

            $sisa1 = $detik % 3600;
            $jam = ($total - $sisa1) / 3600;

            if($total >= 60){
                $sisa2 = $sisa1 % 60;
                $menit = ($sisa1 - $sisa2) / 60;

                $detik = $sisa2;
            }else{
                $detik =  $sisa1;
            }
        }

        elseif($total >= 60){
            $sisa1 = $total % 60;
            menit = ($total)
        }
        
    }
    ?>
</body>
</html>