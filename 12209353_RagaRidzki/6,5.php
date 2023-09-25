<?php
$jam;
$menit;
$detik;
$total;
$sisaJam;
$sisaMenit;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Detik ke Jam, Menit, dan Detik</title>
</head>

<body>

    <h2>Mengkonversi Total Detik ke Bentuk Jam dan Menit</h2>

    <form method="post" action="#">
        <table>
            <tr>
                <td>Waktu</td>
                <td> : </td>
                <td><input type="number" name="total"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Hitung">
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $total = $_POST['total'];

        if ($total >= 3600) {
            $sisaJam = $total % 3600;
            $jam = ($total - $sisaJam) / 3600;
            if ($total >= 60) {
                $sisaMenit = $sisaJam % 60;
                $menit = ($sisaJam - $sisaMenit) / 60;

                $detik = $sisaMenit;
            } else {
                $detik = $sisaJam;
            }
        } elseif ($total >= 60) {
            $sisaJam = $total % 60;
            $menit = ($total - $sisaJam) / 60;

            $detik = $sisaJam;
        } else {
            $detik = $total;
        }

        echo "$jam jam $menit menit $detik detik";
    }
    ?>

</body>

</html>