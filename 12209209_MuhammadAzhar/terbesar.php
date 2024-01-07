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
    <title>mencari bilangan terbesar</title>
</head>
<body>
    <h1>mencari bilangan terbesar</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Bilangan pertama</td>
                <td>:</td>
                <td><input type="number" name="bil_satu"></td>
            </tr>
            <tr>
                <td>Bilangan kedua</td>
                <td>:</td>
                <td><input type="number" name="bil_dua"></td>
            </tr>
            <tr>
                <td>Bilangan ketiga</td>
                <td>:</td>
                <td><input type="number" name="bil_tiga"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>


<?php

if (isset($_POST['submit'])) {
    $bil1 = $_POST['bil_satu'];
    $bil2 = $_POST['bil_dua'];
    $bil3 = $_POST['bil_tiga'];

    if ($bil1 > $bil2 && $bil1 > $bil3){
        echo "Bilangan terbesar adalah ". $bil1;
        }elseif ($bil2 > $bil1 && $bil2 > $bil3){
            echo "Bilangan terbesar adalah ". $bil2;
            }elseif ($bil3 > $bil1 && $bil3 > $bil2){
                echo "Bilangan terbesar adalah ". $bil3;
                }elseif ($bil1 == $bil2 && $bil1 > $bil3) {
                    echo "Bilangan 1 dan 2 sama besar =". $bil1;
                }
                elseif ($bil1 == $bil3 && $bil1 > $bil2) {
                    echo "Bilangan 1 dan 3 sama besar =". $bil1;
                }
                elseif ($bil2 == $bil3 && $bil2 > $bil1) {
                    echo "Bilangan 2 dan 3 sama besar =". $bil2;
                }else {
                    echo "Bilangan sama besar";
                }

}

?>