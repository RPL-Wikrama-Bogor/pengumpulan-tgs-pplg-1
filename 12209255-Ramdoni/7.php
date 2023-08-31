<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="" method="post">
    <p>Berat (Gram)</p>
    <input type="number" name="berat">
    <button type="submit" name="submit"> Submit</button>
    <br>

    <?php 

    $berat;
    $harga = 500;
    $diskon;
    $harga_diskon;
    
    if(isset($_POST['submit'])){
        $berat = $_POST['berat'];

        $berat = $berat / 100;
        $harga = $harga * $berat;
        $diskon = $harga / 100 * 20;
        $harga_diskon = $harga - $diskon; 

        echo("Harga Sebelum Diskon= " . $harga);
        echo("<br/>");
        echo("Diskon = " . $diskon);
        echo("<br/>");
        echo("Harga Setelah Diskon= ". $harga_diskon);

    }
    
    ?>
</form>
</body>
</html>