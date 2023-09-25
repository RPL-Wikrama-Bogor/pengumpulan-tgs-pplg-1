<?php
$pai;
$mtk;
$dpk;
$avg;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung nilai</title>
</head>
<body>
<form action="" method="post">
    <h1>Hitung nilai</h1>
        <table>
            <tr>
                <td>Nilai Pai</td>
                <td>:</td>
                <td><input type="text" name="pai"></td>
            </tr>
            <tr>
                <td>Nilai mtk</td>
                <td>:</td>
                <td><input type="number" name="mtk"></td>
            </tr>
            <tr>
                <td>Nilai dpk</td>
                <td>:</td>
                <td><input type="number" name="dpk"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])) {
        $pai = $_POST['pai'];
        $mtk = $_POST['mtk'];
        $dpk = $_POST['dpk'];

        $avg = ($pai + $mtk + $dpk) / 3;

    if($avg <= 100 && $avg >= 80){
        echo "A";
    } else if ($avg <= 80 && $avg >= 75){
        echo "B";
    } else if ($avg <= 75 && $avg >=65){
        echo "C";
    } else if ($avg <= 65 && $avg >= 45){
        echo "D";
    } else if ($avg <= 45 && $avg >= 0){
        echo "E";
    } else {
        echo "K";
    }
    }