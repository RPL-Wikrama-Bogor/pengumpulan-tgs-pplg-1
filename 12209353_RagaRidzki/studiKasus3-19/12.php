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
    <title>Tambah 1 Detik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            margin-top: 200px;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        .hasil {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        table {
            width: 100%;
        }
        table td {
            padding: 5px;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Tambah 1 Detik</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Input Jam</td>
                <td>:</td>
                <td><input type="number" name="hh"></td>
            </tr>
            <tr>
                <td>Input Menit</td>
                <td>:</td>
                <td><input type="number" name="mm"></td>
            </tr>
            <tr>
                <td>Input Detik</td>
                <td>:</td>
                <td><input type="number" name="ss"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Cari" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php

if(isset($_POST["submit"])) {
    $hh = $_POST['hh'];
    $mm = $_POST['mm'];
    $ss = $_POST['ss'];

    $ss = $ss + 1;
    if($ss>=60){
        $mm = $mm + 1;
        $ss = 00;
    }
    if($mm >=60) {
        $hh = $hh + 1;
        $mm = 00;
        $ss = 00;
    }
    if($hh >=24) {
        $hh = 00;
        $mm = 00;
        $ss = 00;
    }

    echo "<br>";
    echo "<div class='hasil'>";
    echo "";
    echo "$hh Jam $mm Menit $ss Detik";

}


?>