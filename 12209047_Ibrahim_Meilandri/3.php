<?php 
$a;
$b;
$c;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
       <table>
        <tr>
        <td>Bilangan pertama </td>
        <td>:</td>
        <td><input type="number" name="bil_satu" id=""></td>
        </tr>

        <tr>
        <td>Bilangan kedua </td>
        <td>:</td>
        <td><input type="number" name="bil_dua" id=""></td>
        </tr>

        <tr>
        <td>Bilangan ketiga </td>
        <td>:</td>
        <td><input type="number" name="bil_tiga" id=""></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="cari" name="submit"></td>
        </tr>

       </table>
    </form>
    <br>


    <?php
    if(isset($_POST['submit'])){
        $a = $_POST['bil_satu'];
        $b = $_POST['bil_dua'];
        $c = $_POST['bil_tiga'];

        if($a > $b && $a > $c){
            echo "nilai terbesar adalah : ".$a;
        }elseif($b > $a && $b > $c){
            echo "nilai terbesar adalah : ".$b;
        }elseif($c > $a && $c > $b){
            echo "nilai terbesar adalah : ".$c;
        }elseif($a == $b){
            echo "nilai besar adalah :  bilangan Pertama dan Kedua yaitu ".$a;
        }elseif($a == $c){
            echo "nilai besar adalah :  bilangan Pertama dan Ketiga yaitu ".$c;
        }elseif($b == $c){
            echo "nilai besar adalah :  bilangan Kedua dan Ketiga yaitu ".$b;
        }
        
        else{
            echo "sama besar";
        }
    }
    ?>

</body>
</html>