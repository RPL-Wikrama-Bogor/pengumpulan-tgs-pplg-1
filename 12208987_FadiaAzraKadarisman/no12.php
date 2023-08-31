<?php
$hh = 0;
$mm = 0;
$ss = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Waktu</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
        text-align: center;
    }

    .tabel {
        max-width: 100%;
        width: 350px;
        margin: auto;
        padding: 20px;
        background-color: white;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-top: 10px;
    }
    h3{
        color: black;
        text-align: center;
        margin-top: 60px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="number"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 10px;
    }

    button[type="submit"] {
        background-color: #007bff;
        color: white;
        padding: 6px 12px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }

    .result {
        margin-top: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        background-color: white;
    }
</style>

</head>
<body>
    <h3>Waktu</h3>
    <form action="" method="post">
        <div class="tabel">
    <label for="jam">Masukan hh :</label>
    <br>
    <input type="number" name="jam" id="jam">
    <br>
    <label for="menit">Masukan mm :</label>
    <br>
    <input type="number" name="menit" id="menit">
    <br>
    <label for="detik">Masukan ss :</label>
    <br>    
    <input type="number" name="detik" id="detik">

<button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])) {
    $hh = $_POST['jam'];
    $mm = $_POST['menit'];
    $ss = $_POST['detik'];

    $ss = $ss + 1;

    if($ss >= 60 ){
        $mm = $mm + 1;
        $ss = 00;
        if($mm >= 60){
            $hh = $hh +1;
            $mm = 00;
            $ss = 00;
            if($hh >= 24){
                $hh = 00;
                $mm = 00;
                $ss = 00;
                }
            }
    }
    echo "<div class=result> Waktu : " . $hh . " Jam " . $mm . " Menit " . $ss . " Detik " . "</div><br>";
} 