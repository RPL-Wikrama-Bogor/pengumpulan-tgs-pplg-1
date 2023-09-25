<?php 

$hh;
$mm;
$ss;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waktu</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka&family=Poppins:ital,wght@0,400;1,300&display=swap');

        body{
            font-family: 'Poppins', sans-serif;
            background:linear-gradient(90deg, rgba(238,174,202,1) 44%, rgba(181,186,220,1) 86%, rgba(148,187,233,1) 100%);
            max-width:100%;
        }

        input[type=number]{
            border: 2px solid black;
            border-radius: 3px;
            width:40px;
        }

        .form{
            border:0px;
            height:260px;
            width:380px;
            background-color:#FFFFFF;
            border-radius:10px;
            margin: 100px auto 10px;
            box-shadow:0px 0px 10px 0px #FFFFFF;
            padding:20px;
            max-width:75%;
        }

        input[type=submit]{
            padding:8px 15px;
            border:none;
            border-radius:3px;
            background-color:#61677A;
            margin-top:20px;
            display:inline-block;
            color: #FFFFFF;
        }

        .tampil{
            background-color: rgba(255, 255, 255, 0.2);
            width:200px;
            height:50px;
            margin:auto;
        }

        p{
            text-align:center;
            padding:10px;
            font-size:20px;
        }

    </style>
</head>
<body>
    <div class="form">
        <h2>Menampilkan Waktu (+1 detik)</h2>
        <hr>
        <table>
            <form action="" method="post">
                <div class="time">
                <tr>
                    <td>Jam</td>
                    <td><input type="number" name="hh"></td>  
                </tr>
                
                <tr>
                    <td>Menit</td>
                    <td><input type="number" name="mm"></td>
                </tr>
                <tr>
                    <td>Detik</td>
                    <td><input type="number" name="ss"></td>
                </tr>
                </div>
                <tr>
                    <td><input type="submit" value="Tampilkan" name="submit"></td>
                </tr>
            </form>
        </table>
    </div>
    <div class="view">
        <p></p>
    </div>

        <?php 

        if(isset($_POST['submit'])) {
            $hh = $_POST['hh'];
            $mm = $_POST['mm'];
            $ss = $_POST['ss'];

            $ss = $ss + 1;
            if($ss >= 60){
                $mm = $mm + 1;
                $ss = "00";

                if($mm >= 60){
                    $hh = $hh + 1;
                    $mm = "00";
                    $ss = $ss;

                    if($hh >= 24){
                        $hh = "00";
                        $mm = "00";
                        $ss = "00";
                    }
                }
            }else{
                $ss = $ss;

            }
        ?>

            <div class="tampil">
                <p><?= "$hh : $mm : $ss"; ?></p>
            </div>
            <div class="view">
        <p></p>
    </div>
       <?php } ?>

    
    
</body>



</html>