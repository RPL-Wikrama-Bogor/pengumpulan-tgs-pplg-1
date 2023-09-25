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

</html>