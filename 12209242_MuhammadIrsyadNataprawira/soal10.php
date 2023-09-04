<?php
$pabpScore = 0;
$mathScore = 0;
$dpkScore = 0;

if (isset($_POST['submit'])) {
    $pabpScore = intval($_POST['pabpScore']);
    $mathScore = intval($_POST['mathScore']);
    $dpkScore = intval($_POST['dpkScore']);
}

$totalScore = $pabpScore + $mathScore + $dpkScore;
$averageScore = $totalScore / 3;

$grade = "";

if ($averageScore >= 80 && $averageScore <= 100) {
    $grade = "A";
} elseif ($averageScore >= 75 && $averageScore < 80) {
    $grade = "B";
} elseif ($averageScore >= 65 && $averageScore < 75) {
    $grade = "C";
} elseif ($averageScore >= 45 && $averageScore < 65) {
    $grade = "D";
} elseif ($averageScore >= 0 && $averageScore < 45) {
    $grade = "E";
} else {
    $grade = "K";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Soal 10 - Flowchart</title>
</head>
<style>
    html,
    body,
    :root {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .box {
        background-color: #444;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        width: 300px;
        color: white;
        text-align: center;
    }

    form {
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
    }

    label {
        margin-top: 10px;
    }

    input {
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    #button {
        margin-top: 10px;
        border: none;
        padding: 8px 12px;
        border-radius: 5px;
        background-color: #3448db;
        color: white;
        cursor: pointer;
    }

    #button:hover {
        background-color: #2990b9;
    }

    h2 {
        margin-top: 20px;
        font-size: 24px;
    }
</style>

<body>
    <div class="container">
        <div class="box">
            <h1>Calculate Average Grade</h1>
            <form action="" method="post">
                <label for="pabpScore">PABP Score:</label>
                <input type="number" name="pabpScore" required>

                <label for="mathScore">Matematika Score:</label>
                <input type="number" name="mathScore" required>

                <label for="dpkScore">DPK Score:</label>
                <input type="number" name="dpkScore" required>

                <input type="submit" name="submit" id="button" value="Calculate Grade">
            </form>

            <p>Average Score: <?php echo $averageScore; ?></p>
            <p>Grade: <?php echo $grade; ?></p>
        </div>
    </div>
</body>

</html>
