<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <div style="display: flex;width: 500px ; height: 500px ; background-color: #D3D3D3 ; justify-content:center; margin-left: auto; margin-right: auto ;">
        <form action="" method="post">
            <p>Input 1</p>
            <input type="number" name="a" id="">
            <br>
            <p>Input 2</p>
            <input type="number" name="b" id="">
            <br>
            <p>Input 3</p>
            <input type="number" name="c" id="">
            <br>
            <button type="submit" name="submit" style="margin-left: 40px;font-size:1.2vw;">Submit</button>
            <br>
            <?php
            if (isset($_POST['submit'])) {
                $a = $_POST['a'];
                $b = $_POST['b'];
                $c = $_POST['c'];

                if ($a > $b && $a > $c) {
                    echo ($a);
                } else if ($b > $c && $b > $a) {
                    echo ($b);
                } else if ($c > $a && $c > $b) {
                    echo ($c);
                } else if ($a == $b) {
                    echo ("Nilai terbesarnya adalah variabel A dan B = " . $a);
                } else if ($a == $c) {
                    echo ("Nilai terbesarnya adalah variabel A dan C = " . $a);
                } else if ($b == $c) {
                    echo ("Nilai terbesarnya adalah variabel B dan C = " . $b);
                }
            }
            ?>
        </form>
    </div>


</body>


</html>