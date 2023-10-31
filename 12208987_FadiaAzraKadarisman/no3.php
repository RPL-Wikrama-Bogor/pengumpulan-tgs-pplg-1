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
    <title>Mencari nilai terbesar</title>
</head>
<body>
    <h1>Mencari Bilangan Terbesar</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Bilangan Pertama</td>
                <td>:</td>
                <td><input type="number" name="bilpertama"></td>
            </tr>
            <tr>
                <td>Bilangan Kedua</td>
                <td>:</td>
                <td><input type="number" name="bilkedua"></td>
            </tr>
            <tr>
                <td>Bilangan Ketiga</td>
                <td>:</td>
                <td><input type="number" name="bilketiga"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Cari"></td>
            </tr>
        </table><br>
    </form>
</body>
</html>

<?php 
    if(isset($_POST['submit'])){
        $bil1 = $_POST['bilpertama'];
        $bil2 = $_POST['bilkedua'];
        $bil3 = $_POST['bilketiga'];

        if ($bil1 > $bil2 && $bil1 > $bil3) {
        echo "Bilangan terbesar adalah " . $bil1;
        }elseif ($bil2 > $bil1 && $bil2 > $bil3) {
        echo "Bilangan terbesar adalah " . $bil2;
        }elseif ($bil3 > $bil1 && $bil3 > $bil2) {
            echo "Bilangan terbesar adalah " . $bil3;
        }elseif ($bil1 == $bil2) {
            echo "Bilangan pertama & kedua sama besar dan nilai terbesar adalah " . $bil1;
        }elseif ($bil1 == $bil3) {
            echo "Bilangan pertama & ketiga sama besar dan nilai terbesar adalah " . $bil1;
        }elseif ($bil2 == $bil3) {
            echo "Bilangan kedua & ketiga sama besar dan nilai terbesar adalah " . $bil2;
        }else{
            echo "Bilangan sama besar";
        }
    };

   
?>