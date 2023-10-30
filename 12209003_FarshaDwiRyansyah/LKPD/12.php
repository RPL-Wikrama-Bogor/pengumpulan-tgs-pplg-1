<<<<<<< HEAD:12209472-RatuZahra/12.php
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
    <title>Soal 12</title>
    <style>
        body{
            margin: 10px 15rem;
            background-color: #D8C4B6;
        }
        h2{
            text-align: center;
            background-color: #F5EFE7;
            margin: 10px;
            padding: 3rem 7rem;
            border-radius: 10px;
        }

        form{
            padding: 30px;
            margin: 20px 10px;
            background-color: #F5EFE7;
            border-radius: 10px;
            align-items: center;
        }
        .isi{
            background-color:  #F5EFE7;
            margin: 20px 10px;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h2>Waktu</h2>

    <form method="post" a
You sent
<form method="post" action="#">
        <table>
            <tr>
                <td>Jam <input type="number" name="hh"></td>
                <td>Menit <input type="number" name="mm"></td>
                <td>Detik <input type="number" name="ss"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="selanjutnya"></td>
            </tr>
        </table>
    </form>

    <?php
        if (isset($_POST['submit'])) {
            $hh = $_POST["hh"];
            $mm = $_POST["mm"];
            $ss = $_POST["ss"];

            $ss = $ss + 1;

            if ($ss >=60) {
                $mm = $mm + 1;
                $ss = 0 . 0;

                if ($mm >= 60) {
                    $hh = $hh + 1;
                    $mm = 0 . 0;
    
                    if ($hh >=24) {
                        $hh = 0 . 0;
                        $mm = 0 . 0;
                        $ss = 0 . 0;
                    }
                }
            }
    ?>
    <di
You sent
?>
    <div class="isi">
        <?php
            echo " Pukul $hh: $mm: $ss";
        }
        ?>
    </div>
    
</body>
=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
            background-color: #96B6C5;
        }

        .card {
            border: 0px;
            width: 500px;
            padding: 40px;
            border-radius: 15px;
            margin: 150px;
            background-color: #ADC4CE;
            shadow: 15px;
        
        }
        
        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border-radius: 15px;
        }


        button {
            background-color: grey;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10%;
        }

        h2 {
            color: #102C57;
        }

        label {
            font-size: 20px;
        }
 </style>
<body>
<h2>Detik +1</h2>
    <form action="" method="post">
        <p>Jam</p>
        <input type="number" name="jam">
        <p>Menit</p>
        <input type="number" name="menit">
        <p>Detik</p>
        <input type="number" name="detik">
        <button type="submit" name="submit"> Submit</button>
        <br>

        <?php

        $jam;
        $menit;
        $detik;
        $hasil;

        if (isset($_POST['submit'])) {
            $jam = $_POST['jam'];
            $menit = $_POST['menit'];
            $detik = $_POST['detik'];

            $detik++;

            if($detik > 59){
                $detik %= 60;
                $menit++;
                if($menit > 59){
                    $menit %= 60;
                    $jam++;
                    if($jam > 23){
                        $jam %= 24;
                    }
                }
            }
            else if($menit > 59){
                $menit %= 60;
                $jam++;
                if($jam > 23){
                    $jam %= 24;
                }
            }
            else if($jam > 23){
                $jam %= 24;
            }
            
            echo $jam . " : " . $menit . " : " . $detik;
        }

        ?>
    </form>
</body>

>>>>>>> 6c3ebe7cfdd59ac7f31c63444159ebefe282bd6b:12209003_FarshaDwiRyansyah/LKPD/12.php
</html>