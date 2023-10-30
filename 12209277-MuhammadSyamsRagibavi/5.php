<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <p>Jam</p>
    <input type="number" name="jam">
    <p>Menit</p>
    <input type="number" name="menit">
    <p>detik</p>
    <input type="number" name="detik">
    <button type="submit" name="submit"> Submit</button>
    <br>

    <?php 

    $jam;
    $menit;
    $detik;
    $total;
    
    if(isset($_POST['submit'])){
        $jam = $_POST['jam'];
        $menit = $_POST['menit'];
        $detik = $_POST['detik'];

        $jam *= 3600;
        $menit *= 60;

        $total = $jam + $menit + $detik;
        
        echo($total . " detik");
    }
    
    ?>
</form>
</body>
</html>