<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
            min-height: 100vh;
            background: linear-gradient(45deg, gray, white);
        }

        h2 {
            width: 100%;
            height: 60px;
            justify-content: center;
            padding: 20px;
            display: flex;
            position: relative;
            clear: left;
        }

        .base {
            width: 100%;
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            position: relative;
        }

        .form {
            width: 65%;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .form h3 {
            margin-top: 10px;
        }

        .form input[type='text'],
        .form input[type='number'] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        .form input[type='submit'] {
            background-color: grey;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .form input[type='submit']:hover {
            background-color: green;
        }
    </style>
</head>

<body>
    <div class="base">
        <div class="form">
            
            <h2>Detik +1</h2>
            <form action="" method="post">
                <p>Jam</p>
                <input type="number" name="jam">
                <p>Menit</p>
                <input type="number" name="menit">
                <p>Detik</p>
                <input type="number" name="detik">
                <input type="submit" name="submit">
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
</div>
</div>
</body>

</html>