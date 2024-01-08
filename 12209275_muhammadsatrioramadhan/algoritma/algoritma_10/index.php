<?php

$pabp;
$mtk;
$dpk;
$rata_rata;



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hitung Nilai Rata-rata dan Grade</h1>

    <form method="post" action="">
        <table>
            <td></td><label>Nilai PABP:</label></td>
            <td></td><input type="number" name="pabp" required><br></td>

            <td></td><label>Nilai Matematika:</label></td>
            <td></td><input type="number" name="matematika" required><br></td>

            <td></td><label>Nilai DPK:</label></td>
            <td></td><input type="number" name="dpk" required><br></td>

            <td><input type="submit" name="submit" value="Hitung"></td>
        </table>
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $pabp = $_POST["pabp"];
        $matematika = $_POST["matematika"];
        $dpk = $_POST["dpk"];

        $rata_rata = ($pabp + $matematika + $dpk) / 3;

        if ($rata_rata >= 85) {
            $grade = "A";
        } elseif ($rata_rata >= 70) {
            $grade = "B";
        } elseif ($rata_rata >= 55) {
            $grade = "C";
        } else {
            $grade = "D";
        }

        echo "<p>Rata-rata: $rata_rata</p>";
        echo "<p>Grade: $grade</p>";
    }
    ?>
</body>

</html>