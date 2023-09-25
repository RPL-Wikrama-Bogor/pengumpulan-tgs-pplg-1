<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <p>Bilangan</p>
    <input type="number" name="number">
    <button type="submit" name="submit"> Submit</button>
    <br>

    <?php 

    $number;
    $satuan;
    $puluhan;
    $ratusan;

    
    if(isset($_POST['submit'])){
        $number = $_POST['number'];

        $satuan = $number % 10;
        $puluhan = ($number / 10) % 10 ;
        $ratusan = ($number / 100) % 10;
        
        echo($number . "<br/>");

        echo("Satuan = " . $satuan . " Puluhan = " . $puluhan . " Ratusan = " . $ratusan);


    }
    
    ?>
</form>
</body>
</html>