<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <p>Detik</p>
    <input type="number" name="total">
    <button type="submit" name="submit"> Submit</button>
    <br>

    <?php 

    $jam;
    $menit;
    $detik;
    $total;
    
    if(isset($_POST['submit'])){
        $total = $_POST['total'];

        $jam = $total / 3600;

        $total %= 3600;

        $menit = $total / 60;

        $detik = $total % 60;

        echo("Jam = " . floor($jam));
        echo("<br/>");
        echo("Menit = " . floor($menit));
        echo("<br/>");
        echo("Detik = " . $detik);
    }
    
    ?>
</form>
</body>
</html>