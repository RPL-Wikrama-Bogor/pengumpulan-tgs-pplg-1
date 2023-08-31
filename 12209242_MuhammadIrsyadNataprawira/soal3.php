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
    <title>Implementasi Flowchart</title>
</head>
<style>
    html,
    body,
    :root {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100vh;
        border: 1px solid black;
    }

    .box {
        display: flex;
        flex-direction: column;
        background-color: #444;
        padding: 100px;
        color: white;
        width: 50%;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    input {
        padding: 12px;
    }


    #button {
        margin-top: 10px;
        border-radius: 10px;
        transition: .1s ease-in-out;
    }

    #button:hover {
        background-color: #666;
    }
</style>

<body>

    <div class="container">
        <h1>Mencari Bilangan Terbesar Dari 3 Bilangan</h1>
        <div class="box">
            <form action="" method="post">
                <label for="inputInteger">Masukan Bilangan A: </label>
                <input type="number" name="a" placeholder="Bilangan a..." required>
                <label for="inputInteger">Masukan Bilangan B: </label>
                <input type="number" name="b" placeholder="Bilangan b..." required>
                <label for="inputInteger">Masukan Bilangan C: </label>
                <input type="number" name="c" placeholder="Bilangan c...">
                <input type="submit" value="Cari!" id="button" name="submit" required>
            </form>
            <?php
            if (isset($_POST['submit'])) {
                $a = $_POST['a'];
                $b = $_POST['b'];
                $c = $_POST['c'];

                if ($a > $b && $a > $c) {
                    echo "Bilangan terbesar adalah <strong>$a</strong>";
                } else if ($b > $a && $b > $c) {
                    echo "Bilangan terbesar adalah <strong>$b</strong>";
                } else if ($c > $a && $c > $b) {
                    echo "Bilangan terbesar adalah <strong>$c</strong>";
                } else if ($a === $b && $a === $c) {
                    echo "Ketiga bilangan ($a, $b, dan $c) sama besar";
                } else if ($a === $b && $a !== $c) {
                    echo "Bilangan pertama dan kedua sama besar yaitu: $a";
                } else if ($a === $c && $a !== $b) {
                    echo "Bilangan pertama dan ketiga sama besar yaitu: $a";
                } else if ($b === $c && $b !== $a) {
                    echo "Bilangan kedua dan ketiga sama besar yaitu: $b";
                }
            }
            ?>
        </div>

    </div>

</body>

</html>