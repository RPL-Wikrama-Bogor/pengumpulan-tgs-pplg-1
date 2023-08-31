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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

      <div class="container">
    <h1>Input!</h1>
<div class="formm">
    <form action="#" method="post">
        
                <label for="jam"><b>jam :</b></label>
                <br>
                <input type="number" name="jam" id="jam" placeholder="input jam" required>
            
<br>
        
                <label for="menit"><b>menit :</b></label>
                <br>
                <input type="number" name="menit" id="menit" placeholder="input menit" required>
<br>

                <label for="detik"><b>detik :</b></label>
                <br>
                <input type="number" name="detik" id="detik" placeholder="input detik" required>
<br>

        <button type="submit" name="submit">Kirim!</button>
       
    </form>
    </div>
    </div>

    <?php
     if($_POST){
        $jam = $_POST["jam"];
        $menit = $_POST["menit"];
        $detik = $_POST["detik"];

      

       if($menit >= 60){
        $jam = $jam + 1;
        $menit =  $menit - 60;
       }

       if($detik >= 60){
        $menit = $menit + 1;
        $detik = $detik - 60;
       }


        echo "$jam jam $menit menit $detik detik";
    }

   
    ?>


</body>
</html>