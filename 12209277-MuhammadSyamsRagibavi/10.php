<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    $avg;
    $mtk;
    $pabp;
    $dpk;
    
    if(isset($_POST['submit'])){
        $mtk = $_POST['mtk'];
        $pabp = $_POST['pabp'];
        $dpk = $_POST['dpk'];

        $avg = ($mtk + $pabp + $dpk) / 3;

        if ($avg > 100){
            echo("K");
        }
        else if ($avg >= 80){
            echo("A");
        }
        else if ($avg >= 75){
            echo("B");
        }
        else if ($avg >= 65){
            echo("C");
        }
        else if ($avg >= 45){
            echo("D");
        }
        else if ($avg >= 0){
            echo("E");
        }
        else if ($avg > 100){
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