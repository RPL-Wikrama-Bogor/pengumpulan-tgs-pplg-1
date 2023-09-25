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
    <h1>Mencari bilangan terbesar</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>bilangan pertama : </td>
                <td></td>
                <td><input type="number" name="bil1"></td>
            </tr>
            <tr>
                <td>bilangan kedua : </td>
                <td></td>
                <td><input type="number" name="bil2"></td>
            </tr>
            <tr>
                <td>bilangan ketiga : </td>
                <td></td>
                <td><input type="number" name="bil3"></td>
            </tr>
            <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table><br>

    </form>

</body>
<?php
if(isset($_POST['submit'])){
    $a = $_POST['bil1'];
    $b = $_POST['bil2'];
    $c = $_POST['bil3'];

    if($a > $b && $a > $c){
        echo "bilangan terbesar adalah " . $a;
    }elseif($b > $c && $b > $a){
        echo "bilangan terbesar adalah " . $b; 
    }elseif($c > $a && $c > $b){
        echo "bilangan terbesar adalah " . $c; 
    }elseif($a == $b){
        echo "bilangan pertama dan kedua sama besar dan lebih besar dari bilangan ketiga 
        , bilangan terbesar adalah " . $a;
    }elseif($a == $c){
        echo "bilangan pertama dan ketiga sama besar dan lebih besar dari bilangan kedua
        , bilangan terbesar adalah " . $a;
    }elseif($b == $c){
        echo "bilangan kedua dan ketiga sama besar dan lebih besar dari bilangan kesatu
        , bilangan terbesar adalah " . $b;
    }else{
        echo "bilangan sama besar";
    }
}
?>
</html>