<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganjil dan Genap</title>
</head>
<body>
    <?php
    
    $i=0;
    for($i;$i<=50;$i++){
        if($i%2==1){
            echo"Bilangan ini Ganjil : $i <br>";
        }else if($i%2==0){
            echo"Bilangan ini Genap : $i <br>";
        }
    }

    ?>
</body>
</html>