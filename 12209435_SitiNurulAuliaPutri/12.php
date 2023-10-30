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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Libre+Baskerville&display=swap" rel="stylesheet">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Josefin Sans', sans-serif;
            font-family: 'Libre Baskerville', serif;
        }

         body{
            display: flex;
            justify-content: center;
            min-height: 100vh;
            height : 100%;
            align-items: center;
            background-image: url("asets/img-8.jpeg");
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
        }

        .container{
            border: 3px bold;
            background-color: #FFFFFF;
            float: center;
            border:5px solid #3F2305;
            box-shadow: 7px 7px 7px 7px #3C486B;
            border-radius: 30px;
            display: flex;
            padding: 5px;
            margin: 40px;
        }

        .content{
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
            width: 100%;
            padding: 20px;

        }

        button{
            background-color: #A4907C;
            border-radius: 10px;
            float: right;
            display: flex;
            position: right;
            padding: 5px;
        }

        form{
            float : center;
            display: center;

        }

        h3{
            margin: 0;
            color: #765827;
            font-family: 'Libre Baskerville', serif;
            font-size: 25px;
            text-shadow: 3px 3px 3px #F2EAD3;
            position: center;
            width: 100%;
            text-align: center;
        }

        input{
          float : right;
          margin: 0;
          display: flex;
        }

        label{
          float: left;
          margin-right: 10px;
          display: flex;
        }

    /* Ukuran layar mobile phone minimal resolusi 576px */
    @media (min-width: 576px) { 
        .body{
            width: calc(50% - 6px);
        }
    }

    /* Ukuran layar tablet minimal resolusi 768px */
    @media (min-width: 768px) { 
        .body{
            width: calc(100vw / 3 - 12px);
        }
    }

    /* Ukuran layar dekstop minimal resolusi 992px */
    @media (min-width: 992px) { 
        .body{
            width: calc(100vw / 4 - 18px);
        }
    }

    /* Ukuran layar besar minimal resolusi 1200px */
    @media (min-width: 1200px) { 
        .body{
            width: calc(100vw / 5 - 24px);
        }
    }

    /* Ukuran layar sangat besar minimal resolusi 1400px */
    @media (min-width: 1400px) {
        h2{
            font-size: 20px;
        }
        p{
            font-size: 18px;
        }
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            
    
    <form method="post" action="#">

    <h3>Menampilkan data waktu </h3>
    <h3>setelah ditambahkan 1 detik </h3><br><br>
    
    <h4>Masukan Angka</h4>
    <table>
            <tr>
                <td>Jam</td>
                <td>  :  </td>
                <td><input type="number" name="hh"></td>
            </tr>
            <tr>
                <td>Menit</td>
                <td> : </td>
                <td><input type="number" name="mm"></td>
            </tr>
            <tr>
                <td>Detik</td>
                <td> : </td>
                <td><input type="number" name="ss"></td>
            </tr>
        </table> <br><br>

        <button><input type="submit" name="submit" value="hasil"></button>
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
    <div class="isi">
        <?php
            echo "$hh Jam $mm Menit $ss Detik";
        }
        ?>
    </div>
    </div>
    </form>
</body>
</html>