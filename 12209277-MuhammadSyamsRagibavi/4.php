<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <p>Nama</p>
    <input type="text" name="name">
    <p>Gaji Bersih</p>
    <input type="number" name="gaji">
    <button type="submit" name="submit"> Submit</button>
    <br>

    <?php 

    $tunjangan; 
    $pajak;
    $gaji_bersih;
    
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $gaji = $_POST['gaji'];

        $tunjangan = $gaji / 100 * 20;
        $pajak = ($gaji + $tunjangan) / 100 * 15;
        $gaji_bersih = $gaji + $tunjangan - $pajak; 

        echo("Nama = ". $name);
        echo("<br/>");
        echo("Tunjangan = " . $tunjangan);
        echo("<br/>");
        echo("Pajak = " . $pajak);
        echo("<br/>");
        echo("Gaji Bersih = " . $gaji_bersih);  
        

    }
    
    ?>
</form>
</body>
</html>