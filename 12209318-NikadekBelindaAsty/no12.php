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
    <link rel="stylesheet"  type="text/css"  href="style.css">
    <title>Document</title>
    <style>
<<<<<<< HEAD
        .input{
            background-color: #a7f3d0;
        }
    </style>
</head>
<body>
<h1>Mencari bilangan terbesar</h1>
<div class="input">
    <form action="" method="post">
        <table>
            <tr>
                <td>Input hh : </td>
=======
        body{
            font-family: Arial, sans-serif;
            background: hsla(211, 66%, 87%, 1);
            background: linear-gradient(90deg, hsla(211, 66%, 87%, 1) 0%, hsla(348, 67%, 88%, 1) 50%, hsla(272, 26%, 72%, 1) 100%);
            background: -moz-linear-gradient(90deg, hsla(211, 66%, 87%, 1) 0%, hsla(348, 67%, 88%, 1) 50%, hsla(272, 26%, 72%, 1) 100%);
            background: -webkit-linear-gradient(90deg, hsla(211, 66%, 87%, 1) 0%, hsla(348, 67%, 88%, 1) 50%, hsla(272, 26%, 72%, 1) 100%);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .input{
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin-bottom: 20px;
        }

        .output{
            background-color: white;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        table {
            width: 100%;
        }
        table td {
            padding: 5px;
        }

        input{
            width: 80%;
            padding: 5px;
            border: 1px solid #b8a4c9;
            border-radius: 4px;
        }

        button{
            display: inline-block;
            padding: 8px 20px;
            color: black;
            font-weight: bold;
            opacity: 0.8;
            border: 1px solid white;
            border-radius: 4px;
            background-color: #f5bfd7;
            cursor: pointer;
            box-shadow: 0 5px #f5bfd7;
        }
        
    </style>
</head>
<body>
<div class="input">
    <form action="" method="post">
        <table>
        <h2>Waktu</h2>
            <tr>
                <td>Input hh (jam) : </td>
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
                <td></td>
                <td><input type="number" name="jam"></td>
            </tr>
            <tr>
<<<<<<< HEAD
                <td>Input mm : </td>
=======
                <td>Input mm (menit) : </td>
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
                <td></td>
                <td><input type="number" name="menit"></td>
            </tr>
            <tr>
<<<<<<< HEAD
                <td>Input ss : </td>
=======
                <td>Input ss (detik) : </td>
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
                <td></td>
                <td><input type="number" name="detik"></td>
            </tr>
            <tr>
            <td></td>
            <td></td>
<<<<<<< HEAD
            <td><input type="submit" name="submit" value="submit"></td>
=======
               <td><button type="submit" name="submit">
                submit
               </button></td>
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
            </tr>
        </table><br>
    </form> 
</div>
<<<<<<< HEAD
<?php
if(isset($_POST['submit'])){
    $hh = $_POST["jam"];
    $mm = $_POST["menit"];
    $ss = $_POST["detik"];
    $ss = $ss + 1;
    if($ss >= 60){
        $mm++ && $ss = 0;
        if($mm >= 60){
            $hh++ && $mm = 0; $ss = 0;
            if( $hh > 24){
                $hh = 0;
                $mm = 0;
                $ss = 0;
            }
        }
    }
    echo "$hh: $mm :$ss";
}
?>
=======
<div>
 <form class="output">
    <?php
        if(isset($_POST['submit'])){
            $hh = $_POST["jam"];
            $mm = $_POST["menit"];
            $ss = $_POST["detik"];
            $ss = $ss + 1;
            if($ss >= 60){
                $mm++ && $ss = 0;
                if($mm >= 60){
                    $hh++ && $mm = 0; $ss = 0;
                    if( $hh > 24){
                        $hh = 0;
                        $mm = 0;
                        $ss = 0;
                    }
                }
            }
            echo "$hh: $mm :$ss";
        }
    ?>
  </form>  
 
</div>
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
</body>
</html>