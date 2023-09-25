<?php

    $bil1;
    $bil2;
    $bil3;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Bilangan</title>
</head>
<body>
    <h1>Mencari Bilangan Terbesar</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Bilangan Pertama</td>
                <td>:</td>
                <td><input type="number" name="bil_satu"></td>
            </tr>
            <tr>
                <td>Bilangan Kedua</td>
                <td>:</td>
                <td><input type="number" name="bil_dua"></td>
            </tr>
            <tr>
                <td>Bilangan Ketiga</td>
                <td>:</td>
                <td><input type="number" name="bil_tiga"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
    
</body>
<?php
    if (isset($_POST['submit'])) {
        $bil1 = $_POST['bil_satu'];
        $bil2 = $_POST['bil_dua'];
        $bil3 = $_POST['bil_tiga'];

        if ($bil1 > $bil2 && $bil1 > $bil3 ){
            echo "Bilangan terbesar adalah " . $bil1;
        }elseif ($bil2 > $bil1 && $bil2 > $bil3){
            echo "Bilangan terbesar adalah " . $bil2;
        }elseif ($bil3 > $bil1 && $bil3 > $bil2){
            echo "Bilangan terbesar adalah " . $bil3;
        }elseif($bil1 == $bil2){
            echo "Bilangan pertama dan kedua sama besar dan lebih besar dari bilangan ketiga<br>";
            echo "Bilangan terbesar adalah " . $bil1;
        }elseif($bil1 == $bil3){
            echo "Bilangan pertama dan ketiga sama besar dan lebih besar dari bilangan kedua<br>";
            echo "Bilangan terbesar adalah " . $bil1;
        }elseif($bil2 == $bil3){
            echo "Bilangan kedua dan ketiga sama besar dan lebih besar dari bilangan kesatu<br>";
            echo "Bilangan terbesar adalah " . $bil2;
        }else{
            echo "Bilangan pertama, kedua, dan ketiga sama besar";
        }
    }
?>
</html>
