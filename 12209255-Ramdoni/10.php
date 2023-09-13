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
    <p>MTK</p>
    <input type="number" name="mtk">
    <p>PABP</p>
    <input type="number" name="pabp">
    <p>DPK</p>
    <input type="number" name="dpk">
    <button type="submit" name="submit"> Submit</button>
    <br>

    <?php 

    $nilai;
    $mtk;
    $pabp;
    $dpk;
    
    if(isset($_POST['submit'])){
        $mtk = $_POST['mtk'];
        $pabp = $_POST['pabp'];
        $dpk = $_POST['dpk'];

        $nilai = ($mtk + $pabp + $dpk) / 3;

        if ($nilai > 100){
            echo("K");
        }
        else if ($nilai >= 80){
            echo("A");
        }
        else if ($nilai >= 75){
            echo("B");
        }
        else if ($nilai >= 65){
            echo("C");
        }
        else if ($nilai >= 45){
            echo("D");
        }
        else if ($nilai >= 0){
            echo("E");
        }
        else if ($nilai > 100){
            echo("K");
        }
        else{
            echo("K");
        }
    }
    
    ?>
</form>
</body>
</html>