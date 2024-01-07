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
    <title>LKPD NO 12</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        h1 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 30px;
            color: #343a40;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            font-size: 14px;
        }

        input[type="number"], input[type="submit"] {
            padding: 10px;
            width: 100%;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="" method="post">
    <table>
    <h1>Menambahkan detik?</h1>
            <tr>
                <td>hh</td>
                <td>:</td>
                <td><input type="number" name="jam" placeholder="Input Jam"></td>
            </tr>
            <tr>
                <td>mm</td>
                <td>:</td>
                <td><input type="number" name="menit" placeholder="Input Menit"></td>
            </tr>
            <tr>
                <td>ss</td>
                <td>:</td>
                <td><input type="number" name="detik" placeholder="Input Detik"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Cari" name="submit"></td>
            </tr>
        </table>
    </form>
    </div>
</body>
<?php
if(isset($_POST['submit'])){
    $hh = $_POST['jam'];
    $mm = $_POST['menit'];
    $ss = $_POST['detik'];

    $ss = $ss + 1;
    if($ss >= 60){
        $mm = $mm + 1;
        $ss = 00;
    }
    
    if($mm >= 60){
        $hh = $hh + 1;
        $mm = 00;
        $ss= 00;
    } 

    if($hh >= 24){
        $hh = 00;
        $mm = 00;
        $ss= 00;
    }
    echo "$hh : $mm : $ss";
    }
?>
</html>