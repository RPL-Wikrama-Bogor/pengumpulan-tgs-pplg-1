<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Be+Vietnam+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Epilogue">
    <title>Box Office Revenue Results</title>
</head>
<body>
    <div class="box">
    <h2>Box Office Revenue Values</h2>
    <form action="" method="post">
        <h3>VIP Class</h3>
        Tickets sold: <input type="number" name="vip_ticket" required><br>

        <h3>Executive Class</h3>
        Tickets sold: <input type="number" name="exec_ticket" required><br>

        <h3>Economic Class</h3>
        Tickets sold: <input type="number" name="eco_ticket" required><br>

        <br>
        <input type="submit" name="submit" value="See results">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $vip_ticket = $_POST['vip_ticket'];
        $exec_ticket = $_POST['exec_ticket'];
        $eco_ticket = $_POST['eco_ticket'];

        $vip_profit = 0;
        $exec_profit = 0;
        $eco_profit = 0;
        $profit_sum = 0;

        if ($vip_ticket >= 35) {
            $vip_profit = 0.25;
        } elseif ($vip_ticket >= 20) {
            $vip_profit = 0.15;
        } else {
            $vip_profit = 0.05;
        }

        if ($exec_ticket >= 40) {
            $exec_profit = 0.20;
        } elseif ($exec_ticket >= 20) {
            $exec_profit = 0.10;
        } else {
            $exec_profit = 0.02;
        }

        $eco_profit = 0.07;

        $profit_sum = ($vip_ticket * 50 * $vip_profit) + ($exec_ticket * 50 * $exec_profit) + ($eco_ticket * 50 * $eco_profit);

        echo "<h3>Results</h3>";
        echo "VIP Class Profits: $" . number_format($vip_ticket * 50 * $vip_profit, 2) . "<br>";
        echo "Executive Class Profits: $" . number_format($exec_ticket * 50 * $exec_profit, 2) . "<br>";
        echo "Economy Class Profits: $" . number_format($eco_ticket * 50 * $eco_profit, 2) . "<br>";
        echo "Profit Sum: $" . number_format($profit_sum, 2);
    }
    ?>
    </div>
</body>
</html>
