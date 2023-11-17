<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKPD NO 16</title>
</head>
<body>
    <h1 style="text-align:center;">Mencetak Bilangan Genap dan Ganjil dari 1-50</h1>
</body>
</html>


<?php 
    for($i=1; $i<=50; $i++){
        if($i % 2 == 1 ){
            echo  "Mencetak Bilangan Ganjil: $i <br>";
        }
        else if($i % 2 == 0 ){
            echo "Mencetak Bilangan Genap: $i <br>" ;
        }
    }
?>