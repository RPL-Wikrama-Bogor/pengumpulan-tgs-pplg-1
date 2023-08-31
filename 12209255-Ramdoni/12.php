<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

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

</html>