<?php

    $sf;
    $sc;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>situasi udara </title>
</head>
<body>
    <h1>situasi udara </h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>suhu</td>
                <td>:</td>
                <td><input type="number" name="sf" placeholder="input suhu fahrenheit"></td>
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
    $sf = $_POST['sf'];
    $sc = $sf / 33.8;
    
    if ($sc >= 300){
        echo "udara panas";
    }
    elseif ($sc >= 250) {
        echo "udara dingin";
    }
    else {
        echo "udara normal";
    }

}

?>